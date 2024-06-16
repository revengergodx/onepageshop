@extends('layouts.main')
@section('content')
    <div class="container">
        <!-- /.row -->
                <div>
                    <a href="{{ route('product.create') }}" class="btn btn-primary mb-4">Add product</a>
                </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Products</h3>

                    </div>
                    <!-- /.card-header -->
                    <div class="d-flex card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th width="20%">Name</th>
                                <th width="35%">Description</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody >
                            @foreach($products as $product)
                                <tr>
                                    <td class="text-wrap"><a href="{{ route('product.show', $product->id) }}">{{ $product->title }}</a></td>
                                    <td class="text-wrap">{{ \Illuminate\Support\Str::limit($product->description, 120, '..') }}</td>
                                    <td><img style="width:90px; height: 85px"
                                             src="{{ asset('/storage/images/'.$product->image)}}"></td>
                                    <td>{{ $product->price }}$</td>
                                        <td class="d-flex">
                                                    <a href="{{ route('product.edit', $product) }}"
                                                       class="text-success"><i
                                                            class="pl-3 fas fa-solid fa-pen"></i></a>
                                                    <form method="post"
                                                          action="{{ route('product.delete', $product) }}">@csrf @method('delete')
                                                        <button type="submit"
                                                                class="text-danger border-0 bg-transparent"><i
                                                                class="pl-3 fas fa-solid fa-trash"></i></button>
                                                    </form>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
        <div class="d-flex justify-content-center">

        </div>
    </div>

@endsection
