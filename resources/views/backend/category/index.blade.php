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
  @if (Session::has('success'))
  <div class="col-md-12">
    <div class="bs-component">
      <div class="alert alert-dismissible alert-success">
        <button class="close" type="button" data-dismiss="alert">×</button><strong>
          </strong> {{Session::get('success')}}
       
      </div>
    </div>
  </div>
  @endif
 
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
                          <a href="{{route('admin.category.status',$category->id)}}">
                            <span class="bg-info p-1 text-white">Active</span>
                          </a>
                         
                          @else   
                          <a href="{{route('admin.category.status',$category->id)}}">
                            <span class="bg-danger p-1 text-white">Inactive</span> 
                          </a>
                          
                          @endif

                          {{-- {{ $category->status == 1 ? 'Active' : 'Inactive' }} --}}
                        </td>
                        <td>
                          <a href="{{route('admin.category.edit',$category->id)}}">Edit</a>
                          {{-- <a href="{{url('/admin/edit/'.$category->id)}}">Edit</a> --}}
                          <a href="{{route('admin.category.delete',$category->id)}}">Delete</a>

                        </td>
                      </tr>
                    @endforeach
                 
                   
                  </tbody>
                </table>
              </div>
          

{{ $categories->links()  }}

        </div>
      </div>
    </div>
  </div>
@endsection