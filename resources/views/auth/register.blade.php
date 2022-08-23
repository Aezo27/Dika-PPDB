@extends('layouts.auth')

@section('content')
<div class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r" style="min-width:320px">
  <h4 class="fw-300 c-grey-900 mB-40">Pendaftaran Akun</h4>
  <form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="form-group"><label class="text-normal text-dark">Username</label>
      <input type="text"class="form-control" name="name" placeholder="John Doe" onkeypress="return event.charCode != 32" value="{{ old('username') }}" required autofocus>
      @error('name')
          <span class="invalid-feedback" role="alert">
              <strong>Username telah digunakan</strong>
          </span>
      @enderror
    </div>
    <div class="form-group"><label class="text-normal text-dark">Alamat Email</label>
      <input type="email" class="form-control" name="email" required value="{{ old('email') }}" placeholder="nama@email.com">
      @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>Email telah terdaftar</strong>
          </span>
      @enderror
      </div>
    <div class="form-group"><label class="text-normal text-dark">Password</label>
      <input type="password" class="form-control" name="password" required placeholder="Password" onchange='minim();'>
      <span class="invalid-feedback" role="alert">
          <strong>Minimal 8 karakter</strong>
      </span>
    </div>
    <div class="form-group"><label class="text-normal text-dark">Konfirmasi Password</label>
      <input type="password" class="form-control" required name="password_confirmation" placeholder="Konfirmasi password" onkeyup='check();'>
      <span class="invalid-feedback" role="alert">
          <strong>Password tidak sama</strong>
      </span>
    </div>
    <div class="form-group"><button class="btn btn-primary">Daftar</button></div>
    <p>Sudah punya akun? <a href="{{route('login')}}">Login</a> sekarang.</p>
  </form>
</div>
@endsection
