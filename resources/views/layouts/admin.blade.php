<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <link rel="shortcut icon" href="{{ asset('assets/static/images/logo.png') }}" type="image/png">
  <title>Dashboard PPDB SMPN 1 Cikarang Utara</title>
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
</head>

<body class="app">
  <div id="loader">
    <div class="spinner"></div>
  </div>
  <script>
    window.addEventListener('load', () => {
      const loader = document.getElementById('loader');
      setTimeout(() => {
        loader.classList.add('fadeOut');
      }, 300);
    });
  </script>
  @yield('content')
  <script type="text/javascript" src="{{ asset('assets/vendor.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/bundle.js') }}"></script>
</body>

</html>
