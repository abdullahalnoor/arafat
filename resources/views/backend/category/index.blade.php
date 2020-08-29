@extends('backend.app')

{{-- @section('title_bar','Create Category')

@section('page_title')
    Create Category
@endsection --}}

@section('title_bar',$page_title)

@section('page_title')
    {{ $page_title }}
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">

            <div class="tile">
                <h3 class="tile-title">Manage Category </h3>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>#Sl</th>
                      <th> Name</th>
                      <th> Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>


                    @foreach ($categories as $key =>  $category)
                      <tr>
                        <td> {{$key + 1 }} </td>
                        <td>{{ $category->name }}</td>
                        <td>
                          @if ($category->status == 1)
                              <span class="bg-info p-1 text-white">Active</span>
                          @else   
                          <span class="bg-danger p-1 text-white">Inactive</span> 
                          @endif

                          {{-- {{ $category->status == 1 ? 'Active' : 'Inactive' }} --}}
                        </td>
                        <td>
                          <a href="">Edit</a>
                          <a href="">Delete</a>

                        </td>
                      </tr>
                    @endforeach
                 
                   
                  </tbody>
                </table>
              </div>
          



        </div>
      </div>
    </div>
  </div>
@endsection