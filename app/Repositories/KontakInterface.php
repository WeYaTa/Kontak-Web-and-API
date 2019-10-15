<?php

namespace App\Repositories;
use App\Kontak;


interface KontakInterface{
    public function create($kontak);
    public function all();
    public function get($id);
    public function update($id, $kontak);
    public function delete($id);
    public function search($nama);
}   