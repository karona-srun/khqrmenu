@extends('layouts.app')

@section('content')
<div class="row">
   <div class="col-sm-12">
      <div class="card">
         <div class="card-header d-flex justify-content-between">
            <div class="header-title">
               <h4 class="card-title">Store list table</h4>
            </div>
            <div class="card-tools">
               <a href="{{ url('setup-store/create') }}"
                  class="btn btn-primary btn-sm">
                  <i class="icon">
                     <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.0001 8.32739V15.6537" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M15.6668 11.9904H8.3335" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6857 2H7.31429C4.04762 2 2 4.31208 2 7.58516V16.4148C2 19.6879 4.0381 22 7.31429 22H16.6857C19.9619 22 22 19.6879 22 16.4148V7.58516C22 4.31208 19.9619 2 16.6857 2Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                     </svg>
                  </i>
                  SetUp
               </a>
            </div>
         </div>
         <div class="card-body">
            <p>Store list</p>
            <div class="table-responsive">
               <table id="datatable" class="table" data-toggle="data-table">
                  <thead>
                     <tr>
                        <th>Logo</th>
                        <th>Name</th>
                        <th>Store Owner</th>
                        <th>Socail Media</th>
                        <th class="text-center text-nowrap text-break">Location</th>
                        <th></th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($store as $key => $item)
                     <tr>
                        <td>
                           <img src="{{ $item->logo ? asset('storage/'.$item->logo) : asset('assets/images/browser_file.png') }}" width="32" alt="" srcset="">
                        </td>
                        <td>{{ $item->name }}</td>
                        <td>
                           @if ($item->user)
                              <span><strong>Name:</strong> {{ $item->user->name }}</span><br>
                              <span><strong>Email:</strong> {{ $item->user->email }}</span>
                              <br>
                              <span><strong>Phone Number:</strong> {{ $item->phone_number }}</span>
                           @else
                              <p>No user associated with this store.</p>
                           @endif
                        </td>
                        <td>
                           {{ $item->facebook_link }} <br>
                           {{ $item->instragram_link }} <br>
                           {{ $item->telegram_link }}
                        </td>
                        <td class="text-center text-nowrap text-break">{{ $item->location }}</td>
                        <td>
                           <div class="d-flex gap-2">
                           <a href="{{ url('/'.strtolower(str_replace(' ', '-', $item->name))) }}">
                              <img src="{{ asset('assets/icons/supermaket.png') }}" class="icon-32 ml-4 me-2">
                           </a>

                              <a href="{{ url('setup-store/'.$item->id) }}">
                              <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.334 2.75H7.665C4.644 2.75 2.75 4.889 2.75 7.916V16.084C2.75 19.111 4.634 21.25 7.665 21.25H16.333C19.364 21.25 21.25 19.111 21.25 16.084V7.916C21.25 4.889 19.364 2.75 16.334 2.75Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M15.9393 12.0129H15.9483" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M11.9301 12.0129H11.9391" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M7.92128 12.0129H7.93028" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>                                </svg>                            
                              </a>
                              <a class="btn btn-defualt btn-icon" href="{{ url('setup-store/'.$item->id.'/edit') }}">
                                 <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M13.7476 20.4428H21.0002" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M12.78 3.79479C13.5557 2.86779 14.95 2.73186 15.8962 3.49173C15.9485 3.53296 17.6295 4.83879 17.6295 4.83879C18.669 5.46719 18.992 6.80311 18.3494 7.82259C18.3153 7.87718 8.81195 19.7645 8.81195 19.7645C8.49578 20.1589 8.01583 20.3918 7.50291 20.3973L3.86353 20.443L3.04353 16.9723C2.92866 16.4843 3.04353 15.9718 3.3597 15.5773L12.78 3.79479Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                 <path d="M11.021 6.00098L16.4732 10.1881" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                              </a>
                           </div>
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