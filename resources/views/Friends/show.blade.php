@extends('layouts.app')

@section('title', 'cobaaaaaa')

@section('content')
    <div class="card">
        <div class="cardbody">
        <h3>Nama Teman : {{ $friends ['nama']}} </h3>
        <h3>No. Tlp : {{ $friends ['no_telp']}} </h3>
        <h3>Alamat : {{ $friends ['alamat]}} </h3>
        </div>
    </div>

@endsection
