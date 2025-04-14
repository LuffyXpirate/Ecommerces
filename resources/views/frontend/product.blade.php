<x-frontend-layout>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Container Styles */
        .container-fluid {
            background: #101010;
            padding: 50px 20px;
            display: flex;
            justify-content: center;
        }

        /* Cart Box */
        .cart {
            background: #222;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            max-width: 1200px;
            width: 100%;
        }

        /* Product Row */
        .row1 {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            justify-content: space-between;
            align-items: center;
        }

        /* Left Image Section */
        #ProductImg {
            width: 100%;
            max-width: 500px;
            height: auto;
            border-radius: 10px;
            transition: 0.3s ease-in-out;
            object-fit: cover;
        }

        #ProductImg:hover {
            transform: scale(1.1);
        }

        .small-imgs {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            margin-top: 15px;
            justify-content: center;
        }

        .small-img-box {
            width: 80px;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .small-img-box:hover {
            transform: scale(1.1);
        }

        /* Product Details Section */
        .product-details {
            flex: 1;
            color: #fff;
            padding-left: 20px;
            max-width: 500px;
        }

        .product-title {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 15px;
            color: #ff3d00;
        }

        .price {
            margin-bottom: 20px;
            font-size: 22px;
            font-weight: 600;
            color: #fff;
        }

        .price span:first-child {
            color: #ff3d00;
        }

        .price span:last-child {
            color: #aaa;
            text-decoration: line-through;
        }

        .reviews {
            margin-top: 10px;
            color: #ff9800;
        }

        /* Tabs for Description, Details */
        .product-inf ul {
            display: flex;
            list-style: none;
            margin-top: 25px;
            padding: 0;
            border-bottom: 2px solid #444;
        }

        .product-inf ul li {
            margin-right: 20px;
            padding-bottom: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .product-inf ul li:hover {
            color: #ff3d00;
            border-bottom: 2px solid #ff3d00;
        }

        .product-inf ul li.active {
            border-bottom: 3px solid #ff3d00;
        }

        .tabs-content {
            margin-top: 15px;
        }

        /* Button Styles */
        .custom-btn {
            background: #ff3d00;
            color: #fff;
            padding: 12px 25px;
            border-radius: 30px;
            text-decoration: none;
            display: inline-block;
            transition: background 0.3s ease;
            font-size: 16px;
            font-weight: 600;
        }

        .custom-btn:hover {
            background: #ff5722;
        }

        .custom-btn i {
            margin-left: 10px;
        }

        /* Quantity Input */
        .quantity-wrapper {
            display: flex;
            align-items: center;
            margin-top: 15px;
        }

        .quantity-btn {
            background: #333;
            color: #fff;
            border: none;
            padding: 10px;
            font-size: 18px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .quantity-btn:hover {
            background: #ff3d00;
        }

        .quantity-input {
            width: 60px;
            text-align: center;
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            margin: 0 10px;
            border-radius: 5px;
            color: #333;
        }

        /* Responsive Styles */
        @media(max-width: 768px) {
            .row1 {
                flex-direction: column;
                align-items: center;
            }

            .product-details {
                padding-left: 0;
                margin-top: 30px;
                text-align: center;
            }

            .product-title,
            .price {
                text-align: center;
            }
        }
    </style>

    <div class="container-fluid">
        <div class="cart">
            <div class="row row1">
                <!-- Left: Product Image -->
                <div class="col-md-6">
                    <img src="{{ asset(Storage::url($product->image[0] ?? 'default.jpg')) }}" id="ProductImg" alt="Main Image">
                    <div class="small-imgs">
                        @foreach ($product->image as $image)
                            <div class="small-img-box">
                                <img src="{{ asset(Storage::url($image)) }}" 
                                     onclick="document.getElementById('ProductImg').src = '{{ asset(Storage::url($image)) }}'" 
                                     alt="Thumbnail" width="100%">
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Right: Product Details -->
                <div class="col-md-6 product-details">
                    <h1 class="product-title">{{ $product->name ?? 'Product Name' }}</h1>

                    @if ($product->discount > 0)
                        <div class="price">
                            <span>Rs.{{ $product->price - ($product->price * $product->discount) / 100 }}</span>
                            <span class="line-through">NRs.{{ $product->price }}</span>
                        </div>
                    @else
                        <div class="product-price-discount">
                            <span>NRs.{{ $product->price }}</span>
                        </div>
                    @endif

                    <div id="product" class="product-inf">

                        <div class="tabs-content">
                            @foreach ($product->product_info as $info)
                                  
                            @endforeach
                            <div id="Description">
                                <h2>Description on <span style="color: orangered;">{!! $info->title !!}</span></h2>
                                {!! $info->description !!}
                            </div>
                            <div id="Details" style="display: none;">
                                <p>{{ $product->details ?? 'No additional details available.' }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Quantity Selection -->
                    <div class="quantity-wrapper">
                        <button class="quantity-btn" onclick="decreaseQuantity()">-</button>
                        <input type="number" id="quantity" class="quantity-input" value="1" min="1" max="100">
                        <button class="quantity-btn" onclick="increaseQuantity()">+</button>
                    </div>
<br>
                    <div class="buttons">
                        <a href="#" class="custom-btn">Add To Cart <i class="fas fa-angle-right"></i></a>
                        <a href="#" class="custom-btn">Buy Now <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://kit.fontawesome.com/4077c6ef6a.js" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('.product-inf a').click(function() {
                $('.product-inf li').removeClass('active');
                $(this).parent().addClass('active');
                let currentTab = $(this).attr('href');
                $('.tabs-content div').hide();
                $(currentTab).show();
                return false;
            });
        });

        // Quantity Functions
        function increaseQuantity() {
            let quantity = document.getElementById('quantity');
            quantity.value = parseInt(quantity.value) + 1;
        }

        function decreaseQuantity() {
            let quantity = document.getElementById('quantity');
            if (parseInt(quantity.value) > 1) {
                quantity.value = parseInt(quantity.value) - 1;
            }
        }
    </script>
</x-frontend-layout>
