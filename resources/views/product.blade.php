<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>PBO 11PPLG2</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">XI PPLG2</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" aria-current="page" href="/">Home</a>
        <a class="nav-link active" href="/product">Product</a>
        <a class="nav-link" href="/report">Report Product</a>
        <a class="nav-link" href="/contact">Contact</a>
        <a class="nav-link" href="/logout">Logout</a>
      </div>
    </div>
  </div>
</nav>
<div class="container">
    <center><h1>Daftar Product</h1></center>
    <a href="/product/create" type="button" class="btn btn-outline-info">Add Product</a>
    <br>
    @if (session('pesan'))
    <div class="alert alert-success">
      {{ session('pesan') }}
    </div>
    @endif

    @if (session('hapus'))
    <div class="alert alert-danger">
      {{ session('hapus') }}
    </div>
    @endif
  </br>
    <table class="table">
  <thead class="table-secondary">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Product Name</th>
      <th scope="col">Stock</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($produk as $prd)
  <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $prd->nama_produk }}</td>
      <td>{{ $prd->stok}}</td>
      <td>{{ $prd->harga}}</td>
      <td>
        <a href="/product/{{ $prd->id }}/edit" class="btn btn-success">Edit</a>
        <form action="/product/{{ $prd->id }}" method="post" class="d-inline">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-danger" data-id="{{ $prd->id }}"
        onclick="return confirm('Yakin Ingin Dihapus?')">Delete</button>
      </div>  
      </form>
      </td> 
    </tr>
   @endforeach
</table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>