<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio;
use Illuminate\Support\Facades\File;


class PortofolioController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'judul' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,JPG|max:2048',
            'pesan' => 'required',
            'jenisprestasi' => 'required',
        ]);

        $namaGambar = time().'.'.$request->gambar->extension();

        $request->gambar->move(public_path('portofolioImage'), $namaGambar);

        $portofolio = new Portofolio;

        $portofolio->judul = $request->judul;
        $portofolio->gambar = $namaGambar;
        $portofolio->pesan = $request->pesan;
        $portofolio->jenisprestasi = $request->jenisprestasi;

        $portofolio->save();

        return redirect('/admin');
    }

    public function index()
{
    $portofolio = Portofolio::all();

    return $portofolio;
    
}

public function index1(){
    $portofolio = Portofolio::all();
    return $portofolio;
}


public function destroy($id){
        $portofolio = Portofolio::find($id);

        $path = "portofolioImage/";
        File::delete($path . $portofolio->gambar);
        $portofolio->delete();

        return redirect('/admin');
    }
// --------------------------------------------
    public function edit($id)
    {
        $portofolio = Portofolio::find($id);
        return view('portofolio.edit', compact('portofolio'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,JPG|max:2048',
            'pesan' => 'required',
            'jenisprestasi' => 'required',
        ],[
            'judul.required' => 'ISI KALIAN INI WOI'
        ]);
        $portofolio = Portofolio::find($id);
        if($request->has('gambar')){
            $namaGambar = time().'.'.$request->gambar->extension(); 
            $request->gambar->move(public_path('portofolioImage'), $namaGambar);
            $portofolio->judul = $request->judul;
            $portofolio->gambar = $namaGambar;     
            $portofolio->pesan = $request->pesan;
            $portofolio->jenisprestasi = $request->jenisprestasi;
    
        }else{
            $portofolio->judul = $request->judul;
            $portofolio->pesan = $request->pesan;
            $portofolio->jenisprestasi = $request->jenisprestasi;
        }

        $portofolio->update();
        return redirect('/admin');
    }
}


// ------------------------------



// class PortofolioController extends Controller
// {
//     public function create(){
//         return view('portofolio.create');
//     }
//     public function store(Request $request)
//     {
//         $request->validate([
//             'judul' => 'required',
//             'link' => 'required',
//             'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
//         ]);
//         $namaGambar = time().'.'.$request->gambar->extension(); 

//         $request->gambar->move(public_path('portofolioImage'), $namaGambar);

//         $portofolio = new Portofolio;

//         $portofolio->judul = $request->judul;
//         $portofolio->link = $request->link;
//         $portofolio->gambar = $namaGambar;

//         $portofolio->save();
//         return redirect('/#portofolio');
//     }

//     public function index()
//     {
//         $portofolio = Portofolio::all(); // Assuming Portfolio is your model
//         return view('home', compact('portofolio'));
//     }
//     public function destroy($id)
//     {
//         $portofolio = Portofolio::find($id);

//         $path = "portofolioImage/";
//         File::delete($path . $portofolio->gambar);
//         $portofolio->delete();

//         return redirect('/#portofolio');
//     }

   

    
   
// }





    



