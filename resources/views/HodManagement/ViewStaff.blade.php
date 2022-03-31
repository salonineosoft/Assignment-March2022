@extends('HodManagement.dashboard')
@section('content1')
<style>
   .back-btn{
        float: right;
    }
</style>

<section class="content">
<div class="bg-white">
<a  class="back-btn mr-5 mt-4" href="{{url('ShowStaffs')}}" >
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
</svg> Back</a><br><br>
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-8 col-12 ">
            <!-- small box -->
            <div class="small-box bg-info" style="width:500px; height:250px; margin-left:120px;">
            <h1  class="text-center"> <img src='{{url("uploads/$data->image")}}'  class="rounded-circle" alt="Cinque Terre" width="100px" height="100px"></h1>
              <div class="inner">
              <h3 class="text-center"></h3>
               <h5 class="h5 mb-0 font-weight-bold text-gray-800 text-center"></h5>
                <h5 class="h5 mb-0 font-weight-bold text-warning text-center">Name - <b>{{$data->name}}</b></h5>
                <h5 class="h5 mb-0 font-weight-bold text-warning text-center">Email - {{$data->email}}</h5>
                <h5 class="h5 mb-0 font-weight-bold text-warning text-center">Contact - {{$data->contact}}</h5>
              </div>
              <div class="icon">      
              </div>
            </div>
          </div>
        </div>
</section>
@endsection