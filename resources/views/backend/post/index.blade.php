@extends('layouts.backend')
@section('content')
@php
    $i=1;
@endphp
    <h1 class="text-center font-weight-bold text-secondary">Hello Post</h1>
    <div class="container">
        <div class="row">
            <a href="{{ route('post.create') }}"  class="btn btn-success font-weight-bold m-5 text-light"> Post <i class="fa fa-plus"></i></a>
        </div>
        <div class="row">
        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Category</th>
      <th scope="col">Title</th>
      <th scope="col">Phote</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @forelse ($post as $one)
            @php
                    $category_name=App\Category::find($one->category_id);
            @endphp
      <tr>
        <td>{{ $i++ }}</td>
        <td>{{ $category_name?$category_name->name_uz:''}}</td>
        <td>{{ $one->title_uz }}</td>
        <td><img src="{{ $one->image!=null? asset('storage') .'/'. $one->image:asset('backend/img/no_image.png')}}" style="width:100px" alt=""></td>
        <td>
          <a href="" class="btn btn-info"><i class="fa fa-eye text-light"></i></a>
          <a href="{!! route('post.edit',['one'=>$one]) !!}" class="btn btn-success"><i class="fa fa-edit text-light"></i></a>
          <a href="" class="btn btn-danger"><i class="fa fa-trash text-light"></i></a>
        </td>
      </tr>
      @empty
      <tr>
        <td colspan="5" class="text-center font-weight-bold">Hozircha Post hech narsa yoq</td>
      </tr>

      @endforelse
  </tbody>
</table>
        </div>
        {{ $post->fragment('foo')->links() }}

    </div>
@endsection
