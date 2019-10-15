<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kontak;
use App\Repositories\KontakInterface;

class KontakController extends Controller
{
    protected $kontakRepo;

    public function __construct(KontakInterface $repo){
        $this->kontakRepo = $repo;
    }
    

    public function index(Request $request){
        $kontaks = null; 
        if ($request->search == null) {
            $kontaks = $this->kontakRepo->all();
        }else{
            $kontaks = $this->kontakRepo->search($request->search);
        }
        return view('kontak.index', compact('kontaks'));
    }

    public function delete($id){
        $this->kontakRepo->delete($id);
        return redirect(route('index'));
    }

    public function createPage(){
        return view('kontak.create');
    }

    public function create(Request $request){
        
        $this->kontakRepo->create($request->all());
        return redirect(route('index'));
    }

    public function editPage($id){
        $kontak = $this->kontakRepo->get($id);
        return view('kontak.edit', compact('kontak'));
    }

    public function edit(Request $request){
        
        $this->kontakRepo->update($request->id, $request->all());
        return redirect(route('index'));
    }



}
