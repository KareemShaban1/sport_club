@extends('backend.layouts.master')
@section('css')

@section('title')
    {{trans('meal_ingredient_trans.Meal_Ingredients')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">{{trans('meal_ingredient_trans.Meal_Ingredients')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">{{trans('meal_ingredient_trans.All_Meal_Ingredients')}}</a></li>
                <li class="breadcrumb-item active">{{trans('meal_ingredient_trans.Meal_Ingredients')}}</li>
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

                <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <th>{{trans('meal_ingredient_trans.Id')}}</th>
                            <th>{{trans('meal_ingredient_trans.Ingredient_Name')}}</th>
                            <th>{{trans('meal_ingredient_trans.Ingredient_Amount')}}</th>
                            <th>{{trans('meal_ingredient_trans.Control')}}</th>
                         </tr>
                    </thead>
                    <tbody>
                        @foreach ($meal_ingredients as $ingredient)
                        <tr>
                            <td>{{$ingredient->id}}</td>
                            <td>{{$ingredient->ingredient_name}}</td>
                            <td>{{$ingredient->ingredient_amount}}</td>
                            <td>

                                <a href="" class="btn btn-primary btn-sm">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{ Route('backend.ingredient.edit',$ingredient->id) }}"
                                    class="btn btn-warning btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')
<script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
</script>
@endsection
