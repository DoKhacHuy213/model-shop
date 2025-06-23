@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Sửa mô hình</h1>
    <form method="POST" action="{{ route('model-products.update', $modelProduct) }}">
        @csrf @method('PUT')
        @include('model_products.form', ['modelProduct' => $modelProduct])
        <button class="btn btn-success">Cập nhật</button>
    </form>
</div>
@endsection