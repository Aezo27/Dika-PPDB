@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      @if (isset($cek_daftar) && $cek_daftar->draft == 0)
        <div class="col-md-8">
          <div class="card">
            <div class="card-body text-center">
              <h1>Terima kasih telah melakukan pendaftaran</h1>
              <p>Untuk informasi lebih lanjut akan dikirimkan melalui E-mail dan whatsapp.<br>Jika ada perubahan data silahkan edit <a href="{{ route('edit') }}">disini</a></p>
            </div>
          </div>
        </div>
      @else
        @include('form')
      @endif
    </div>
  </div>
@endsection
