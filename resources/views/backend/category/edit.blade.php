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
                  <h3 class="tile-title">Category</h3>
                  <div class="tile-body">
                    <form action="{{route('admin.category.update')}}" method="POST">
                        @csrf
                      <div class="form-group">
                        <label class="control-label">Name</label>
                        <input class="form-control" name="name" value="{{$category->name}}" type="text" placeholder="Enter full name">
                        <input class="form-control" name="category_id" value="{{$category->id}}" type="hidden" >
                      </div>
                  
                      <div class="form-group">
                        <label for="exampleSelect1">Status</label>
                        <select name="status" class="form-control" id="exampleSelect1">
                          <option >Select One</option>
                          <option value="1" {{$category->status == 1 ? 'selected' : '' }} >Active</option>
                          <option value="0" @if ($category->status == 0)
                            selected
                           
                          @endif  >Inactive</option>
                          
                        </select>
                      </div>
                      <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                    
                      {{-- <input class="btn btn-primary" value="Create" type="submit"> --}}
                  
                    </form>
                  </div>
                  <div class="tile-footer">
                   
                   
                  </div>
                </div>
          



        </div>
      </div>
    </div>
  </div>
@endsection