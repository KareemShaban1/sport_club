@extends('backend.layouts.master')
@section('css')

@section('title')
    {{ trans('training_group_trans.Edit_Training_Group') }}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> {{ trans('training_group_trans.Edit_Training_Group') }}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#"
                        class="default-color">{{ trans('training_group_trans.Edit_Training_Group') }}</a></li>
                <li class="breadcrumb-item active">{{ trans('training_group_trans.Training_Groups') }}</li>

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



                <form method="post" enctype="multipart/form-data" action="{{ Route('backend.training_group.update',$training_group->id) }}"
                    autocomplete="off">

                    @csrf

                    
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ trans('training_group_trans.Training_Group_Name') }}<span
                                        class="text-danger">*</span></label>
                                <input type="text" name="training_group_name" value="{{old('training_group_name',$training_group->training_group_name)}}" class="form-control">
                                @error('Training_Group_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                    </div>

                    
                    <button type="submit" style="margin: 10px;" class="btn btn-success btn-md  btn-lg">
                        {{ trans('training_group_trans.Edit') }}
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
