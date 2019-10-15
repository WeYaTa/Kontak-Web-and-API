<?php

namespace App\Repositories;
use App\Kontak;
use DB;

class KontakRepository implements KontakInterface{

    public function create($kontak){
       
        // $kontak->save(); jika kontak adalah objek Kontak 

        Kontak::create($kontak); //jika $kontak adalah json dan bukan objek
    }

    public function all(){
        return Kontak::all();
    }

    public function allSortedByName(){
        return Kontak::orderby('nama', 'ASC')->get();
    }

    public function get($id){
        return Kontak::findOrFail($id);
    }

    public function update($id, $kontak){
        //Kontak::findOrFail($id)->update(['nama'=>$kontak->nama, 'telepon'=>$kontak->telepon,'email'=>$kontak->email,'alamat'=>$kontak->alamat]);
        Kontak::findOrFail($id)->update($kontak);
    }
    
    public function delete($id){
        Kontak::find($id)->delete();
    }

    public function search($nama){
        return Kontak::where('nama', 'LIKE', '%'.$nama.'%')->orWhere('nama', 'LIKE', $nama.'%')->orWhere('nama', 'LIKE', '%'.$nama)->get();
    }
}