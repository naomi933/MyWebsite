@extends('layouts.app')

@section('title', 'Friends')

@section('content')

@foreach ($friends as $friend)

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <a href="/friends/{{ $friend['id'] }}" class="card-title">{{ $friend['nama'] }}</a>
    <h6 class="card-subtitle mb-2 text-muted">{{ $friend['no_telp'] }}</h6>
    <p class="card-text">{{ $friend['alamat'] }}</p>
    <a href="/friends/{{ $friend['id'] }}/edit" class="btn btn-sm btn-info">Edit Teman</a>
  <form action="/friends/{{$friend['id']}}" method="POST">
    @csrf
    @method('DELETE')
    <button class="card-link btn-danger">Delete Teman</button>
  </form>
  </div>
</div>

@endforeach

<div>
    {{$friends-> links() }}
</div>
@endsection
