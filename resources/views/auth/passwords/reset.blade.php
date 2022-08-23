@extends('layouts.auth')

@section('content')
<div class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r" style="min-width:320px">
  <h4 class="fw-300 c-grey-900 mB-40">Reset Password</h4>
  <form method="POST" action="{{ route('password.update') }}">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">
    <div class="form-group"><label class="text-normal text-dark">Email</label>
      <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" required value="{{ $email ?? old('email') }}" readonly>
      @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>Email tidak terdaftar</strong>
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
    <button class="btn btn-primary">Kirim</button>
  </form>
</div>
@endsection
