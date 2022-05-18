@extends('layouts.app')

@section('title', 'Friends')

@section('content')
<a href="/friends/create" class="btn btn-sm btn-warning">Tambah Teman</a><br><br>
@foreach ($friends as $friend)

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <table>
      <tbody>
        <tr>
          <td>Nama </td>
          <td><a href="/friends/{{ $friend['id'] }}" class="card-title">{{ $friend['nama'] }}</a></td>
        </tr>
        <tr>
          <td>No Telepon </td>
          <td><a href="/friends/{{ $friend['id'] }}" class="card-title">{{ $friend['no_telp'] }}</a></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td><a href="/friends/{{ $friend['id'] }}" class="card-title">{{ $friend['alamat'] }}</a></td>
        </tr>
      </tbody>
  </table>

  <table>
    <tbody>
    <a href="/friends/{{ $friend['id'] }}/edit" class="btn btn-sm btn-info">Edit Teman</a>
  <form action="/friends/{{$friend['id']}}" method="POST">
    @csrf
    @method('DELETE')
    <button class="btn btn-sm btn-danger">Delete Teman</button>
  </form>
  </tbody>
  </table>
  </div>
</div>

@endforeach

<div>
    {{$friends-> links() }}
</div>
@endsection
