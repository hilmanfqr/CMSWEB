@extends('layouts.auth')

@section('content')
<div class="row">

    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h5 class="card-header">Buttons</h5>
          <div class="card-body">
              <h4>Basic Buttons</h4>
              <a href="#" class="btn btn-primary">Primary</a>
              <a href="#" class="btn btn-brand">Brand</a>
              <a href="#" class="btn btn-secondary">Secondary</a>
              <a href="#" class="btn btn-success">Success</a>
              <a href="#" class="btn btn-danger">Danger</a>
              <a href="#" class="btn btn-warning">Warning</a>
              <a href="#" class="btn btn-info">Info</a>
              <a href="#" class="btn btn-light">Light</a>
              <a href="#" class="btn btn-dark">Dark</a>
          </div>
          <div class="card-body border-top">
              <h4>Outline Buttons</h4>
              <a href="#" class="btn btn-outline-primary">Primary</a>
              <a href="#" class="btn btn-outline-brand">Brand</a>
              <a href="#" class="btn btn-outline-secondary">Secondary</a>
              <a href="#" class="btn btn-outline-success">Success</a>
              <a href="#" class="btn btn-outline-danger">Danger</a>
              <a href="#" class="btn btn-outline-warning">Warning</a>
              <a href="#" class="btn btn-outline-info">Info</a>
              <a href="#" class="btn btn-outline-light">Light</a>
              <a href="#" class="btn btn-outline-dark">Dark</a>
          </div>
           <div class="card-body border-top">
              <h4>Rounded Buttons</h4>
              <a href="#" class="btn btn-rounded btn-primary">Primary</a>
              <a href="#" class="btn btn-rounded btn-brand">Brand</a>
              <a href="#" class="btn btn-rounded btn-secondary">Secondary</a>
              <a href="#" class="btn btn-rounded btn-success">Success</a>
              <a href="#" class="btn btn-rounded btn-danger">Danger</a>
              <a href="#" class="btn btn-rounded btn-warning">Warning</a>
              <a href="#" class="btn btn-rounded btn-info">Info</a>
              <a href="#" class="btn btn-rounded btn-light">Light</a>
              <a href="#" class="btn btn-rounded btn-dark">Dark</a>
          </div>
          <div class="card-body border-top">
              <h4>Buttons Sizes</h4>
              <a href="#" class="btn btn-primary btn-lg">Large button</a>
              <a href="#" class="btn btn-primary">Default button</a>
              <a href="#" class="btn btn-primary btn-sm">Small button</a>
              <a href="#" class="btn btn-primary btn-xs">XSmall button</a>
          </div>
          <div class="card-body border-top">
              <h4>Block Level Buttons</h4>
              <a href="#" class="btn btn-primary btn-block">Block level button</a>
              <a href="#" class="btn btn-brand btn-block">Block level button</a>
          </div>
          <div class="card-body border-top">
              <h4>Active State</h4>
              <a href="#" class="btn btn-primary active">Primary</a>
              <a href="#" class="btn btn-brand active">Brand</a>
              <a href="#" class="btn btn-secondary active">Secondary</a>
              <a href="#" class="btn btn-success active">Success</a>
              <a href="#" class="btn btn-danger active">Danger</a>
              <a href="#" class="btn btn-warning active">Warning</a>
              <a href="#" class="btn btn-info active">Info</a>
              <a href="#" class="btn btn-light active">Light</a>
              <a href="#" class="btn btn-dark active">Dark</a>
          </div>
          <div class="card-body border-top">
              <h4>Radio Buttons</h4>
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-primary active">
                      <input type="radio" name="options" id="option1" checked>Active
                  </label>
                  <label class="btn btn-primary">
                      <input type="radio" name="options" id="option2" > Radio
                  </label>
                  <label class="btn btn-primary">
                      <input type="radio" name="options" id="option3"> Radio
                  </label>
              </div>
           </div>
         </div>
        </div>
      </div>
    </div>
</div>
@endsection

@section('script')
<script src=" {{ asset('assets/auth/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
<script src=" {{ asset('assets/auth/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
<script src=" {{ asset('assets/auth/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
<script src=" {{ asset('assets/auth/libs/js/main-js.js') }}"></script>
@endsection