@extends('layouts.app')

@section('content')


  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Prodcut list : </h1>
          <a href="{{url('product_c')}}" class="btn btn-primary">Add Product</a>
          <a href="{{url('products')}}" class="btn btn-primary">Go to Shop</a>

        <table class="table">
          <head>
            <tr>
              <th>Label</th>
              <th>Description</th>
              <th>Quantity</th>
              <th>Price</th>
              <th>Action</th>
            </tr>
          </head>
          <body>
            @foreach($products as $product)
            <tr>
              <td>{{$product->label}}</td>
              <td>{{$product->label}}</td>
              <td>{{$product->quantity}}</td>
              <td>{{$product->price}}</td>
              <td>

                <form class="" action="{{url('/products/'.$product->id)}}" method="post">
                  <a href="{{url('/products/'.$product->id)}}" class="btn btn-primary">Show</a>
                  <a href="{{url('products/'.$product->id.'/edit')}}" class="btn btn-default">Edite</a>
                  {{method_field('DELETE')}}
                  {{csrf_field()}}
                  <button type="submit"  class="btn btn-danger">Delete</a>

                </form>
              </td>
            </tr>
            @endforeach
          </body>
        </table>
      </div>
    </div>

  </div>

@endsection
