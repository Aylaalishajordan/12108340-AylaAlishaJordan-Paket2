@extends('layouts.dashboard')
@section('title', 'Dashboard - Product')
@section('content')
    <section class="section">
        <section class="section-header">
            <h1>Product</h1>
        </section>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <form method="POST" novalidate class="needs-validation" action="{{ route('product.update', $product->id) }}">
                        @csrf
                        @method('PATCH')
                        <div class="card-header">
                            <h4>Edit Product</h4>
                        </div>
                        <div class="card-body">
                            <div class="grid grid-cols-2">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        value="{{ $product->name }}">
                                    <div class="invalid-feedback">
                                        Please fill in your name
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" class="form-control" name="price" id="price"
                                        value="{{ $product->price }}">
                                    <div class="invalid-feedback">
                                        Please fill in your price
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="image" class="form-control" name="image" id="image"
                                        value="{{ $product->image }}">
                                        <td><img src="{{ asset('images/' . $product->image) }}" width="50"></td>
                                    {{-- <div class="invalid-feedback">
                                        Please fill in your image
                                    </div> --}}
                                    {{-- @if ($product->image == null)
                                    <td>No Image</td>
                                @else
                                    <td><img src="{{ asset('images/' . $product->image) }}" width="50"></td>
                                @endif --}}
                                </div>
                                <button class="btn btn-success">Update</button>
                                <a href="{{ route('product') }}" class="btn btn-danger">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
