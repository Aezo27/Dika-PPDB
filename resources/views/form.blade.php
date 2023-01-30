<div class="col-md-8">
  <div class="card">
    <div class="card-header daftar">
      <div class="overlay"></div>
      <img src="{{ asset('assets/static/images/logo.png') }}" alt="logo-sekolah">
      <h1>Formulir Penerimaan Peserta Didik Baru Tahun 2022</h1>
      {{-- <img src="https://smpn1cikarangselatan.sch.id/wp-content/uploads/2021/12/Welcome-.jpg" alt=""> --}}
    </div>
    <div class="card-body">
      <form method="POST" action="{{ route('add') }}" enctype='multipart/form-data' class="regist-form">
        <input type="hidden" name="id" value="{{ $id }}">
        @csrf
        <div class="form-part">
          <h2 class="mb-0">Registrasi Peserta Didik</h2>
          <div class="form-group">
            <label class="text-normal text-dark" for="jenis">Jenis Pendaftaran<span class="text-danger">*</span></label>
            <select class="form-select w-full" name="jenis" id="jenis" required>
              <option value="" hidden>Pilih jenis pendaftaran</option>
              <option value="0" {{ $data->jenis_pendaftaran == 0 ? 'selected' : '' }}>Baru</option>
              <option value="1" {{ $data->jenis_pendaftaran == 1 ? 'selected' : '' }}>Pindahan</option>
            </select>
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="asal_sekolah">Nama Asal Sekolah</label>
            <input type="text" class="form-control" name="asal_sekolah" id="asal_sekolah" value="{{ $data->asal_sekolah }}" placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="alamat_sekolah">Alamat Asal Sekolah</label>
            <input type="text" class="form-control" name="alamat_sekolah" id="alamat_sekolah" value="{{ $data->alamat_sekolah }}" placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="no_un">Nomor Peserta Ujian Nasional Sebelumnya</label>
            <input type="text" class="form-control" name="no_un" id="no_un" value="{{ $data->no_un }}" placeholder="Nomor Peserta Ujian Nasional Sebelumnya">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="paud">Apakah Pernah PAUD</label>
            <select class="form-select w-full" name="paud" id="paud">
              <option value="" hidden>Pilih:</option>
              <option value="0" {{ $data->paud == 0 ? 'selected' : '' }}>Ya</option>
              <option value="1" {{ $data->paud == 1 ? 'selected' : '' }}>Tidak</option>
            </select>
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="tk">Apakah Pernah TK</label>
            <select class="form-select w-full" name="tk" id="tk">
              <option value="" hidden>Pilih:</option>
              <option value="0" {{ $data->tk == 0 ? 'selected' : '' }}>Ya</option>
              <option value="1" {{ $data->tk == 1 ? 'selected' : '' }}>Tidak</option>
            </select>
          </div>
          {{-- <div class="form-group">
            <label class="text-normal text-dark" for="no_skhu">Nomor Seri SKHUN Sebelumnya</label>
          </div>
          <input type="text" class="form-control" name="no_skhu" id="no_skhu" value="{{ $data->no_skhu }}" placeholder="Nomor Surat Keterangan Hasil Ujian Nasional"> --}}
          <div class="form-group">
            <label class="text-normal text-dark" for="no_ijazah">Nomor Seri Ijazah Sebelumnya</label>
          </div>
          <input type="text" class="form-control" name="no_ijazah" id="no_ijazah" value="{{ $data->no_ijazah }}" placeholder="Nomor Seri Ijazah Sebelumnya">
          <div class="form-group">
            <label class="text-normal text-dark" for="hobi">Hobi</label>
          </div>
          <input type="text" class="form-control" name="hobi" id="hobi" value="{{ $data->hobi }}" placeholder="">
          <div class="form-group">
            <label class="text-normal text-dark" for="cita_cita">Cita-cita</label>
          </div>
          <input type="text" class="form-control" name="cita_cita" id="cita_cita" value="{{ $data->cita_cita }}" placeholder="">
        </div>
        <div class="form-part">
          <h2 class="mb-0">Data Pribadi</h2>
          <div class="form-group">
            <label class="text-normal text-dark" for="nama">Nama Lengkap<span class="text-danger">*</span></label>
          </div>
          <input type="text" class="form-control" name="nama" id="nama" required value="{{ $data->nama }}" placeholder="Nama Lengkap">
          <div class="form-group">
            <label class="text-normal text-dark" for="jk">Jenis Kelamin<span class="text-danger">*</span></label>
            <select class="form-select w-full" name="jk" id="jk" required>
              <option value="" hidden>Pilih jenis kelamin</option>
              <option value="0" {{ $data->jenis_kelamin == 0 ? 'selected' : '' }}>Laki-laki</option>
              <option value="1" {{ $data->jenis_kelamin == 1 ? 'selected' : '' }}>Perempuan</option>
            </select>
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="nisn">NISN<span class="text-danger">*</span></label>
          </div>
          <input type="text" class="form-control" name="nisn" id="nisn" required value="{{ $data->nisn }}" placeholder="Nomor Induk Siswa Nasional">
          <div class="form-group">
            <label class="text-normal text-dark" for="nik">NIK<span class="text-danger">*</span></label>
          </div>
          <input type="text" class="form-control" name="nik" id="nik" required value="{{ $data->nik }}" placeholder="Nomor Induk Kependudukan">
          <div class="form-group">
            <label class="text-normal text-dark" for="tempat_lahir">Tempat Lahir<span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" required value="{{ $data->tempat_lahir }}" placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="tanggal_lahir">Tanggal Lahir<span class="text-danger">*</span></label>
            <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" data-provide="datepicker" required value="{{ $data->tanggal_lahir }}" placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="agama">Agama<span class="text-danger">*</span></label>
            <select name="agama" class="form-select w-full" id="agama">
              <option value="" hidden>Pilih :</option>
              <option value="Islam" {{ $data->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
              <option value="Budha" {{ $data->agama == 'Budha' ? 'selected' : '' }}>Budha</option>
              <option value="Hindu" {{ $data->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
              <option value="Katholik" {{ $data->agama == 'Katholik' ? 'selected' : '' }}>Katholik</option>
              <option value="Khong Hu Chu" {{ $data->agama == 'Khong Hu Chu' ? 'selected' : '' }}>Khong Hu Chu</option>
              <option value="Kristen / Protestan" {{ $data->agama == 'Kristen / protestan' ? 'selected' : '' }}>Kristen / Protestan</option>
              <option value="Lainnya" {{ $data->agama == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
            </select>
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="kebutuhan_khusus_anak">Kebutuhan Khusus</label>
            <select name="kebutuhan_khusus_anak" class="form-select w-full" id="kebutuhan_khusus_anak">
              <option value="Tidak" {{ $data->kebutuhan_khusus == 'Tidak' ? 'selected' : '' }}>Tidak</option>
              <option value="Autis" {{ $data->kebutuhan_khusus == 'Autis' ? 'selected' : '' }}>Autis</option>
              <option value="Bakat Istimewa" {{ $data->kebutuhan_khusus == 'Bakat Istimewa' ? 'selected' : '' }}>Bakat Istimewa</option>
              <option value="Cerdas Istimewa" {{ $data->kebutuhan_khusus == 'Cerdas Istimewa' ? 'selected' : '' }}>Cerdas Istimewa</option>
              <option value="Down Sindrome" {{ $data->kebutuhan_khusus == 'Down Sindrome' ? 'selected' : '' }}>Down Sindrome</option>
              <option value="Hiper aktif" {{ $data->kebutuhan_khusus == 'Hiper aktif' ? 'selected' : '' }}>Hiper aktif</option>
              <option value="Indigo" {{ $data->kebutuhan_khusus == 'Indigo' ? 'selected' : '' }}>Indigo</option>
              <option value="Kesulitan Belajar" {{ $data->kebutuhan_khusus == '' ? 'selected' : '' }}>Kesulitan Belajar</option>
              <option value="Narkoba" {{ $data->kebutuhan_khusus == 'Kesulitan Belajar' ? 'selected' : '' }}>Narkoba</option>
              <option value="Tuna Daksa Ringan" {{ $data->kebutuhan_khusus == 'Tuna Daksa Ringan' ? 'selected' : '' }}>Tuna Daksa Ringan</option>
              <option value="Tuna Daksa Sedang" {{ $data->kebutuhan_khusus == 'Tuna Daksa Sedang' ? 'selected' : '' }}>Tuna Daksa Sedang</option>
              <option value="Tuna Ganda" {{ $data->kebutuhan_khusus == 'Tuna Ganda' ? 'selected' : '' }}>Tuna Ganda</option>
              <option value="Tuna Grahita Ringan" {{ $data->kebutuhan_khusus == 'Tuna Grahita Ringan' ? 'selected' : '' }}>Tuna Grahita Ringan</option>
              <option value="Tuna Grahita Sedang" {{ $data->kebutuhan_khusus == 'Tuna Grahita Sedang' ? 'selected' : '' }}>Tuna Grahita Sedang</option>
              <option value="Tuna Laras" {{ $data->kebutuhan_khusus == 'Tuna Laras' ? 'selected' : '' }}>Tuna Laras</option>
              <option value="Tuna Netra" {{ $data->kebutuhan_khusus == 'Tuna Netra' ? 'selected' : '' }}>Tuna Netra</option>
              <option value="Tuna Rungu" {{ $data->kebutuhan_khusus == 'Tuna Rungu' ? 'selected' : '' }}>Tuna Rungu</option>
              <option value="Tuna Wicara" {{ $data->kebutuhan_khusus == 'Tuna Wicara' ? 'selected' : '' }}>Tuna Wicara</option>
              <option value="Lainnya" {{ $data->kebutuhan_khusus == '' ? 'selected' : 'Lainnya' }}>Lainnya</option>
            </select>
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="alamat">Alamat Lengkap<span class="text-danger">*</span></label>
            <textarea class="form-control" name="alamat" id="alamat" rows="5" required placeholder="">{{ $data->alamat_lengkap }}</textarea>
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="rt">RT</label>
            <input type="text" class="form-control" name="rt" id="rt" value="{{ $data->rt }}" placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="rw">RW</label>
            <input type="text" class="form-control" name="rw" id="rw" value="{{ $data->rw }}" placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="dusun">Dusun</label>
            <input type="text" class="form-control" name="dusun" id="dusun" value="{{ $data->dusun }}" placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="kelurahan">Kelurahan<span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="kelurahan" id="kelurahan" required value="{{ $data->kelurahan }}" placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="kecamatan">Kecamatan<span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="kecamatan" id="kecamatan" required value="{{ $data->kecamatan }}" placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="kabupaten">Kabupaten<span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="kabupaten" id="kabupaten" required value="{{ $data->kabupaten }}" placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="pos">Kode Pos</label>
            <input type="number" class="form-control" name="pos" id="pos" value="{{ $data->kodepos }}" placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="tempat_tinggal">Tempat Tinggal</label>
            <select name="tempat_tinggal" class="form-select w-full" id="tempat_tinggal">
              <option value="" hidden>Pilih :</option>
              <option value="Asrama" {{ $data->tempat_tinggal == 'Asrama' ? 'selected' : '' }}>Asrama</option>
              <option value="Bersama orang tua" {{ $data->tempat_tinggal == 'Bersama orang tua' ? 'selected' : '' }}>Bersama orang tua</option>
              <option value="Kos" {{ $data->tempat_tinggal == 'Kos' ? 'selected' : '' }}>Kos</option>
              <option value="Wali" {{ $data->tempat_tinggal == '' ? 'selected' : '' }}>Wali</option>
              <option value="Panti Asuhan" {{ $data->tempat_tinggal == 'Panti Asuhan' ? 'selected' : '' }}>Panti Asuhan</option>
              <option value="Lainnya" {{ $data->tempat_tinggal == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
            </select>
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="transportasi">Transportasi</label>
            <select name="transportasi" class="form-select w-full" id="transportasi">
              <option value="" hidden>Pilih :</option>
              <option value="Andong / Bendi / Sado / Dokar / Delman / Becak" {{ $data->transportasi == 'Andong / Bendi / Sado / Dokar / Delman / Becak' ? 'selected' : '' }}>Andong / Bendi / Sado / Dokar / Delman / Becak</option>
              <option value="Jalan kaki" {{ $data->transportasi == 'Jalan kaki' ? 'selected' : '' }}>Jalan kaki</option>
              <option value="Jemputan Sekolah" {{ $data->transportasi == 'Jemputan Sekolah' ? 'selected' : '' }}>Jemputan Sekolah</option>
              <option value="Kendaraan pribadi" {{ $data->transportasi == 'Kendaraan pribadi' ? 'selected' : '' }}>Kendaraan pribadi</option>
              <option value="Kendaraan Umum / angkot / Pete-pete" {{ $data->transportasi == 'Kendaraan Umum / angkot / Pete-pete' ? 'selected' : '' }}>Kendaraan Umum / Angkot</option>
              <option value="Kereta Api" {{ $data->transportasi == 'Kereta Api' ? 'selected' : '' }}>Kereta Api</option>
              <option value="Ojek" {{ $data->transportasi == 'Ojek' ? 'selected' : '' }}>Ojek</option>
              <option value="Perahu penyebrangan / Rakit / Getek" {{ $data->transportasi == 'Perahu penyebrangan / Rakit / Getek' ? 'selected' : '' }}>Perahu penyebrangan / Rakit / Getek</option>
              <option value="Lainnya" {{ $data->transportasi == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
            </select>
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="wa">Nomor Whatsapp<span class="text-danger">*</span></label>
            <input type="tel" class="form-control" name="wa" id="wa" value="{{ $data->no_wa }}" placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="email">Email Pribadi</label>
            <input type="email" style="text-transform: none" class="form-control" name="email" id="email" value="{{ $data->email }}" placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="sktm">No. Surat Keterangan Tidak Mampu (SKTM)</label>
            <input type="text" class="form-control" name="sktm" id="sktm" value="{{ $data->no_sktm }}" placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="kks">No. Kartu Keluarga Sejahtera (KKS)</label>
            <input type="text" class="form-control" name="kks" id="kks" value="{{ $data->no_kks }}" placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="kps">No. Kartu Pra Sejahtera (KPS)</label>
            <input type="text" class="form-control" name="kps" id="kps" value="{{ $data->no_kps }}" placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="kis">No. Kartu Indonesia Sehat (KIS)</label>
            <input type="text" class="form-control" name="kis" id="kis" value="{{ $data->no_kis }}" placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="wn">Kewarganeraraan<span class="text-danger">*</span></label>
            <select name="wn" class="form-select w-full" required id="wn">
              <option value="" hidden>Pilih :</option>
              <option value="0" {{ $data->warga_negara == 0 ? 'selected' : '' }}>Warga Negara Indonesia</option>
              <option value="1" {{ $data->warga_negara == 1 ? 'selected' : '' }}>Warga Negara Asing</option>
            </select>
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="negara">Nama Negara</label>
            <input type="tel" class="form-control" name="negara" id="negara" value="{{ $data->negara_asal }}" placeholder="Nama Negara Asal">
          </div>
          @if ($data->foto != null)
            <div class="form-group">
              <label class="text-normal text-dark" for="foto">Foto Sebelumnya</label>
              <div class="photo">
                <img src="{{ asset('storage') . '/' . $data->foto }}" alt="">
              </div>
            </div>
          @endif
          <div class="form-group">
            <label class="text-normal text-dark" for="foto">Foto<span class="text-danger">*</span></label>
            @if (isset($cek_daftar) && $cek_daftar->draft == 0)
              <input type="file" style="text-transform: none" class="form-control" name="foto" id="foto">
            @else
              <input type="file" style="text-transform: none" class="form-control" required name="foto" id="foto">
            @endif
          </div>
          @if ($data->ijazah_depan != null)
            <div class="form-group">
              <label class="text-normal text-dark" for="foto">Ijazah Depan Sebelumnya</label>
              <div class="photo">
                <img src="{{ asset('storage') . '/' . $data->ijazah_depan }}" alt="">
              </div>
            </div>
          @endif
          <div class="form-group">
            <label class="text-normal text-dark" for="ijazah_depan">Ijazah Depan<span class="text-danger">*</span></label>
            @if (isset($cek_daftar) && $cek_daftar->draft == 0)
              <input type="file" style="text-transform: none" class="form-control" name="ijazah_depan" id="ijazah_depan">
            @else
              <input type="file" style="text-transform: none" class="form-control" required name="ijazah_depan" id="ijazah_depan">
            @endif
          </div>
          @if ($data->ijazah_belakang != null)
            <div class="form-group">
              <label class="text-normal text-dark" for="foto">Ijazah Belakang Sebelumnya</label>
              <div class="photo">
                <img src="{{ asset('storage') . '/' . $data->ijazah_belakang }}" alt="">
              </div>
            </div>
          @endif
          <div class="form-group">
            <label class="text-normal text-dark" for="ijazah_belakang">Ijazah Belakang<span class="text-danger">*</span></label>
            @if (isset($cek_daftar) && $cek_daftar->draft == 0)
              <input type="file" style="text-transform: none" class="form-control" name="ijazah_belakang" id="ijazah_belakang">
            @else
              <input type="file" style="text-transform: none" class="form-control" required name="ijazah_belakang" id="ijazah_belakang">
            @endif
          </div>
        </div>
        <div class="form-part">
          <h2 class="mb-0">Data Ayah Kandung</h2>
          <div class="form-group">
            <label class="text-normal text-dark" for="nama_ayah">Nama Ayah Kandung<span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="nama_ayah" id="nama_ayah" value="{{ $data->nama_ayah }}" required placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="lahir_ayah">Tahun Lahir Ayah Kandung</label>
            <input type="text" class="form-control" name="lahir_ayah" id="lahir_ayah" value="{{ $data->tahun_lahir_ayah }}" placeholder="Tahun Lahir Ayah Kandung. contoh : 1965">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="pendidikan_ayah">Pendidikan</label>
            <select name="pendidikan_ayah" class="form-select w-full" id="pendidikan_ayah">
              <option value="" hidden>Pilih :</option>
              <option value="S3" {{ $data->pendidikan_ayah == 'S3' ? 'selected' : '' }}>S3</option>
              <option value="S2" {{ $data->pendidikan_ayah == 'S2' ? 'selected' : '' }}>S2</option>
              <option value="D4/S1" {{ $data->pendidikan_ayah == 'D4/S1' ? 'selected' : '' }}>D4/S1</option>
              <option value="D3" {{ $data->pendidikan_ayah == 'D3' ? 'selected' : '' }}>D3</option>
              <option value="D2" {{ $data->pendidikan_ayah == 'D2' ? 'selected' : '' }}>D2</option>
              <option value="D1" {{ $data->pendidikan_ayah == 'D1' ? 'selected' : '' }}>D1</option>
              <option value="SMA Sederajat" {{ $data->pendidikan_ayah == 'SMA Sederajat' ? 'selected' : '' }}>SMA Sederajat</option>
              <option value="SMP Sederajat" {{ $data->pendidikan_ayah == 'SMP Sederajat' ? 'selected' : '' }}>SMP Sederajat</option>
              <option value="SD Sederajat" {{ $data->pendidikan_ayah == 'SD Sederajat' ? 'selected' : '' }}>SD Sederajat</option>
              <option value="Putus SD" {{ $data->pendidikan_ayah == 'Putus SD' ? 'selected' : '' }}>Putus SD</option>
              <option value="Tidak sekolah" {{ $data->pendidikan_ayah == 'Tidak sekolah' ? 'selected' : '' }}>Tidak sekolah</option>
            </select>
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="pekerjaan_ayah">Pekerjaan</label>
            <select name="pekerjaan_ayah" class="form-select w-full" id="pekerjaan_ayah">
              <option value="" hidden>Pilih :</option>
              <option value="Buruh" {{ $data->pekerjaan_ayah == 'Buruh' ? 'selected' : '' }}>Buruh</option>
              <option value="Karyawan Swasta" {{ $data->pekerjaan_ayah == 'Karyawan Swasta' ? 'selected' : '' }}>Karyawan Swasta</option>
              <option value="Nelayan" {{ $data->pekerjaan_ayah == 'Nelayan' ? 'selected' : '' }}>Nelayan</option>
              <option value="Pedagang Besar" {{ $data->pekerjaan_ayah == 'Pedagang Besar' ? 'selected' : '' }}>Pedagang Besar</option>
              <option value="Pedagang Kecil" {{ $data->pekerjaan_ayah == 'Pedagang Kecil' ? 'selected' : '' }}>Pedagang Kecil</option>
              <option value="Pensiunan" {{ $data->pekerjaan_ayah == 'Pensiunan' ? 'selected' : '' }}>Pensiunan</option>
              <option value="Petani" {{ $data->pekerjaan_ayah == 'Petani' ? 'selected' : '' }}>Petani</option>
              <option value="Peternak" {{ $data->pekerjaan_ayah == 'Peternak' ? 'selected' : '' }}>Peternak</option>
              <option value="PNS/TNI/POLRI" {{ $data->pekerjaan_ayah == 'PNS/TNI/POLRI' ? 'selected' : '' }}>PNS/TNI/POLRI</option>
              <option value="Wiraswasta" {{ $data->pekerjaan_ayah == 'Wiraswasta' ? 'selected' : '' }}>Wiraswasta</option>
              <option value="Wirausaha" {{ $data->pekerjaan_ayah == 'Wirausaha' ? 'selected' : '' }}>Wirausaha</option>
              <option value="Lain-lain" {{ $data->pekerjaan_ayah == 'Lain-lain' ? 'selected' : '' }}>Lain-lain</option>
              <option value="Tidak Bekerja" {{ $data->pekerjaan_ayah == 'Tidak Bekerja' ? 'selected' : '' }}>Tidak Bekerja</option>
            </select>
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="penghasilan_ayah">Penghasilan</label>
            <select name="penghasilan_ayah" class="form-select w-full" id="penghasilan_ayah">
              <option value="" selected="selected">Pilih :</option>
              <option value="Kurang dari 500,000" {{ $data->penghasilan_ayah == 'Kurang dari 500,000' ? 'selected' : '' }}>Kurang dari 500.000</option>
              <option value="500.000 - 999.999" {{ $data->penghasilan_ayah == '500.000 - 999.999' ? 'selected' : '' }}>500.000 - 999.999</option>
              <option value="1 Juta - 1.999.999" {{ $data->penghasilan_ayah == '1 Juta - 1.999.999' ? 'selected' : '' }}>1 Juta - 1.999.999</option>
              <option value="2 Juta - 4.999.999" {{ $data->penghasilan_ayah == '2 Juta - 4.999.999' ? 'selected' : '' }}>2 Juta - 4.999.999</option>
              <option value="5 Juta - 20 Juta" {{ $data->penghasilan_ayah == '5 Juta - 20 Juta' ? 'selected' : '' }}>5 Juta - 20 Juta</option>
              <option value="Lebih dari 20 Juta" {{ $data->penghasilan_ayah == 'Lebih dari 20 Juta' ? 'selected' : '' }}>Lebih dari 20 Juta</option>
            </select>
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="kebutuhan_khusus_ayah">Kebutuhan Khusus</label>
            <select name="kebutuhan_khusus_ayah" class="form-select w-full" id="kebutuhan_khusus_ayah">
              <option value="Tidak" {{ $data->kebutuhan_khusus_ayah == 'Tidak' ? 'selected' : '' }}>Tidak</option>
              <option value="Autis" {{ $data->kebutuhan_khusus_ayah == 'Autis' ? 'selected' : '' }}>Autis</option>
              <option value="Bakat Istimewa" {{ $data->kebutuhan_khusus_ayah == 'Bakat Istimewa' ? 'selected' : '' }}>Bakat Istimewa</option>
              <option value="Cerdas Istimewa" {{ $data->kebutuhan_khusus_ayah == 'Cerdas Istimewa' ? 'selected' : '' }}>Cerdas Istimewa</option>
              <option value="Down Sindrome" {{ $data->kebutuhan_khusus_ayah == 'Down Sindrome' ? 'selected' : '' }}>Down Sindrome</option>
              <option value="Hiper aktif" {{ $data->kebutuhan_khusus_ayah == 'Hiper aktif' ? 'selected' : '' }}>Hiper aktif</option>
              <option value="Indigo" {{ $data->kebutuhan_khusus_ayah == 'Indigo' ? 'selected' : '' }}>Indigo</option>
              <option value="Kesulitan Belajar" {{ $data->kebutuhan_khusus_ayah == '' ? 'selected' : '' }}>Kesulitan Belajar</option>
              <option value="Narkoba" {{ $data->kebutuhan_khusus_ayah == 'Kesulitan Belajar' ? 'selected' : '' }}>Narkoba</option>
              <option value="Tuna Daksa Ringan" {{ $data->kebutuhan_khusus_ayah == 'Tuna Daksa Ringan' ? 'selected' : '' }}>Tuna Daksa Ringan</option>
              <option value="Tuna Daksa Sedang" {{ $data->kebutuhan_khusus_ayah == 'Tuna Daksa Sedang' ? 'selected' : '' }}>Tuna Daksa Sedang</option>
              <option value="Tuna Ganda" {{ $data->kebutuhan_khusus_ayah == 'Tuna Ganda' ? 'selected' : '' }}>Tuna Ganda</option>
              <option value="Tuna Grahita Ringan" {{ $data->kebutuhan_khusus_ayah == 'Tuna Grahita Ringan' ? 'selected' : '' }}>Tuna Grahita Ringan</option>
              <option value="Tuna Grahita Sedang" {{ $data->kebutuhan_khusus_ayah == 'Tuna Grahita Sedang' ? 'selected' : '' }}>Tuna Grahita Sedang</option>
              <option value="Tuna Laras" {{ $data->kebutuhan_khusus_ayah == 'Tuna Laras' ? 'selected' : '' }}>Tuna Laras</option>
              <option value="Tuna Netra" {{ $data->kebutuhan_khusus_ayah == 'Tuna Netra' ? 'selected' : '' }}>Tuna Netra</option>
              <option value="Tuna Rungu" {{ $data->kebutuhan_khusus_ayah == 'Tuna Rungu' ? 'selected' : '' }}>Tuna Rungu</option>
              <option value="Tuna Wicara" {{ $data->kebutuhan_khusus_ayah == 'Tuna Wicara' ? 'selected' : '' }}>Tuna Wicara</option>
              <option value="Lainnya" {{ $data->kebutuhan_khusus_ayah == '' ? 'selected' : 'Lainnya' }}>Lainnya</option>
            </select>
          </div>
        </div>
        <div class="form-part">
          <h2 class="mb-0">Data Ibu Kandung</h2>
          <div class="form-group">
            <label class="text-normal text-dark" for="nama_ibu">Nama Ibu Kandung<span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="nama_ibu" id="nama_ibu" value="{{ $data->nama_ibu }}" required placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="lahir_ibu">Tahun Lahir Ibu Kandung</label>
            <input type="text" class="form-control" name="lahir_ibu" id="lahir_ibu" value="{{ $data->tahun_lahir_ibu }}" placeholder="Tahun Lahir Ibu Kandung. contoh : 1965">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="pendidikan_ibu">Pendidikan</label>
            <select name="pendidikan_ibu" class="form-select w-full" id="pendidikan_ibu">
              <option value="" hidden>Pilih :</option>
              <option value="S3" {{ $data->pendidikan_ibu == 'S3' ? 'selected' : '' }}>S3</option>
              <option value="S2" {{ $data->pendidikan_ibu == 'S2' ? 'selected' : '' }}>S2</option>
              <option value="D4/S1" {{ $data->pendidikan_ibu == 'D4/S1' ? 'selected' : '' }}>D4/S1</option>
              <option value="D3" {{ $data->pendidikan_ibu == 'D3' ? 'selected' : '' }}>D3</option>
              <option value="D2" {{ $data->pendidikan_ibu == 'D2' ? 'selected' : '' }}>D2</option>
              <option value="D1" {{ $data->pendidikan_ibu == 'D1' ? 'selected' : '' }}>D1</option>
              <option value="SMA Sederajat" {{ $data->pendidikan_ibu == 'SMA Sederajat' ? 'selected' : '' }}>SMA Sederajat</option>
              <option value="SMP Sederajat" {{ $data->pendidikan_ibu == 'SMP Sederajat' ? 'selected' : '' }}>SMP Sederajat</option>
              <option value="SD Sederajat" {{ $data->pendidikan_ibu == 'SD Sederajat' ? 'selected' : '' }}>SD Sederajat</option>
              <option value="Putus SD" {{ $data->pendidikan_ibu == 'Putus SD' ? 'selected' : '' }}>Putus SD</option>
              <option value="Tidak sekolah" {{ $data->pendidikan_ibu == 'Tidak sekolah' ? 'selected' : '' }}>Tidak sekolah</option>
            </select>
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="pekerjaan_ibu">Pekerjaan</label>
            <select name="pekerjaan_ibu" class="form-select w-full" id="pekerjaan_ibu">
              <option value="" hidden>Pilih :</option>
              <option value="Buruh" {{ $data->pekerjaan_ibu == 'Buruh' ? 'selected' : '' }}>Buruh</option>
              <option value="Karyawan Swasta" {{ $data->pekerjaan_ibu == 'Karyawan Swasta' ? 'selected' : '' }}>Karyawan Swasta</option>
              <option value="Nelayan" {{ $data->pekerjaan_ibu == 'Nelayan' ? 'selected' : '' }}>Nelayan</option>
              <option value="Pedagang Besar" {{ $data->pekerjaan_ibu == 'Pedagang Besar' ? 'selected' : '' }}>Pedagang Besar</option>
              <option value="Pedagang Kecil" {{ $data->pekerjaan_ibu == 'Pedagang Kecil' ? 'selected' : '' }}>Pedagang Kecil</option>
              <option value="Pensiunan" {{ $data->pekerjaan_ibu == 'Pensiunan' ? 'selected' : '' }}>Pensiunan</option>
              <option value="Petani" {{ $data->pekerjaan_ibu == 'Petani' ? 'selected' : '' }}>Petani</option>
              <option value="Peternak" {{ $data->pekerjaan_ibu == 'Peternak' ? 'selected' : '' }}>Peternak</option>
              <option value="PNS/TNI/POLRI" {{ $data->pekerjaan_ibu == 'PNS/TNI/POLRI' ? 'selected' : '' }}>PNS/TNI/POLRI</option>
              <option value="Wiraswasta" {{ $data->pekerjaan_ibu == 'Wiraswasta' ? 'selected' : '' }}>Wiraswasta</option>
              <option value="Wirausaha" {{ $data->pekerjaan_ibu == 'Wirausaha' ? 'selected' : '' }}>Wirausaha</option>
              <option value="Lain-lain" {{ $data->pekerjaan_ibu == 'Lain-lain' ? 'selected' : '' }}>Lain-lain</option>
              <option value="Tidak Bekerja" {{ $data->pekerjaan_ibu == 'Tidak Bekerja' ? 'selected' : '' }}>Tidak Bekerja</option>
            </select>
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="penghasilan_ibu">Penghasilan</label>
            <select name="penghasilan_ibu" class="form-select w-full" id="penghasilan_ibu">
              <option value="" selected="selected">Pilih :</option>
              <option value="Kurang dari 500,000" {{ $data->penghasilan_ibu == 'Kurang dari 500,000' ? 'selected' : '' }}>Kurang dari 500.000</option>
              <option value="500.000 - 999.999" {{ $data->penghasilan_ibu == '500.000 - 999.999' ? 'selected' : '' }}>500.000 - 999.999</option>
              <option value="1 Juta - 1.999.999" {{ $data->penghasilan_ibu == '1 Juta - 1.999.999' ? 'selected' : '' }}>1 Juta - 1.999.999</option>
              <option value="2 Juta - 4.999.999" {{ $data->penghasilan_ibu == '2 Juta - 4.999.999' ? 'selected' : '' }}>2 Juta - 4.999.999</option>
              <option value="5 Juta - 20 Juta" {{ $data->penghasilan_ibu == '5 Juta - 20 Juta' ? 'selected' : '' }}>5 Juta - 20 Juta</option>
              <option value="Lebih dari 20 Juta" {{ $data->penghasilan_ibu == 'Lebih dari 20 Juta' ? 'selected' : '' }}>Lebih dari 20 Juta</option>
            </select>
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="kebutuhan_khusus_ibu">Kebutuhan Khusus</label>
            <select name="kebutuhan_khusus_ibu" class="form-select w-full" id="kebutuhan_khusus_ibu">
              <option value="Tidak" {{ $data->kebutuhan_khusus == 'Tidak' ? 'selected' : '' }}>Tidak</option>
              <option value="Autis" {{ $data->kebutuhan_khusus == 'Autis' ? 'selected' : '' }}>Autis</option>
              <option value="Bakat Istimewa" {{ $data->kebutuhan_khusus == 'Bakat Istimewa' ? 'selected' : '' }}>Bakat Istimewa</option>
              <option value="Cerdas Istimewa" {{ $data->kebutuhan_khusus == 'Cerdas Istimewa' ? 'selected' : '' }}>Cerdas Istimewa</option>
              <option value="Down Sindrome" {{ $data->kebutuhan_khusus == 'Down Sindrome' ? 'selected' : '' }}>Down Sindrome</option>
              <option value="Hiper aktif" {{ $data->kebutuhan_khusus == 'Hiper aktif' ? 'selected' : '' }}>Hiper aktif</option>
              <option value="Indigo" {{ $data->kebutuhan_khusus == 'Indigo' ? 'selected' : '' }}>Indigo</option>
              <option value="Kesulitan Belajar" {{ $data->kebutuhan_khusus == '' ? 'selected' : '' }}>Kesulitan Belajar</option>
              <option value="Narkoba" {{ $data->kebutuhan_khusus == 'Kesulitan Belajar' ? 'selected' : '' }}>Narkoba</option>
              <option value="Tuna Daksa Ringan" {{ $data->kebutuhan_khusus == 'Tuna Daksa Ringan' ? 'selected' : '' }}>Tuna Daksa Ringan</option>
              <option value="Tuna Daksa Sedang" {{ $data->kebutuhan_khusus == 'Tuna Daksa Sedang' ? 'selected' : '' }}>Tuna Daksa Sedang</option>
              <option value="Tuna Ganda" {{ $data->kebutuhan_khusus == 'Tuna Ganda' ? 'selected' : '' }}>Tuna Ganda</option>
              <option value="Tuna Grahita Ringan" {{ $data->kebutuhan_khusus == 'Tuna Grahita Ringan' ? 'selected' : '' }}>Tuna Grahita Ringan</option>
              <option value="Tuna Grahita Sedang" {{ $data->kebutuhan_khusus == 'Tuna Grahita Sedang' ? 'selected' : '' }}>Tuna Grahita Sedang</option>
              <option value="Tuna Laras" {{ $data->kebutuhan_khusus == 'Tuna Laras' ? 'selected' : '' }}>Tuna Laras</option>
              <option value="Tuna Netra" {{ $data->kebutuhan_khusus == 'Tuna Netra' ? 'selected' : '' }}>Tuna Netra</option>
              <option value="Tuna Rungu" {{ $data->kebutuhan_khusus == 'Tuna Rungu' ? 'selected' : '' }}>Tuna Rungu</option>
              <option value="Tuna Wicara" {{ $data->kebutuhan_khusus == 'Tuna Wicara' ? 'selected' : '' }}>Tuna Wicara</option>
              <option value="Lainnya" {{ $data->kebutuhan_khusus == '' ? 'selected' : 'Lainnya' }}>Lainnya</option>
            </select>
          </div>
        </div>
        <div class="form-part">
          <h2 class="mb-0">Data Wali</h2>
          <div class="form-group">
            <label class="text-normal text-dark" for="nama_wali">Nama Wali</label>
            <input type="text" class="form-control" name="nama_wali" id="nama_wali" value="{{ $data->nama_wali }}" placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="lahir_wali">Tahun Lahir Wali</label>
            <input type="text" class="form-control" name="lahir_wali" id="lahir_wali" value="{{ $data->tahun_lahir_wali }}" placeholder="Tahun Lahir Wali. contoh : 1965">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="pendidikan_wali">Pendidikan</label>
            <select name="pendidikan_wali" class="form-select w-full" id="pendidikan_wali">
              <option value="" hidden>Pilih :</option>
              <option value="S3" {{ $data->pendidikan_wali == 'S3' ? 'selected' : '' }}>S3</option>
              <option value="S2" {{ $data->pendidikan_wali == 'S2' ? 'selected' : '' }}>S2</option>
              <option value="D4/S1" {{ $data->pendidikan_wali == 'D4/S1' ? 'selected' : '' }}>D4/S1</option>
              <option value="D3" {{ $data->pendidikan_wali == 'D3' ? 'selected' : '' }}>D3</option>
              <option value="D2" {{ $data->pendidikan_wali == 'D2' ? 'selected' : '' }}>D2</option>
              <option value="D1" {{ $data->pendidikan_wali == 'D1' ? 'selected' : '' }}>D1</option>
              <option value="SMA Sederajat" {{ $data->pendidikan_wali == 'SMA Sederajat' ? 'selected' : '' }}>SMA Sederajat</option>
              <option value="SMP Sederajat" {{ $data->pendidikan_wali == 'SMP Sederajat' ? 'selected' : '' }}>SMP Sederajat</option>
              <option value="SD Sederajat" {{ $data->pendidikan_wali == 'SD Sederajat' ? 'selected' : '' }}>SD Sederajat</option>
              <option value="Putus SD" {{ $data->pendidikan_wali == 'Putus SD' ? 'selected' : '' }}>Putus SD</option>
              <option value="Tidak sekolah" {{ $data->pendidikan_wali == 'Tidak sekolah' ? 'selected' : '' }}>Tidak sekolah</option>
            </select>
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="pekerjaan_wali">Pekerjaan</label>
            <select name="pekerjaan_wali" class="form-select w-full" id="pekerjaan_wali">
              <option value="" hidden>Pilih :</option>
              <option value="Buruh" {{ $data->pekerjaan_wali == 'Buruh' ? 'selected' : '' }}>Buruh</option>
              <option value="Karyawan Swasta" {{ $data->pekerjaan_wali == 'Karyawan Swasta' ? 'selected' : '' }}>Karyawan Swasta</option>
              <option value="Nelayan" {{ $data->pekerjaan_wali == 'Nelayan' ? 'selected' : '' }}>Nelayan</option>
              <option value="Pedagang Besar" {{ $data->pekerjaan_wali == 'Pedagang Besar' ? 'selected' : '' }}>Pedagang Besar</option>
              <option value="Pedagang Kecil" {{ $data->pekerjaan_wali == 'Pedagang Kecil' ? 'selected' : '' }}>Pedagang Kecil</option>
              <option value="Pensiunan" {{ $data->pekerjaan_wali == 'Pensiunan' ? 'selected' : '' }}>Pensiunan</option>
              <option value="Petani" {{ $data->pekerjaan_wali == 'Petani' ? 'selected' : '' }}>Petani</option>
              <option value="Peternak" {{ $data->pekerjaan_wali == 'Peternak' ? 'selected' : '' }}>Peternak</option>
              <option value="PNS/TNI/POLRI" {{ $data->pekerjaan_wali == 'PNS/TNI/POLRI' ? 'selected' : '' }}>PNS/TNI/POLRI</option>
              <option value="Wiraswasta" {{ $data->pekerjaan_wali == 'Wiraswasta' ? 'selected' : '' }}>Wiraswasta</option>
              <option value="Wirausaha" {{ $data->pekerjaan_wali == 'Wirausaha' ? 'selected' : '' }}>Wirausaha</option>
              <option value="Lain-lain" {{ $data->pekerjaan_wali == 'Lain-lain' ? 'selected' : '' }}>Lain-lain</option>
              <option value="Tidak Bekerja" {{ $data->pekerjaan_wali == 'Tidak Bekerja' ? 'selected' : '' }}>Tidak Bekerja</option>
            </select>
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="penghasilan_wali">Penghasilan</label>
            <select name="penghasilan_wali" class="form-select w-full" id="penghasilan_wali">
              <option value="" selected="selected">Pilih :</option>
              <option value="Kurang dari 500,000" {{ $data->penghasilan_wali == 'Kurang dari 500,000' ? 'selected' : '' }}>Kurang dari 500.000</option>
              <option value="500.000 - 999.999" {{ $data->penghasilan_wali == '500.000 - 999.999' ? 'selected' : '' }}>500.000 - 999.999</option>
              <option value="1 Juta - 1.999.999" {{ $data->penghasilan_wali == '1 Juta - 1.999.999' ? 'selected' : '' }}>1 Juta - 1.999.999</option>
              <option value="2 Juta - 4.999.999" {{ $data->penghasilan_wali == '2 Juta - 4.999.999' ? 'selected' : '' }}>2 Juta - 4.999.999</option>
              <option value="5 Juta - 20 Juta" {{ $data->penghasilan_wali == '5 Juta - 20 Juta' ? 'selected' : '' }}>5 Juta - 20 Juta</option>
              <option value="Lebih dari 20 Juta" {{ $data->penghasilan_wali == 'Lebih dari 20 Juta' ? 'selected' : '' }}>Lebih dari 20 Juta</option>
            </select>
          </div>
        </div>
        <div class="form-part">
          <h2 class="mb-0">Tabel Periodik</h2>
          <div class="form-group">
            <label class="text-normal text-dark" for="tb">Tinggi Badan (Cm)</label>
            <input type="number" class="form-control" min="0" name="tb" id="tb" value="{{ $data->tinggi }}" placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="bb">Berat Badan (Kg)</label>
            <input type="number" class="form-control" min="0" name="bb" id="bb" value="{{ $data->berat }}" placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="jarak">Jarak Tempat Tinggal ke Sekolah (Km)<span class="text-danger">*</span></label>
            <input type="number" class="form-control" min="0" name="jarak" id="jarak" value="{{ $data->jarak }}" required placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="waktu_tempuh">Waktu Tempuh ke Sekolah (Menit)</label>
            <input type="number" class="form-control" min="0" name="waktu_tempuh" id="waktu_tempuh" value="{{ $data->waktu_tempuh }}" placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="jml_saudara">Jumlah Saudara Kandung</label>
            <input type="number" class="form-control" min="0" name="jml_saudara" id="jml_saudara" value="{{ $data->saudara }}" placeholder="">
          </div>
        </div>
        @if (isset($cek_daftar) && $cek_daftar->draft == 0)
          <div class="form-group">
            <div class="peers ai-c jc-sb fxw-nw">
              <div class="peer"><button class="btn btn-primary">Simpan</button></div>
            </div>
          </div>
        @else
          <div class="form-part">
            <h2 class="mb-0">Pernyataan dan Keamanan<span class="text-danger">*</span></h2>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="pernyataan" required id="pernyataan">
              <label class="form-check-label" for="pernyataan">
                Saya menyatakan dengan sesungguhnya bahwa isian data dalam formulir ini adalah benar. Apabila ternyata data tersebut tidak benar / palsu, maka saya bersedia menerima sanksi sesuai ketentuan yang berlaku di SMP Negeri 1 Cikarang
                Utara
              </label>
            </div>
          </div>
          <div class="form-group">
            <div class="peers ai-c jc-sb fxw-nw">
              <div class="peer"><button class="btn btn-primary">Registrasi</button></div>
            </div>
          </div>
        @endif
      </form>
    </div>
  </div>
</div>
@push('script')
  <script>
    // Initialize and add the map
    let alamat;
    let kabupaten = document.querySelector("input[name=kabupaten]");
    kabupaten.addEventListener("focusout", function() {
      alamat = document.querySelector("input[name=kelurahan]").value + ', ' + document.querySelector("input[name=kecamatan]").value + ', ' + this.value;
      if (this.value !== "") {
        console.log(alamat);
        initMap();
      }
    });

    function initMap() {
      // Add Distance Matrix here
      const service = new google.maps.DistanceMatrixService(); // instantiate Distance Matrix service
      const matrixOptions = {
        origins: ["-6.254157508216003, 107.15667922397681"], // technician locations
        destinations: [alamat], // customer address
        travelMode: "DRIVING",
        unitSystem: google.maps.UnitSystem.IMPERIAL,
      };
      // Call Distance Matrix service
      service.getDistanceMatrix(matrixOptions, callback);

      // Callback function used to process Distance Matrix response
      function callback(response, status) {
        if (status !== "OK") {
          alert("Error with distance matrix");
          return;
        }
        let waktu = document.querySelector("input[name=waktu_tempuh]"),
          jarak = document.querySelector("input[name=jarak]");
        console.log(response.rows[0]["elements"][0]);
        if (response.rows[0]["elements"][0]["status"] === 'OK') {
          jarak.value = Math.floor(response.rows[0]["elements"][0]["distance"]["value"] / 1000);
          waktu.value = Math.floor(response.rows[0]["elements"][0]["duration"]["value"] / 60);
          jarak.readOnly = true;;
          waktu.readOnly = true;;
        }
      }
    }
  </script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYLYQua5g8CQ5IJx4ExpgkGJpTkMPq8WE"></script>
@endpush
