@extends('layouts/app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="page-title">Product</h1>
            </div>
            <div class="col-lg-12 mt-5">
                <form action="{{ route('product.update') }}" method="post" enctype="multipart/form">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="form-group">
                                <input class="form-control" name="name" type="text" placeholder="product name">
                                <input class="form-control" name="image" type="text" placeholder="image ">
                                <input class="form-control" name="price" type="text" placeholder="price">

                            </div>
                        </div>
                        <div class="col-lg-4">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                </form>
            </div>

        </div>
    </div>
@endsection
