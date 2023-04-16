@extends('backend.layouts.master')
@section('css')

@section('title')
    {{ trans('player_trans.Edit_Player') }}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> {{ trans('player_trans.Edit_Player') }}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#"
                        class="default-color">{{ trans('player_trans.Edit_Player') }}</a></li>
                <li class="breadcrumb-item active">{{ trans('player_trans.Players') }}</li>

            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">



                <form method="post" enctype="multipart/form-data" action="{{ Route('backend.player.update',$player->id) }}"
                    autocomplete="off">

                    @csrf
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ trans('player_trans.Player_Name') }}<span
                                        class="text-danger">*</span></label>
                                <input type="text" name="name" value="{{old('name',$player->name)}}" class="form-control">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label> {{ trans('player_trans.Email') }} </label>
                                <input class="form-control" name="email" value="{{old('email',$player->email)}}" type="email">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label> {{ trans('player_trans.Birth_Of_Date') }} <span
                                        class="text-danger">*</span></label>
                                <input class="form-control" name="birth_of_date" value="{{old('birth_of_date',$player->birth_of_date)}}" id="datepicker-action"
                                    data-date-format="yyyy-mm-dd">
                                @error('birth_of_date')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{ trans('player_trans.Phone') }} <span class="text-danger">*</span></label>
                                <input type="text" name="phone" value="{{old('phone',$player->phone)}}" class="form-control">
                                @error('phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label> {{ trans('player_trans.Subscription_Number') }} </label>
                                <input class="form-control" name="subscription_number" value="{{old('subscription_number',$player->subscription_number)}}" type="number">
                                @error('subscription_number')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                    </div>


                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{ trans('player_trans.Height') }}<span class="text-danger">*</span></label>
                                <input type="number" name="height" value="{{old('height',$player->height)}}" class="form-control">
                                @error('height')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{ trans('player_trans.Weight') }}<span class="text-danger">*</span></label>
                                <input type="number" name="weight" value="{{old('weight',$player->weight)}}" class="form-control">
                                @error('weight')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="gender"> {{ trans('player_trans.Player_Gender') }} <span
                                        class="text-danger">*</span></label>

                                <select class="custom-select mr-sm-2" name="gender">
                                    <option selected disabled>{{ trans('player_trans.Choose') }}</option>
                                    <option value="male" @if(old('gender', $player->gender) == 'male') selected @endif>{{ trans('player_trans.Male') }}</option>
                                    <option value="female" @if(old('gender', $player->gender) == 'female') selected @endif>{{ trans('player_trans.Female') }}</option>
                                </select>
                                @error('gender')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>
                        </div>


                    </div>


                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ trans('player_trans.Nationality') }}<span
                                        class="text-danger">*</span></label>
                                <input type="text" name="nationality" value="{{old('nationality',$player->nationality)}}" class="form-control">
                                @error('nationality')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>{{ trans('player_trans.Salary') }}<span class="text-danger">*</span></label>
                                <input type="number" name="salary" value="{{old('salary',$player->salary)}}" class="form-control">
                                @error('salary')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="gender"> {{ trans('player_trans.Address') }} <span
                                        class="text-danger">*</span></label>
                                <input type="text" name="address" value="{{old('address',$player->address)}}" class="form-control">
                                @error('Address')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="professionalism_degree"> {{ trans('player_trans.Professionalism_Degree') }} <span
                                        class="text-danger">*</span></label>

                                <select class="custom-select mr-sm-2" name="professionalism_degree">
                                    <option selected disabled>{{ trans('player_trans.Choose') }}</option>
                                    <option value="beginner" @if(old('professionalism_degree', $player->professionalism_degree) == 'beginner') selected @endif>
                                        {{ trans('player_trans.Beginner') }}
                                    </option>
                                    <option value="intermediate" @if(old('professionalism_degree', $player->professionalism_degree) == 'intermediate') selected @endif>
                                        {{ trans('player_trans.Intermediate') }}
                                    </option>
                                    <option value="professional" @if(old('professionalism_degree', $player->professionalism_degree) == 'professional') selected @endif>
                                        {{ trans('player_trans.Professional') }}
                                    </option>
                                    <option value="very_professional" @if(old('professionalism_degree', $player->professionalism_degree) == 'very_professional') selected @endif>
                                        {{ trans('player_trans.Very_Professional') }}
                                    </option>
                                </select>
                                @error('professionalism_degree')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-outline mb-4">
                                <label class="form-label"
                                    for="textAreaExample6">{{ trans('player_trans.Player_Bio') }}</label>
                                <textarea name="player_bio" class="form-control" id="textAreaExample6" rows="3">
                                    {{old('player_bio',$player->player_bio)}}
                                </textarea>
                                @error('Player_bio')
                                    <p class="alert alert-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    {{-- Image input --}}
                    <div class="row">
                              <div class="col-md-4">
                                  <div class="form-group">
                                      <label> {{ trans('player_trans.Image') }}<span class="text-danger">*</span></label>
                                      <div class="avatar-img">
                                          {{-- <label class="avatar-label circle" for="upload-photo" >+</label>
                                          <img class="avatar" src="{{URL::asset('assets/images/user.png')}}" alt=""> --}}
                                          <input onchange="preview()" type="file" name="image" accept="image/*"
                                              id="upload-photo" />
                                      </div>
                                      @error('image')
                                          <p class="alert alert-danger">{{ $message }}</p>
                                      @enderror
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="border rounded-lg text-center p-3">
                                      <img src="{{ asset('backend/assets/images/profile-avatar.jpg') }}" height="200"
                                          width="200" class="img-fluid" id="frame" />
                                  </div>
                              </div>
                          </div>


                    <button type="submit" style="margin: 10px;"
                        class="btn btn-success btn-md  btn-lg">{{ trans('player_trans.Edit') }}</button>


                </form>


            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')
<script>
          function preview() {
              frame.src = URL.createObjectURL(event.target.files[0]);
          }
      
          var inputElm = document.querySelector('[name=tags]'),
          tagify = new Tagify (inputElm);
      </script>
@endsection
