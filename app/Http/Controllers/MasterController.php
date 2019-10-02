<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\slider;
use App\katadepan;
use App\keunggulan;
use App\kepala;
use App\gallery;
use App\album;
use App\alumni;
use App\berita;
use App\galeri;
use App\mapel;
use App\visimisi;
use App\profilsekolah;
use Crypt;
use App\kategori;


class MasterController extends Controller
{
    
	public function index()
    {
    	
        $slider = slider::all();
        $katadepan = katadepan::all();
        $keunggulan = keunggulan::all();

        $master = keunggulan::find(1);
        $kepala = kepala::find(1);
    	return view('master/index',['slider' => $slider, 'katadepan' => $katadepan, 'keunggulan' => $keunggulan, 'master' => $master, 'kepala' => $kepala  ]); 

    
    }

    public function tkj()
    {
    	

    	return view('master/tkj'); 
    
    }

    public function perbankan()
    {
    	

    	return view('master/perbankan'); 
    
    }

    public function multimedia()
    {
    	

    	return view('master/multimedia'); 
    
    }

    public function alumni(){

        $alumni = alumni::all();
        return view('master/alumni',compact('alumni'));
    }


    public function gallery()
    {   
         $users = db::table('album')->join('galleries', 'album.id', '=', 'galleries.id_album')->select('album.*', 'galleries.image')->get();
        
        $album =album::all();
       return view('master/mgallery',compact('users','album'));
    
    }

        public function gallery2($id_album,$judul)
    {   
        $users = db::table('album')->join('galleries', 'album.id', '=', 'galleries.id_album')->select('album.*', 'galleries.image')->get();

      
        

        
        $p = gallery::where('id_album' ,'=' ,$judul)->get('image');
        $tes = album::where('id' ,'=' ,$judul)->get();
     

       
        // $cok = DB::table('galleries')
        //          ->leftJoin('album', 'galleries.id_album', '=', 'album.id')
                 
        //          ->select('galleries.image')->first($id_album);

            // $cok = gallery:: where ('id', $id_album)
            //     -> leftJoin ('album', 'galleries.id_album', '=', $id_album)
            //     -> select ('galleries.id_album', 'galleries.image') -> first ();

               

        return view('master/mgallery2',compact('users','tes','p','cok')); 

    
    }
    public function berita(){
        $berita = berita::orderBy('id_berita','desc')->paginate(5);
        $kategori = kategori::all();
        $count = count($berita);
        if ($count == null)
            $random = berita::all();
        elseif ($count == 1)
            $random = berita::all()->random(1);
        elseif ($count > 1) 
            $random = berita::all()->random(2);
        return view('master/berita', ['berita' => $berita, 'kategori' => $kategori, 'random' => $random]);
    }
    public function berita_view($id,$judul){
        $berita = berita::find($judul);
        $b = berita::all();
        $kategori = kategori::all();
        $count = count($b);
        if ($count == null)
            $random = berita::all();
        elseif ($count == 1)
            $random = berita::all()->random(1);
        elseif ($count > 1) 
            $random = berita::all()->random(2);
        return view('master/beritaview', compact('berita','kategori','random','b'));
    }
   
    public function files(){
        $mapel = mapel::all();
        $files = DB::table('files')
        ->join('mapel', 'files.id_mapel', '=', 'mapel.id_mapel')
        ->select('*')
        ->orderBy('id_files', 'desc')
        ->paginate(6);
        return view('master/files', compact('mapel','files'));
    }
    public function filesmapel_search(Request $request){
        $files = DB::table('files')
        ->join('mapel', 'files.id_mapel', '=', 'mapel.id_mapel')
        ->select('*')
        ->orderBy('id_files', 'desc')
        ->where('judul', 'like', '%'.$request->search.'%')
        ->paginate(1000);
        return view('master/files', compact('mapel','files'));
    }
    public function visimisi(){
        $visimisi = visimisi::find(1);
        return view('master/visimisi', compact('visimisi'));
    }
    public function profilsekolah(){
        $profilsekolah = profilsekolah::find(1);
        return view('master/profilsekolah', compact('profilsekolah'));
    }
}
