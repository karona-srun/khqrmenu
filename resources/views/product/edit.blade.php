@extends('layouts.app')

@section('content')
<div class="row">
   <div class="col-sm-12">
      <div class="card">
         <div class="card-header d-flex justify-content-between">
            <div class="header-title">
               <h4 class="card-title">Update Menu</h4>
            </div>
            <div class="card-tools">
               <a href="{{ url('products') }}"
                  class="btn btn-primary btn-sm">
                  <i class="icon">
                     <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.7161 16.2234H8.49609" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M15.7161 12.0369H8.49609" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M11.2521 7.86011H8.49707" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.909 2.74976C15.909 2.74976 8.23198 2.75376 8.21998 2.75376C5.45998 2.77076 3.75098 4.58676 3.75098 7.35676V16.5528C3.75098 19.3368 5.47298 21.1598 8.25698 21.1598C8.25698 21.1598 15.933 21.1568 15.946 21.1568C18.706 21.1398 20.416 19.3228 20.416 16.5528V7.35676C20.416 4.57276 18.693 2.74976 15.909 2.74976Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                     </svg>
                  </i>
                  Back
               </a>
            </div>
         </div>
         <div class="card-body">
         <form class="form-horizontal" method="post" action="{{ url('products', $product->id ) }}" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <p>Enter information to update menus</p>
            <div class="row">
               <div class="col-sm-4">
                  <p>Photo Menu</p>
                  <div class="mt-2">
                     <input type="file" name="logo" accept="image/*" id="fileInput" style="display: none;">
                  </div>
                  <div>
                     <img id="preview" class="triggerButton" src="{{ asset('assets/images/browser_file.png') }}" style="width: 200px;">
                  </div>
               </div>
               <div class="col-sm-8">
               @if ($errors->any())
                     <div class="alert alert-danger">
                           <ul>
                              @foreach ($errors->all() as $error)
                                 <li>{{ $error }}</li>
                              @endforeach
                           </ul>
                     </div>
                  @endif
                     <div class="form-group row">
                        <label class="control-label col-sm-3 align-self-center mb-0" for="text">Name:</label>
                        <div class="col-sm-9">
                           <input type="text" class="form-control" id="text" name="name" value="{{ $product->name }}" placeholder="Enter your store name">
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-sm-3 align-self-center mb-0" for="text">Category:</label>
                        <div class="col-sm-9">
                           <select name="category_id" id="user_id" class="form-control">
                              @foreach($category as $id => $user)
                              <option value="{{$id}}" {{ $product->category_id ? 'selected' : '' }}>{{$user}}</option>
                              @endforeach
                           </select>
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-sm-3 align-self-center mb-0">Cost USD:</label>
                        <div class="col-sm-9">
                           <input type="number" step="any" class="form-control" id="text" name="cost" value="{{ $product->cost_usd }}" placeholder="0.00">
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-sm-3 align-self-center mb-0">Cost KHR:</label>
                        <div class="col-sm-9">
                           <input type="number" step="any" class="form-control" id="text" name="cost_khr" value="{{ $product->cost_khr }}" placeholder="0.00">
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-sm-3 mb-0">Description:</label>
                        <div class="col-sm-9">
                           <textarea name="description" id="description" class="form-control" placeholder="Enter your description" rows="3">{{ $product->description }}</textarea>
                        </div>
                     </div>
                     <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="submit" class="btn btn-danger">cancel</button>
                     </div>
                  
               </div>
            </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection