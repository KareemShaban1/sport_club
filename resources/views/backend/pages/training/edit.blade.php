@extends('backend.layouts.master')
@section('css')

@section('title')
    {{ trans('training_trans.Edit_Training') }}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> {{ trans('training_trans.Edit_Training') }}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#"
                        class="default-color">{{ trans('training_trans.Edit_Training') }}</a></li>
                <li class="breadcrumb-item active">{{ trans('training_trans.Trainings') }}</li>

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



                <form method="post" enctype="multipart/form-data"
                    action="{{ Route('backend.training.update', $training->id) }}" autocomplete="off">

                    @csrf


                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="form-control-label">{{ trans('meal_ingredient_trans.Diet_Name') }}
                                </label>
                                <select name="training_group_id" class="custom-select" onchange="console.log($(this).val())">
                                    <option selected disabled>{{ trans('meal_ingredient_trans.Choose') }}</option>
                                    @foreach ($training_groups as $training_group)
                                        <option value="{{ $training_group->id }}" 
                                            @if($training_group->id == old('training_group_id', $training->training_group->id)) selected @endif>
                                            {{ $training_group->training_group_name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('training_group_id')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ trans('training_trans.Training_Name') }}<span
                                        class="text-danger">*</span></label>
                                <input type="text" name="training_name"
                                    value="{{ old('training_name', $training->training_name) }}" class="form-control">
                                @error('training_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ trans('training_trans.Training_Number') }}<span
                                        class="text-danger">*</span></label>
                                <input type="text" name="training_number"
                                    value="{{ old('training_number', $training->training_number) }}"
                                    class="form-control">
                                @error('training_number')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                    </div>


                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{ trans('training_trans.Training_Video') }}<span
                                        class="text-danger">*</span></label>
                                <input type="text" name="training_video"
                                    value="{{ old('training_video', $training->training_video) }}" class="form-control">
                                @error('training_video')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{ trans('training_trans.Training_Duartion') }}<span
                                        class="text-danger">*</span></label>
                                <input type="text" name="training_duration"
                                    value="{{ old('training_duration', $training->training_duration) }}"
                                    class="form-control">
                                @error('training_duration')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{ trans('training_trans.Training_Iterations') }}<span
                                        class="text-danger">*</span></label>
                                <input type="text" name="training_iterations"
                                    value="{{ old('training_iterations', $training->training_iterations) }}"
                                    class="form-control">
                                @error('training_iterations')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-outline mb-4">
                                <label class="form-label"
                                    for="textAreaExample6">{{ trans('training_trans.Training_Description') }}</label>
                                <textarea name="training_description" class="form-control" id="textAreaExample6" rows="3">
                                    {{ trans('training_trans.Training_Description') }}
                                </textarea>
                                @error('training_description')
                                    <p class="alert alert-danger">{{ $message }}</p>
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
        tagify = new Tagify(inputElm);
</script>
@endsection
