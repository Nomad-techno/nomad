@extends('layouts.backend')
@section('content')
        <h1 class="text-center font-weight-bold text-secondary">Create new Post</h1>
        <div class="container-fluide">
            <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="container-fluide">
                    <div class="row" style="margin:50px">
                        <div class="col-md-12">
                                <div class="for-group w-100 m-auto 0">
                                        <label for="category">Category <span style="color: red">*</span></label>
                                            <select name="category_id" id="category_id" class="form-control border-0  {{ $errors->has('category_id') ? ' is-invalid' : '' }}">
                                                    <option selected disabled>-- @lang('pages.select_one') --</option>
                                                    @foreach($category_id as $one)
                                                        <option  value="{{ $one->id }}">{{ $one->name_uz }}</option>
                                                    @endforeach
                                            </select>
                                            @if ($errors->has('one'))
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('one') }}</strong>
                                        </span>
                                            @endif
                                    </div>
                        </div>
                    </div>
                   <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="card">
                          <div class="card-header card-header-tabs card-header-primary">
                            <div class="nav-tabs-navigation">
                              <div class="nav-tabs-wrapper">
                                <span class="nav-tabs-title">Post To'ldirish</span>
                                <ul class="nav nav-tabs" data-tabs="tabs">
                                  <li class="nav-item">
                                    <a class="nav-link active" href="#profile" data-toggle="tab">
                                      <i class="material-icons"></i> Post Uz
                                      <div class="ripple-container"></div>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#messages" data-toggle="tab">
                                      <i class="material-icons"></i> Post Ru
                                      <div class="ripple-container"></div>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#settings" data-toggle="tab">
                                      <i class="material-icons"></i> Post Eng
                                      <div class="ripple-container"></div>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="card-body">
                            <div class="tab-content">
                              <div class="tab-pane active" id="profile">
                                <div class="form-group pt-5">
                                    <label for="form1">Title_uz</label>
                                    <input type="text" id="form1" class="form-control @error('title_uz') is-invalid @enderror " name="title_uz" value="{{old('title_uz')}}">
                                    @error('title_uz')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group p-2">
                                    <label for="">Description_uz</label>
                                    <textarea name="description_uz" cols="20" rows="5" class="form-control @error('description_uz') is-invalid @enderror">{{old('description_uz')}}</textarea>
                                    @error('description_uz')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <label for="post_body">Body_uz</label>
                                <div class="form-group p-2">
                                    <textarea id="post_body" name="body_uz" cols="30" rows="5" class="form-control @error('body_uz') is-invalid @enderror">{{old('body_uz')}}</textarea>
                                    @error('body_uz')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                              </div>
                              <div class="tab-pane" id="messages">
                                <div class="form-group pt-5">
                                    <label for="form1">Title_ru</label>
                                    <input type="text" id="form1" class="form-control @error('title_ru') is-invalid @enderror " name="title_ru" value="{{old('title_ru')}}">
                                    @error('title_ru')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                                <div class="form-group p-2">
                                    <label for="">Description_ru</label>
                                    <textarea name="description_ru" cols="30" rows="5" class="form-control @error('description_ru') is-invalid @enderror">{{old('description_ru')}}</textarea>
                                    @error('description_ru')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <label for="post_body">Body_ru</label>
                                <div class="form-group p-2">
                                    <textarea id="post_body2" name="body_ru" cols="30" rows="5" class="form-control @error('body_ru') is-invalid @enderror">{{old('body_ru')}}</textarea>
                                    @error('body_ru')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>


                              </div>
                              <div class="tab-pane" id="settings">
                                <div class="form-group pt-5">
                                    <label for="form1">Title</label>
                                    <input type="text" id="form1" class="form-control @error('title_en') is-invalid @enderror " name="title_en" value="{{old('title_en')}}">
                                    @error('title_en')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                                <div class="form-group p-2">
                                    <label for="">Description</label>
                                    <textarea name="description_en" cols="30" rows="5" class="form-control @error('description_en') is-invalid @enderror">{{old('description_en')}}</textarea>
                                    @error('description_en')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <label for="post_body">Body</label>
                                <div class="form-group p-2 form-group">
                                    <textarea id="post_body1" name="body_en" cols="30" rows="5" class="form-control @error('body_en') is-invalid @enderror">{{old('body_en')}}</textarea>
                                    @error('body_en')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="card">
                          <div class="card-header card-header-primary">
                            <h4 class="card-title">Post Create</h4>
                            <p class="card-category">Post Img, </p>
                          </div>
                          <div class="card-body">
                            <div class="row pt-2">
                                <div class="col-md-12">
                                    <label for="img">Post Image</label>
                                    <input id="img" type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mt-5">
                                <div class="col-md-12">
                                    <label for="banner">Banner</label>
                                    <input type="checkbox" name="banner" id="banner" class="form-control @error('banner') is-invalid @enderror">
                                    @error('banner')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                    <label for="exampleFormControlSelect1">Example select</label>
                                    <select name="status" class="form-control @error('status') is-invalid @enderror" id="exampleFormControlSelect1">
                                        <option selected>--Select status--</option>
                                        <option value="1">Active</option>
                                        <option value="0">InActive</option>
                                    </select>
                                </div>
                            <div class="row mt-5 pt-5">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-info font-weight-bold btn-block btn-rounded z-depth-1">Save</button>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                   </div>

                    {{-- <div class="row" style="margin:0">
                            <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="nav m-5 flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                <a class="nav-link  active font-weight-bold" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Post_Uz</a>
                                                <a class="nav-link  font-weight-bold " id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Пост_РУ</a>
                                                <a class="nav-link  font-weight-bold" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Post_En</a>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                <div class="container">
                                                        <div class="form-group p-2">
                                                            <label for="form1">Title_uz</label>
                                                            <input type="text" id="form1" class="form-control @error('title_uz') is-invalid @enderror " name="title_uz" value="{{old('title_uz')}}">
                                                            @error('title_uz')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    <div class="form-group p-2">
                                                        <label for="">Description_uz</label>
                                                        <textarea name="description_uz" cols="20" rows="5" class="form-control @error('description_uz') is-invalid @enderror">{{old('description_uz')}}</textarea>
                                                        @error('description_uz')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <label for="post_body">Body_uz</label>
                                                    <div class="form-group p-2">
                                                        <textarea id="post_body" name="body_uz" cols="30" rows="5" class="form-control @error('body_uz') is-invalid @enderror">{{old('body_uz')}}</textarea>
                                                        @error('body_uz')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                                <div class="container">
                                                    <div class="form-group p-2">
                                                        <label for="form1">Title_ru</label>
                                                        <input type="text" id="form1" class="form-control @error('title_ru') is-invalid @enderror " name="title_ru" value="{{old('title_ru')}}">
                                                        @error('title_ru')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror

                                                    </div>
                                                    <div class="form-group p-2">
                                                        <label for="">Description_ru</label>
                                                        <textarea name="description_ru" cols="30" rows="5" class="form-control @error('description_ru') is-invalid @enderror">{{old('description_ru')}}</textarea>
                                                        @error('description_ru')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <label for="post_body">Body_ru</label>
                                                    <div class="form-group p-2">
                                                        <textarea id="post_body2" name="body_ru" cols="30" rows="5" class="form-control @error('body_ru') is-invalid @enderror">{{old('body_ru')}}</textarea>
                                                        @error('body_ru')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                <div class="container">
                                                    <div class="form-group p-2">
                                                        <label for="form1">Title</label>
                                                        <input type="text" id="form1" class="form-control @error('title_en') is-invalid @enderror " name="title_en" value="{{old('title_en')}}">
                                                        @error('title_en')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror

                                                    </div>
                                                    <div class="form-group p-2">
                                                        <label for="">Description</label>
                                                        <textarea name="description_en" cols="30" rows="5" class="form-control @error('description_en') is-invalid @enderror">{{old('description_en')}}</textarea>
                                                        @error('description_en')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <label for="post_body">Body</label>
                                                    <div class="form-group p-2 form-group">
                                                        <textarea id="post_body1" name="body_en" cols="30" rows="5" class="form-control @error('body_en') is-invalid @enderror">{{old('body_en')}}</textarea>
                                                        @error('body_en')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row pt-2">
                                        <div class="col-md-12">
                                            <label for="img">Post Image</label>
                                            <input id="img" type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                                            @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mt-5">
                                        <div class="col-md-12">
                                            <label for="banner">Banner</label>
                                            <input type="checkbox" name="banner" id="banner" class="form-control @error('banner') is-invalid @enderror">
                                            @error('banner')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <label for="exampleFormControlSelect1">Example select</label>
                                            <select name="status" class="form-control @error('status') is-invalid @enderror" id="exampleFormControlSelect1">
                                                <option selected>--Select status--</option>
                                                <option value="1">Active</option>
                                                <option value="0">InActive</option>
                                            </select>
                                        </div>
                                    <div class="row mt-5 pt-5">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-outline-info font-weight-bold btn-block btn-rounded z-depth-1">Save</button>
                                        </div>
                                    </div>
                                </div>
                    </div> --}}
                </div>
            </form>
        </div>
@endsection
