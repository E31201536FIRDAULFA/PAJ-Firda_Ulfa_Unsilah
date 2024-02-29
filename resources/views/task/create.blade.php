@extends('layouts.app')

@section('content')

    <div class="container">
<h1>
    Membuat Task Baru
</h1>

<form  method="POST" action="{{url('/task/store')}}">
    @csrf

    <label for="name">Nama</label>
    <input type="text" name="name" id="nama">
    <br>
    <label for="description">Deskripsi</label>
    <textarea type="text" name="description" id="" cols="30" rows="10"></textarea>
    <br>
    <button type="submit">Buat Task</button>
</form>

<a href="{{url('/task')}}">Kembali Ke Task</a>
    </div>

@endsection