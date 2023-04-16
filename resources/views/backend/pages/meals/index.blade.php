@extends('backend.layouts.master')
@section('css')

@section('title')
    {{trans('meal_trans.Meals')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">{{trans('meal_trans.Meals')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">{{trans('meal_trans.All_Meals')}}</a></li>
                <li class="breadcrumb-item active">{{trans('meal_trans.Meals')}}</li>
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
                            <th>{{trans('meal_trans.Id')}}</th>
                            <th>{{trans('meal_trans.Diet_Name')}}</th>
                            <th>{{trans('meal_trans.Meal_Name')}}</th>
                            <th>{{trans('meal_trans.Days')}}</th>
                            <th>{{trans('meal_trans.Control')}}</th>
                         </tr>
                    </thead>
                    <tbody>
                        @foreach ($meals as $meal)
                        <tr>
                            <td>{{$meal->id}}</td>
                            <td>{{$meal->diet->diet_name}}</td>
                            <td>{{$meal->meal_name}}</td>
                            <td>{{$meal->days}}</td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{ Route('backend.meal.edit',$meal->id) }}"
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
