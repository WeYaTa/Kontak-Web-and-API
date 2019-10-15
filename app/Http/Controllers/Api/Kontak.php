<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kontak as KontakModel;
use App\Repositories\KontakInterface;

class Kontak extends Controller
{
    protected $kontakRepo;

    public function __construct(KontakInterface $repo){
        $this->kontakRepo = $repo;
    }

    //$request->all() mengembalikan semua data yang dikirim dalam bentuk JSON
    //menerima data baik dari Form HTML ataupun AJAX
    function create(Request $request){
        $this->kontakRepo->create($request->all());
    }

    function index(){
        
        return $this->kontakRepo->allSortedByName();
    }

    function get($id){
        return $this->kontakRepo->get($id);
    }

    //$request->all() mengembalikan semua data yang dikirim dalam bentuk JSON
    //menerima data baik dari Form HTML ataupun AJAX
    function update($id, Request $request){
        $this->kontakRepo->update($id, $request->all());
    }

    function delete($id){
        $this->kontakRepo->delete($id);
    }
}