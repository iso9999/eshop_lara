@extends('layouts.app')

@section('content')


  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <form class="" action="{{url('products/'.$product->id)}}" method="post">

          <input type="hidden" name="_method" value="PUT">
          {{csrf_field()}}

          <div class="form-group">
            <label for="">Label</label>
            <input type="text" class="form-control" name="label" value="{{$product->label}}">
          </div>

          <div class="form-group">
            <label for="">Description</label>
            <textarea type="text" class="form-control" name="description" >{{$product->description}}</textarea>
          </div>

          <div class="form-group">
            <label for="">Quantity</label>
            <input type="text" class="form-control" name="quantity" value="{{$product->quantity}}">
          </div>

          <div class="form-group">
            <label for="">Price</label>
            <input type="text" class="form-control" name="price" value="{{$product->price}}">
          </div>

          <div class="form-group">
            <input type="submit" class="form-control btn btn-primary" value="Update">
          </div>
        </form>
      </div>
    </div>

  </div>

@endsection
