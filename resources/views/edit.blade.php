<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
</head>
<body>
    <form action="{{route("product.update",$detail->id)}}", method="POST">
        @csrf
        @method("PUT")
        <label for="">Nama Produk</label>
        <input type="text", name="nama_product" value="{{$detail->nama}}">
        <label for="">Stock</label>
        <input type="number", name="stock" value="{{$detail->stock}}">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
