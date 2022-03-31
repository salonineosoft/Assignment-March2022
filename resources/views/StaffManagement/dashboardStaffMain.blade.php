@extends('StaffManagement.dashboardStaff')
@section('content2')

<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-12">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <h3 class="text-center">Total</h3>
               <h5 class="h5 mb-0 font-weight-bold text-gray-800 text-center">{{$total}}</h5>
                <h5 class="h5 mb-0 font-weight-bold text-danger text-center"></h5>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>       
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-12">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3 class="text-center">Approved<sup style="font-size: 20px"></h3>
                <h5 class="h5 mb-0 font-weight-bold text-gray-800 text-center">{{$approved}}</h5>
                <h5 class="h5 mb-0 font-weight-bold text-danger text-center"></h5>
              </div>
              <div class="icon">
              <i class="ion ion-pie-graph"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-12">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <h3 class="text-center">Rejected</h3>
               <h5 class="h5 mb-0 font-weight-bold text-gray-800 text-center">{{$rejected}}</h5>
                <h5 class="h5 mb-0 font-weight-bold text-danger text-center"></h5>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>       
              </div>
            </div>
          </div>
          <!-- ./col -->
       
            <!-- small box -->
         
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
         
    </section>



@endsection