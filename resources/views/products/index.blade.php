@extends('layout')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h2 class="fw-bold">Product List</h2>
    <a href="{{ route('products.create') }}" class="btn btn-primary">+ Add Product</a>
</div>

@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<table class="table table-bordered table-striped shadow-sm">
    <thead class="table-dark">
        <tr>
            <th>Name</th>
            <th width="150px">Price</th>
            <th>Description</th>
            <th width="150px">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $p)
        <tr>
            <td>{{ $p->name }}</td>
            <td>Rp {{ number_format($p->price) }}</td>
            <td>{{ $p->description }}</td>
            <td>
                <a href="{{ route('products.edit', $p->id) }}" class="btn btn-sm btn-warning">Edit</a>

                <form action="{{ route('products.destroy', $p->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Hapus data?')" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
