@extends('layouts.app')

@section('content')

<div class="row">
   <div class="col-sm-12">
      <div class="card">
         <div class="card-header d-flex justify-content-between">
            <div class="header-title">
               <h4 class="card-title">Create User</h4>
            </div>
            <div class="card-tools">
               <a href="{{ url('users') }}"
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
        <form class="form-horizontal" method="post" action="{{ url('users') }}" enctype="multipart/form-data">
         @csrf

        <div class="row">
        <div class="col-sm-4">
                  <p>Photo User</p> 
                  <div class="mt-2">
                     <input type="file" name="photo" accept="image/*" id="fileInput" style="display: none;">
                  </div>
                  <div>
                     <img id="preview" class="triggerButton" src="{{ asset('assets/images/browser_file.png') }}" style="width: 200px;">
                  </div>
               </div>

            <div class="col-sm-8">
                <div class="form-group row">
                    <label for="store_id" class="block col-sm-3 text-sm font-medium text-gray-700">Store</label>
                    <div class="col-sm-9">
                    <select name="store_id" id="store_id" class="form-control">
                        <option value="">Select Store</option>
                        @foreach($stores as $store)
                            <option value="{{ $store->id }}">{{ $store->name }}</option>
                        @endforeach
                    </select>
                    @error('store_id')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-3 align-self-center mb-0" for="text">Name:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="text" name="name" value="{{ old('name') }}" placeholder="Enter your name">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-3 align-self-center mb-0" for="text">Email:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="text" name="email" value="{{ old('email') }}" placeholder="Enter your email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="store_id" class="block col-sm-3 text-sm font-medium text-gray-700">Role</label>
                    <div class="col-sm-9">
                    <select name="role_id" id="role_id" class="form-control">
                        <option value="">Select Role</option>
                        <option value="1">Administrator</option>
                        <option value="2">Store Admin</option>
                    </select>
                    @error('role')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-3 align-self-center mb-0" for="text">Password:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="text" name="password" value="{{ old('password') }}" placeholder="Enter your password">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-3 align-self-center mb-0" for="text">Confirm Password:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="text" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Enter your password">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-3 align-self-center mb-0" for="text">Active:</label>
                    <div class="col-sm-9">
                        <input type="checkbox" class="form-check-input" id="text" name="is_active" value="1" checked>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-9">
                        <button type="submit" class="btn btn-primary">Create User</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
         </div>
         </div>
         </div>


@endsection