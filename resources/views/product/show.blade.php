@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Show Data Product</div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Name Product</label>
                                <input type="text" class="form-control" name="name_product" value="{{$product->name_product}}" disabled>
                                <label for="exampleInputEmail1" class="form-label">Price</label>
                                <input type="text" class="form-control" name="price" value="{{$product->price}}" disabled>
                                <label for="exampleInputEmail1" class="form-label">description</label>
                                <input type="text" class="form-control" name="description" value="{{$product->description}}" disabled>
                                <label for="exampleInputEmail1" class="form-label">Id Brand</label>
                                <input type="text" class="form-control" name="id_brand" value="{{$product->id_brand}}" disabled>
                            </div>
                            <a href="{{url('product')}}" class="btn btn-primary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
