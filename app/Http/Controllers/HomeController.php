<?php

namespace App\Http\Controllers;

use App\Models\Ayah;
use App\Models\DataPeserta;
use App\Models\Ibu;
use App\Models\Pendaftar;
use App\Models\Periodik;
use App\Models\Regist;
use App\Models\Setting;
use App\Models\Wali;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware(['auth', 'verified']);
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
    $cek_daftar = Regist::where('user_id', Auth::user()->id)->first();
    $data = Pendaftar::where('id', Auth::user()->id)->first();
    $setting = Setting::first();
    $pendaftar = Pendaftar::where('draft', '0')->count();
    return view('home', compact('cek_daftar', 'data', 'setting', 'pendaftar'));
  }
  public function edit()
  {
    $cek_daftar = Regist::where('user_id', Auth::user()->id)->first();
    $data = Pendaftar::where('id', Auth::user()->id)->first();
    $setting = Setting::first();
    if ($setting->status_pendaftaran == '0' && Auth::user()->role == '1') {
      return redirect(route('home'));
    } else {
      return view('edit', compact('cek_daftar', 'data'));
    }
  }
  public function edit_admin($id)
  {
    $cek_daftar = Regist::where('user_id', $id)->first();
    $data = Pendaftar::where('id', $id)->first();
    return view('edit', compact('cek_daftar', 'data'));
  }
  public function add(Request $req)
  {
    DB::beginTransaction();
    $cek = Regist::where('user_id', Auth::user()->id)->first();
    if ($req->ajax()) {
      $draft = "1";
    } else {
      $draft = "0";
    }
    try {
      if ($cek == null) {
        $regist = new Regist();
        $regist->user_id   =  Auth::user()->id;
        $regist->jenis_pendaftaran   =  $req->jenis;
        $regist->asal_sekolah   =  $req->asal_sekolah;
        $regist->alamat_sekolah  =  $req->alamat_sekolah;
        $regist->no_un   =  $req->no_un;
        $regist->paud   =  $req->paud;
        $regist->tk   =  $req->tk;
        $regist->no_skhu   =  $req->no_skhu;
        $regist->no_ijazah   =  $req->no_ijazah;
        $regist->hobi   =  $req->hobi;
        $regist->cita_cita   =  $req->cita_cita;
        $regist->draft   =  $draft;
        $regist->save();

        $peserta = new DataPeserta();
        $peserta->user_id   =  Auth::user()->id;
        $peserta->nama = ucwords($req->nama);
        $peserta->jenis_kelamin = $req->jk;
        $peserta->nisn = $req->nisn;
        $peserta->nik = $req->nik;
        $peserta->tempat_lahir = $req->tempat_lahir;
        $peserta->tanggal_lahir = $req->tanggal_lahir;
        $peserta->agama = $req->agama;
        $peserta->kebutuhan_khusus = $req->kebutuhan_khusus_anak;
        $peserta->alamat_lengkap = $req->alamat;
        $peserta->rt = $req->rt;
        $peserta->rw = $req->rw;
        $peserta->dusun = $req->dusun;
        $peserta->kelurahan = $req->kelurahan;
        $peserta->kecamatan = $req->kecamatan;
        $peserta->kabupaten = $req->kabupaten;
        $peserta->kodepos = $req->pos;
        $peserta->tempat_tinggal = $req->tempat_tinggal;
        $peserta->transportasi = $req->transportasi;
        $peserta->no_wa = $req->wa;
        $peserta->email_pribadi = $req->email;
        $peserta->no_sktm = $req->sktm;
        $peserta->no_kks = $req->kks;
        $peserta->no_kps = $req->kps;
        $peserta->no_kis = $req->kis;
        $peserta->warga_negara = $req->wn;
        $peserta->negara_asal = $req->negara;
        if ($req->file('foto') != null) {
          $name = Auth::user()->id;
          $img = Carbon::now()->year . '/' . $name . '.' . $req->file('foto')->extension();
          $req->file('foto')->storeAs('public/', $img);
        } else {
          $img = null;
        }
        $peserta->foto = $img;
        $peserta->save();

        $ayah = new Ayah();
        $ayah->user_id   =  Auth::user()->id;
        $ayah->nama = ucwords($req->nama_ayah);
        $ayah->tahun_lahir = $req->lahir_ayah;
        $ayah->pendidikan = $req->pendidikan_ayah;
        $ayah->pekerjaan = $req->pekerjaan_ayah;
        $ayah->penghasilan = $req->penghasilan_ayah;
        $ayah->kebutuhan_khusus = $req->kebutuhan_khusus_ayah;
        $ayah->save();

        $ibu = new Ibu();
        $ibu->user_id   =  Auth::user()->id;
        $ibu->nama = ucwords($req->nama_ibu);
        $ibu->tahun_lahir = $req->lahir_ibu;
        $ibu->pendidikan = $req->pendidikan_ibu;
        $ibu->pekerjaan = $req->pekerjaan_ibu;
        $ibu->penghasilan = $req->penghasilan_ibu;
        $ibu->kebutuhan_khusus = $req->kebutuhan_khusus_ibu;
        $ibu->save();

        $wali = new Wali();
        $wali->user_id   =  Auth::user()->id;
        $wali->nama = ucwords($req->nama_wali);
        $wali->tahun_lahir = $req->lahir_wali;
        $wali->pendidikan = $req->pendidikan_wali;
        $wali->pekerjaan = $req->pekerjaan_wali;
        $wali->penghasilan = $req->penghasilan_wali;
        $wali->save();

        $periodik = new Periodik();
        $periodik->user_id   =  Auth::user()->id;
        $periodik->tinggi = $req->tb;
        $periodik->berat = $req->bb;
        $periodik->jarak = $req->jarak;
        $periodik->waktu_tempuh = $req->waktu_tempuh;
        $periodik->saudara = $req->jml_saudara;
        $periodik->save();

        DB::commit();
        Mail::send(
          'mail.mail',
          [
            'pesan'         => "Terima kasih telah melakukan pendaftaran",
            'subPesan'      => "<p>Untuk informasi lebih lanjut akan dikirimkan melalui E-mail dan whatsapp.<br>Jika ada perubahan data silahkan edit <a href='http://localhost:8000/edit'>disini</a></p>",
          ],
          function ($message) use ($req) {
            $message->from('smpn1cikarang@gmail.com');
            $message->to(Auth::user()->email);
            $message->subject("PPDB SMP Negeri 1 Cikarang Selatan");
          }
        );
        return redirect(route("home"));
      } else {
        $regist = Regist::where('user_id', Auth::user()->id)->firstOrFail();
        $regist->user_id   =  Auth::user()->id;
        $regist->jenis_pendaftaran   =  $req->jenis;
        $regist->asal_sekolah   =  $req->asal_sekolah;
        $regist->alamat_sekolah  =  $req->alamat_sekolah;
        $regist->no_un   =  $req->no_un;
        $regist->paud   =  $req->paud;
        $regist->tk   =  $req->tk;
        $regist->no_skhu   =  $req->no_skhu;
        $regist->no_ijazah   =  $req->no_ijazah;
        $regist->hobi   =  $req->hobi;
        $regist->cita_cita   =  $req->cita_cita;
        if ($regist->draft == "1" && $draft == "0") {
          $regist->draft   =  $draft;
          $regist->created_at = Carbon::now();
        }
        $regist->save();

        $peserta = DataPeserta::where('user_id', Auth::user()->id)->firstOrFail();
        $peserta->user_id   =  Auth::user()->id;
        $peserta->nama = $req->nama;
        $peserta->jenis_kelamin = $req->jk;
        $peserta->nisn = $req->nisn;
        $peserta->nik = $req->nik;
        $peserta->tempat_lahir = $req->tempat_lahir;
        $peserta->tanggal_lahir = $req->tanggal_lahir;
        $peserta->agama = $req->agama;
        $peserta->kebutuhan_khusus = $req->kebutuhan_khusus_anak;
        $peserta->alamat_lengkap = $req->alamat;
        $peserta->rt = $req->rt;
        $peserta->rw = $req->rw;
        $peserta->dusun = $req->dusun;
        $peserta->kelurahan = $req->kelurahan;
        $peserta->kecamatan = $req->kecamatan;
        $peserta->kabupaten = $req->kabupaten;
        $peserta->kodepos = $req->pos;
        $peserta->tempat_tinggal = $req->tempat_tinggal;
        $peserta->transportasi = $req->transportasi;
        $peserta->no_wa = $req->wa;
        $peserta->email_pribadi = $req->email;
        $peserta->no_sktm = $req->sktm;
        $peserta->no_kks = $req->kks;
        $peserta->no_kps = $req->kps;
        $peserta->no_kis = $req->kis;
        $peserta->warga_negara = $req->wn;
        $peserta->negara_asal = $req->negara;
        if ($req->file('foto') != null) {
          File::delete(storage_path('app/public') . '/' . $peserta->foto);
          $name = Auth::user()->id;
          $img = Carbon::now()->year . '/' . $name . '.' . $req->file('foto')->extension();
          $req->file('foto')->storeAs('public/', $img);
          $peserta->foto = $img;
        }
        $peserta->save();

        $ayah = Ayah::where('user_id', Auth::user()->id)->firstOrFail();
        $ayah->user_id   =  Auth::user()->id;
        $ayah->nama = $req->nama_ayah;
        $ayah->tahun_lahir = $req->lahir_ayah;
        $ayah->pendidikan = $req->pendidikan_ayah;
        $ayah->pekerjaan = $req->pekerjaan_ayah;
        $ayah->penghasilan = $req->penghasilan_ayah;
        $ayah->kebutuhan_khusus = $req->kebutuhan_khusus_ayah;
        $ayah->save();

        $ibu = Ibu::where('user_id', Auth::user()->id)->firstOrFail();
        $ibu->user_id   =  Auth::user()->id;
        $ibu->nama = $req->nama_ibu;
        $ibu->tahun_lahir = $req->lahir_ibu;
        $ibu->pendidikan = $req->pendidikan_ibu;
        $ibu->pekerjaan = $req->pekerjaan_ibu;
        $ibu->penghasilan = $req->penghasilan_ibu;
        $ibu->kebutuhan_khusus = $req->kebutuhan_khusus_ibu;
        $ibu->save();

        $wali = Wali::where('user_id', Auth::user()->id)->firstOrFail();
        $wali->user_id   =  Auth::user()->id;
        $wali->nama = $req->nama_wali;
        $wali->tahun_lahir = $req->lahir_wali;
        $wali->pendidikan = $req->pendidikan_wali;
        $wali->pekerjaan = $req->pekerjaan_wali;
        $wali->penghasilan = $req->penghasilan_wali;
        $wali->save();

        $periodik = Periodik::where('user_id', Auth::user()->id)->firstOrFail();
        $periodik->user_id   =  Auth::user()->id;
        $periodik->tinggi = $req->tb;
        $periodik->berat = $req->bb;
        $periodik->jarak = $req->jarak;
        $periodik->waktu_tempuh = $req->waktu_tempuh;
        $periodik->saudara = $req->jml_saudara;
        $periodik->save();

        DB::commit();
        if ($req->ajax()) {
          return [
            'notif'     => 'Berhasil disimpan',
            'alert'     => 'success'
          ];
        } else {
          return redirect(route("home"));
        }
      }
    } catch (\Exception $e) {
      DB::rollback();
      dd($e);
      return back()->with([
        'notif'     => 'Gagal ditambahkan!',
        'alert'     => 'error'
      ])->withInput();
    }
  }
}