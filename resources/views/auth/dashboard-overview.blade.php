<div class="container" style="max-width:1100px;margin:auto;padding:32px 0;">
  <div class="card shadow-sm border-0 p-4" style="background:#fff;">
    <!-- Header Welcome -->
    <div class="page-header mb-4">
      <h2 class="page-title fw-bold mb-1">Welcome back, Admin!</h2>
      <p class="lead text-muted">Here is a quick overview of your CMS activity.</p>
    </div>
    <!-- Quick Actions & Shortcuts -->
    <div class="row mb-4">
      <div class="col">
        <div class="d-flex flex-wrap gap-3">
          <a href="#" class="btn btn-maroon-gradient text-soft-maroon" style="background: linear-gradient(120deg, #fff0f3 0%, #e57373 100%) !important; color: #b22234 !important;"><i class="mdi mdi-plus"></i> Add Post</a>
          <a href="#" class="btn btn-maroon-gradient text-soft-maroon" style="background: linear-gradient(120deg, #fff0f3 0%, #e57373 100%) !important; color: #b22234 !important;"><i class="mdi mdi-bookmark-plus"></i> Add Category</a>
          <a href="#" class="btn btn-maroon-gradient text-soft-maroon" style="background: linear-gradient(120deg, #fff0f3 0%, #e57373 100%) !important; color: #b22234 !important;"><i class="mdi mdi-account-plus"></i> Add User</a>
          <a href="#" class="btn btn-maroon-gradient text-soft-maroon" style="background: linear-gradient(120deg, #fff0f3 0%, #e57373 100%) !important; color: #b22234 !important;"><i class="mdi mdi-image-multiple"></i> Media Manager</a>
          <a href="#" class="btn btn-maroon-gradient text-soft-maroon" style="background: linear-gradient(120deg, #fff0f3 0%, #e57373 100%) !important; color: #b22234 !important;"><i class="mdi mdi-cog"></i> Settings</a>
          <a href="#" class="btn btn-outline-maroon"><i class="mdi mdi-account-circle"></i> Profile</a>
          <a href="/" class="btn btn-outline-maroon" target="_blank"><i class="mdi mdi-web"></i> Website Preview</a>
        </div>
      </div>
    </div>
    <!-- Notifikasi Dummy -->
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> You have successfully logged in.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <!-- Statistik Card -->
    <div class="row mb-4">
      <div class="col-md-3 stretch-card grid-margin">
        <div class="card card-stat shadow-sm border-0 h-100 card-maroon-gradient animate__animated animate__fadeInUp" style="background: linear-gradient(120deg, #fff0f3 0%, #e57373 100%) !important; color: #b22234 !important;">
          <div class="card-body text-center text-white">
            <div class="mb-2"><i class="mdi mdi-chart-line mdi-36px" style="color: #b22234 !important;"></i></div>
            <h5 class="fw-bold" style="color: #b22234 !important;">Posts</h5>
            <h2 class="mb-2 display-5">{{ $postCount ?? 0 }}</h2>
            <p class="mb-0">Total Posts</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 stretch-card grid-margin">
        <div class="card card-stat shadow-sm border-0 h-100 card-maroon-gradient animate__animated animate__fadeInUp" style="background: linear-gradient(120deg, #fff0f3 0%, #e57373 100%) !important; color: #b22234 !important; animation-delay:0.1s;">
          <div class="card-body text-center text-white">
            <div class="mb-2"><i class="mdi mdi-bookmark-outline mdi-36px" style="color: #b22234 !important;"></i></div>
            <h5 class="fw-bold" style="color: #b22234 !important;">Categories</h5>
            <h2 class="mb-2 display-5">{{ $categoryCount ?? 0 }}</h2>
            <p class="mb-0">Total Categories</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 stretch-card grid-margin">
        <div class="card card-stat shadow-sm border-0 h-100 card-maroon-gradient animate__animated animate__fadeInUp" style="background: linear-gradient(120deg, #fff0f3 0%, #e57373 100%) !important; color: #b22234 !important; animation-delay:0.2s;">
          <div class="card-body text-center text-white">
            <div class="mb-2"><i class="mdi mdi-account-multiple mdi-36px" style="color: #b22234 !important;"></i></div>
            <h5 class="fw-bold" style="color: #b22234 !important;">Users</h5>
            <h2 class="mb-2 display-5">{{ $userCount ?? 0 }}</h2>
            <p class="mb-0">Total Users</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 stretch-card grid-margin">
        <div class="card card-stat shadow-sm border-0 h-100 card-maroon-gradient animate__animated animate__fadeInUp" style="background: linear-gradient(120deg, #fff0f3 0%, #e57373 100%) !important; color: #b22234 !important; animation-delay:0.3s;">
          <div class="card-body text-center text-white">
            <div class="mb-2"><i class="mdi mdi-comment-multiple-outline mdi-36px" style="color: #b22234 !important;"></i></div>
            <h5 class="fw-bold" style="color: #b22234 !important;">Comments</h5>
            <h2 class="mb-2 display-5">128</h2>
            <p class="mb-0">Total Comments</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Statistik Chart Dummy & Recent Activity/Comments -->
    <div class="row mb-4">
      <div class="col-lg-8 mb-4 mb-lg-0">
        <div class="card shadow-sm border-0 h-100">
          <div class="card-body">
            <h4 class="card-title mb-3">Posts Analytics</h4>
            <canvas id="postsChart" height="120"></canvas>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card shadow-sm border-0 h-100 mb-4">
          <div class="card-body">
            <h4 class="card-title mb-3">Recent Activity</h4>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">New post <b>"How to Use Vaganza CMS"</b> published <span class="badge bg-maroon ms-2">Just now</span></li>
              <li class="list-group-item">User <b>"Sarah"</b> registered <span class="badge bg-maroon ms-2">5 min ago</span></li>
              <li class="list-group-item">Category <b>"Guide"</b> added <span class="badge bg-maroon ms-2">10 min ago</span></li>
              <li class="list-group-item">Post <b>"Welcome to the New Dashboard"</b> updated <span class="badge bg-maroon ms-2">1 hour ago</span></li>
            </ul>
          </div>
        </div>
        <div class="card shadow-sm border-0 h-100">
          <div class="card-body">
            <h4 class="card-title mb-3">Recent Comments</h4>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><b>John:</b> "Great post!" <span class="badge bg-light text-maroon ms-2">2 min ago</span></li>
              <li class="list-group-item"><b>Anna:</b> "Thanks for the info." <span class="badge bg-light text-maroon ms-2">8 min ago</span></li>
              <li class="list-group-item"><b>Mike:</b> "How to add images?" <span class="badge bg-light text-maroon ms-2">15 min ago</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Data Table Dummy -->
    <div class="card shadow-sm border-0 animate__animated animate__fadeInUp mb-4">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h4 class="card-title mb-0">Recent Posts</h4>
          <a href="#" class="btn btn-maroon-gradient text-soft-maroon btn-sm" style="background: linear-gradient(120deg, #fff0f3 0%, #e57373 100%) !important; color: #b22234 !important;">Add New</a>
        </div>
        <div class="table-responsive">
          <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
              <tr>
                <th>#</th>
                <th>Title</th>
                <th>Category</th>
                <th>Date</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>How to Use Vaganza CMS</td>
                <td>Guide</td>
                <td>2024-06-01</td>
                <td><span class="badge bg-maroon">Published</span></td>
                <td>
                  <a href="#" class="btn btn-sm btn-maroon-gradient text-soft-maroon" style="background: linear-gradient(120deg, #fff0f3 0%, #e57373 100%) !important; color: #b22234 !important;">Edit</a>
                  <a href="#" class="btn btn-sm btn-outline-maroon">Delete</a>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Welcome to the New Dashboard</td>
                <td>Announcement</td>
                <td>2024-05-28</td>
                <td><span class="badge bg-maroon">Draft</span></td>
                <td>
                  <a href="#" class="btn btn-sm btn-maroon-gradient text-soft-maroon" style="background: linear-gradient(120deg, #fff0f3 0%, #e57373 100%) !important; color: #b22234 !important;">Edit</a>
                  <a href="#" class="btn btn-sm btn-outline-maroon">Delete</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- Media Files Card -->
    <div class="row mb-4">
      <div class="col-md-4">
        <div class="card card-maroon-gradient shadow-sm border-0 h-100 text-soft-maroon" style="background: linear-gradient(120deg, #fff0f3 0%, #e57373 100%) !important; color: #b22234 !important;">
          <div class="card-body text-center">
            <div class="mb-2"><i class="mdi mdi-folder-multiple-image mdi-36px" style="color: #b22234 !important;"></i></div>
            <h5 class="fw-bold" style="color: #b22234 !important;">Media Files</h5>
            <h2 class="mb-2 display-5">54</h2>
            <p class="mb-0">Total Media</p>
          </div>
        </div>
      </div>
      <!-- System Info -->
      <div class="col-md-8">
        <div class="card shadow-sm border-0 h-100">
          <div class="card-body">
            <h4 class="card-title mb-3">System Info</h4>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">CMS Version: <b>1.0.0</b></li>
              <li class="list-group-item">PHP Version: <b>{{ phpversion() }}</b></li>
              <li class="list-group-item">Server: <b>{{ $_SERVER['SERVER_SOFTWARE'] ?? 'Unknown' }}</b></li>
              <li class="list-group-item">Last Backup: <b>2024-05-30</b></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer Panel -->
    <footer class="text-center py-3 mt-4">
      <small class="text-muted">&copy; {{ date('Y') }} Vaganza CMS. All rights reserved. | <a href="#" class="text-maroon">Support</a></small>
    </footer>
  </div>
</div> 