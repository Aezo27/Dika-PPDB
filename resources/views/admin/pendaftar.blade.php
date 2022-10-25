@extends('layouts.admin')
@section('content')
  <div>
    @include('admin.sidebar')
    <div class="page-container">
      @include('admin.navbar')
      <main class="main-content bgc-grey-100">
        <div id="mainContent">
          <div class="container-fluid">
            <h4 class="c-grey-900 mT-10 mB-30">Data Pendaftar</h4>
            <div class="row">
              <div class="col-md-12">
                <div class="bgc-white bd bdrs-3 p-20 mB-20">
                  <table id="pendaftarTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat Lengkap</th>
                        <th>Jarak Tempuh (KM)</th>
                        <th>Asal Sekolah</th>
                        <th>Tanggal Mendaftar</th>
                        <th class="disabled-sorting text-right">Actions</th>
                      </tr>
                    </thead>
                    <tbody>

                    </tbody>
                  </table>
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
