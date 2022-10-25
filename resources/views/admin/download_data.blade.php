<style>
  .detail-group {
    display: flex;
    justify-content: space-between;
  }

  .detail-table {
    border: none;
    width: 50%;
  }

  tr td:first-child {
    font-weight: 700;
    width: 50%;
  }

  tr td:nth-child(2) {
    font-weight: 700;
    width: 1%;
  }

  td {
    padding-bottom: 6px;
  }

  .paper {
    max-width: 2480px;
  }
</style>
<script>
  window.print()
</script>
<div class="paper">
  <h1>PPDB SMP NEGERI 1 CIKARANG SELATAN</h1>
  <h2>Registrasi Peserta Didik</h2>
  <div class="detail-group">
    <table class="detail-table">
      <tr>
        <td>Jenis Pendaftaran</td>
        <td>:</td>
        <td>{{ $data->jenis_pendaftaran == 0 ? 'Baru' : 'Pindahan' }}</td>
      </tr>
      <tr>
        <td>Nama Asal Sekolah</td>
        <td>:</td>
        <td>{{ $data->asal_sekolah }}</td>
      </tr>
      <tr>
        <td>Alamat Sekolah</td>
        <td>:</td>
        <td>{{ $data->alamat_sekolah }}</td>
      </tr>
      <tr>
        <td>Nomor Peserta Ujian Nasional Sebelumnya</td>
        <td>:</td>
        <td>{{ $data->no_un }}</td>
      </tr>
      <tr>
        <td>Apakah Pernah PAUD</td>
        <td>:</td>
        <td>{{ $data->paud == 0 ? 'Ya' : 'Tidak' }}</td>
      </tr>
    </table>
    <table class="detail-table">
      <tr>
        <td>Apakah Pernah TK</td>
        <td>:</td>
        <td>{{ $data->tk == 0 ? 'Ya' : 'Tidak' }}</td>
      </tr>
      <tr>
        <td>Nomor Seri SKHUN Sebelumnya</td>
        <td>:</td>
        <td>{{ $data->no_skhu }}</td>
      </tr>
      <tr>
        <td>Nomor Seri Ijazah Sebelumnya</td>
        <td>:</td>
        <td>{{ $data->no_ijazah }}</td>
      </tr>
      <tr>
        <td>Hobi</td>
        <td>:</td>
        <td>{{ $data->hobi }}</td>
      </tr>
      <tr>
        <td>Cita-cita</td>
        <td>:</td>
        <td>{{ $data->cita_cita }}</td>
      </tr>
      {{-- <tr>
        <td></td>
        <td>:</td>
        <td>{{$data->}}</td>
      </tr> --}}
    </table>
  </div>
  <h2>Data Pribadi</h2>
  <div class="detail-group">
    <table class="detail-table">
      <tr>
        <td>Nama Lengkap</td>
        <td>:</td>
        <td>{{ $data->nama }}</td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td>{{ $data->jenis_kelamin == 0 ? 'Laki-laki' : 'Perempuan' }}</td>
      </tr>
      <tr>
        <td>NISN</td>
        <td>:</td>
        <td>{{ $data->nisn }}</td>
      </tr>
      <tr>
        <td>NIK</td>
        <td>:</td>
        <td>{{ $data->nik }}</td>
      </tr>
      <tr>
        <td>Tempat Lahir</td>
        <td>:</td>
        <td>{{ $data->tempat_lahir }}</td>
      </tr>
      <tr>
        <td>Tempat Lahir</td>
        <td>:</td>
        <td>{{ $data->tempat_lahir }}</td>
      </tr>
      <tr>
        <td>Tanggal Lahir</td>
        <td>:</td>
        <td>{{ $data->tanggal_lahir }}</td>
      </tr>
      <tr>
        <td>Agama</td>
        <td>:</td>
        <td>{{ $data->agama }}</td>
      </tr>
      <tr>
        <td>Kebutuhan Khusus</td>
        <td>:</td>
        <td>{{ $data->kebutuhan_khusus }}</td>
      </tr>
      <tr>
        <td>Alamat Lengkap</td>
        <td>:</td>
        <td>{{ $data->alamat_lengkap }}</td>
      </tr>
      <tr>
        <td>RT</td>
        <td>:</td>
        <td>{{ $data->rt }}</td>
      </tr>
      <tr>
        <td>RW</td>
        <td>:</td>
        <td>{{ $data->rw }}</td>
      </tr>
      <tr>
        <td>Dusun</td>
        <td>:</td>
        <td>{{ $data->dusun }}</td>
      </tr>
      <tr>
        <td>Kelurahan</td>
        <td>:</td>
        <td>{{ $data->kelurahan }}</td>
      </tr>
      <tr>
        <td>Kecamatan</td>
        <td>:</td>
        <td>{{ $data->kecamatan }}</td>
      </tr>
      <tr>
        <td>Kabupaten</td>
        <td>:</td>
        <td>{{ $data->kabupaten }}</td>
      </tr>
      <tr>
        <td>Kode Pos</td>
        <td>:</td>
        <td>{{ $data->kodepos }}</td>
      </tr>
    </table>
    <table class="detail-table">
      <tr>
        <td>Tempat Tinggal</td>
        <td>:</td>
        <td>{{ $data->tempat_tinggal }}</td>
      </tr>
      <tr>
        <td>Transportasi</td>
        <td>:</td>
        <td>{{ $data->transportasi }}</td>
      </tr>
      <tr>
        <td>Nomor Whatsapp</td>
        <td>:</td>
        <td>{{ $data->no_wa }}</td>
      </tr>
      <tr>
        <td>Email Pribadi</td>
        <td>:</td>
        <td>{{ $data->email_pribadi }}</td>
      </tr>
      <tr>
        <td>No. Surat Keterangan Tidak Mampu (SKTM)</td>
        <td>:</td>
        <td>{{ $data->no_sktm }}</td>
      </tr>
      <tr>
        <td>No. Kartu Keluarga Sejahtera (KKS)</td>
        <td>:</td>
        <td>{{ $data->no_kks }}</td>
      </tr>
      <tr>
        <td>No. Kartu Pra Sejahtera (KPS)</td>
        <td>:</td>
        <td>{{ $data->no_kps }}</td>
      </tr>
      <tr>
        <td>No. Kartu Indonesia Sehat (KIS)</td>
        <td>:</td>
        <td>{{ $data->no_kis }}</td>
      </tr>
      <tr>
        <td>Kewarganeraraan</td>
        <td>:</td>
        <td>{{ $data->warga_negara }}</td>
      </tr>
      <tr>
        <td>Nama Negara</td>
        <td>:</td>
        <td>{{ $data->negara_asal }}</td>
      </tr>
      <tr>
        <td>Foto</td>
        <td>:</td>
        <td><img style="height: 100px" src="{{ asset('storage') . '/' . $data->foto }}" alt=""></td>
      </tr>
    </table>
  </div>
  <div style="break-after:page"></div>
  <h2>Data Ayah</h2>
  <div class="detail-group">
    <table class="detail-table">
      <tr>
        <td>Nama Ayah Kandung</td>
        <td>:</td>
        <td>{{ $data->nama_ayah }}</td>
      </tr>
      <tr>
        <td>Tahun Lahir Ayah Kandung</td>
        <td>:</td>
        <td>{{ $data->tahun_lahir_ayah }}</td>
      </tr>
      <tr>
        <td>Pendidikan</td>
        <td>:</td>
        <td>{{ $data->pendidikan_ayah }}</td>
      </tr>
    </table>
    <table class="detail-table">
      <tr>
        <td>Pekerjaan</td>
        <td>:</td>
        <td>{{ $data->pekerjaan_ayah }}</td>
      </tr>
      <tr>
        <td>Penghasilan</td>
        <td>:</td>
        <td>{{ $data->penghasilan_ayah }}</td>
      </tr>
      <tr>
        <td>Kebutuhan Khusus</td>
        <td>:</td>
        <td>{{ $data->kebutuhan_khusus_ayah }}</td>
      </tr>
    </table>
  </div>
  <h2>Data Ibu</h2>
  <div class="detail-group">
    <table class="detail-table">
      <tr>
        <td>Nama Ibu Kandung</td>
        <td>:</td>
        <td>{{ $data->nama_ibu }}</td>
      </tr>
      <tr>
        <td>Tahun Lahir Ibu Kandung</td>
        <td>:</td>
        <td>{{ $data->tahun_lahir_ayah }}</td>
      </tr>
      <tr>
        <td>Pendidikan</td>
        <td>:</td>
        <td>{{ $data->pendidikan_ibu }}</td>
      </tr>
    </table>
    <table class="detail-table">
      <tr>
        <td>Pekerjaan</td>
        <td>:</td>
        <td>{{ $data->pekerjaan_ibu }}</td>
      </tr>
      <tr>
        <td>Penghasilan</td>
        <td>:</td>
        <td>{{ $data->penghasilan_ibu }}</td>
      </tr>
      <tr>
        <td>Kebutuhan Khusus</td>
        <td>:</td>
        <td>{{ $data->kebutuhan_khusus_ibu }}</td>
      </tr>
    </table>
  </div>
  <h2>Data Wali</h2>
  <div class="detail-group">
    <table class="detail-table">
      <tr>
        <td>Nama Wali</td>
        <td>:</td>
        <td>{{ $data->nama_wali }}</td>
      </tr>
      <tr>
        <td>Tahun Lahir Wali</td>
        <td>:</td>
        <td>{{ $data->tahun_lahir_wali }}</td>
      </tr>
      <tr>
        <td>Pendidikan</td>
        <td>:</td>
        <td>{{ $data->pendidikan_wali }}</td>
      </tr>
    </table>
    <table class="detail-table">
      <tr>
        <td>Pekerjaan</td>
        <td>:</td>
        <td>{{ $data->pekerjaan_wali }}</td>
      </tr>
      <tr>
        <td>Penghasilan</td>
        <td>:</td>
        <td>{{ $data->penghasilan_wali }}</td>
      </tr>
    </table>
  </div>
  <h2>Tabel Periodik</h2>
  <div class="detail-group">
    <table class="detail-table">
      <tr>
        <td>Tinggi Badan (Cm)</td>
        <td>:</td>
        <td>{{ $data->tinggi }}</td>
      </tr>
      <tr>
        <td>Berat Badan (Kg)</td>
        <td>:</td>
        <td>{{ $data->berat }}</td>
      </tr>
      <tr>
        <td>Jarak Tempat Tinggal ke Sekolah (Km)</td>
        <td>:</td>
        <td>{{ $data->jarak }}</td>
      </tr>
    </table>
    <table class="detail-table">
      <tr>
        <td>Waktu Tempuh ke Sekolah (Menit)</td>
        <td>:</td>
        <td>{{ $data->waktu_tempuh }}</td>
      </tr>
      <tr>
        <td>Jumlah Saudara Kandung</td>
        <td>:</td>
        <td>{{ $data->saudara }}</td>
      </tr>
    </table>
  </div>
</div>
