@extends('layouts.backend')
@section('content')
    <h1 class="text-center font-weight-bold text-secondary">Hello Pages</h1>
    <div class="container">
        <div class="row">
            <p class="btn btn-success font-weight-bold"><a href="" class="font-weight"> Pages <i class="fa fa-plus"></i></a></p>
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
        <a href="" class="btn btn-outline-info"><i class="fa fa-eye "></i></a>
        <a href="" class="btn btn-outline-success"><i class="fa fa-edit "></i></a>
        <a href="" class="btn btn-outline-danger"><i class="fa fa-trash "></i></a>
      </td>
    </tr>
    <tr>
      <td colspan="5" class="text-center font-weight-bold">Hozircha Pages bo'limda hech narsa yoq</td>
    </tr>
  </tbody>
</table>
        </div>

    </div>
@endsection