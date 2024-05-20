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
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- /.row -->
        <div class="row justify-content-center">          
          <div class="col-3">
            <div class="card">
              <div class="card-body">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-yellow elevation-1"><i class="fas fa-store"></i></span>
                  <div class="info-box-content">                                 
                    <div class="inner" >
                      <h4 class="info-box-text" style="color: #000">Store</h4>
                    </div>
                  </div>
                </div>
                <a href="/store/" class="btn btn-info w-100" >To view</a>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="card">
              <div class="card-body">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-red elevation-1"><i class="fas fa-book"></i></span>
                  <div class="info-box-content">                                 
                    <div class="inner" >
                      <h4 class="info-box-text" style="color: #000">Books</h4>
                    </div>
                  </div>
                </div>
                <a href="/book/" class="btn btn-info w-100" >To view</a>
              </div>
            </div>
          </div>          
        </div>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @include('layout.footer')
