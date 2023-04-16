@extends('backend.layouts.master')
@section('css')

@section('title')
    {{trans('training_group_trans.Training_Groups')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">{{trans('training_group_trans.Training_Groups')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">{{trans('training_group_trans.All_Training_Groups')}}</a></li>
                <li class="breadcrumb-item active">{{trans('training_group_trans.Training_Groups')}}</li>
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
                            <th>{{trans('training_group_trans.Id')}}</th>
                            <th>{{trans('training_group_trans.Training_Group_Name')}}</th>
                            <th>{{trans('training_group_trans.Control')}}</th>
                         </tr>
                    </thead>
                    <tbody>
                        @foreach ($training_groups as $training_group)
                        <tr>
                            <td>{{$training_group->id}}</td>
                            <td>{{$training_group->training_group_name}}</td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{ Route('backend.training_group.edit', $training_group->id) }}"
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
