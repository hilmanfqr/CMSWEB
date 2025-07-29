@extends('layouts.auth')

@section('content')
<div class="main-panel">
    <div class="dashboard-gradient-right"></div>
    <div class="content-wrapper">
      <div class="tab-content" id="cmsTabContent">
        <!-- Dashboard Tab -->
        <div class="tab-pane fade show active" id="dashboard" role="tabpanel">
          @include('auth.dashboard-overview')
        </div>
        <!-- Posts Tab -->
        <div class="tab-pane fade" id="posts" role="tabpanel">
          @include('auth.dashboard-posts')
        </div>
        <!-- Categories Tab -->
        <div class="tab-pane fade" id="categories" role="tabpanel">
          @include('auth.dashboard-categories')
        </div>
        <!-- Users Tab -->
        <div class="tab-pane fade" id="users" role="tabpanel">
          @include('auth.dashboard-users')
        </div>
        <!-- Media Tab -->
        <div class="tab-pane fade" id="media" role="tabpanel">
          @include('auth.dashboard-media')
        </div>
        <!-- Pages Tab -->
        <div class="tab-pane fade" id="pages" role="tabpanel">
          @include('auth.dashboard-pages')
        </div>
        <!-- Comments Tab -->
        <div class="tab-pane fade" id="comments" role="tabpanel">
          @include('auth.dashboard-comments')
        </div>
        <!-- Settings Tab -->
        <div class="tab-pane fade" id="settings" role="tabpanel">
          @include('auth.dashboard-settings')
        </div>
        <!-- Profile Tab -->
        <div class="tab-pane fade" id="profile" role="tabpanel">
          @include('auth.dashboard-profile')
        </div>
      </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const ctx = document.getElementById('postsChart').getContext('2d');
  new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
      datasets: [{
        label: 'Posts',
        data: [3, 7, 4, 8, 6, 10],
        borderColor: '#800000',
        backgroundColor: 'rgba(128,0,0,0.12)',
        tension: 0.4,
        fill: true,
        pointRadius: 5,
        pointBackgroundColor: '#b22234',
      }]
    },
    options: {
      plugins: { legend: { display: false } },
      scales: {
        y: { beginAtZero: true }
      }
    }
  });
</script>
@endpush