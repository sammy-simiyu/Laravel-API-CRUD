<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use DB;

class ProductController extends Controller
{//Insert Data  into DB with API
    public function create(Request $request)
    {
      $products = new Product();
      $products->supplier_id = $request->input('supplier_id');
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
      DB::table('suppliers')
      ->leftJoin('products', 'products.supplier_id', '=', 'suppliers.id')
      ->select('products.*', 'suppliers.name', 'suppliers.location');
      $products = Product::find($id);
      return response()->json($products);
    }
//Update Data by ID into DB
    public function updateProduct(Request $request, $id)
    {
      $products = Product::find($id);
      $products->supplier_id = $request->input('supplier_id');
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
