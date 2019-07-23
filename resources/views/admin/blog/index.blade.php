@extends('admin.layout.app')
@section('title')

التدوينات
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
        <a href="#"> المدونه </a>
        <i class="fa fa-circle"></i>
    </li>
    <li>
        <a href="{{ url('admin/blog/record') }}"> التدوينات </a>
    </li>
</ul>
@include('layouts.alert')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box grey-cascade">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-globe"></i> جدول التدوينات
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
                        #
                    </th>
                    <th>
                            عنوان التدوينه  
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
                    <?php $i = 1 ; ?>
                    @foreach($records as $record)
                        <tr class="odd gradeX">
                            <td>
                                {{ $i++ }}
                            </td>
                            <td>
                                <a href="{{ url('admin/blog/record',$record->id) }}">{{ $record->title_ar }}</a>
                            </td>
                            <td>
                                {{ $record->category->name_ar }}
                            </td>
                            <td class="center">
                                {{ $record->blog_date }}
                            </td>
                            <td>
                                @if ($record->status=='active')
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
                                {{ Form::open(['route'=>['admin.blog.toggleStatus','blog',$record->id],'method'=>'get','style'=>'display:inline'])}}
                                <button class="btn btn-circle green" ><i class="fa fa-{{ $record->status=='active'?'times':'check' }}" title="تغيير الحاله "></i></button>
                                {{ Form::close() }}

                                <a href="{{ route('admin.record.edit',['id'=>$record->id])}}" class="btn btn-circle blue"><i class="fa fa-edit" title="تعديل الدوره "></i></a>
                                
                                {{ Form::open(['route'=>['admin.record.destroy',$record->id],'method'=>'delete','style'=>'display:inline'])}}
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