<?php
namespace App\Http\Controllers;
use Auth;
use Hash;
use Illuminate\Http\Request;
use App\Rab;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function showChangePasswordForm(){
        return view('auth.changepassword');
    }
    public function changePassword(Request $request){
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }
        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }
        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);
        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();
        return redirect()->back()->with("success","Password changed successfully !");
    }

    //Rab
    public function rab()
    {
        $rab = Rab::paginate(5);

        return view('rab.rab', ['rab'=>$rab]);
    }
    public function saveRab(Request $request)
    {
        $this->validate($request, [
            'kode_pos' => 'required',
            'kode_sub' => 'required',
            'uraian' => 'required',
            'jumlah_mata_angg' => 'required',
            'jumlah_pos' => 'required'
        ]);        
        $jumlah_total = $request->jumlah_mata_angg * $request->jumlah_pos;
        $rab = Rab::create([
            'KODE_POS' => $request->kode_pos,
            'KATEGORI' => $request->kategori,
            'KODE_SUB' => $request->kode_sub,
            'URAIAN' => $request->uraian,
            'JML_MATA_ANGG' => $request->jumlah_mata_angg,
            'JML_POS' => $request->jumlah_pos,
            'JML_TOTAL' => $jumlah_total
        ]);
        return redirect('/rab');
    }
    public function gajiPegawai()
    {
        $rab = Rab::where('KATEGORI', '=', "GAJI PEGAWAI")->paginate(5);

        return view('rab.rab', ['rab'=>$rab]);
    }
    public function pengajaranDanPendidikan()
    {
        $rab = Rab::where('KATEGORI', '=', "PENGAJARAN DAN PENDIDIKAN")->paginate(5);

        return view('rab.rab', ['rab'=>$rab]);
    }
    public function administrasiKetatausahaan()
    {
        $rab = Rab::where('KATEGORI', '=', "ADMINISTRASI/KETATAUSAHAAN")->paginate(5);
        return view('rab.rab', ['rab'=>$rab]);
    }
    public function rumahTangga()
    {
        $rab = Rab::where('KATEGORI', '=', "RUMAH TANGGA")->paginate(5);
        return view('rab.rab', ['rab'=>$rab]);
    }
    public function pemeliharaanDanPerbaikan()
    {
        $rab = Rab::where('KATEGORI', '=', "Pemeliharaan dan Perbaikan")->paginate(5);
        return view('rab.rab', ['rab'=>$rab]);
    }
    public function Investasi()
    {
        $rab = Rab::where('KATEGORI', '=', "INVESTASI")->paginate(5);

        return view('rab.rab', ['rab'=>$rab]);
    }
    public function akreditasiProdi()
    {
        $rab = Rab::where('KATEGORI', '=', "Akreditasi Prodi (MI dan TI)")->paginate(5);
        return view('rab.rab', ['rab'=>$rab]);
    }
}