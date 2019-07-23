@extends('admin.layout.app')
@section('title')
اقسام المدونه 
@stop
@section('content')
<div class="page-bar">
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
            <a href="{{ url('admin/blog/category') }}"> أقسام المدونه </a>
        </li>
    </ul>
</div>
<!-- END PAGE HEADER-->
<div class="tab-pane active" id="tab_6">
    @include('layouts.alert')
    <div class="portlet box blue ">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-gift"></i>إضافة تخصص
            </div>
            <div class="tools">
                <a href="javascript:;" class="collapse" data-original-title="" title="">
                </a>
                <a href="javascript:;" class="remove" data-original-title="" title="">
                </a>
            </div>
        </div>
        <div class="portlet-body form">
            <!-- BEGIN FORM-->
            {!! Form::open(['route'=>['admin.blog.category.store']] ) !!}
	            <div class="form-body form-horizontal form-bordered form-row-stripped">
                    <div class="form-group">
                        <label class="control-label col-md-2" for="name_ar">الاسم بالعربيه <span style="color: red">*</span></label>
                        <div class="col-md-4">
                            {!! Form::text('name_ar',null,['class'=>'form-control input-circle','id'=>'name_ar']) !!}
                        </div>
                        <label class="control-label col-md-2" for="name_ar">الاسم بالإنجليزيه <span style="color: red">*</span></label>
                        <div class="col-md-4">
                            {!! Form::text('name_en',null,['class'=>'form-control input-circle','id'=>'name_en']) !!}
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn btn-circle blue"><i class="fa fa-check"></i> حفظ </button>
                            </div>
                        </div>
                    </div>
	            </div>
               
            {!! Form::close() !!}
            <!-- END FORM-->
        </div>
    </div>
    <div class="portlet box blue ">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-gift"></i> كل التخصصات 
            </div>
            <div class="tools">
                <a href="javascript:;" class="collapse" data-original-title="" title="">
                </a>
                <a href="javascript:;" class="remove" data-original-title="" title="">
                </a>
            </div>
        </div>
        <div class="portlet-body" style="display: block;">
        
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th> # </th>
                        <th> الأقسام  </th>
                        <th> الحاله  </th>
                        <th>خيارات  </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1 ?>
                    @foreach($categories as $category)
                    <tr>
                        <td> {{ $i++}} </td>
                        <td> <a href="{{ route('admin.category.show',$category->id) }}">{{ $category->name_ar }}</a> </td>
                        <td> 
                            @if ($category->status=='active')
                                <span style='background-color:#82AF6F;color: white;padding: .2em .4em .3em; font-size: 11px;line-height: 1;
                                height: 18px;'>الحاله مفعل</span>
                            @else
                                <span style='background-color:red;color: white;padding: .2em .4em .3em; font-size: 11px;line-height: 1;
                                height: 18px;'>الحاله غير مفعل</span>
                            @endif
                        <td>
                            {{ Form::open(['route'=>['admin.blog.toggleStatus','category',$category->id],'method'=>'get','style'=>'display:inline'])}}
                            <button class="btn btn-circle green" ><i class="fa fa-{{ $category->status=='active'?'times':'check' }}" title="تغيير الحاله "></i></button>
                            {{ Form::close() }}

                            <a class="btn btn-circle blue" href="#modal-table{{ $category->id }}" role="button" data-toggle="modal" title="تعديل القسم"><i class="ace-icon fa fa-edit bigger-130"></i>
                            </a>
                            {!! Form::open(['route'=>['admin.blog.category.update',$category->id],'method'=>'put','style'=>'display:inline']) !!}
                            <div id="modal-table{{ $category->id }}" class="modal fade in" tabindex="-1" style="display: none;" aria-hidden="false">
                                <div class="modal-backdrop fade in" style="height: 649px;"></div>
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header no-padding">
                                            <div class="table-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                            <span class="white">×</span>
                                            </button>
                                            <div class="text-center">تعديل القسم {{ $category->name_ar }}</div>
                                            </div>
                                        </div>
                                        <div class="modal-body no-padding">
                                            <table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
                                            <thead>
                                                <tr>
                                                    <th class="col-lg-4"></th>
                                                    <th class="col-lg-8"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="col-lg-4">الاسم بالعربيه span <span style="color: red">*</span></td>
                                                    <td class="col-lg-8"> {!! Form::text('name_ar',$category->name_ar,['class'=>'form-control input-circle','id'=>'name_ar']) !!}</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-lg-4">الاسم بالإنجليزيه <span style="color: red">*</span></td>
                                                    <td class="col-lg-8"> {!! Form::text('name_en',$category->name_en,['class'=>'form-control input-circle','id'=>'name_en']) !!}</td>
                                                </tr>
                                            </tbody>
                                            </table>
                                        </div>
                                        <div class="modal-footer no-margin-top">
                                            <button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
                                            <i class="ace-icon fa fa-times"></i>
                                            Close
                                            </button>
                                            <button class="btn btn-sm btn-success pull-right" type="submit" >
                                            <i class="ace-icon fa fa-check"></i>
                                            حفظ
                                            </button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                            <!-- /.modal-dialog -->
                            </div>

                            {!! Form::close() !!}
                            {{ Form::open(['route'=>['admin.blog.category.destroy',$category->id],'method'=>'delete','style'=>'display:inline'])}}
                            <button class="btn btn-circle alert-danger" onclick="return confirm('متاكد من الحذف');"><i class=" fa fa-trash-o" title="حذف التخصص "></i></button>
                            {{ Form::close() }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
