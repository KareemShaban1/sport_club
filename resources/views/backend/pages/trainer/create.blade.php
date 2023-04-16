@extends('backend.layouts.master')
@section('css')

@section('title')
    {{ trans('trainer_trans.Add_Trainer') }}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> {{ trans('trainer_trans.Add_Trainer') }}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#"
                        class="default-color">{{ trans('trainer_trans.Add_Trainer') }}</a></li>
                <li class="breadcrumb-item active">{{ trans('trainer_trans.Trainers') }}</li>

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



                <form method="post" enctype="multipart/form-data" action="{{ Route('backend.trainer.store') }}"
                    autocomplete="off">

                    @csrf
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ trans('trainer_trans.Trainer_Name') }}<span
                                        class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label> {{ trans('trainer_trans.Email') }} </label>
                                <input class="form-control" name="email" type="email">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label> {{ trans('trainer_trans.Birth_Of_Date') }} <span
                                        class="text-danger">*</span></label>
                                <input class="form-control" name="birth_of_date" id="datepicker-action"
                                    data-date-format="yyyy-mm-dd">
                                @error('birth_of_date')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{ trans('trainer_trans.Phone') }} <span class="text-danger">*</span></label>
                                <input type="text" name="phone" class="form-control">
                                @error('phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label> {{ trans('trainer_trans.Subscription_Number') }} </label>
                                <input class="form-control" name="subscription_number" type="number">
                                @error('subscription_number')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                    </div>


                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{ trans('trainer_trans.Height') }}<span class="text-danger">*</span></label>
                                <input type="number" name="height" class="form-control">
                                @error('height')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{ trans('trainer_trans.Weight') }}<span class="text-danger">*</span></label>
                                <input type="number" name="weight" class="form-control">
                                @error('weight')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="gender"> {{ trans('trainer_trans.Trainer_Gender') }} <span
                                        class="text-danger">*</span></label>

                                <select class="custom-select mr-sm-2" name="gender">
                                    <option selected disabled>{{ trans('trainer_trans.Choose') }}</option>
                                    <option value="male">{{ trans('trainer_trans.Male') }}</option>
                                    <option value="female">{{ trans('trainer_trans.Female') }}</option>
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
                                <label>{{ trans('trainer_trans.Nationality') }}<span
                                        class="text-danger">*</span></label>
                                <input type="text" name="nationality" class="form-control">
                                @error('nationality')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>{{ trans('trainer_trans.Salary') }}<span class="text-danger">*</span></label>
                                <input type="number" name="salary" class="form-control">
                                @error('salary')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="gender"> {{ trans('trainer_trans.Address') }} <span
                                        class="text-danger">*</span></label>
                                <input type="text" name="address" class="form-control">
                                @error('address')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-outline mb-4">
                                <label class="form-label"
                                    for="textAreaExample6">{{ trans('trainer_trans.Trainer_Bio') }}</label>
                                <textarea name="trainer_bio" class="form-control" id="textAreaExample6" rows="3"></textarea>
                                @error('trainer_bio')
                                    <p class="alert alert-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    {{-- Image input --}}
                    <div class="row">
                              <div class="col-md-4">
                                  <div class="form-group">
                                      <label> {{ trans('trainer_trans.Image') }}<span class="text-danger">*</span></label>
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


                    <button type="submit" style="margin: 10px;" class="btn btn-success btn-md  btn-lg">
                        {{ trans('trainer_trans.Add') }}
                    </button>


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
