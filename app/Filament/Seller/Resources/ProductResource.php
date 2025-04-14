<?php

namespace App\Filament\Seller\Resources;

use App\Filament\Seller\Resources\ProductResource\Pages;
use App\Filament\Seller\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('seller_id',Auth::guard()->user()->id);
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                section::make('Products Details')
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('description')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('price')
                            ->required()
                            ->numeric()
                            ->prefix('Rs'),
                        Forms\Components\TextInput::make('discount')
                            ->numeric()
                            ->suffix('%')
                            ->default(1),

                        Forms\Components\FileUpload::make('image')
                            ->required()
                            ->multiple(),

                        // Forms\Components\Select::make('seller_id')
                        //     ->relationship('seller', 'name')
                        //     ->required()
                        //     ->default(Auth::user()->id)
                        //     ->disabled()
                        //     ->required(),

                        section::make('Product_Info')
                        ->schema([
                            Repeater::make('Product_Info')
                                ->schema([
                                    Forms\Components\TextInput::make('title')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\RichEditor::make('description')
                                ->required()
                              
                                ])
                                ->columnSpanFull()
                                ->relationship('product_info')

                        ])
                        ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->prefix('Rs. ')
                    ->sortable(),
                Tables\Columns\TextColumn::make('discount')
                    ->numeric()
                    ->suffix('%')
                    ->sortable(),
                Tables\Columns\ImageColumn::make('image'),
          
                Tables\Columns\ToggleColumn::make('stock')
                    ->searchable(),
            
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->label('')
                    ->tooltip('edit'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
