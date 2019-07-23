@extends('admin.layout.app')
@section('title')
    admin home 
@stop
@section('content')
<!-- Start PAGE HEADER-->

<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="{{ url('admin/home') }}" >{{ trans('admin.dashboard')}}</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="{{ url('admin/test') }}">المستشفيات</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <span>{{ trans('admin.all')}}</span>
        </li>
    </ul>
</div>
<!-- END PAGE HEADER-->
    @if (session()->has('done'))
        <div class="alert alert-success">
            {{ session()->get('done') }}
        </div>
    @endif
<div class="portlet box red" style="border:0px;">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-users"></i>{{ trans('admin.all') }}
        </div>
    </div>
    <div class="portlet-body" style="display: block;">
        <a href="{{ url('admin/test/create') }}" class="btn btn-info">{{ trans('app.add') }}</a>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th> # </th>
                    <th> المستشفيات </th>
                    <th> {{ trans('app.options') }} </th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1 ?>
                @foreach($users as $user)
                <tr>
                    <td> {{ $i++}} </td>
                    <td> <a href="{{ route('admin.test.show',$user->id) }}">{{ $user->name }}</a> </td>
                    <td>
                        <a href="{{ route('admin.test.edit',['id'=>$user->id])}}" class="btn btn-circle blue"><i class="fa fa-edit"></i></a>
                        {{ Form::open(['route'=>['admin.test.destroy',$user->id],'method'=>'delete','style'=>'display:inline'])}}
                        <button class="btn btn-circle red-mint" onclick="return confirm('متاكد من الحذف');"><i class="fa fa-times"></i></button>
                        {{ Form::close() }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop