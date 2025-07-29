<div class="card mb-4">
  <div class="card-body">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h4 class="card-title mb-0">Media Manager</h4>
      <a href="{{ route('media.create') }}" class="btn btn-maroon-gradient text-soft-maroon">Upload Media</a>
    </div>
    <div class="row mb-3">
      @forelse($media as $item)
        <div class="col-3 mb-2 text-center">
          @if(Str::startsWith($item->path, 'media/') && Str::contains($item->filename, ['jpg','jpeg','png','gif','svg']))
            <img src="{{ asset('storage/' . $item->path) }}" class="img-fluid rounded" alt="{{ $item->filename }}">
          @else
            <i class="mdi mdi-file-document" style="font-size:48px;"></i>
          @endif
          <div class="small mt-1">{{ $item->filename }}</div>
        </div>
      @empty
        <div class="col-12 text-center text-muted">No media uploaded.</div>
      @endforelse
    </div>
    <div class="table-responsive">
      <table class="table table-hover align-middle mb-0">
        <thead class="table-light">
          <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @forelse($media as $item)
          <tr>
            <td>{{ $item->filename }}</td>
            <td>{{ pathinfo($item->filename, PATHINFO_EXTENSION) }}</td>
            <td>
              <form action="{{ route('media.destroy', $item) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-outline-maroon" onclick="return confirm('Delete this file?')">Delete</button>
              </form>
            </td>
          </tr>
          @empty
          <tr>
            <td colspan="3" class="text-center">No media uploaded.</td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</div> 