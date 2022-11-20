@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      @if ($setting->status_penerimaan == '1')
        <div class="col-md-8">
          <div class="card">
            <div class="card">
              <div class="card-header daftar">
                <div class="overlay"></div>
                <img src="{{ asset('assets/static/images/logo.png') }}" alt="logo-sekolah">
                <h1>SMP Negeri 1 Cikarang Utara</h1>
              </div>
              <div class="card-body text-center">
                <h1 style="font-weight: 700">SELAMAT ANDA DITERIMA</h1>
                <p>Silahkan ke kantor SMP Negeri 1 Cikarang Utara untuk menyelesaikan pendaftaran.</p>
              </div>
            </div>
          </div>
        </div>
      @elseif ($setting->status_pendaftaran == '0')
        <div class="col-md-8">
          <div class="card">
            <div class="card">
              <div class="card-header daftar">
                <div class="overlay"></div>
                <img src="{{ asset('assets/static/images/logo.png') }}" alt="logo-sekolah">
                <h1>SMP Negeri 1 Cikarang Utara</h1>
              </div>
              <div class="card-body text-center">
                <h1 style="font-weight: 700">PENDAFTARAN TELAH DITUTUP</h1>
                <p>Pengumuman penerimaan akan diumumkan pada tanggal {{ \Carbon\Carbon::parse($setting->tanggal_pengumuman)->isoFormat('D MMMM Y') }}</p>
              </div>
            </div>
          </div>
        </div>
      @elseif($setting->status_pendaftaran == '1' && $pendaftar >= $setting->kuota_pendaftar)
        <div class="col-md-8">
          <div class="card">
            <div class="card">
              <div class="card-header daftar">
                <div class="overlay"></div>
                <img src="{{ asset('assets/static/images/logo.png') }}" alt="logo-sekolah">
                <h1>SMP Negeri 1 Cikarang Utara</h1>
              </div>
              <div class="card-body text-center">
                <h1 style="font-weight: 700">PENDAFTAR TELAH MELAMPAUI KUOTA</h1>
                <p>Pengumuman penerimaan akan diumumkan pada tanggal {{ \Carbon\Carbon::parse($setting->tanggal_pengumuman)->isoFormat('D MMMM Y') }}</p>
              </div>
            </div>
          </div>
        </div>
      @else
        @if (isset($cek_daftar) && $cek_daftar->draft == 0)
          <div class="col-md-8">
            <div class="card">
              <div class="card-header daftar">
                <div class="overlay"></div>
                <img src="{{ asset('assets/static/images/logo.png') }}" alt="logo-sekolah">
                <h1>SMP Negeri 1 Cikarang Utara</h1>
              </div>
              <div class="card-body text-center">
                <h1 style="font-weight: 700">Terima kasih telah melakukan pendaftaran</h1>
                <p>Untuk informasi lebih lanjut akan dikirimkan melalui E-mail dan whatsapp.<br>Jika ada perubahan data silahkan edit <a href="{{ route('edit') }}">disini</a></p>
              </div>
            </div>
          </div>
        @else
          @include('form')
          @push('script')
            <script>
              setInterval(() => {
                console.log("Auto Save");
                $values = $(".regist-form").serialize();
                $.ajax({
                  url: "{{ route('add') }}/",
                  type: "post",
                  headers: {
                    "X-CSRF-TOKEN": $("[name='csrf-token']").attr("content")
                  },
                  data: $values,
                  success: function(response) {
                    console.log(response);
                  }
                });
              }, 60000);
            </script>
          @endpush
        @endif
      @endif
    </div>
  </div>
@endsection
