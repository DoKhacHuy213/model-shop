@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Thêm mô hình mới</h1>
    <form method="POST" action="{{ route('model-products.store') }}">
        @csrf
        @include('model_products.form')
        <button class="btn btn-success">Lưu</button>
    </form>
</div>
@endsection