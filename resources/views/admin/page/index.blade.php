@extends('admin.layout.app')
@section('title')

عن الموقع
@stop
@section('style')

@endsection
@section('content')
<ul class="page-breadcrumb breadcrumb">
    <li>
        <a href="{{ url('admin/home') }}" >لوحة التحكم</a>
        <i class="fa fa-circle"></i>
    </li>
    <li>
        <a href="#"> إعدادات الصفحات  </a>
        <i class="fa fa-circle"></i>
    </li>
    <li>
        <a href="{{ url('admin/page/about') }}"> عن الموقع </a>
    </li>
</ul>
@include('layouts.alert')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-globe"></i> جدول  الصفحات 
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse">
                    </a>
                    <a href="#portlet-config" data-toggle="modal" class="config">
                    </a>
                    <a href="javascript:;" class="reload">
                    </a>
                    <a href="javascript:;" class="remove">
                    </a>
                </div>
            </div>
            <div class="portlet-body" style="display: block;">
        <a href="{{ url('admin/page/about/create') }}" class="btn btn-info">اضافة صفحة</a>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th> # </th>
                    <th> اسم الصفحه  </th>
                     <th>
                            التفعيل 
                    </th>
                    <th>
                            خيارات 
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1 ?>
                @foreach($pages as $page)
                <tr>
                    <td> {{ $i++}} </td>
                    <td> <a href="{{ route('admin.about.show',$page->name_en) }}">{{ $page->name_ar }}</a> </td>
                    <td>
                        @if ($page->status=='active')
                        <span class="label label-sm label-success">
                                الحاله مفعل
                        </span>
                        @else
                        <span class="label label-sm label-warning">
                                الحاله غير مفعل
                        </span>
                        @endif 
                    </td>
                    <td>
                        {{ Form::open(['route'=>['admin.page.toggleStatus',$page->name_en],'method'=>'get','style'=>'display:inline'])}}
                        <button class="btn btn-circle green" ><i class="fa fa-{{ $page->status=='active'?'times':'check' }}" title="تغيير الحاله "></i></button>
                        {{ Form::close() }}

                        <a href="{{ route('admin.about.edit',$page->name_en)}}" class="btn btn-circle blue"><i class="fa fa-edit" title="تعديل  "></i></a>
                        
                        {{ Form::open(['route'=>['admin.about.destroy',$page->name_en],'method'=>'delete','style'=>'display:inline'])}}
                        <button class="btn btn-circle alert-danger" onclick="return confirm('متاكد من الحذف');"><i class=" fa fa-trash-o" title="حذف  "></i></button>
                        {{ Form::close() }}
    
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
<!-- END PAGE HEADER-->
@endsection