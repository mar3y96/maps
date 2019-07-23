@extends('admin.layout.app')
@section('title')
  رسائل الموقع  
@stop
@section('content')
 


<!-- Start PAGE HEADER-->

<div class="page-bar">
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <a href="{{ url('admin/home') }}" >لوحة التحكم</a>
            <i class="fa fa-circle"></i>
        </li>
       
        <li>
            <a href="{{ url('admin/contact') }}"> رسائل الموقع  </a>
        </li>
    </ul>
</div>
<!-- END PAGE HEADER-->
   @include('layouts.alert')
<div class="portlet box red" style="border:0px;">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-users"></i>كل الرسايل 
        </div>
    </div>
    <div class="portlet-body" style="display: block;">
        
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th> # </th>
                    <th> الاسم  </th>
                    <th>رقم الهاتف </th>
                    <th> خيارات </th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1 ?>
                @if ($messages->count()>0)

                    @foreach($messages as $msg)
                    <tr>
                        <td> {{ $i++}} </td>
                        <td> <a href="{{ route('admin.contact.show',$msg->id) }}">{{ $msg->name }}</a> 
                        </td>
                        <td>
                            {{ $msg->phone }}
                        </td>
                        <td>
                            {{ Form::open(['route'=>['admin.contact.destroy',$msg->id],'method'=>'delete','style'=>'display:inline'])}}
                            <button class="btn btn-circle alert-danger" onclick="return confirm('متاكد من الحذف');"><i class="fa fa-times"></i></button>
                            {{ Form::close() }}
                        </td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
@stop
