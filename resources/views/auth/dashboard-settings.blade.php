<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title mb-3">Website Settings</h4>
    <form action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label for="siteName" class="form-label">Website Name</label>
        <input type="text" class="form-control" id="siteName" name="site_name" value="{{ $settings['site_name'] ?? '' }}" required>
        @error('site_name')
          <div class="text-danger small mt-1">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="siteLogo" class="form-label">Logo</label>
        <input type="file" class="form-control" id="siteLogo" name="site_logo">
        @if(!empty($settings['site_logo']))
          <div class="mt-2"><img src="{{ asset('storage/' . $settings['site_logo']) }}" alt="Logo" style="max-height:60px;"></div>
        @endif
        @error('site_logo')
          <div class="text-danger small mt-1">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="siteEmail" class="form-label">Email</label>
        <input type="email" class="form-control" id="siteEmail" name="site_email" value="{{ $settings['site_email'] ?? '' }}" required>
        @error('site_email')
          <div class="text-danger small mt-1">{{ $message }}</div>
        @enderror
      </div>
      <button type="submit" class="btn btn-maroon-gradient text-soft-maroon">Save Settings</button>
    </form>
  </div>
</div> 