<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Intervention\Image\ImageManagerStatic as Image;
use App\slider;
use App\katadepan;
use App\keunggulan;
use App\kepala;
use App\gallery;
use App\album;
use File;

class AdminController extends Controller
{
    

    public  function    coba(){


        return  view    ('admin/index');
    }


	public function index()
    {
    	$slider = slider::all();
    	$katadepan = katadepan::find(3);

    	return view('admin/slidebar',['slider' => $slider, 'katadepan' => $katadepan]);  
    
    }


    public function slidebar()
    {
    	$slider = slider::all();

    	return view('admin/slidebar',['slider' => $slider]); 
    
    }

     public function slider_up(Request $request)
    {
    	$validation = Validator::make($request->all(),[
    		'judul' => 'required',
    		'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
    		'keterangan' => 'required|max:300'
    		]);

    	$uploadedFile = $request->file('file'); 

    	if ($uploadedFile == NULL){

    		return redirect()->back()->with('gagal','gambar belom diisi');
    	}

    	else{

    	$name = time().'.'.$uploadedFile->getClientOriginalName();

        $path = $uploadedFile->move('gambar/slider',$name);

    	}


       
        

        	$slider= new slider;

        	$slider->judul = $request->judul;
        	
           
            $slider->gambar = $name;
			$slider->deskripsi = $request->keterangan;
            

			$slider->save();
			return redirect()->back()->with('success','sukses!');
			
    	 // $check->$slider->save();  

  //   	 if ($validation->fails() && $uploadedFile == NULL) {
  			
  // 			return redirect()->back()->with('gagal','gagal upload');
		// }else {
		// 	return redirect()->back()->with('success','sukses!');
		// 	$slider->save();
		// }

    	// if(!$check){
    	// 	return redirect()->back()->with('gagal','gagal!');
    	// }
    	// else {
    	// 	return redirect()->back()->with('success','data berhasil ditambah!');
    	// }
    
    }

    public function slider_del(Request $request,$id){

    	$hapus = slider::find($id);

    	$path = public_path()."/gambar/slider/".$hapus->gambar;
		unlink($path);
    	$hapus -> forceDelete();

    	return redirect('/admin');

    }

    public function slider_edit($id){


    	$edit = slider::find($id);

        return view('admin/slidebar',['slider' => $slider, 'katadepan' => $katadepan]); 
    }

    public function katasambutan(){

        $katadepan = katadepan::find(3);

        return view('admin/katasambutan',['katadepan' => $katadepan]);
    }


     public function kata_up(Request $request)
    {
    	$validation = Validator::make($request->all(),[
    		'judul' => 'required',
    		'isi' => 'required|max:300'
    		]);



        $kata=  katadepan::find(3) ;

        	$kata->judul = $request->judul;
        	    
            $kata->isi = $request->keterangan;
			
           			$kata->save();
           			return redirect()->back()->with('success','sukses!');
             
    }

    public function keunggulan()
    {
        $master = keunggulan::find(1);
        $unggul = keunggulan::select('subjudul','isi','icon');
        $ungguls = keunggulan::all();

        return view('admin/keunggulan',['master' => $master , 'unggul' => $unggul, 'ungguls' => $ungguls]); 
    
    }

      public function keunggulan_up(Request $request)
    {
    	$validation = Validator::make($request->all(),[
    		'judul' => 'required',
    		'deskripsi' => 'required',
    		'judul_label' => 'required',
    		'isi_label' => 'required',
    		
    		]);

        $master = keunggulan::find(1);

            $master->judul = $request->judul;
            $master->deskripsi = $request->deskripsi;

        $unggul= new keunggulan ;

        	
        	$unggul->subjudul = $request->judul_label;
        	$unggul->isi = $request->isi_label;
        	$unggul->icon = $request->icon;
		
        $master->save();	
        $unggul->save();

           			return redirect()->back()->with('success','sukses!');
             
    }

    public function kepala()
    {
       

        return view('admin/kepala'); 
    
    }

