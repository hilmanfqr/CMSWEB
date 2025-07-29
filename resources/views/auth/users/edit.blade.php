@extends('layouts.auth')

@section('content')
<div class="container" style="max-width:500px;margin:auto;padding:32px 0;">
  <div class="card shadow-sm border-0 p-4">
    <h4 class="mb-3">Edit User</h4>
    <form action="{{ route('users.update', $user) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" class="form-control" required value="{{ old('name', $user->name) }}">
        @error('name')
          <div class="text-danger small mt-1">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control" required value="{{ old('email', $user->email) }}">
        @error('email')
          <div class="text-danger small mt-1">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password <span class="text-muted small">(leave blank to keep current)</span></label>
        <input type="password" name="password" id="password" class="form-control">
        @error('password')
          <div class="text-danger small mt-1">{{ $message }}</div>
        @enderror
      </div>
      <div class="d-flex justify-content-end gap-2">
        <a href="{{ route('users.index') }}" class="btn btn-outline-secondary">Cancel</a>
        <button type="submit" class="btn btn-maroon-gradient text-soft-maroon">Update</button>
      </div>
    </form>
  </div>
</div>
@endsection 