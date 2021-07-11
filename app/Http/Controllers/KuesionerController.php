<?php

namespace App\Http\Controllers;

use App\Models\Respon;
use App\Models\Training;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Response;
class KuesionerController extends Controller
{
  public function index()
  {
    
    
    $judul_training = DB::table('trainings')
                      ->groupBy('nama')
                      ->get();
    $trainers = DB::table('trainers')
                      ->groupBy('nama')
                      ->get();
    $trainings = Training::all();
    // Tanpa Judul Training dan Rating
    $pertanyaan = [
      [
        'imageUrl' =>  '/images/pertanyaan/nama.png',
        'name' => 'nama',
        'label' => 'Nama',
        'type' => 'text',
      ],
      [
        'imageUrl' =>  '/images/pertanyaan/no-rek.png',
        'name' => 'noRek',
        'label' => 'Bank, nomor rekening, a.n nama',
        'type' => 'text',
      ],
      [
        'imageUrl' =>  '/images/pertanyaan/email.png',
        'name' => 'email',
        'label' => 'E-Mail',
        'type' => 'email',
      ],
      [
        'imageUrl' =>   '/images/pertanyaan/no-telp.png',
        'name' => 'noTelp',
        'label' => 'Nomor Handphone (WA)',
        'type' => 'text',
      ],
    ];

    return view('kuisioner', compact(['pertanyaan', 'trainings', 'trainers', 'judul_training']));
  }

  public function simpan(Request $req)
  {
    $respon = new Respon();
    $respon->training_id = $req['judul_training'];
    $respon->trainer_id = $req['trainer_id'];
    $respon->no_rek = $req['noRek'];
    $respon->email = $req['email'];
    $respon->no_telp = $req['noTelp'];
    $respon->kecepatan_pembayaran = $req['kp'];
    $respon->kp_komen = $req['kp_komen'];
    $respon->fasilitas_pendukung = $req['fp'];
    $respon->fp_komen = $req['fp_komen'];
    $respon->layanan_panitia = $req['lp'];
    $respon->lp_komen = $req['lp_komen'];
    $respon->saran_topik = $req['saran_topik'];

    $respon->save();
    return redirect()->route('selesai');
  }

  public function fetch(Request $request)
    {
     $select = $request->get('select');
     $value = $request->get('value');
     $dependent = $request->get('dependent');
     $data = DB::table('train_ipb')
       ->select('trainer_id')
       ->where('training_id', $value )
      //  ->groupBy($dependent)
       ->get();
     $output = '<option value="">Select '.ucfirst($dependent).'</option>';
     foreach($data as $row)
     {
      $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
     }
     echo $output;
    }


    public function ajax(Request $request)
    {
      $title = $request->title;

      
      
        $sub = DB::table('train_ipb')
        ->join('trainers', 'train_ipb.trainer_id', '=', 'trainers.id')
        ->join('trainings', 'train_ipb.training_id', '=', 'trainings.id')
        ->where('train_ipb.training_id', '=', $title)
        ->select('trainers.id', 'trainers.nama')
        ->get();
      
      
      

      return response()->json($sub);
    }
}
