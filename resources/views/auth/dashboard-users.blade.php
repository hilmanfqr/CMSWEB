<div class="card mb-4">
  <div class="card-body">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h4 class="card-title mb-0">Manage Users</h4>
      <a href="{{ route('users.create') }}" class="btn btn-maroon-gradient text-soft-maroon">Add User</a>
    </div>
    <div class="table-responsive">
      <table class="table table-hover align-middle mb-0">
        <thead class="table-light">
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @forelse($users as $user)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role ?? 'User' }}</td>
            <td><span class="badge bg-maroon">Active</span></td>
            <td>
              <a href="{{ route('users.edit', $user) }}" class="btn btn-sm btn-maroon-gradient text-soft-maroon">Edit</a>
              <form action="{{ route('users.destroy', $user) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-outline-maroon" onclick="return confirm('Delete this user?')">Delete</button>
              </form>
            </td>
          </tr>
          @empty
          <tr>
            <td colspan="6" class="text-center">No users found.</td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</div> 