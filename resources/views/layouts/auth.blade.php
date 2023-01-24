<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <link rel="shortcut icon" href="{{ asset('assets/static/images/logo.png') }}" type="image/png">
  <title>PPDB SMPN 1 Cikarang Utara</title>
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
  <div class="peers ai-s fxw-nw h-100vh">
    <div class="peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv">
      <div class="bg-vid-wrapper">
        <video autoplay muted loop id="bg-vid">
          <source src="{{ asset('storage/bgAuth.mp4') }}" type="video/mp4">
        </video>
      </div>
      <div class="overlay"></div>
      <div class="pos-a centerXY" style="z-index: 10">
        <div class="pos-r" style="width:180px;height:180px;margin:0 auto;">
          <img class="pos-a centerXY" style="max-width: 150px;" src="{{ asset('assets/static/images/logo.png') }}" alt="">
        </div>
        <h1 class="smp">SMP NEGERI 1 CIKARANG UTARA</h1>
      </div>
    </div>
    @yield('content')
  </div>
  <script type="text/javascript" src="{{ asset('assets/vendor.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/bundle.js') }}"></script>
  <link href="{{ asset('assets/custom.css') }}" rel="stylesheet">
  <script>
    const pass = document.querySelector('input[name="password"]');
    const confr = document.querySelector('input[name="password_confirmation"]');
    var check = () => {
      if (pass.value != confr.value) {
        confr.classList.add('is-invalid');
      } else {
        confr.classList.remove('is-invalid');
      }
    }
    var minim = () => {
      if (pass.value.length < 8) {
        pass.classList.add('is-invalid');
      } else {
        pass.classList.remove('is-invalid');
      }
    }
  </script>
  <script>
    window.addEventListener('load', () => {
      const loader = document.getElementById('loader');
      setTimeout(() => {
        loader.classList.add('fadeOut');
      }, 300);
    });
  </script>
</body>

</html>
