@extends('layouts.app')

@section('content')


  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <form class="" action="{{url('products')}}" method="post">
          {{csrf_field()}}

          <div class="form-group">
            <label for="">Label</label>
            <input type="text" class="form-control" name="label" value="">
          </div>

          <div class="form-group">
            <label for="">Description</label>
            <textarea type="text" class="form-control" name="description" value=""></textarea>
          </div>

          <div class="form-group">
            <label for="">Quantity</label>
            <input type="text" class="form-control" name="quantity" value="">
          </div>

          <div class="form-group">
            <label for="">Price</label>
            <input type="text" class="form-control" name="price" value="">
          </div>

          <div class="form-group">
            <input type="submit" class="form-control btn btn-primary" value="Save">
          </div>
        </form>
      </div>
    </div>

  </div>

@endsection
