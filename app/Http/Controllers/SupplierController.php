<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Supplier;

class SupplierController extends Controller
{
  //Insert Data  into DB with API
      public function create(Request $request)
      {
        $suppliers = new Supplier();
        $suppliers->name = $request->input('name');
        $suppliers->location = $request->input('location');
        $suppliers->save();
        return response()->json($suppliers);
      }
  //Read/Fetch Data from DB
      public function getSuppliers()
      {
        $suppliers = Supplier::all();
        return response()->json($suppliers);
      }
  //Read/Fetch Data by ID from DB
      public function getSupplierById($id)
      {
        $suppliers = Supplier::find($id);
        return response()->json($suppliers);
      }
  //Update Data by ID into DB
      public function updateSupplier(Request $request, $id)
      {
        $suppliers = Supplier::find($id);
        $suppliers->name = $request->input('name');
        $suppliers->location = $request->input('location');
        $suppliers->save();
        return response()->json($suppliers);
      }
  //Delete Data by ID from DB
      public function deleteSupplier(Request $request, $id)
      {
        $suppliers = Supplier::find($id);
        $suppliers->delete();
        return response()->json($suppliers);
      }
}
