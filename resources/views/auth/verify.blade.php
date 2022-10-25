@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Verivikasi alamat email') }}</div>

          <div class="card-body">
            @if (session('resent'))
              <div class="alert alert-success" role="alert">
                {{ __('Link verivikasi yang baru telah dikirimkan ke alamat email anda.') }}
              </div>
            @endif

            {{ __('Sebelum melanjutkan silahkan cek email anda untuk mendapatkan link verifikasi.') }}
            {{ __('Jika belum menerima link verifikasi silahkan klik link') }},
            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
              @csrf
              <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('proses verifikasi link baru') }}</button>.
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
