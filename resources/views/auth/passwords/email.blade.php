@extends('layouts.auth')

@section('content')
<div class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r" style="min-width:320px">
  <h4 class="fw-300 c-grey-900 mB-40">Lupa Password</h4>
  @if (session('status'))
      <div class="alert alert-success" role="alert">
          Email reset password telah dikirim
      </div>
  @endif
  <form method="POST" action="{{ route('password.email') }}">
    @csrf
    <div class="form-group"><label class="text-normal text-dark">Email</label>
      <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" required value="{{ old('email') }}" placeholder="nama@email.com">
      @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>Email tidak terdaftar</strong>
          </span>
      @enderror
      </div>
      <div class="peers ai-c jc-sb">
        <div class="peer">
          <button class="btn btn-primary">Kirim</button>
        </div>
        <div class="peer"><a href="{{ route('login') }}">Login</a></div>
      </div>
  </form>
</div>
@endsection
