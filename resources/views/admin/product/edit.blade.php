@extends('admin.layouts.admin')

@section('title', 'Modifica prodotto | Admin Pina Jewels Handmade')

@section('description', '')

@section('content')
    <form method="post" action="{{route('product.update', $product->slug)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        {{view('admin.product._form', ['categories' => $categories, 'product' => $product])}}
    </form>
@endsection
