@extends('layouts.app')

@section('title', 'Friends')

@section('content')

@foreach ($friends as $friend)

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <a href="/friends/ {{ $friend['id'] }}" class="card-title">{{ $friend['nama'] }}</a>
    <h6 class="card-subtitle mb-2 text-muted">{{ $friend['no_telp'] }}</h6>
    <p class="card-text">{{ $friend['alamat'] }}</p>

    <a href="/friends/{{$friend['id'] }}/edit" class="card-link btn-warning">Edit Teman</a>
    <a href="" class="card-link btn-danger">Delete Teman</a>
  </div>
</div>

@endforeach

<div>
    {{$friends-> links() }}
</div>
@endsection
