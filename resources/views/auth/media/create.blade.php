@extends('layouts.auth')

@section('content')
<div class="container" style="max-width:500px;margin:auto;padding:32px 0;">
  <div class="card shadow-sm border-0 p-4">
    <h4 class="mb-3">Upload Media</h4>
    <form action="{{ route('media.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label for="file" class="form-label">Choose File</label>
        <input type="file" name="file" id="file" class="form-control" required>
        @error('file')
          <div class="text-danger small mt-1">{{ $message }}</div>
        @enderror
      </div>
      <div class="d-flex justify-content-end gap-2">
        <a href="{{ route('media.index') }}" class="btn btn-outline-secondary">Cancel</a>
        <button type="submit" class="btn btn-maroon-gradient text-soft-maroon">Upload</button>
      </div>
    </form>
  </div>
</div>
@endsection 