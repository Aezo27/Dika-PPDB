@extends('layouts.auth')

@section('content')
<div class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r" style="min-width:320px">
  <h4 class="fw-300 c-grey-900 mB-40">Login akun</h4>
  <form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="form-group"><label class="text-normal text-dark">Email</label>
      <input type="email" class="form-control {{session('error') ? 'is-invalid':''}}" name="email" required value="{{ old('email') }}" placeholder="nama@email.com">
      @if(session('error'))
          <span class="invalid-feedback" role="alert">
              <strong>Email tidak terdaftar</strong>
          </span>
      @endif
      </div>
    <div class="form-group"><label class="text-normal text-dark">Password</label>
      <input type="password" class="form-control" name="password" required placeholder="Password" onchange='minim();'>
      <span class="invalid-feedback" role="alert">
          <strong>Masukan password degan benar</strong>
      </span>
    </div>
    <div class="form-group">
      <div class="peers ai-c jc-sb fxw-nw">
        <div class="peer">
          <div class="checkbox checkbox-circle checkbox-info peers ai-c">
            <input type="checkbox" name="remember" id="remember" class="peer" {{ old('remember') ? 'checked' : '' }}>
              <label for="remember" class="peers peer-greed js-sb ai-c">
                <span class="peer peer-greed">Ingat saya</span>
              </label>
            </div>
        </div>
        <div class="peer"><button class="btn btn-primary">Login</button></div>
      </div>
    </div>
    <div class="peers ai-c jc-sb">
      <div class="peer">
        <p>Belum memiliki akun? <a href="{{route('register')}}">daftar</a> sekarang.</p>
      </div>
      <div class="peer"><a href="{{ route('password.request') }}">Lupa password</a></div>
    </div>
  </form>
</div>
@endsection
