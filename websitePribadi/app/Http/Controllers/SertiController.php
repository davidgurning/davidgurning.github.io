<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serti;
use Illuminate\Support\Facades\File;

class SertiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexserti1()
    {
        $serti = Serti::all();

        return $serti;
    }

    public function indexserti2()
    {
        $serti = Serti::all();

        return $serti;
    }

    public function storeserti1(Request $request)
    {
        $request->validate([
            'jenissertifikat' => 'required',
            'judulsertifikat' => 'required',
            'gambarsertifikat' => 'required|image|mimes:jpeg,png,jpg,JPG|max:2048',
        ]);

        $namaGambar2 = time().'.'.$request->gambarsertifikat->extension();

        $request->gambarsertifikat->move(public_path('sertiImage'), $namaGambar2);

        $serti = new Serti;

        $serti->jenissertifikat = $request->jenissertifikat;
        $serti->judulsertifikat =$request->judulsertifikat ;
        $serti->gambarsertifikat =$namaGambar2;

        $serti->save();

        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit2($id)
    {
        $serti = Serti::find($id);
        return view('serti.edit', compact('serti'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'jenissertifikat' => 'required',
            'judulsertifikat' => 'required',
            'gambarsertifikat' => 'required|image|mimes:jpeg,png,jpg,JPG|max:2048',
        ],[
            'judul.required' => 'ISI KALIAN INI WOI'
        ]);
        $serti = Serti::find($id);
        if($request->has('gambarsertifikat')){
            $namaGambar2 = time().'.'.$request->gambarsertifikat->extension(); 
            $request->gambarsertifikat->move(public_path('sertiImage'), $namaGambar2);
            $serti->jenissertifikat = $request->jenissertifikat;
            $serti->judulsertifikat =$request->judulsertifikat ;
            $serti->gambarsertifikat =$namaGambar2;
        }else{
            $serti->jenissertifikat = $request->jenissertifikat;
            $serti->judulsertifikat =$request->judulsertifikat ;
        }

        $serti->update();
        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sertifikat = Serti::find($id);

        $path = "sertiImage/";
        File::delete($path . $sertifikat->gambarsertifikat);
        $sertifikat->delete();

        return redirect('/admin');
    }
}
