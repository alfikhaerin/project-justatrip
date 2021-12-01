@extends('layouts.login')

@section('container')


    <div  class="row justify-content-center m-4">
      <div class="col-md-4">
      @if(session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

 
          @if(session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
        <main class="form-signin">


          <h1 class="h3 mb-3 fw-normal">Login</h1>
            <form action="/login-admin" method="post">
                @csrf
              <div class="form-floating">
              <input type="email" class="form-control rounded-top" id="email" placeholder="" name="email" autofocus required> 
              <label for="email">Email</label>
              </div>

              <div class="form-floating"> 
               
                <input type="password" class="form-control ronded-battom" id="floatingPassword" name="password" placeholder="" required> 
                <label for="password">Password</label>
              </div>
               
              <button class="w-100 btn btn-lg btn-primary" type="submit">login</button>
            </form>
            <small class="d-block text-center mt-3"> <a href="/register">Registrasi..!</a></small>
          </main>
        </div>

    </div>
   

        
@endsection


