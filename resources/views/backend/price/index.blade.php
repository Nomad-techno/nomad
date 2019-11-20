@extends('layouts.backend')
@section('content')
@php
    $i=1;
@endphp
<h1 class="text-center font-weight-bold text-secondary">Hello Pricing</h1>
<div class="container">
        <div class="col-md-12 ">
                <a href="{{ route('price.create') }}" class="btn btn-success p-2 m-5 text-white font-weight-bold">Create</a>
        </div>
        <div class="row">
                <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Price Category</th>
              <th scope="col">Price</th>
              <th scope="col">List</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
              @forelse ($price as $one)

              <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $one->price_category }}</td>
                <td>{{ $one->price }}</td>
                <td>{{ $one->list }}</td>
                <td>
                  <a href="" class="btn btn-outline-info"><i class="fa fa-eye "></i></a>
                  <a href="" class="btn btn-outline-success"><i class="fa fa-edit "></i></a>
                  <a href="" class="btn btn-outline-danger"><i class="fa fa-trash "></i></a>
                </td>
              </tr>
              @empty
              <tr>
                <td colspan="5" class="text-center font-weight-bold">Hozircha Pages bo'limda hech narsa yoq</td>
              </tr>
              @endforelse
          </tbody>
        </table>
        {{ $price->fragment('foo')->links() }}
                </div>
    </div>
</div>
@endsection