    public function kepala_up(Request $request)
    {
        $validation = Validator::make($request->all(),[
            'judul' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'pesan' => 'required|max:300'
            ]);

        $uploadedFile = $request->file('file'); 

        if ($uploadedFile == NULL){

            return redirect()->back()->with('gagal','gambar belom diisi');
        }

        else{

        $name = time().'.'.$uploadedFile->getClientOriginalName();

        $path = $uploadedFile->move('gambar/kepala_sekolah',$name);

        }


         

            $kepala= new kepala;

            $kepala->judul = $request->judul;
            
           
            $kepala->gambar = $name;
            $kepala->isi = $request->pesan;
            

            $kepala->save();
            return redirect()->back()->with('success','sukses!');
            
         
    
    }

    public function kepala_up2(Request $request)
    {
        $validation = Validator::make($request->all(),[
            'judul' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'pesan' => 'required|max:300'
            ]);

        $uploadedFile = $request->file('file'); 

        if ($uploadedFile == NULL){

            return redirect()->back()->with('gagal','gambar belom diisi');
        }

        else{

        $name = time().'.'.$uploadedFile->getClientOriginalName();

        $path = $uploadedFile->move('gambar/kepala_sekolah',$name);

        }


         

            $kepala= kepala::find(3);

            $kepala->judul = $request->judul;
            
           
            $kepala->gambar = $name;
            $kepala->isi = $request->pesan;
            

            $kepala->save();
            return redirect()->back()->with('success','sukses!');
            
         
    
    }
   /* protected $gallery;

    public function __construct(
        Gallery $gallery )
    {
        $this->gallery = $gallery;
    }*/

    public function gallery(){
        /*$users =gallery::all();*/
        $cok = album::all();
        foreach ($cok as $cokk){
          for($i=0; $i<count($cok); $i++)
        $k = $cokk->id;
         }
        $asu = db::table('galleries')->join('album', 'galleries.id_album', '=', 'album.id')->select('galleries.*', 'galleries.image')->get();

  
        
        $users = db::table('album')->join('galleries', 'album.id', '=', 'galleries.id_album')->select('album.*', 'galleries.id_album' , 'galleries.image')->get();
        
        
        $album =album::all();


       // return dd($users);
        return  view('admin/gallery',compact('users','album','asu','cokk','cok','k'));

    }

    public function gallery_edit( $id){

        $users =album::find($id);     
        $p = gallery::where('id_album' ,'=' ,$id)->get();
        $tes = album::where('id' ,'=' ,$id)->get();

       return view('admin/galleryedit',compact('users','p','tes'));
    }

    public function gallery_del2(Request $request,$id){
        
        $hapus = gallery::find($id);

        $path = public_path()."/images/originals/".$hapus->image;
        unlink($path);
        $hapus -> forceDelete();

         return back();

    }
    
    public function gallery_editpros(Request $request,$id){
        
        $uploadedFile = $request->file('cover'); 
            $edit = album::find($id);

        
        if ($uploadedFile == NULL){

            $p1 = $request->judul;
            $p2 = $request->deskripsi;
            $p = $request->cov;

            $edit->judul = $p1;
            $edit->deskripsi = $p2;
            $edit->cover = $p;

        }

        else{

        $name = time().'.'.$uploadedFile->getClientOriginalExtension();

        $path = $uploadedFile->move('images/originals/cover/',$name);

        $edit = album::find($id);
        $edit->judul = $request->judul;
        $edit->deskripsi = $request->deskripsi;
        $edit->cover = $name;
       }

        $edit->save();

         
         return back();
    }

     protected $gallery,$album  ;

     public function __construct(
        gallery $gallery, album $album   )
    {
        $this->gallery = $gallery;
        $this->album   = $album ;
    }



