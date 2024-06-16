@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="mb-4">
            <a href="{{ url()->previous() }}">back</a>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="d-flex">
                <div class="col-auto"><img class="mb-4" style="width: 200px; height: 200px"
                                           src="{{ asset('storage/images/' . $product->image) }}">
                </div>
            </div>
            <div class=" col">
                <div class="d-flex justify-content-between border-bottom mb-2">
                    <div class="text-xl text-bold ">
                        {{ $product->title }}
                    </div>
                    <div class="text-xl text-bold">
                        {{ $product->price }}$
                    </div>
                </div>
                <div>
                </div>
                <table>
                    <tr>
                        <td class="d-flex">
                            <div class="pl-3 pr-3 pt-1 border bg-gray-light mr-4">
                                <p>
                                    {{ $product->description }}
                                </p>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

@endsection
