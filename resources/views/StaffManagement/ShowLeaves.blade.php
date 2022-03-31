@extends('StaffManagement.dashboardStaff')
@section('content2')
  <style>
    .btn{
    float: right;
    }
    .AddCategory{
       color: white;
    }
    </style>
<div class="bg-white">



<!--------model--------->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="/ShowLeaves" method="post">
           @csrf()
           @if(Session::has('err'))
            <div class="alert alert-success">{{Session::get('err')}}</div>
            @endif
       @if($errors->has('from'))
          <label class="text-danger">{{$errors->first('from')}}</label>
         @endif
                  <div class="d-flex flex-row align-items-center mb-4">
                 
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="date" id="form3Example1c" name="from" class="form-control" />
                      <label class="form-label">Leaves From</label>
                    </div>
                  </div>

                  @if($errors->has('to'))
          <label class="text-danger">{{$errors->first('to')}}</label>
         @endif
                  <div class="d-flex flex-row align-items-center mb-4">
                 
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="date" id="form3Example1c" name="to" class="form-control" />
                      <label class="form-label">Leaves To</label>
                    </div>
                  </div>

                  @if($errors->has('reason'))
          <label class="text-danger">{{$errors->first('reason')}}</label>
         @endif
                  <div class="d-flex flex-row align-items-center mb-4">
                 
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" name="reason" class="form-control" />
                      <label class="form-label">Reason</label>
                    </div>
                  </div>

              
    <button type="submit" >Submit</button>
       </form>
      </div>
    </div>
  </div>
  </div> 




  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
  </svg></button>
     </button>  


     <div class="container">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col-3">leave from date</th>
      <th scope="col-3">leave to date</th>
      <th scope="col">Reason</th>
      <th scope="col">Status</th>
      <th class="text-center">Action</th>
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
          <td class="text-warning"><b>pending</b></td>
      @endif
      @if($i->status=='approved')
      <td class="text-success"><b>Approved</b></td>
      @endif
      @if($i->status=='rejected')
        <td class="text-danger"><b>Rejected</b></td>
      @endif
     
    
      <td>
     <a  href="/ShowLeaves/{{$i->id}}/" class="btn btn-warning mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
</svg></a>

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
@endsection

