@extends('layouts.admin')
@section('content')
  <div>
    @include('admin.sidebar')
    <div class="page-container">
      @include('admin.navbar')
      <main class="main-content bgc-grey-100">
        <div id="mainContent">
          <div class="row gap-20 masonry pos-r">
            <div class="masonry-sizer col-md-6"></div>
            <div class="masonry-item w-100">
              <div class="row gap-20">
                <div class="col-md-4">
                  <div class="layers bd bgc-white p-20">
                    <div class="layer w-100 mB-10">
                      <h6 class="lh-1">Total User</h6>
                    </div>
                    <div class="layer w-100">
                      <div class="peers ai-sb fxw-nw">
                        <div class="peer peer-greed"><span id="sparklinedash"></span></div>
                        <div class="peer"><span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500">{{ $user }}</span></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="layers bd bgc-white p-20">
                    <div class="layer w-100 mB-10">
                      <h6 class="lh-1">Total Registrasi</h6>
                    </div>
                    <div class="layer w-100">
                      <div class="peers ai-sb fxw-nw">
                        <div class="peer peer-greed"><span id="sparklinedash2"></span></div>
                        <div class="peer"><span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-red-50 c-red-500">{{ $pendaftar }}</span></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="layers bd bgc-white p-20">
                    <div class="layer w-100 mB-10">
                      <h6 class="lh-1">Kuota</h6>
                    </div>
                    <div class="layer w-100">
                      <div class="peers ai-sb fxw-nw">
                        <div class="peer peer-greed"><span id="sparklinedash3"></span></div>
                        <div class="peer"><span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-purple-50 c-purple-500">Sisa {{$kuota}}</span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="masonry-item w-100">
              <div class="bd bgc-white">
                <div class="layers">
                  <div class="layer w-100 p-20">
                    <h6 class="lh-1">Pendaftar Terbaru</h6>
                  </div>
                  <div class="layer w-100">
                    <div class="bgc-light-blue-500 c-white p-20">
                      <div class="peers ai-c jc-sb gap-40">
                        <div class="peer peer-greed">
                          <h5>
                            {{ \Carbon\Carbon::now()->translatedFormat('l, j F Y') }}
                          </h5>
                        </div>
                      </div>
                    </div>
                    <div class="table-responsive p-20">
                      <table class="table">
                        <thead>
                          <tr>
                            <th class="bdwT-0">Name</th>
                            <th class="bdwT-0">Tanggal Mendaftar</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($datas as $data)
                            <tr>
                              <td class="fw-600">{{ $data->nama }}</td>
                              <td>{{ $data->created_at }}</td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="ta-c bdT w-100 p-20"><a href="{{ route('pendaftar') }}">Lihat semua pendaftar</a></div>
              </div>
            </div>
          </div>
        </div>
      </main>
      <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600">
        <span>Copyright ©
          <script>
            document.write(new Date().getFullYear());
          </script> Designed by <a href="https://colorlib.com" target="_blank" title="Colorlib">Colorlib</a>. All rights reserved.
        </span>
      </footer>
    </div>
  </div>
@endsection
