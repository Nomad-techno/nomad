@extends('layouts.backend')
@section('content')
    <h1 class="text-center font-weight-bold text-secondary">Hello Settings</h1>

<a href="{{ route('settings.create') }}" class="btn btn-success text-light btn-lg ml-4 w-25">Create Setting</a>
@php
$i = 1;
@endphp
<div class="container-fluid">
    <div class="container-fluid ">
        <h2 class="text-center"></h2>
    </div>
    <div class="container">
        <div class="row">
            @if(!session()->has('message'))
            <div class="alter alter-success">
                <Strong>{{session()->get('message')}}</Strong>
            </div>
            @endif
        </div>
    </div>
    <div class="table-responsive">
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-4">

                </div>
                <div class="col-md-4">

                </div>
            </div>
        </div>
        <div class="table-responsive">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Key</th>
                        <th>Title_uz</th>
                        <th>Value_uz</th>
                        <th>Photo</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse($settings as $one)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$one->key}}</td>
                        <td>{{$one->title_uz}}</td>
                        <td>{{$one->value_uz}}</td>
                        <td><img src="{{ $one->image!=null? asset('storage').'/'. $one->image:asset('img/no_image.png') }}" alt="" width="100px"></td>
                        <td>

                            <a class="btn btn-info btn-sm text-white" href="">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a class="btn btn-success btn-sm text-white" href="{{route('settings.edit',['one'=>$one])}}">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-sm delete-student text-white" data-toggle="modal" data-target="#fullHeightModalRightThree" data-item="{{$one}}" data-url="{{route('settings.destroy',['one'=>$one])}}"> <i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center">Hozircha hech qanday hodimlar ro'yxati mavjud emas!</td>
                    </tr>
						@endforelse
                </tbody>
            </table>
        </div>
        {{ $settings->fragment('foo')->links() }}
    </div>
</div>
<script>
    $(function() {
        $('.delete-student').on('click', function() {
            // $(this).preventDefault();

            var url = $(this).attr('data-url');
            var data = JSON.parse($(this).attr('data-item'));
            $('#myModalLabel').text(data.title_uz);
            $('.permission-delete-form').attr('action', url);
            $('.delete-question').find('span').text(data.title_uz);
        })
    })
</script>
@endsection
