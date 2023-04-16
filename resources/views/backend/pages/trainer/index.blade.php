@extends('backend.layouts.master')
@section('css')

@section('title')
    {{trans('trainer_trans.Trainers')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">{{trans('trainer_trans.Trainers')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">{{trans('trainer_trans.All_Trainers')}}</a></li>
                <li class="breadcrumb-item active">{{trans('trainer_trans.Trainers')}}</li>
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
                            <th>{{trans('trainer_trans.Id')}}</th>
                            <th>{{trans('trainer_trans.Trainer_Name')}}</th>
                            <th>{{trans('trainer_trans.Phone')}}</th>
                            <th>{{trans('trainer_trans.Email')}}</th>
                            <th>{{trans('trainer_trans.Gender')}}</th>
                            <th>{{trans('trainer_trans.Address')}}</th>
                            <th>{{trans('trainer_trans.Control')}}</th>
                         </tr>
                    </thead>
                    <tbody>
                        @foreach ($trainers as $trainer)
                        <tr>
                            <td>{{$trainer->id}}</td>
                            <td>{{$trainer->name}}</td>
                            <td>{{$trainer->phone}}</td>
                            <td>{{$trainer->email}}</td>
                            <td>{{$trainer->gender}}</td>
                            <td>{{$trainer->address}}</td>
                            <td>

                                <a href="" class="btn btn-primary btn-sm">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{ Route('backend.trainer.edit', $trainer->id) }}"
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
