@extends('layouts.app')

@section('content')
<div class="row">
   <div class="col-sm-12">
      <div class="card">
         <div class="card-header d-flex justify-content-between">
            <div class="header-title">
               <h4 class="card-title">Menu list table</h4>
            </div>
            <div class="card-tools">
               <a href="{{ url('products/create') }}"
                  class="btn btn-primary btn-sm">
                  <i class="icon">
                     <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.0001 8.32739V15.6537" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M15.6668 11.9904H8.3335" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6857 2H7.31429C4.04762 2 2 4.31208 2 7.58516V16.4148C2 19.6879 4.0381 22 7.31429 22H16.6857C19.9619 22 22 19.6879 22 16.4148V7.58516C22 4.31208 19.9619 2 16.6857 2Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                     </svg>
                  </i>
                  Create Menu
               </a>
            </div>
         </div>
         <div class="card-body">
            <p>Menu list</p>
            <div class="table-responsive">
               <div class="table-responsive">
                  <table id="datatable" class="table" data-toggle="data-table">
                     <thead>
                        <tr>
                           <th>Photo</th>
                           <th>Name</th>
                           <th>Store Owner</th>
                           <th>Category</th>
                           <th>Cost USD</th>
                           <th>Cost KHR</th>
                           <th></th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($product as $key => $item)
                           <tr>
                              <td>
                                 <img src="{{ $item->photo != null ? asset('storage/'.$item->photo) : asset('assets/images/browser_file.png') }}" width="32" alt="" srcset="">
                              </td>
                           <th>{{$item->name}}</th>
                           <td>{{$item->store->name ?? '' }}</td>
                           <th>{{$item->category->name ?? ''}}</th>
                           <th>{{$item->cost_usd}}</th>
                           <th>{{$item->cost_khr}}</th>
                              <td>
                                 <a class="btn btn-defualt btn-icon" href="{{ url('products/'.$item->id.'/edit') }}">
                                    <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M13.7476 20.4428H21.0002" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M12.78 3.79479C13.5557 2.86779 14.95 2.73186 15.8962 3.49173C15.9485 3.53296 17.6295 4.83879 17.6295 4.83879C18.669 5.46719 18.992 6.80311 18.3494 7.82259C18.3153 7.87718 8.81195 19.7645 8.81195 19.7645C8.49578 20.1589 8.01583 20.3918 7.50291 20.3973L3.86353 20.443L3.04353 16.9723C2.92866 16.4843 3.04353 15.9718 3.3597 15.5773L12.78 3.79479Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                       <path d="M11.021 6.00098L16.4732 10.1881" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                 </a>
                                 <a class="btn btn-defualt btn-icon text-danger"  href="{{ url('products',$item->id) }}"       
                                    onclick="event.preventDefault();
                                    document.getElementById('delete-form').submit();">
                                    <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                    <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                </svg>                            
                                 </a>
                                 <form id="delete-form" action="{{ url('products',$item->id) }}" method="POST" class="d-none">
                                    @csrf
                                    @method('delete')
                                </form>
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
</div>
@endsection