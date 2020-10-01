@extends('layouts.customauth')
@section('title', 'Register')
@section('content')
<div class="row">
  <!-- Logo & Information Panel-->
  <div class="col-lg-6">
    <div class="info d-flex align-items-center">
      <div class="content">
        <div class="logo">
          <h1>Dashboard</h1>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </div>
    </div>
  </div>
  <!-- Form Panel    -->
  <div class="col-lg-6 bg-white">
    <div class="form d-flex align-items-center">
      <div class="content">
        <form class="form-validate" method="POST" action="{{route('register')}}" enctype="multipart/form-data">
          @csrf
          <div class="d-flex justify-content-center">
            <img src="{{ asset('images/avatar.png') }}" alt="" width="200px" height="200px" id="profile_image" class="img-thumbnail">
          </div>
          <div class="form-group mt-3">
            <input id="fileInput" name="image" type="file" class="form-control-file @error('image') is-invalid @enderror">
            @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="form-group">
            <input id="register-username" type="text" name="name" required data-msg="Please enter your username" class="input-material @error('name') is-invalid @enderror">
            <label for="register-username" class="label-material">User Name</label>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="form-group">
            <input id="register-email" type="email" name="email" required data-msg="Please enter a valid email address" class="input-material @error('email') is-invalid @enderror">
            <label for="register-email" class="label-material">Email Address</label>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="form-group">
            <input id="register-password" type="password" name="password" required data-msg="Please enter your password" class="input-material">
            <label for="register-password" class="label-material">password</label>
          </div>
          <div class="form-group">
            <input id="register-password-confirm" type="password" name="password_confirmation" required data-msg="Please enter your password" class="input-material">
            <label for="register-password" class="label-material">Confirm password</label>
          </div>
          <div class="form-group terms-conditions">
            <input id="register-agree" name="registerAgree" type="checkbox" required value="1" data-msg="Your agreement is required" class="checkbox-template">
            <label for="register-agree">Agree the terms and policy</label>
          </div>
          <div class="form-group">
            <button id="regidter" type="submit" name="registerSubmit" class="btn btn-primary">Register</button>
          </div>
        </form><small>Already have an account? </small><a href="{{route('login')}}" class="signup">Login</a>
      </div>
    </div>
  </div>
</div>
@endsection
@section('javascript')
<script type="text/javascript">
  $(document).ready(function() {
    $("#fileInput").change(function() {
      readURL(this);
    });

    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
          $('#profile_image').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
      }
    }
    $("#fileInput").change(function() {
      readURL(this);
    });
  })
</script>
@endsection