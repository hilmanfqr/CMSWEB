@extends('layouts.auth')

@section('content')
<div class="container" style="max-width:500px;margin:auto;padding:32px 0;">
  <div class="card shadow-sm border-0 p-4">
    <h4 class="mb-3">Edit Category</h4>
    <form action="{{ route('categories.update', $category) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="name" class="form-label">Category Name</label>
        <input type="text" name="name" id="name" class="form-control" required value="{{ old('name', $category->name) }}">
        @error('name')
          <div class="text-danger small mt-1">{{ $message }}</div>
        @enderror
      </div>
      <div class="d-flex justify-content-end gap-2">
        <a href="{{ route('categories.index') }}" class="btn btn-outline-secondary">Cancel</a>
        <button type="submit" class="btn btn-maroon-gradient text-soft-maroon">Update</button>
      </div>
    </form>
  </div>
</div>
@endsection 