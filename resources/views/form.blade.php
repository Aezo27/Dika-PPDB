<div class="col-md-8">
  <div class="card">
    <div class="card-header daftar">
      <div class="overlay"></div>
      <img src="{{ asset('assets/static/images/logo.png') }}" alt="logo-sekolah">
      <h1>Formulir Penerimaan Peserta Didik Baru Tahun 2022</h1>
      {{-- <img src="https://smpn1cikarangselatan.sch.id/wp-content/uploads/2021/12/Welcome-.jpg" alt=""> --}}
    </div>
    <div class="card-body">
      <form method="POST" action="{{ route('login') }}" class="regist-form">
        @csrf
        <div class="form-part">
          <h2 class="mb-0">Registrasi Peserta Didik</h2>
          <div class="form-group">
            <label class="text-normal text-dark" for="jenis">Jenis Pendaftaran<span class="text-danger">*</span></label>
            <select class="form-select w-full" name="jenis" id="jenis" required>
              <option value="" hidden>Pilih jenis pendaftaran</option>
              <option value="baru">Baru</option>
              <option value="pindahan">Pindahan</option>
            </select>
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="nama_sekolah">Nama Asal Sekolah</label>
            <input type="text" class="form-control" name="nama_sekolah" id="nama_sekolah" value="{{ old('nama_sekolah') }}" placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="alamat_sekolah">Alamat Asal Sekolah</label>
            <input type="text" class="form-control" name="alamat_sekolah" id="alamat_sekolah" value="{{ old('alamat_sekolah') }}" placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="no_un">Nomor Peserta Ujian Nasional Sebelumnya</label>
            <input type="text" class="form-control" name="no_un" id="no_un" value="{{ old('no_un') }}" placeholder="Nomor Peserta Ujian Nasional Sebelumnya">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="paud">Apakah Pernah PAUD</label>
            <select class="form-select w-full" name="paud" id="paud">
              <option value="" hidden>Pilih:</option>
              <option value="ya">Ya</option>
              <option value="tidak">Tidak</option>
            </select>
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="tk">Apakah Pernah TK</label>
            <select class="form-select w-full" name="tk" id="tk">
              <option value="" hidden>Pilih:</option>
              <option value="ya">Ya</option>
              <option value="tidak">Tidak</option>
            </select>
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="no_skhu">Nomor Seri SKHUN Sebelumnya</label>
            <input type="text" class="form-control" name="no_skhu" id="no_skhu" value="{{ old('no_skhu') }}" placeholder="Nomor Surat Keterangan Hasil Ujian Nasional">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="no_ijazah">Nomor Seri Ijazah Sebelumnya</label>
            <input type="text" class="form-control" name="no_ijazah" id="no_ijazah" value="{{ old('no_ijazah') }}" placeholder="Nomor Seri Ijazah Sebelumnya">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="hobi">Hobi</label>
            <input type="text" class="form-control" name="hobi" id="hobi" value="{{ old('hobi') }}" placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="cita_cita">Cita-cita</label>
            <input type="text" class="form-control" name="cita_cita" id="cita_cita" value="{{ old('cita_cita') }}" placeholder="">
          </div>
        </div>
        <div class="form-part">
          <h2 class="mb-0">Data Pribadi</h2>
          <div class="form-group">
            <label class="text-normal text-dark" for="nama">Nama Lengkap<span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="nama" id="nama" required value="{{ old('nama') }}" placeholder="Nama Lengkap">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="jk">Jenis Kelamin<span class="text-danger">*</span></label>
            <select class="form-select w-full" name="jk" id="jk" required>
              <option value="" hidden>Pilih jenis kelamin</option>
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="nisn">NISN<span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="nisn" id="nisn" required value="{{ old('nisn') }}" placeholder="Nomor Induk Siswa Nasional">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="nik">NIK<span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="nik" id="nik" required value="{{ old('nik') }}" placeholder="Nomor Induk Kependudukan">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="tempat_lahir">Tempat Lahir<span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" required value="{{ old('tempat_lahir') }}" placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="tanggal_lahir">Tanggal Lahir<span class="text-danger">*</span></label>
            <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" required value="{{ old('tanggal_lahir') }}" placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="agama">Agama<span class="text-danger">*</span></label>
            <select name="agama" class="form-select w-full" id="agama">
              <option value="" hidden>Pilih :</option>
              <option value="Budha">Budha</option>
              <option value="Hindu">Hindu</option>
              <option value="Islam">Islam</option>
              <option value="Katholik">Katholik</option>
              <option value="Khong Hu Chu">Khong Hu Chu</option>
              <option value="Kristen / protestan">Kristen / Protestan</option>
              <option value="Lainnya">Lainnya</option>
            </select>
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="kebutuhan_khusus_anak">Kebutuhan Khusus</label>
            <select name="kebutuhan_khusus_anak" class="form-select w-full" id="kebutuhan_khusus_anak">
              <option value="Autis">Autis</option>
              <option value="Bakat Istimewa">Bakat Istimewa</option>
              <option value="Cerdas Istimewa">Cerdas Istimewa</option>
              <option value="Down Sindrome">Down Sindrome</option>
              <option value="Hiper aktif">Hiper aktif</option>
              <option value="Indigo">Indigo</option>
              <option value="Kesulitan Belajar">Kesulitan Belajar</option>
              <option value="Narkoba">Narkoba</option>
              <option value="Tuna Daksa Ringan">Tuna Daksa Ringan</option>
              <option value="Tuna Daksa Sedang">Tuna Daksa Sedang</option>
              <option value="Tuna Ganda">Tuna Ganda</option>
              <option value="Tuna Grahita Ringan">Tuna Grahita Ringan</option>
              <option value="Tuna Grahita Sedang">Tuna Grahita Sedang</option>
              <option value="Tuna Laras">Tuna Laras</option>
              <option value="Tuna Netra">Tuna Netra</option>
              <option value="Tuna Rungu">Tuna Rungu</option>
              <option value="Tuna Wicara">Tuna Wicara</option>
              <option value="Lainnya">Lainnya</option>
            </select>
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="alamat">Alamat Lengkap<span class="text-danger">*</span></label>
            <textarea class="form-control" name="alamat" id="alamat" rows="5" required placeholder="">{{ old('alamat') }}</textarea>
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="rt">RT</label>
            <input type="text" class="form-control" name="rt" id="rt" value="{{ old('rt') }}" placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="rw">RW</label>
            <input type="text" class="form-control" name="rw" id="rw" value="{{ old('rw') }}" placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="dusun">Dusun</label>
            <input type="text" class="form-control" name="dusun" id="dusun" value="{{ old('dusun') }}" placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="kelurahan">Keluarahan</label>
            <input type="text" class="form-control" name="kelurahan" id="kelurahan" value="{{ old('kelurahan') }}" placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="kecamatan">Kecamatan<span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="kecamatan" id="kecamatan" required value="{{ old('kecamatan') }}" placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="kabupaten">Kabupaten<span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="kabupaten" id="kabupaten" required value="{{ old('kabupaten') }}" placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="pos">Kode Pos</label>
            <input type="text" class="form-control" name="pos" id="pos" value="{{ old('pos') }}" placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="tempat_tinggal">Tempat Tinggal</label>
            <select name="tempat_tinggal" class="form-select w-full" id="tempat_tinggal">
              <option value="" hidden>Pilih :</option>
              <option value="Asrama">Asrama</option>
              <option value="Bersama orang tua">Bersama orang tua</option>
              <option value="Kos">Kos</option>
              <option value="Lainnya">Lainnya</option>
              <option value="Wali">Wali</option>
              <option value="Panti Asuhan">Panti Asuhan</option>
            </select>
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="transportasi">Transportasi</label>
            <select name="transportasi" class="form-select w-full" id="transportasi">
              <option value="" hidden>Pilih :</option>
              <option value="Andong / Bendi / Sado / Dokar / Delman / Becak">Andong / Bendi / Sado / Dokar / Delman / Becak</option>
              <option value="Jalan kaki">Jalan kaki</option>
              <option value="Jemputan Sekolah">Jemputan Sekolah</option>
              <option value="Kendaraan pribadi">Kendaraan pribadi</option>
              <option value="Kendaraan Umum / angkot / Pete-pete">Kendaraan Umum / angkot / Pete-pete</option>
              <option value="Kereta Api">Kereta Api</option>
              <option value="Lainnya">Lainnya</option>
              <option value="Ojek">Ojek</option>
              <option value="Perahu penyebrangan / Rakit / Getek">Perahu penyebrangan / Rakit / Getek</option>
            </select>
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="wa">Nomor Whatsapp</label>
            <input type="tel" class="form-control" name="wa" id="wa" value="{{ old('wa') }}" placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="email">Email Pribadi</label>
            <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="sktm">No. Surat Keterangan Tidak Mampu (SKTM)</label>
            <input type="text" class="form-control" name="sktm" id="sktm" value="{{ old('sktm') }}" placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="kks">No. Kartu Keluarga Sejahtera (KKS)</label>
            <input type="text" class="form-control" name="kks" id="kks" value="{{ old('kks') }}" placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="kps">No. Kartu Pra Sejahtera (KPS)</label>
            <input type="text" class="form-control" name="kps" id="kps" value="{{ old('kps') }}" placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="kis">No. Kartu Indonesia Sehat (KIS)</label>
            <input type="text" class="form-control" name="kis" id="kis" value="{{ old('kis') }}" placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="wn">Kewarganeraraan<span class="text-danger">*</span></label>
            <select name="wn" class="form-select w-full" required id="wn">
              <option value="" hidden>Pilih :</option>
              <option value="Warga Negara Indonesia">Warga Negara Indonesia</option>
              <option value="Warga Negara Asing">Warga Negara Asing</option>
            </select>
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="negara">Nama Negara</label>
            <input type="tel" class="form-control" name="negara" id="negara" value="{{ old('negara') }}" placeholder="Nama Negara Asal">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="foto">Foto<span class="text-danger">*</span></label>
            <input type="file" class="form-control" required name="foto" id="foto">
          </div>
        </div>
        <div class="form-part">
          <h2 class="mb-0">Data Ayah Kandung</h2>
          <div class="form-group">
            <label class="text-normal text-dark" for="nama_ayah">Nama Ayah Kandung<span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="nama_ayah" id="nama_ayah" value="{{ old('nama_ayah') }}" required placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="lahir_ayah">Tahun Lahir Ayah Kandung</label>
            <input type="text" class="form-control" name="lahir_ayah" id="lahir_ayah" value="{{ old('lahir_ayah') }}" placeholder="Tahun Lahir Ayah Kandung. contoh : 1965">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="pendidikan_ayah">Pendidikan</label>
            <select name="pendidikan_ayah" class="form-select w-full" id="pendidikan_ayah">
              <option value="" hidden>Pilih :</option>
              <option value="D1">D1</option>
              <option value="D2">D2</option>
              <option value="D3">D3</option>
              <option value="D4/S1">D4/S1</option>
              <option value="Putus SD">Putus SD</option>
              <option value="S2">S2</option>
              <option value="S3">S3</option>
              <option value="SD Sederajat">SD Sederajat</option>
              <option value="SMA Sederajat">SMA Sederajat</option>
              <option value="SMP Sederajat">SMP Sederajat</option>
              <option value="Tidak sekolah">Tidak sekolah</option>
            </select>
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="pekerjaan_ayah">Pekerjaan</label>
            <select name="pekerjaan_ayah" class="form-select w-full" id="pekerjaan_ayah">
              <option value="" hidden>Pilih :</option>
              <option value="Buruh">Buruh</option>
              <option value="Karyawan Swasta">Karyawan Swasta</option>
              <option value="Nelayan">Nelayan</option>
              <option value="Pedagang Besar">Pedagang Besar</option>
              <option value="Pedagang Kecil">Pedagang Kecil</option>
              <option value="Pensiunan">Pensiunan</option>
              <option value="Petani">Petani</option>
              <option value="Peternak">Peternak</option>
              <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
              <option value="Wiraswasta">Wiraswasta</option>
              <option value="Wirausaha">Wirausaha</option>
              <option value="Lain-lain">Lain-lain</option>
              <option value="Tidak Bekerja">Tidak Bekerja</option>
            </select>
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="penghasilan_ayah">Penghasilan</label>
            <select name="penghasilan_ayah" class="form-select w-full" id="penghasilan_ayah">
              <option value="" selected="selected">Pilih :</option>
              <option value="1 Juta - 1.999.999">1 Juta - 1.999.999</option>
              <option value="2 Juta - 4.999.999">2 Juta - 4.999.999</option>
              <option value="5 Juta - 20 Juta">5 Juta - 20 Juta</option>
              <option value="500.000 - 999.9999">500.000 - 999.9999</option>
              <option value="Kurang dari 500,000">Kurang dari 500,000</option>
              <option value="Lebih dari 20 Juta">Lebih dari 20 Juta</option>
            </select>
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="kebutuhan_khusus_ayah">Kebutuhan Khusus</label>
            <select name="kebutuhan_khusus_ayah" class="form-select w-full" id="kebutuhan_khusus_ayah">
              <option value="Autis">Autis</option>
              <option value="Bakat Istimewa">Bakat Istimewa</option>
              <option value="Cerdas Istimewa">Cerdas Istimewa</option>
              <option value="Down Sindrome">Down Sindrome</option>
              <option value="Hiper aktif">Hiper aktif</option>
              <option value="Indigo">Indigo</option>
              <option value="Kesulitan Belajar">Kesulitan Belajar</option>
              <option value="Narkoba">Narkoba</option>
              <option value="Tuna Daksa Ringan">Tuna Daksa Ringan</option>
              <option value="Tuna Daksa Sedang">Tuna Daksa Sedang</option>
              <option value="Tuna Ganda">Tuna Ganda</option>
              <option value="Tuna Grahita Ringan">Tuna Grahita Ringan</option>
              <option value="Tuna Grahita Sedang">Tuna Grahita Sedang</option>
              <option value="Tuna Laras">Tuna Laras</option>
              <option value="Tuna Netra">Tuna Netra</option>
              <option value="Tuna Rungu">Tuna Rungu</option>
              <option value="Tuna Wicara">Tuna Wicara</option>
              <option value="Lainnya">Lainnya</option>
            </select>
          </div>
        </div>
        <div class="form-part">
          <h2 class="mb-0">Data Ibu Kandung</h2>
          <div class="form-group">
            <label class="text-normal text-dark" for="nama_ibu">Nama Ibu Kandung<span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="nama_ibu" id="nama_ibu" value="{{ old('nama_ibu') }}" required placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="lahir_ibu">Tahun Lahir Ibu Kandung</label>
            <input type="text" class="form-control" name="lahir_ibu" id="lahir_ibu" value="{{ old('lahir_ibu') }}" placeholder="Tahun Lahir Ibu Kandung. contoh : 1965">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="pendidikan_ibu">Pendidikan</label>
            <select name="pendidikan_ibu" class="form-select w-full" id="pendidikan_ibu">
              <option value="" hidden>Pilih :</option>
              <option value="D1">D1</option>
              <option value="D2">D2</option>
              <option value="D3">D3</option>
              <option value="D4/S1">D4/S1</option>
              <option value="Putus SD">Putus SD</option>
              <option value="S2">S2</option>
              <option value="S3">S3</option>
              <option value="SD Sederajat">SD Sederajat</option>
              <option value="SMA Sederajat">SMA Sederajat</option>
              <option value="SMP Sederajat">SMP Sederajat</option>
              <option value="Tidak sekolah">Tidak sekolah</option>
            </select>
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="pekerjaan_ibu">Pekerjaan</label>
            <select name="pekerjaan_ibu" class="form-select w-full" id="pekerjaan_ibu">
              <option value="" hidden>Pilih :</option>
              <option value="Buruh">Buruh</option>
              <option value="Karyawan Swasta">Karyawan Swasta</option>
              <option value="Nelayan">Nelayan</option>
              <option value="Pedagang Besar">Pedagang Besar</option>
              <option value="Pedagang Kecil">Pedagang Kecil</option>
              <option value="Pensiunan">Pensiunan</option>
              <option value="Petani">Petani</option>
              <option value="Peternak">Peternak</option>
              <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
              <option value="Wiraswasta">Wiraswasta</option>
              <option value="Wirausaha">Wirausaha</option>
              <option value="Lain-lain">Lain-lain</option>
              <option value="Tidak Bekerja">Tidak Bekerja</option>
            </select>
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="penghasilan_ibu">Penghasilan</label>
            <select name="penghasilan_ibu" class="form-select w-full" id="penghasilan_ibu">
              <option value="" selected="selected">Pilih :</option>
              <option value="1 Juta - 1.999.999">1 Juta - 1.999.999</option>
              <option value="2 Juta - 4.999.999">2 Juta - 4.999.999</option>
              <option value="5 Juta - 20 Juta">5 Juta - 20 Juta</option>
              <option value="500.000 - 999.9999">500.000 - 999.9999</option>
              <option value="Kurang dari 500,000">Kurang dari 500,000</option>
              <option value="Lebih dari 20 Juta">Lebih dari 20 Juta</option>
            </select>
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="kebutuhan_khusus_ibu">Kebutuhan Khusus</label>
            <select name="kebutuhan_khusus_ibu" class="form-select w-full" id="kebutuhan_khusus_ibu">
              <option value="Autis">Autis</option>
              <option value="Bakat Istimewa">Bakat Istimewa</option>
              <option value="Cerdas Istimewa">Cerdas Istimewa</option>
              <option value="Down Sindrome">Down Sindrome</option>
              <option value="Hiper aktif">Hiper aktif</option>
              <option value="Indigo">Indigo</option>
              <option value="Kesulitan Belajar">Kesulitan Belajar</option>
              <option value="Narkoba">Narkoba</option>
              <option value="Tuna Daksa Ringan">Tuna Daksa Ringan</option>
              <option value="Tuna Daksa Sedang">Tuna Daksa Sedang</option>
              <option value="Tuna Ganda">Tuna Ganda</option>
              <option value="Tuna Grahita Ringan">Tuna Grahita Ringan</option>
              <option value="Tuna Grahita Sedang">Tuna Grahita Sedang</option>
              <option value="Tuna Laras">Tuna Laras</option>
              <option value="Tuna Netra">Tuna Netra</option>
              <option value="Tuna Rungu">Tuna Rungu</option>
              <option value="Tuna Wicara">Tuna Wicara</option>
              <option value="Lainnya">Lainnya</option>
            </select>
          </div>
        </div>
        <div class="form-part">
          <h2 class="mb-0">Data Wali</h2>
          <div class="form-group">
            <label class="text-normal text-dark" for="nama_wali">Nama Wali<span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="nama_wali" id="nama_wali" value="{{ old('nama_wali') }}" required placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="lahir_wali">Tahun Lahir Wali</label>
            <input type="text" class="form-control" name="lahir_wali" id="lahir_wali" value="{{ old('lahir_wali') }}" placeholder="Tahun Lahir Wali. contoh : 1965">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="pendidikan_wali">Pendidikan</label>
            <select name="pendidikan_wali" class="form-select w-full" id="pendidikan_wali">
              <option value="" hidden>Pilih :</option>
              <option value="D1">D1</option>
              <option value="D2">D2</option>
              <option value="D3">D3</option>
              <option value="D4/S1">D4/S1</option>
              <option value="Putus SD">Putus SD</option>
              <option value="S2">S2</option>
              <option value="S3">S3</option>
              <option value="SD Sederajat">SD Sederajat</option>
              <option value="SMA Sederajat">SMA Sederajat</option>
              <option value="SMP Sederajat">SMP Sederajat</option>
              <option value="Tidak sekolah">Tidak sekolah</option>
            </select>
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="pekerjaan_wali">Pekerjaan</label>
            <select name="pekerjaan_wali" class="form-select w-full" id="pekerjaan_wali">
              <option value="" hidden>Pilih :</option>
              <option value="Buruh">Buruh</option>
              <option value="Karyawan Swasta">Karyawan Swasta</option>
              <option value="Nelayan">Nelayan</option>
              <option value="Pedagang Besar">Pedagang Besar</option>
              <option value="Pedagang Kecil">Pedagang Kecil</option>
              <option value="Pensiunan">Pensiunan</option>
              <option value="Petani">Petani</option>
              <option value="Peternak">Peternak</option>
              <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
              <option value="Wiraswasta">Wiraswasta</option>
              <option value="Wirausaha">Wirausaha</option>
              <option value="Lain-lain">Lain-lain</option>
              <option value="Tidak Bekerja">Tidak Bekerja</option>
            </select>
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="penghasilan_wali">Penghasilan</label>
            <select name="penghasilan_wali" class="form-select w-full" id="penghasilan_wali">
              <option value="" selected="selected">Pilih :</option>
              <option value="1 Juta - 1.999.999">1 Juta - 1.999.999</option>
              <option value="2 Juta - 4.999.999">2 Juta - 4.999.999</option>
              <option value="5 Juta - 20 Juta">5 Juta - 20 Juta</option>
              <option value="500.000 - 999.9999">500.000 - 999.9999</option>
              <option value="Kurang dari 500,000">Kurang dari 500,000</option>
              <option value="Lebih dari 20 Juta">Lebih dari 20 Juta</option>
            </select>
          </div>
        </div>
        <div class="form-part">
          <h2 class="mb-0">Tabel Periodik</h2>
          <div class="form-group">
            <label class="text-normal text-dark" for="tb">Tinggi Badan (Cm)</label>
            <input type="number" class="form-control" name="tb" id="tb" value="{{ old('tb') }}" placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="bb">Berat Badan (Kg)</label>
            <input type="number" class="form-control" name="bb" id="bb" value="{{ old('bb') }}" placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="jarak">Jarak Tempat Tinggal ke Sekolah (Km)</label>
            <input type="number" class="form-control" name="jarak" id="jarak" value="{{ old('jarak') }}" placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="waktu_tempuh">Waktu Tempuh ke Sekolah (Menit)</label>
            <input type="number" class="form-control" name="waktu_tempuh" id="waktu_tempuh" value="{{ old('waktu_tempuh') }}" placeholder="">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark" for="jml_saudara">Jumlah Saudara Kandung</label>
            <input type="number" class="form-control" name="jml_saudara" id="jml_saudara" value="{{ old('jml_saudara') }}" placeholder="">
          </div>
        </div>
        <div class="form-part">
          <h2 class="mb-0">Pernyataan dan Keamanan<span class="text-danger">*</span></h2>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="pernyataan" required id="pernyataan">
            <label class="form-check-label" for="pernyataan">
              Saya menyatakan dengan sesungguhnya bahwa isian data dalam formulir ini adalah benar. Apabila ternyata data tersebut tidak benar / palsu, maka saya bersedia menerima sanksi sesuai ketentuan yang berlaku di SMP Negeri 1 Dagangan </label>
          </div>
        </div>
        <div class="form-group">
          <div class="peers ai-c jc-sb fxw-nw">
            <div class="peer"><button class="btn btn-primary">Registrasi</button></div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
