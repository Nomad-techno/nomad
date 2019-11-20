@extends('layouts.backend')
@section('content')
@php
    $i=1;
@endphp
    <h1 class="text-center font-weight-bold text-secondary">Hello Partners</h1>
    <div class="container">
        <div class="row p-5">
            <a href="{{ route('partners.create') }}" class="btn btn-success font-weight-bold text-light"> Partners <i class="fa fa-plus"></i></a>
        </div>
        <div class="row">
        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Url</th>
      <th scope="col">Photo</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @forelse ($partners as $one)
      <tr>
        <td>{{ $i++ }}</td>
        <td>{{ $one->name }}</td>
        <td>{{ $one->url }}</td>
        <td> <img src="{{ $one->image!=null? asset('storage') .'/'. $one->image:asset('backend/img/no_image.png')}}" width="100px" alt=""></td>
        <td>
          <a href="" class="btn btn-info"><i class="fa fa-eye text-light"></i></a>
          <a href="" class="btn btn-success"><i class="fa fa-edit text-light"></i></a>
          <a href="" class="btn btn-danger"><i class="fa fa-trash text-light"></i></a>
        </td>
      </tr>
      @empty
        <tr>
            <td colspan="6">Hozircha Hech Narsa Yo'q</td>
        </tr>
      @endforelse
  </tbody>
</table>
        </div>
        {{ $partners->fragment('foo')->links() }}

    </div>
@endsection
