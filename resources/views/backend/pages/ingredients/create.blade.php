@extends('backend.layouts.master')
@section('css')

@section('title')
    {{ trans('meal_ingredient_trans.Add_Meal_Ingredient') }}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> {{ trans('meal_ingredient_trans.Add_Meal_Ingredient') }}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#"
                        class="default-color">{{ trans('meal_ingredient_trans.Add_Meal_Ingredient') }}</a></li>
                <li class="breadcrumb-item active">{{ trans('meal_ingredient_trans.Meal_Ingredients') }}</li>

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



                <form method="post" enctype="multipart/form-data" action="{{ Route('backend.ingredient.store') }}"
                    autocomplete="off">

                    @csrf

                    <div class="row">

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="form-control-label">{{ trans('meal_ingredient_trans.Diet_Name') }}
                                </label>
                                <select name="diet_id" class="custom-select" onchange="console.log($(this).val())">
                                    <option selected disabled>{{ trans('meal_ingredient_trans.Choose') }}</option>
                                    @foreach ($diets as $diet)
                                        <option value="{{ $diet->id }}">{{ $diet->diet_name }}</option>
                                    @endforeach
                                </select>
                                @error('diet_id')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>


                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="form-control-label">{{ trans('meal_ingredient_trans.Meal_Name') }}
                                </label>
                                <select name="meal_id" class="custom-select">

                                </select>
                                @error('meal_id')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                    </div>

                    
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ trans('meal_ingredient_trans.Ingredient_Name') }}<span
                                        class="text-danger">*</span></label>
                                <input type="text" name="ingredient_name" class="form-control">
                                @error('ingredient_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ trans('meal_ingredient_trans.Ingredient_Amount') }}<span
                                        class="text-danger">*</span></label>
                                <input type="text" name="ingredient_amount" class="form-control">
                                @error('ingredient_amount')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
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
</script>
<script>
    $(document).ready(function() {
        $('select[name="diet_id"]').on('change', function() {
            var diet_id = $(this).val();
            if (diet_id) {
                $.ajax({
                    url: "{{ URL::to('backend/ingredient/Get_Meal') }}/" + diet_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $('select[name="meal_id"]').empty();
                        $('select[name="meal_id"]').append(
                            '<option selected disabled >{{ trans('meal_ingredient_trans.Choose') }}...</option>'
                        );
                        $.each(data, function(key, value) {
                            $('select[name="meal_id"]').append(
                                '<option value="' + key + '">' + value +
                                '</option>');

                        });

                    },
                });
            } else {
                console.log('AJAX load did not work');
            }
        });
    });
</script>

@endsection