    public function gallery_up2(Request $request,$id){



        //check if image exist
        if ($request->hasFile('image')) {
            $images = $request->file('image');
 
            //setting flag for condition
            $org_img = $thm_img = true;
 
            // create new directory for uploading image if doesn't exist
            if( ! File::exists('images/originals/')) {
                $org_img = File::makeDirectory('images/originals/', 0777, true);
            }/*
            if ( ! File::exists('images/thumbnails/')) {
                $thm_img = File::makeDirectory('images/thumbnails', 0777, true);
            }*/
 
            // loop through each image to save and upload
            foreach($images as $key => $image) {
                //create new instance of Photo class
                $newPhoto = new $this->gallery;
                $album   = $this->album->find($id);

                $albums = $album->id;



                

                //get file name of image  and concatenate with 4 random integer for unique
                $filename = rand(1111,9999).time().'.'.$image->getClientOriginalExtension();
                //path of image for upload
                $org_path = 'images/originals/' . $filename;
                /*$thm_path = 'images/thumbnails/' . $filename;*/
             
                
                $newPhoto->id_album  = $albums;
                $newPhoto->image     = $filename;
                /*$newPhoto->thumbnail = 'images/thumbnails/'.$filename;*/
 
                //don't upload file when unable to save name to database
                if ( ! $newPhoto->save()) {
                    return false;
                }
 
                // upload image to server
                if (($org_img && $thm_img) == true) {
                   Image::make($image)->fit(900, 500, function ($constraint) {
                           $constraint->upsize();
                       })->save($org_path);
                   /*Image::make($image)->fit(270, 160, function ($constraint) {
                       $constraint->upsize();
                   })->save($thm_path);*/
                }
            }
        }           
                    return redirect()->back()->with('success','sukses!');

    }

     public function gallery_up(Request $request)
    {

          
       /* 
        if($request->hasfile('filename'))
         {

            foreach($request->file('filename') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);  
                $data[] = $name;  
            }
         }

         $form= new gallery();
         $form->judul = $request->judul;
         $form->deskripsi = $request->deskripsi;
         $form->image=json_encode($data);
         
        
        $form->save();

        return back()->with('success', 'Your images has been successfully');



        $validation = Validator::make($request->all(),[
            'judul' => 'required',
            'isi' => 'required|max:300'
            ]);*/

        $uploadedFile = $request->file('cover'); 

        if ($uploadedFile == NULL){

            return redirect()->back()->with('gagal','gambar belom diisi');
        }

        else{

        $name = time().'.'.$uploadedFile->getClientOriginalExtension();

        $path = $uploadedFile->move('images/originals/cover/',$name);

       }
                $newAlbum = new album;

                $newAlbum->judul     = $request->judul;
                $newAlbum->deskripsi = $request->deskripsi;
                $newAlbum->cover     = $name;
                $newAlbum   ->save  ();

                $id = $newAlbum->id;

               


         //check if image exist
        if ($request->hasFile('image')) {
            $images = $request->file('image');
 
            //setting flag for condition
            $org_img = $thm_img = true;
 
            // create new directory for uploading image if doesn't exist
            if( ! File::exists('images/originals/')) {
                $org_img = File::makeDirectory('images/originals/', 0777, true);
            }/*
            if ( ! File::exists('images/thumbnails/')) {
                $thm_img = File::makeDirectory('images/thumbnails', 0777, true);
            }*/
 
            // loop through each image to save and upload
            foreach($images as $key => $image) {
                //create new instance of Photo class
                $newPhoto = new $this->gallery;
                $album   = $this->album->find($id);

                $albums = $album->id;



                

                //get file name of image  and concatenate with 4 random integer for unique
                $filename = rand(1111,9999).time().'.'.$image->getClientOriginalExtension();
                //path of image for upload
                $org_path = 'images/originals/' . $filename;
                /*$thm_path = 'images/thumbnails/' . $filename;*/
             
                
                $newPhoto->id_album  = $albums;
                $newPhoto->image     = $filename;
                /*$newPhoto->thumbnail = 'images/thumbnails/'.$filename;*/
 
                //don't upload file when unable to save name to database
                if ( ! $newPhoto->save()) {
                    return false;
                }
 
                // upload image to server
                if (($org_img && $thm_img) == true) {
                   Image::make($image)->fit(900, 500, function ($constraint) {
                           $constraint->upsize();
                       })->save($org_path);
                   /*Image::make($image)->fit(270, 160, function ($constraint) {
                       $constraint->upsize();
                   })->save($thm_path);*/
                }
            }
        }
                    return redirect()->back()->with('success','sukses!');
             
    }


}
