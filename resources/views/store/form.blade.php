
@include('layout.header')
@include('layout.navbar')
@include('layout.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0">{{ isset($store) ? 'Edit' : 'New' }} Store </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="/store" class="harpia-text-color">Store</a></li>
                  <li class="breadcrumb-item active">{{ isset($store) ? 'Edit' : 'New' }}</li>
               </ol>
            </div><!-- /.col -->
         </div><!-- /.row -->
      </div><!-- /.container-fluid -->
   </div>
   @if($errors->any())
      <div class="alert alert-danger" role="alert">                    
         @foreach($errors->all() as $error)
            {{ $error }}<br/>
         @endforeach
      </div>
   @endif
    <!-- /.content-header -->

   <div class="content">
      <div class="container-fluid">         
         <div class="card">
            @isset($store)
            <div class="card-header">
               <a href="/cliente/novo" class="btn btn-primary">
                  New Store
                  <i class="fas fa-plus"></i>
               </a>
               <!-- /.content-headlientes> -->
            </div>
            @endisset
            <div class="col card-body">                              
                <form action="/store/store" method="post" >
                  @csrf
                  <input type="hidden" name="id" value="@if(isset($store)){{$store->id}}@else{{old('id')}}@endif">                               
                    <div class="row">
                        <div class=" form-group col-sm-3 col-md-3 col-lg-3 col-xl-3">
                            <label class="form-label" for="name">Name:</label>
                            <input type="text" name="name" id="name" class="form-control" value="@if(isset($store)){{$store->name}}@else{{old('name')}}@endif" required>
                        </div>
                        <div class="col-sm-5 col-md-5 col-lg-5 col-xl-5">
                            <label class="form-label" for="address">Addrewss:</label>
                            <input type="text" name="address" id="address" class="form-control" value="@if(isset($store)) {{$store->address}}@else{{old('address')}}@endif">
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                            <label class="form-label" for="active">Active:</label>
                            <select id="active" name="active" class="form-control">
                                <option value="">Selecione</option>
                                @foreach($actives as $active)                              
                                    <option value="{{$active}}" @if(isset($store) && $store->active == $active) selected @elseif(old('active') == $active) selected @endif>{{$active}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <br><br>
                    <div class="row justify-content-between">
                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 mb-2">
                            <a href="/store" class="btn btn-danger w-100 hover-shadow">
                            @if(isset($store))
                            Exit
                            @else
                            Cancel
                            <i class="fas fa-times"></i>
                            @endif
                            </a>
                        </div>               
                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                            <button type="submit" class="btn btn-success w-100 salvar">
                            Save 
                            <i class="fas fa-save"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>   
         </div>
      </div><!-- /.container-fluid -->
   </div><!-- /.content -->
</div>
@include('layout.footer')