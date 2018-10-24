<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ProductController extends Controller
{

    public function show($id)
    {
      echo 'Product : ';
      echo $id;
    }

    public function newProduct()
    {
      $newProduct = new Product();
      $newProduct->label="HP ProBook 4561";
      $newProduct->price=999.99;
      $newProduct->quantity=10;
      $newProduct->description="Hello HP comp";

      $newProduct->save();
    }



    //list product
    public function list()
    {
      $products = Product::all();
      return view('products',['products' => $products]);
    }

    //get one by id
    public function index()
    {

    }

    //create form
    public function create()
    {

    }

    //save product
    public function store(Request $request)
    {

    }

    //update form
    public function edit()
    {

    }


    //update
    public function update()
    {

    }

    //delete / arch
    public function destroy()
    {

    }
}
