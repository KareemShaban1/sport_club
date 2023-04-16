@extends('backend.layouts.master')
@section('css')

@section('title')
    {{trans('player_trans.Players')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">{{trans('player_trans.Players')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">{{trans('player_trans.All_Players')}}</a></li>
                <li class="breadcrumb-item active">{{trans('player_trans.Players')}}</li>
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
                            <th>{{trans('player_trans.Id')}}</th>
                            <th>{{trans('player_trans.Player_Name')}}</th>
                            <th>{{trans('player_trans.Phone')}}</th>
                            <th>{{trans('player_trans.Email')}}</th>
                            <th>{{trans('player_trans.Gender')}}</th>
                            <th>{{trans('player_trans.Address')}}</th>
                            <th>{{trans('player_trans.Control')}}</th>
                         </tr>
                    </thead>
                    <tbody>
                        @foreach ($players as $player)
                        <tr>
                            <td>{{$player->id}}</td>
                            <td>{{$player->name}}</td>
                            <td>{{$player->phone}}</td>
                            <td>{{$player->email}}</td>
                            <td>{{$player->gender}}</td>
                            <td>{{$player->address}}</td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{ Route('backend.player.edit',$player->id) }}"
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
