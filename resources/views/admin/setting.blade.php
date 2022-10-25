@extends('layouts.admin')
@section('content')
  <div>
    @include('admin.sidebar')
    <div class="page-container">
      @include('admin.navbar')
      <main class="main-content bgc-grey-100">
        <div id="mainContent">
          <div class="container-fluid">
            <h4 class="c-grey-900 mT-10 mB-30">Setting Website</h4>
            <div class="row">
              <div class="col-md-12">
                <div class="bgc-white bd bdrs-3 p-20 mB-20">
                  <form method="POST" action="{{ route('save_setting') }}" enctype='multipart/form-data' class="regist-form">
                    @csrf
                    <div class="form-row">
                      <div class="form-group col-md-6"><label class="fw-500">Tanggal Pengumuman Pendaftaran</label>
                        <div class="timepicker-input input-icon">
                          <div class="input-group">
                            <div class="input-group-addon bgc-white bd bdwR-0"><i class="ti-calendar"></i></div>
                            <input type="text" class="form-control bdc-grey-200 start-date" value="{{ \Carbon\Carbon::parse($setting->tanggal_pengumuman)->isoFormat('M/D/Y') }}" name="tanggal_pengumuman" data-provide="datepicker">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6"><label class="fw-500">Buka Pendaftaran</label>
                        <div class="switch">
                          <input type="radio" {{ $setting->status_pendaftaran == '1' ? 'checked' : '' }} class="switch-input" name="status_pendaftaran" value="1" id="dibuka" checked>
                          <label for="dibuka" class="switch-label switch-label-off">ON</label>
                          <input type="radio" {{ $setting->status_pendaftaran == '0' ? 'checked' : '' }} class="switch-input" name="status_pendaftaran" value="0" id="ditutup">
                          <label for="ditutup" class="switch-label switch-label-on">OFF</label>
                          <span class="switch-selection"></span>
                        </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6"><label class="fw-500">Kuota Pendaftar</label>
                        <input type="number" min="0" class="form-control bdc-grey-200" name="kuota_pendaftar" value="{{ $setting->kuota_pendaftar }}">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6"><label class="fw-500">Pengumuman Diterima</label>
                        <div class="switch">
                          <input type="radio" {{ $setting->status_penerimaan == '1' ? 'checked' : '' }} class="switch-input" name="status_penerimaan" value="1" id="hidup">
                          <label for="hidup" class="switch-label switch-label-off">ON</label>
                          <input type="radio" {{ $setting->status_penerimaan == '0' ? 'checked' : '' }} class="switch-input" name="status_penerimaan" value="0" id="mati">
                          <label for="mati" class="switch-label switch-label-on">OFF</label>
                          <span class="switch-selection"></span>
                        </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6"><label class="fw-500">Background Form</label>
                        <input type="file" accept="image/jpeg" class="form-control bdc-grey-200" name="bgForm">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6"><label class="fw-500">Background Auth</label>
                        <input type="file" accept="video/mp4" class="form-control bdc-grey-200" name="bgAuth">
                      </div>
                    </div>
                    <div class="form-row">
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </form>
                </div>
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
@push('script')
  <script type="text/javascript">
    $(document).ready(function() {
      $('#pendaftarTable').DataTable({
        // processing: true,
        serverSide: true,
        ajax: {
          url: "{{ route('get_pendaftar') }}",
        },
        columns: [{
            'data': null,
            'orderable': false,
            render: function(data, type, row, meta) {
              return meta.row + meta.settings._iDisplayStart + 1;
            }
          },
          {
            data: 'nama',
            name: 'nama'
          },
          {
            data: 'alamat_lengkap',
            name: 'alamat_lengkap'
          },
          {
            data: 'jarak',
            name: 'jarak'
          },
          {
            data: 'asal_sekolah',
            name: 'asal_sekolah'
          },
          {
            data: 'created_at',
            name: 'created_at'
          },
          {
            data: 'action',
            name: 'action',
            className: 'action-col',
            orderable: false
          }
        ],
        pagingType: 'full_numbers',
        lengthMenu: [
          [10, 25, 50, -1],
          [10, 25, 50, 'All']
        ],
        responsive: true,
        language: {
          search: '_INPUT_',
          searchPlaceholder: 'Search records',
        }
      });

      // var table = $('#datatables').DataTable();

      // Delete a record
      // table.on('click', '.remove', function(e) {
      //   $('#delete_confirmation').modal('show');
      //   $('#id_delete').val($(this).attr('id'))
      //   e.preventDefault();
      // });
    });
  </script>
@endpush
