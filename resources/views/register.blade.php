<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        .login{
            margin-left:690px;
        }
    </style>
</head>
<body>
   
<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
          <a href="/logins" class="login text-center h1 fw-bold">Login</a>
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
              @if(Session::has('msg'))
            <div class="alert alert-success">{{Session::get('msg')}}</div>
            @endif
                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Register</p>

                <form class="mx-1 mx-md-4" enctype="multipart/form-data" action="/registers" method="post">
                @csrf()
                @if($errors->has('name'))
          <label class="text-danger">{{$errors->first('name')}}</label>
         @endif
                  <div class="d-flex flex-row align-items-center mb-4">
                 
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" name="name" class="form-control" />
                      <label class="form-label">Your Name</label>
                    </div>
                  </div>

                  @if($errors->has('email'))
         <label class="text-danger">{{$errors->first('email')}}</label>
         @endif
                  <div class="d-flex flex-row align-items-center mb-4">
                
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" id="form3Example3c"  name="email" class="form-control" />
                      <label class="form-label" >Your Email</label>
                    </div>
                  </div>

                  @if($errors->has('password'))
         <label class="text-danger">{{$errors->first('password')}}</label>
         @endif
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4c" name="password" class="form-control" />
                      <label class="form-label">Password</label>
                    </div>
                  </div>

                  @if($errors->has('contact'))
         <label class="text-danger">{{$errors->first('contact')}}</label>
         @endif
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="number" id="form3Example1c" name="contact" class="form-control" />
                      <label class="form-label" for="form3Example1c">Contact</label>
                    </div>
                  </div>

                  @if($errors->has('department_id'))
         <label class="text-danger">{{$errors->first('department_id')}}</label>
         @endif
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                  <select class="form-control" name="department_id">
                      <option>Department</option>
                    @foreach($department as $i)
                    <option value="{{$i->id}}">{{$i->name}}</option>
                     @endforeach
            </select>
            <label class="form-label" for="form3Example1c">Department</label>
                    </div>
                  </div>
                  

                  
                  @if($errors->has('role_id'))
         <label class="text-danger">{{$errors->first('role_id')}}</label>
         @endif
                  <div class="d-flex flex-row align-items-center mb-4">
                  <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                  <select class="form-control" name="role_id">
                    <option>Roles</option> 
                    @foreach($role as $r)
                    <option value="{{$r->id}}">{{$r->name}}</option>
                     @endforeach
            </select>
            <label class="form-label" for="form3Example1c">Roles</label>
                    </div>
                  </div>
                  

                  @if($errors->has('image'))
         <label class="text-danger">{{$errors->first('image')}}</label>
         @endif
                  <div class="d-flex flex-row align-items-center mb-4">
                  <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                  <input type="file" name="image">
           
                    </div>
                  </div>
                  
                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-primary btn-lg">Register</button>
                  </div>


                  
                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>