<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
  <div class="bg-dark py-3">
        <h3 class="text-white text-center">CRUD APPLICATION</h3>
  </div>
  <div class="container">
    <div class="row d-flex justify-content-center mt-4">
        <div class="col-md-10 d-flex justify-content-end">
          <a href="{{route('products.index')}}" class="btn btn-dark">Back</a>
        </div>
      </div>
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card border-0 shadow-lg my-5">
            </div class="card-header bg-dark">
                <h3 class="text-white">Edit Product</h3>
            </div>
            <form enctype="multipart/form-data" action="{{route('products.update',$product->id)}}" method="post">
                @method('put')
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label for="" class="form-label h5">Name</label>
                        <input value="{{old('name',$product->name)}}" type="text" class="@error('name') is-invalid @enderror form-control form-control-lg" placeholder="Name" name="name">
                        @error('name')
                            <p class="invalid-feedback">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label h5">Sku</label>
                        <input value="{{old('sku',$product->sku)}}" type="text" class="@error('sku') is-invalid @enderror form-control form-control-lg" placeholder="Sku" name="sku">
                        @error('sku')
                            <p class="invalid-feedback">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label h5">Price</label>
                        <input value="{{old('price',$product->price)}}" type="text" class="@error('price') is-invalid @enderror form-control form-control-lg" placeholder="Price" name="price">
                        @error('price')
                            <p class="invalid-feedback">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label h5">Description</label>
                        <textarea value="{{old('description',$product->description)}}" placeholder="Description" class="@error('description') is-invalid @enderror form-control" name="description" cols="30" rows="5"></textarea>
                        @error('description')
                            <p class="invalid-feedback">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label h5">Image</label>
                        <input type="file" class="form-control form-control-lg" placeholder="Price" name="image">
                        @if ($product->image != "")
                            <img class="w-50 my-3" width="50" src="{{asset('uploads/products/'.$product->image)}}" alt="">
                        @endif
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-lg btn-primary" type="submit">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>
</html>