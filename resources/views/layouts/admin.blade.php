<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <link rel="shortcut icon" href="{{ asset('assets/static/images/logo.png') }}" type="image/png">
  <title>Dashboard PPDB SMPN 1 Cikarang Utara</title>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
  <style>
    #loader {
      transition: all .3s ease-in-out;
      opacity: 1;
      visibility: visible;
      position: fixed;
      height: 100vh;
      width: 100%;
      background: #fff;
      z-index: 90000
    }

    #loader.fadeOut {
      opacity: 0;
      visibility: hidden
    }

    .spinner {
      width: 40px;
      height: 40px;
      position: absolute;
      top: calc(50% - 20px);
      left: calc(50% - 20px);
      background-color: #333;
      border-radius: 100%;
      -webkit-animation: sk-scaleout 1s infinite ease-in-out;
      animation: sk-scaleout 1s infinite ease-in-out
    }

    .bg-vid-wrapper {
      position: absolute;
      width: 100%;
      height: 100%;
      z-index: 1;
    }

    #bg-vid {
      object-fit: cover;
      width: 100%;
      height: 100%;
      object-position: center;
    }

    .overlay {
      height: 100%;
      z-index: 9;
      background: rgb(0 0 0 / 37%);
      position: absolute;
      width: 100%;
    }

    .smp {
      color: #fff;
      text-align: center;
    }

    p {
      margin-bottom: 0 !important;
    }

    @-webkit-keyframes sk-scaleout {
      0% {
        -webkit-transform: scale(0)
      }

      100% {
        -webkit-transform: scale(1);
        opacity: 0
      }
    }

    @keyframes sk-scaleout {
      0% {
        -webkit-transform: scale(0);
        transform: scale(0)
      }

      100% {
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 0
      }
    }
  </style>
  <link href="{{ asset('assets/style.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/custom.css') }}" rel="stylesheet">
</head>

<body class="app">
  <div id="loader">
    <div class="spinner"></div>
  </div>
  @yield('content')
  <!-- Modal Delete -->
  <div class="modal fade" id="delete_confirmation" tabindex="-1" role="dialog" aria-labelledby="delete_confirmation" aria-hidden="true">
    <div class="modal-dialog modal-confirm">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin?</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">
          <p>Apakah anda ingin menghapus data ini? Data yang dihapus tidak dapat dikembalikan.</p>
        </div>
        <form action="@yield('delete')" id="delete-form" method="post">
          @csrf
          <input type=hidden id="id_delete" value="" name="id">
          <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-danger">Hapus</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="{{ asset('assets/vendor.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/bundle.js') }}"></script>
  <script>
    window.addEventListener('load', () => {
      const loader = document.getElementById('loader');
      setTimeout(() => {
        loader.classList.add('fadeOut');
      }, 300);
    });
  </script>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Sweet Alert 2 plugin -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.3/dist/sweetalert2.all.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.min.js" integrity="sha512-7rusk8kGPFynZWu26OKbTeI+QPoYchtxsmPeBqkHIEXJxeun4yJ4ISYe7C6sz9wdxeE1Gk3VxsIWgCZTc+vX3g==" crossorigin="anonymous" referrerpolicy="no-referrer">
</script>
@stack('script')
<script>
  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    showCloseButton: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  })
  $("#delete-form").on('submit', function(event) {
    event.preventDefault();
    $values = $(this).serialize();
    $id = $('#id_delete').val();
    $table = $('#pendaftarTable').DataTable();
    $form = $(this);
    $form.find('button[type="submit"]').attr('disabled', true);
    $.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url: $('#delete-form').attr('action'),
      type: "post",
      data: $values,
      success: function(response) {
        Toast.fire({
          icon: response['alert'],
          title: response['notif']
        });
        $('#delete_confirmation').modal('hide');
        if (response['alert'] == 'success') {
          $table.ajax.reload();
        }
        $form.find('button[type="submit"]').removeAttr('disabled');
      },
      error: function(jqXHR, textStatus, errorThrown) {
        console.log(textStatus, errorThrown);
      }
    });
  });
</script>
@if (session('notif'))
  <script>
    $(document).ready(function() {
      Toast.fire({
        icon: "{{ session('alert') }}",
        title: "{{ session('notif') }}"
      })
    });
  </script>
@endif

</html>
