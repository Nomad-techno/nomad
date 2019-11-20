@extends('layouts.backend')
@section('content')
    <h1 class="text-center text-secondary font-weight-bold p-4">Create New Category </h1>
    <div class="container">
        <div class="row p-4">
            <div class="col-md-12">
                <form action="{{ route('category.store') }}" method="POST">
                        @csrf
                    <div class="form-group pt-4">
                        <label for="exampleInputEmail1">Category Name</label>
                        <input type="text" name="name_uz" class="form-control @error('name_uz') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter category name_uz">
                        @error('name_uz')
                            <span class="text-danger" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group pt-4">
                        <label for="exampleInputEmail1">Category Name</label>
                        <input type="text" name="name_ru" class="form-control @error('name_ru') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter category name_ru">
                        @error('name_ru')
                            <span class="text-danger" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group pt-4">
                        <label for="exampleInputEmail1">Category Name</label>
                        <input type="text" name="name_en" class="form-control @error('name_en') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter category name_en">
                        @error('name_en')
                            <span class="text-danger" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group pt-4">
                        <label for="exampleFormControlSelect1">Example select</label>
                        <select name="status" class="form-control @error('status') is-invalid @enderror" id="exampleFormControlSelect1">
                            <option selected>--Select status--</option>
                            <option value="1">Active</option>
                            <option value="0">InActive</option>
                        </select>
                    </div>
                    <br>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
