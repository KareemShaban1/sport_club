@extends('backend.layouts.master')
@section('css')

@section('title')
    {{ trans('diet_trans.Edit_Diet') }}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> {{ trans('diet_trans.Edit_Diet') }}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#"
                        class="default-color">{{ trans('diet_trans.Edit_Diet') }}</a></li>
                <li class="breadcrumb-item active">{{ trans('diet_trans.Diets') }}</li>

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



                <form method="post" enctype="multipart/form-data" action="{{ Route('backend.diet.update',$diet->id) }}"
                    autocomplete="off">

                    @csrf
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ trans('diet_trans.Diet_Name') }}<span
                                        class="text-danger">*</span></label>
                                <input type="text" name="diet_name" value="{{old('diet_name',$diet->diet_name)}}" class="form-control">
                                @error('diet_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                      
                    </div>

                    <button type="submit" style="margin: 10px;" class="btn btn-success btn-md  btn-lg">
                        {{ trans('trainer_trans.Edit') }}
                    </button>
                    


                </form>


            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
