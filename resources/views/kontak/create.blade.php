@extends('kontak.base')
@section('body')
<h1>Add New Kontak</h1>
<form action="{{route('create')}}" method="post">
    @csrf
    {{-- <input type="hidden" name="id" value="{{$kontak->id}}"> --}}
    Nama :   <input type="text" name="nama"><br>
    Telepon :<input type="text" name="telepon"><br>
    Email :  <input type="text" name="email"><br>
    Alamat : 
    <textarea rows="4" cols="50" name= "alamat"></textarea><br>
    <input type="submit" value="Add">
</form>
@endsection