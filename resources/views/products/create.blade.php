@extends('layout')

@section('content')
<h2 class="fw-bold mb-3">Add Product</h2>

<form action="{{ route('products.store') }}" method="POST" class="card p-4 shadow-sm">
    @csrf

    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Price</label>
        <input type="number" name="price" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description" class="form-control"></textarea>
    </div>

    <button class="btn btn-primary">Save</button>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
</form>

@endsection
