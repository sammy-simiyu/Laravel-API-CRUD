<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ProductController extends Controller
{
  /*  public function index()
    {
      $products = \App\Product::all();

      return view('product.index', compact('products'));
    }*/

//Insert Data  into DB with API
    public function create(Request $request)
    {
      $products = new Product();
      $products->type = $request->input('type');
      $products->pricePerkilo = $request->input('pricePerkilo');
      $products->quantityInstock = $request->input('quantityInstock');
      $products->save();
      return response()->json($products);
    }
//Read/Fetch Data from DB
    public function getProducts()
    {
      $products = Product::all();
      return response()->json($products);
    }
//Read/Fetch Data by ID from DB
    public function getProductById($id)
    {
      $products = Product::find($id);
      return response()->json($products);
    }
//Update Data by ID into DB
    public function updateProduct(Request $request, $id)
    {
      $products = Product::find($id);
      $products->type = $request->input('type');
      $products->pricePerkilo = $request->input('pricePerkilo');
      $products->quantityInstock = $request->input('quantityInstock');
      $products->save();
      return response()->json($products);
    }
//Delete Data by ID from DB
    public function deleteProduct(Request $request, $id)
    {
      $products = Product::find($id);
      $products->delete();
      return response()->json($products);
    }

 }
