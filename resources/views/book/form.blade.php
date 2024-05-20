
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
               <h1 class="m-0">{{ isset($book) ? 'Edit' : 'New' }} Book </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="/book" class="harpia-text-color">Book</a></li>
                  <li class="breadcrumb-item active">{{ isset($book) ? 'Edit' : 'New' }}</li>
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
            @isset($book)
            <div class="card-header">
               <a href="/cliente/novo" class="btn btn-primary">
                  New Book
                  <i class="fas fa-plus"></i>
               </a>
               <!-- /.content-headlientes> -->
            </div>
            @endisset
            <div class="col card-body">                              
               <form action="/book/store" method="post" >
                  @csrf
                  <input type="hidden" name="id" value="@if(isset($book)){{$book->id}}@else{{old('id')}}@endif">                               
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                            <label class="form-label" for="name">Name:</label>
                            <input type="text" name="name" id="name" class="form-control" value="@if(isset($book)){{$book->name}}@else{{old('name')}}@endif" required>
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                            <label class="form-label" for="isbn">ISBN:</label>
                            <input type="number" name="isbn" id="isbn" class="form-control" value="@if(isset($book)) {{$book->isbn}}@else{{old('isbn')}}@endif">
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                            <label class="form-label" for="value">Value:</label>
                            <input type="text" name="value" id="value" class="form-control" value="@if(isset($book)){{$book->value}} @else{{old('value')}}@endif" placeholder="00,00">
                        </div>
                        <div class="col-4 form-group" >
                           <label for="store_id" class="form-label">Store:</label>
                           <select id="store_id" name="store_id" class="form-control harpia_single_select2">
                              <option value="">Selecione</option>
                              @foreach($stores as $store)                              
                                 <option value="{{$store->id}}" @if(isset($movimentacao) && $movimentacao->store_id == $store->id) selected @elseif(old('movimentacao->store_id') == $store->id) selected @endif>{{$store->name}}</option>
                              @endforeach
                           </select>
                        </div>
                    </div>                     
                  <div class="row justify-content-between">
                     <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 mb-2">
                        <a href="/book" class="btn btn-danger w-100 hover-shadow">
                           @if(isset($book))
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