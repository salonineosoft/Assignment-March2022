@extends('HodManagement.dashboard')
@section('content1')
  <style>
    .btn{
    float: right;
    }
    .AddCategory{
       color: white;
    }
    </style>
<div class="bg-white">
  @if(Session::has('msg'))
  <label class="alert alert-success col-9 mx-auto">{{Session::get('msg')}}</label>
@endif
  
     <div class="container">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col-3">leave from date</th>
      <th scope="col-3">leave to date</th>
      <th scope="col">Reason</th>
      <th scope="col">Status</th>
      <th class="col-1">Action</th>
    </tr>
  </thead>
  <tbody>
   @if(count($staff)>0) 
      @php
       $sn=1;
      @endphp
      @foreach($staff as $i)
    <tr>
      <td>{{$sn}}</td>
      <td>{{$i->leave_from_date}}</td>
      <td>{{$i->leave_to_date}}</td>
     <td>{{$i->reason}}</td>
     @if($i->status=='pending')
          <td class="text-warning"><b>Pending</b></td>
      @endif
      @if($i->status=='approved')
      <td class="text-success"><b>Approved</b></td>
      @endif
      @if($i->status=='rejected')
        <td class="text-danger"><b>Rejected</b></td>
      @endif
  

    

     <td>
        <a href="/ShowStaffLeaves/{{$i->id}}/edit" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
        </svg></a></td>
      </td>

      
      @php
     $sn++;
  @endphp
    </tr> 
    @endforeach
  @else
<tr>
   <td class="record text-red text-center" colspan="10"> No records found</td>
</tr> 
@endif
</tbody>
</table>
{{$staff->links("pagination::bootstrap-4")}}
  </div><br><br>
</div>
</div>
@endsection

