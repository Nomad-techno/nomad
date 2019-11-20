@extends('layouts.backend')
@section('content')
    <h1 class="font-weight-bold text-secondery text-center">Create New Menu </h1>
    <form action="{{ route('menu.store') }}" method="post" enctype="multipart/form-data">
        @csrf
       <div class="container">
           <div class="row">
               <div class="col-md-12">
                   <label for="">Position</label>
                   <select name="position" id="" class="form-control">
                       <option value="1">Navbar</option>
                       <option value="0">Footer</option>
                   </select>
               </div>
           </div>
           <div class="row pt-4">
            <div class="col-md-4">
                {{-- <div class="form-group"> --}}
                    <label for="name">Name Uz</label>
                    <input type="text" name="name_uz" class="form-control @error('name_uz') is-invalid @enderror" id="name" placeholder="name_Uz enter" value="{{ old('name_uz') }}">
                    @error('name_uz')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                {{-- </div> --}}
               </div>
               <div class="col-md-4">
                <label for="form1">Name Ru</label>
                <input type="text" id="form1" class="form-control @error('name_ru') is-invalid @enderror " name="name_ru" value="{{ old('name_ru') }}">
                @error('name_ru')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
               </div>
               <div class="col-md-4">
                <label for="name">Name Eng</label>
                <input type="text" name="name_en" class="form-control @error('name_en') is-invalid @enderror" id="name" placeholder="name_En enter" value="{{ old('name_en') }}">
                    @error('name_en')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
            </div>
           </div>
           <div class="row px-3">
               <div class="form-group w-100">
                   <label for="url">Url</label>
                   <input type="text" name="url" class="form-control @error('url') is-invalid @enderror" id="" placeholder="/" value="{{ old('url') }}">
                   @error('url')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
                   @enderror
                </div>
           </div>
           <div class="row ">
                <div class="col-md-6">
                    <label for="">Parent</label>
                    <select name="parent" id="" class="form-control @error('parent') is-invalid @enderror">
                        @foreach ($menus as $one)
                            <option value="{{ $one->id }}">{{ $one->name_uz }}</option>
                        @endforeach
                    </select>
                    @error('parent')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="form1">Order By</label>
                    <input type="number" id="form1" class="form-control @error('order_by') is-invalid @enderror " name="order_by" value="{{ old('order_by', $order!=null?$order->order_by+1:0)}}">
                    @error('order_by')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
           </div>
                   <button class="btn btn-outline-info my-5 w-100">Save</button>
       </div>
    </form>
@endsection
