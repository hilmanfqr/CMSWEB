@extends('layouts.auth')

@section('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
@endsection

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Posts </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Posts</a></li>
            <li class="breadcrumb-item active" aria-current="page">All Posts</li>
          </ol>
        </nav>
      </div>
      <div class="row">
   
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">

              @if (count($posts) > 0 )


              <table id="posts-table" class="table table-striped">
                <thead>
                  <tr>
                    <th> Image </th>
                    <th> Title </th>
                    <th> Category </th>
                    <th> Description </th>
                    <th> Status </th>
                    <th> Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($posts as $post)
                  <tr>
                    <td class="py-1">
                      <img src="{{ $post->gallery->image }}" style="width: 70px;height: 70px" alt="image" />
                    </td>
                    <td> {{ $post->title }} </td>
                    <td> {{ $post->category->name }} </td>
                    <td> {!! Str::limit($post->description, 15) !!} </td>
                    <td> {{ $post->is_publish == 1 ? 'Published' : 'Drafted' }} </td>
                    <td>
                      <a href="" class="btn btn-success"> <i class="fas fa-eye"></i></a>
                      <a href="" class="btn btn-info"> <i class="fas fa-edit"></i></a>
                      <a href="" class="btn btn-danger"> <i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              @else
              <h3 class="text-center text-danger">No Posts Found</h3>
             @endif


            </div>
              

           
          </div>
        </div>
      </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#posts-table').DataTable();
        });
    </script>
@endsection