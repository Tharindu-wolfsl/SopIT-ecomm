@extends('master')
@section('content')

<div class="container login-card">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4"><div class="card" style="width: 18rem;">
            <div class="card-body">
                <form action="register" method="POST" >
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1"  class="form-label">Name</label>
                        <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1"  class="form-label">Email address</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1"  class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                  </form>
            </div>
          </div></div>
    </div>
</div>


@endsection
