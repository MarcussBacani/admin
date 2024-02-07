<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class productController extends Controller
{
    public function index()
    {
        return view("Productmanagement");
    }
    public function store(Request $request)
    {  
  
        $productId = $request->id;
  
        $product   =   Products::updateOrCreate(
                    [
                     'id' => $productId
                    ],
                    [
                    'name' => $request->name, 
                    'photo' => $request->photo,
                    'price' => $request->price,
                    'detail' => $request->detail, 
                    'category' => $request->category,
                    ]);    
                          
        return Response()->json($product);
    }
}
