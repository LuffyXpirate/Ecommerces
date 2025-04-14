<?php

namespace App\Http\Controllers;

use App\Mail\SellerRequestNotification;
use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\Admin;
use App\Models\Product;

use App\Mail\SendRequestNotification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

class PageController extends Controller
{
    public function home()
    {
        $available_product = Product::where('stock',true)->where('discount','>',0)->get();
        return view('frontend.home',compact('available_product'));
    }

    public function sellerstore(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:sellers,email',
            'address' => 'required',
            'phone' => 'required',
            'pan_no' => 'required',
            'reg_no' => 'required'
        ]);

        // Create a new seller instance and populate it
        $seller = new Seller();
        $seller->name = $request->name;
        $seller->phone = $request->phone;
        $seller->email = $request->email;
        $seller->address = $request->address;
        $seller->pan_no = $request->pan_no;
        $seller->password = Hash::make(uniqid());
        $seller->reg_no = $request->reg_no;

        // Save the seller to the database
        $seller->save();

        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
        ];

        $admins = Admin::all();
    
        foreach ($admins as $admin) {
            Mail::to($admin->email)->send(new SellerRequestNotification($data));
        }
    }
}
