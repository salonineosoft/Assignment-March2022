@extends('StaffManagement.dashboardStaff')
@section('content2')
<style>
   .back-btn{
        float: right;
    }
</style>
<div class="bg-white">
<section class="content">
      <div class="container-fluid">
      <a  class="back-btn mr-5 mt-4" href="{{url('ShowLeaves')}}">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
</svg> Back</a><br><br>
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-8 col-12 ">
            <!-- small box -->
            <div class="small-box bg-info" style="width:500px; height:250px; margin-left:120px;">
            <h1  class="text-center">  <svg xmlns="http://www.w3.org/2000/svg" width="60" height="50" fill="currentColor" class="bi bi-calendar2-week" viewBox="0 0 16 16">
  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"/>
  <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4zM11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
</svg></h1>
              <div class="inner">
              <h3 class="text-center"></h3>
               <h5 class="h5 mb-0 font-weight-bold text-gray-800 text-center"></h5>
                <h5 class="h5 mb-0 font-weight-bold text-warning text-center">leave_from_date - {{$data->leave_from_date}}</b></h5><hr>
                <h5 class="h5 mb-0 font-weight-bold text-warning text-center">leave_to_date - {{$data->leave_to_date}}</h5><hr>
                <h5 class="h5 mb-0 font-weight-bold text-warning text-center">Reason - {{$data->reason}}</h5><hr>
              </div>
              <div class="icon">      
              </div>
            </div>
          </div>
</section>
  </div>
@endsection