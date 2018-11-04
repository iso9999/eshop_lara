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

    public function listall()
    {
      $products = Product::all();
      return view('product.products',['products' => $products]);
    }

    //get one by id
    public function index($id)
    {
        $product = Product::find($id);
        $category = Cat::find($product->cat_id);
        //return $product;
        return view('product.index',['product' => $product ,'category' => $category]);
    }

    //create form
    public function create()
    {
        return view('product.create');
    }

    //save product
    public function store(Request $request)
    {

        $newProduct = new Product();
        $newProduct->label=$request->input('label');
        $newProduct->price=$request->input('price');
        $newProduct->quantity=$request->input('quantity');
        $newProduct->description=$request->input('description');
        $newProduct->cat_id=Cat::find(1)->id;
        $newProduct->save();
        return redirect('products/list_table');
    }

    public function list_table()
    {
      $products = Product::all();
      return view('product.list_table',['products' => $products]);
    }
    //update form
    public function edit($id)
    {
      $product = Product::find($id);
      //return $product;
      return view('product.edit',['product' => $product]);
    }


    //update
    public function update(Request $request,$id)
    {
        $product = Product::find($id);
        $product->label=$request->input('label');
        $product->price=$request->input('price');
        $product->quantity=$request->input('quantity');
        $product->description=$request->input('description');
        $product->save();
        return redirect('products/list_table');
    }

    //delete / arch
    public function destroy(Request $request,$id)
    {
      $product = Product::find($id);
      $product->delete();
      return redirect('products/list_table');
    }
}
