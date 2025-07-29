<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title mb-3">Profile</h4>
    <form action="{{ route('profile.update') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="profileName" class="form-label">Name</label>
        <input type="text" class="form-control" id="profileName" name="name" value="{{ old('name', $user->name) }}" required>
        @error('name')
          <div class="text-danger small mt-1">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="profileEmail" class="form-label">Email</label>
        <input type="email" class="form-control" id="profileEmail" name="email" value="{{ old('email', $user->email) }}" required>
        @error('email')
          <div class="text-danger small mt-1">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="profilePassword" class="form-label">Password <span class="text-muted small">(leave blank to keep current)</span></label>
        <input type="password" class="form-control" id="profilePassword" name="password">
        @error('password')
          <div class="text-danger small mt-1">{{ $message }}</div>
        @enderror
      </div>
      <button type="submit" class="btn btn-maroon-gradient text-soft-maroon">Save Profile</button>
    </form>
  </div>
</div> 