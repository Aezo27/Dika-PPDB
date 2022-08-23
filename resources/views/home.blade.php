@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header daftar">
            <div class="overlay"></div>
            <h1>REGISTRASI PPDB SMP NEGERI 1 CIKARANG</h1>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('login') }}" class="regist-form">
              @csrf
              <div class="form-group">
                <label class="text-normal text-dark">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" required value="{{ old('nama') }}"
                  placeholder="Nama Lengkap">
              </div>
              <div class="form-group">
                <div class="peers ai-c jc-sb fxw-nw">
                  <div class="peer"><button class="btn btn-primary">Login</button></div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
