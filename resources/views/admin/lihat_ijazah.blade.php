<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>lihat Ijazah</title>
  <style>
    .row {
      display: flex;
      align-items: flex-start;
      justify-content: flex-start;
      gap: 32px;
      width: 100%;
    }

    .col {
      width: 50%;
    }

    .col img {
      width: 100%;
    }
  </style>
</head>

<body>
  <div class="row">
    <div class="col">
      <h2>Ijazah Depan</h2>
      <img src="{{ asset('storage') . '/' . $data->ijazah_depan }}" alt="">
    </div>
    <div class="col">
      <h2>Ijazah Belakang</h2>
      <img src="{{ asset('storage') . '/' . $data->ijazah_belakang }}" alt="">
    </div>
  </div>
</body>

</html>
