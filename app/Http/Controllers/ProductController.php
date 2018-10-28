<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Cat;

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

    public function init()
    {
      $cat1 = new Cat();
      $cat1->label = "Electronic devices";
      $cat1->save();
      $cat2 = new Cat();
      $cat2->label = "Clothes";
      $cat2->save();

      $newProduct = new Product();
      $newProduct->label="HP ProBook 4561";
      $newProduct->price=999.99;
      $newProduct->quantity=10;
      $newProduct->description="Hello HP comp";
      $newProduct->cat_id=Cat::find(1)->id;
      $newProduct->save();

      $newProduct2 = new Product();
      $newProduct2->label="ADIDAS 161";
      $newProduct2->price=299.99;
      $newProduct2->quantity=1004;
      $newProduct2->description="Hello prod T-shirt";
      $newProduct2->cat_id=Cat::find(2)->id;
      $newProduct2->save();

      $newProduct2 = new Product();
      $newProduct2->label="NIKE 11";
      $newProduct2->price=99.99;
      $newProduct2->quantity=1000;
      $newProduct2->description="Hello prod T-shirt";
      $newProduct2->cat_id=Cat::find(2)->id;
      $newProduct2->save();
    }



    //list product
    //public function list()
    //{
    //  $products = Product::all();
    //  return view('products',['products' => $products]);
    //}

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
