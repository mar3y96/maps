@extends('admin.layout.app')
@section('title')
@if(\Request::is('admin/courses/course'))
الدورات الرئيسيه
    @elseif(\Request::is('admin/courses/sub-courses')) 
    الدورات الفرعيه 
    @else
    الدورات المنتهية 
@endif
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
        <a href="#"> إعدادات الدورات</a>
        <i class="fa fa-circle"></i>
    </li>
    <li>
        @if(\Request::is('admin/courses/course'))
        <a href="{{ url('admin/courses/course') }}">الدورات الرئيسيه</a>
            @elseif(\Request::is('admin/courses/sub-courses'))  
            <a href="{{ url('admin/courses/sub-courses') }}">الدورات الفرعيه</a>
            @else
            <a href="{{ url('admin/courses/ended-courses') }}">الدورات المنتهية </a>
        @endif
    </li>
</ul>
@include('layouts.alert')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box grey-cascade">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-globe"></i> جدول الدورات
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
            <div class="portlet-body">
                
                <table class="table table-striped table-bordered table-hover" id="sample_1">
                <thead>
                <tr>
                    <th class="table-checkbox">
                        الرمز
                    </th>
                    <th>
                            اسم الدوره 
                    </th>
                    <th>
                            القسم 
                    </th>
                    <th>
                            التاريخ
                    </th>
                    <th>
                            التفعيل 
                    </th>
                    <th>
                            خيارات 
                    </th>
                </tr>
                </thead>
                <tbody>
                    @foreach($courses as $course)
                <tr class="odd gradeX">
                    <td>
                        {{ $course->code }}
                    </td>
                    <td>
                        <a href="{{ url('admin/courses/course',$course->id) }}">{{ $course->name_ar }}</a>
                    </td>
                    <td>
                        {{ $course->category->name_ar }}
                    </td>
                    <td class="center">
                        {{ $course->course_date }}
                    </td>
                    <td>
                        @if ($course->status=='active')
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

                        {{ Form::open(['route'=>['admin.course.toggle','status',$course->id],'method'=>'get','style'=>'display:inline'])}}
                        <button class="btn btn-circle green" ><i class="fa fa-{{ $course->status=='active'?'times':'check' }}" title="تغيير الحاله "></i></button>
                        {{ Form::close() }}

                        {{ Form::open(['route'=>['admin.course.toggle','international',$course->id],'method'=>'get','style'=>'display:inline'])}}
                        @if ($course->international=='active')
                        <button class="btn btn-circle alert-success" ><i class="fa fa-star" title=" شهاده دولية "></i></button>
                        @else
                        <button class="btn btn-circle " ><i class="fa fa-star" title="  برنامج "></i></button>
                       @endif
                        {{ Form::close() }}

                        <a href="{{ route('admin.course.edit',['id'=>$course->id])}}" class="btn btn-circle blue"><i class="fa fa-edit" title="تعديل الدوره "></i></a>

                        <a href="{{ route('admin.course.brochure',['id'=>$course->id])}}" class="btn btn-circle blue"><i class="ace-icon glyphicon glyphicon-align-center bigger-120" title=" إضافة برشور "></i></a>

                        {{ Form::open(['route'=>['admin.course.destroy',$course->id],'method'=>'delete','style'=>'display:inline'])}}
                        <button class="btn btn-circle alert-danger" onclick="return confirm('متاكد من الحذف');"><i class=" fa fa-trash-o" title="حذف الدوره "></i></button>
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
@section('script')
      
@endsection