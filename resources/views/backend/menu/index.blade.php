@extends('layouts.backend')
@section('content')
@php
    $i=1;
@endphp
    <h1 class="text-center font-weight-bold text-secondary">Hello Menu</h1>
    <div class="container">
        <div class="row">
            <p class="btn btn-success font-weight-bold"><a href="{{ route('menu.create') }}" class="font-weight"> Menu <i class="fa fa-plus"></i></a></p>
        </div>
        <div class="row">
        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Url</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @forelse ($menu as $one)

      <tr>
        <td>{{ $i++ }}</td>
        <td>{{ $one->name_uz }}</td>
        <td>{{ $one->url }}</td>
        <td>
          <a href="" class="btn btn-outline-info"><i class="fa fa-eye "></i></a>
          <a href="" class="btn btn-outline-success"><i class="fa fa-edit "></i></a>
          <a href="" class="btn btn-outline-danger"><i class="fa fa-trash "></i></a>
        </td>
      </tr>
      @empty
      <tr>
        <td colspan="5" class="text-center font-weight-bold">Hozircha Menuda hech narsa yoq</td>
      </tr>

      @endforelse
  </tbody>
</table>
{{ $menu->fragment('foo')->links() }}
        </div>

    </div>
@endsection
