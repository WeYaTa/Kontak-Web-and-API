@extends('kontak.base')
@section('body')
<h1>Home Page</h1>

<button onclick="location.href = '{{route('createPage')}}';" id="button_add">Add New Kontak</button><br><br>
    <form method="GET" action ="{{route('index')}}">
        <input type="text" name = "search">
        <input type="submit" value ="Search">
    </form>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Nama</td>
            <td>Telepon</td>
            <td>Email</td>
            <td>Alamat</td>
            <td>Action</td>
        </tr>
        @if ($kontaks != null)
            @foreach ($kontaks as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->telepon}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->alamat}}</td>
                    <td><button onclick="location.href = '{{route('editPage',['id'=>$item->id])}}';" id="button_edit">Edit</button>
                        <button onclick="if(confirm('Are you sure ?')) location.href = '{{route('delete',['id'=>$item->id])}}';" id="button_delete">Delete</button></td>
                </tr>
            @endforeach
        @endif
    
    </table>
@endsection