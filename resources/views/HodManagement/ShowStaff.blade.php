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
      <th scope="col-3">Name</th>
      <th scope="col-3">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Image</th>
      <th colspan="2"  class="text-center col-2">Action</th>
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
      <td>{{$i->name}}</td>
      <td>{{$i->email}}</td>
     <td>{{$i->contact}}</td>
     <td>
           <img src='{{url("uploads/$i->image")}}' width="50px">
      </td>
      <td>

      <form action="/ShowStaffs/{{$i->id}}/" method="post">
 @csrf()
 @method('delete')
<button type="submit" onclick="return confirm('Do you really want to delete {{$i->name}}!')" class="btn btn-danger">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg>
</button>
</form>

<a href="/ShowStaffs/{{$i->id}}/" class="btn btn-success mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
</svg></a>


  <!-----endmodal--------->
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

