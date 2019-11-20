@extends('layouts.backend')
@section('content')
    <h1 class="text-center text-secondary font-weight-bold">Create New Category </h1>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('category.update',['categories'=>$category]) }}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    <div class="form-group">
                        <label for="exampleInputEmail1">Category Name</label>
                        <input type="text" name="name_uz" class="form-control @error('name_uz') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter category name_uz" value="{{ old('name_uz',$category->name_uz) }}">
                        @error('name_uz')
                            <span class="text-danger" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Category Name</label>
                        <input type="text" name="name_ru" class="form-control @error('name_ru') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter category name_ru" value="{{ old('name_ru',$category->name_ru) }}">
                        @error('name_ru')
                            <span class="text-danger" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Category Name</label>
                        <input type="text" name="name_en" class="form-control @error('name_en') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter category name_en" value="{{ old('name_en',$category->name_en) }}">
                        @error('name_en')
                            <span class="text-danger" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Example select</label>
                        <select name="status" class="form-control @error('status') is-invalid @enderror" id="exampleFormControlSelect1">
                            <option selected>--Select status--</option>
                            <option value="1">Active</option>
                            <option value="0">InActive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
