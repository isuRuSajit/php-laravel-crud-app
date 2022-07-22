@extends('layouts/app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="page-title">Product</h1>
            </div>
            <div class="col-lg-12 mt-5">
                <form action="{{ route('product.store') }}" method="post" enctype="multipart/form">
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
            <div class="col-lg-12 mt-5">
                <div>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">Price</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $key => $task)
                                <tr>
                                    <th scope="row">{{ ++$key }}</th>
                                    <td>{{ $task->name }}</td>
                                    <td>{{ $task->image }}</td>
                                    <td>{{ $task->price }}</td>
                                    <td>
                                        @if ($task->done == 0)
                                            <span class="badge bg-warning">Not Completed</span>
                                        @else
                                            <span class="badge text-bg-success">Completed</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('product.delete', $task->id) }}"class="btn btn-danger"><i
                                                class="fa fa-trash" aria-hidden="true"></i></a>
                                        <a href="{{ route('product.done', $task->id) }}"class="btn btn-success"><i
                                                class="fa fa-check-square" aria-hidden="true"></i></a>
                                        <a href="{{ route('product.edit', $task->id) }}" class="btn btn-primary"><i
                                                class="fa fa-pencil" aria-hidden="true"></i></a>


                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
