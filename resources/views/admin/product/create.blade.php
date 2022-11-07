@extends('admin.layouts.admin')

@section('title', 'Nuovo prodotto | Admin Pina Jewels Handmade')

@section('description', '')

@section('content')
    <form method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
        @csrf
        {{view('admin.product._form', ['categories' => $categories, 'product' => $product])}}
    </form>
@endsection
