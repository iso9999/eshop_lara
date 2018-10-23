<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Product</title>
  </head>
  <body>
    <h1>Liste des produits</h1>

    <ul>
      @foreach($products as $product)
      <li>{{$product->label}}</li>
      @endforeach
    </ul>
  </body>
</html>
