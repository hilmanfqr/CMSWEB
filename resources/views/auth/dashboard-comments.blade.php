<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title mb-3">Manage Comments</h4>
    <div class="table-responsive">
      <table class="table table-hover align-middle mb-0">
        <thead class="table-light">
          <tr>
            <th>#</th>
            <th>Post</th>
            <th>User</th>
            <th>Comment</th>
            <th>Status</th>
            <th>Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @forelse($comments as $comment)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $comment->post->title ?? '-' }}</td>
            <td>{{ $comment->user->name ?? '-' }}</td>
            <td>{{ $comment->content }}</td>
            <td><span class="badge bg-maroon">{{ ucfirst($comment->status) }}</span></td>
            <td>{{ $comment->created_at->format('Y-m-d') }}</td>
            <td>
              @if($comment->status !== 'approved')
              <form action="{{ route('comments.update', $comment) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('PUT')
                <input type="hidden" name="status" value="approved">
                <button type="submit" class="btn btn-sm btn-maroon-gradient text-soft-maroon">Approve</button>
              </form>
              @endif
              <form action="{{ route('comments.destroy', $comment) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-outline-maroon" onclick="return confirm('Delete this comment?')">Delete</button>
              </form>
            </td>
          </tr>
          @empty
          <tr>
            <td colspan="7" class="text-center">No comments found.</td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</div> 