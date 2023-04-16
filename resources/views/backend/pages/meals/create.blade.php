@extends('backend.layouts.master')
@section('css')

@section('title')
    {{ trans('meal_trans.Add_Meal') }}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> {{ trans('meal_trans.Add_Meal') }}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#"
                        class="default-color">{{ trans('meal_trans.Add_Meal') }}</a></li>
                <li class="breadcrumb-item active">{{ trans('meal_trans.Meals') }}</li>

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



                <form method="post" enctype="multipart/form-data" action="{{ Route('backend.meal.store') }}"
                    autocomplete="off">

                    @csrf

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="form-control-label">{{trans('meal_trans.Diet_Name')}} </label>
                                <select name="diet_id" class="custom-select mr-sm-2">
                                    <option selected disabled>{{ trans('meal_trans.Choose') }}</option>
                                    @foreach ($diets as $diet)
                                    <option value="{{ $diet->id }}" >{{ $diet->diet_name }}</option>
                                    @endforeach
                                </select>
                                @error('diet_id')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror 
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ trans('meal_trans.Meal_Name') }}<span
                                        class="text-danger">*</span></label>
                                <input type="text" name="meal_name" class="form-control">
                                @error('Meal_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ trans('meal_trans.Days') }}<span
                                        class="text-danger">*</span></label>
                                <input type="text" name="days" class="form-control">
                                @error('days')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                      
                    </div>

                    <button type="submit" style="margin: 10px;" class="btn btn-success btn-md  btn-lg">
                        {{ trans('meal_trans.Add') }}
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
