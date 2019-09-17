@extends('layouts.backend')
@section('content')
    <h1 class="text-center font-weight-bold text-secondary">Hello Post</h1>
    <div class="container">
        <div class="row">
            <p class="btn btn-success font-weight-bold"><a href="" class="font-weight"> Post <i class="fa fa-plus"></i></a></p>
        </div>
        <div class="row">
        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>
        <a href="" class="btn btn-info"><i class="fa fa-eye text-light"></i></a>
        <a href="" class="btn btn-success"><i class="fa fa-edit text-light"></i></a>
        <a href="" class="btn btn-danger"><i class="fa fa-trash text-light"></i></a>
      </td>
    </tr>
    <tr>
      <td colspan="5" class="text-center font-weight-bold">Hozircha Post hech narsa yoq</td>
    </tr>
  </tbody>
</table>
        </div>

    </div>
@endsection