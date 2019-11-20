@extends('layouts.backend')
@section('content')
@php
    $i=1;
@endphp
    <h1 class="text-center font-weight-bold text-secondary p-3">Hello Category</h1>
    <div class="container">
        <div class="row p-5">
            <a href="{{ route('category.create')}}"  class="btn btn-success text-light font-weight-bold m-5"> Category <i class="fa fa-plus"></i></a>
        </div>
        <div class="row">
        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col"><a href="" style="float:right; padding-right:55px">Action</a> </th>
    </tr>
  </thead>
  <tbody>
      @forelse ($category as $one)
      <tr>

      <td>{{ $i++ }}</td>
      <td>{{ $one->name_uz }}</td>
      <td>
        @php
        if($one->status==1){
              echo "Active";
          }
          else{
              echo "InActive";
          }
        @endphp

      </td>
      <td>
        <a href="" style="float:right"  class="btn btn-info"><i class="fa fa-eye p-3 text-light"></i></a>
        <a href="{{ route('category.edit',['category'=>$one]) }}" style="float:right" class="btn btn-success m-1"><i class="fa fa-edit  p-3 text-light"></i></a>
        <a href="" class="btn btn-danger float-right delete-menu text-white m-1" data-toggle="modal" data-target="#fullHeightModalRight" data-item="{{ $one }}" data-url="{{ route('category.destroy',['category'=>$one]) }}"> <i class="fa fa-trash  p-3"></i></a>
      </td>

      @empty
      <tr>
            <td colspan="5" class="text-center font-weight-bold">Hozircha hech narsa yoq</td>
          </tr>
      @endforelse

    </tr>

  </tbody>
</table>
        </div>
        {{ $category->fragment('foo')->links() }}
    </div>
    <script>
            $(function () {
                $('.delete-menu').on('click', function () {

                    var url = $(this).attr('data-url');
                    var data = JSON.parse($(this).attr('data-item'));
                    $('#myModalLabel').text(data.name_uz);
                    $('.permission-delete-form').attr('action', url);
                    $('.delete-question').find('span').text(data.name_uz);
                })
            })

        </script>

@endsection
<div class="modal fade right" id="fullHeightModalRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
    <div class="modal-dialog modal-full-height modal-top" role="document"  style="">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title w-100 text-danger" id="myModalLabel"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-danger font-weight-bold delete-question">  <span></span>   ni tizimdan o'chirishni hohlaysizmi?</p>
            </div>
            <div class="modal-footer justify-content-center">
                <form action="" class="permission-delete-form" method="post">
                    @csrf
                    @method('delete')
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Yopish</button>
                    <button type="submit" class="btn btn-danger">Ha, hohlayman!</button>
                </form>
            </div>
        </div>
    </div>
</div>
