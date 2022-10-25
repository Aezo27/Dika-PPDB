<?php

namespace App\Http\Controllers;

use App\Models\Ayah;
use App\Models\DataPeserta;
use App\Models\Ibu;
use App\Models\Pendaftar;
use App\Models\Periodik;
use App\Models\Regist;
use App\Models\Setting;
use App\Models\User;
use App\Models\Wali;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware(['admin']);
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
    $user = User::where("role", "1")->count();
    $pendaftar = Pendaftar::count();
    $datas = Pendaftar::where("draft", "0")->whereDate('created_at', Carbon::today())->offset(0)->limit(10)->orderBy("created_at")->get();
    return view('admin.index', compact("datas", "user", "pendaftar"));
  }

  public function pendaftar()
  {
    return view('admin.pendaftar');
  }

  public function download_pendaftar($id)
  {
    $data = Pendaftar::where('id', $id)->first();
    return view('admin.download_data', compact('data'));
  }

  public function setting()
  {
    $setting = Setting::first();
    return view('admin.setting', compact('setting'));
  }

  public function get_pendaftar(Request $request)
  {
    if ($request->ajax()) {
      $data = Pendaftar::orderby('nama')->get();
      return DataTables::of($data)
        ->addColumn('action', function ($data) {
          $button = '<a title="Edit data" href="' . route("edit") . '/' . $data->id . '" id="' . $data->id . '" id="' . $data->id . '" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil"></i></a>';
          $button .= '<a title="Download data" target="_blank" href="' . route("download_pendaftar", ['id' => $data->id]) . '" class="btn btn-simple btn-danger btn-icon view"><i class="ti-eye"></i></a>';
          return $button;
        })
        ->addColumn('created_at', function ($data) {
          $date = $data->created_at->isoFormat('D MMMM Y');
          return $date;
        })
        ->rawColumns(['action'])
        ->make(true);
    }
  }

  public function user()
  {
    return view('admin.user');
  }

  public function get_user(Request $request)
  {
    if ($request->ajax()) {
      $data = User::where('role', 1)->get();
      return DataTables::of($data)
        ->addColumn('action', function ($data) {
          $button = '<a title="Hapus data" href="javascript:void()" id="' . $data->id . '" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-trash"></i></a>';
          return $button;
        })
        ->addColumn('created_at', function ($data) {
          $date = $data->created_at->isoFormat('D MMMM Y');
          return $date;
        })
        ->rawColumns(['action'])
        ->make(true);
    }
  }

  public function user_delete(Request $req)
  {
    DB::beginTransaction();
    try {
      $del = User::findOrFail($req->id);
      $del->delete();
      $regist = Regist::where('user_id', $req->id)->first();
      if ($regist != null) {
        $regist->delete();
      }
      $peserta = DataPeserta::where('user_id', $req->id)->first();
      if ($peserta != null) {
        File::delete(storage_path('app/public') . '/' . $peserta->foto);
        $peserta->delete();
      }
      $ayah = Ayah::where('user_id', $req->id)->first();
      if ($ayah != null) {
        $ayah->delete();
      }
      $ibu = Ibu::where('user_id', $req->id)->first();
      if ($ibu != null) {
        $ibu->delete();
      }
      $wali = Wali::where('user_id', $req->id)->first();
      if ($wali != null) {
        $wali->delete();
      }
      $periodik = Periodik::where('user_id', $req->id)->first();
      if ($periodik != null) {
        $periodik->delete();
      }

      DB::commit();
      return [
        'notif'     => 'User berhasil dihapus',
        'alert'     => 'success'
      ];
    } catch (\Exception $e) {
      DB::rollback();
      return [
        'notif'     => 'User gagal dihapus!',
        'alert'     => 'error'
      ];
    }
  }
  public function edit_setting(Request $req)
  {
    DB::beginTransaction();
    try {
      $setting = Setting::firstOrFail();
      $setting->status_pendaftaran = $req->status_pendaftaran;
      $setting->status_penerimaan = $req->status_penerimaan;
      $setting->tanggal_pengumuman = date('Y-m-d', strtotime($req->tanggal_pengumuman));
      $setting->kuota_pendaftar = $req->kuota_pendaftar;
      $setting->save();

      if ($req->file('bgForm') != null) {
        File::delete(storage_path('app/public') . '/bgForm.jpg');
        $req->file('bgForm')->storeAs('public/', 'bgForm.jpg');
      }
      if ($req->file('bgAuth') != null) {
        File::delete(storage_path('app/public') . '/bgAuth.mp4');
        $req->file('bgAuth')->storeAs('public/', 'bgAuth.mp4');
      }
      DB::commit();
      return back()->with([
        'notif'     => 'Berhasil disimpan!',
        'alert'     => 'success'
      ]);
    } catch (\Exception $e) {
      DB::rollback();
      dd($e);
      return back()->with([
        'notif'     => 'Gagal disimpan!',
        'alert'     => 'error'
      ]);
    }
  }
}