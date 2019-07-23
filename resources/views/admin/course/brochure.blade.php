@extends('admin.layout.app')

@section('title')
	إضافة دورة
@stop

@section('content')
	<!-- BEGIN PAGE HEADER-->
	<div class="page-bar">
    
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
                @if (!$course->parent_id)
                <a href="{{ url('admin/courses/course') }}">الدورات الرئيسيه</a>	
                @else
                <a href="{{ url('admin/courses/sub-courses') }}">الدورات الفرعيه</a>	
                @endif
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="{{ url('admin/courses/course/'.$course->id) }}">  {{ $course->name_ar }}</a>
                <i class="fa fa-circle"></i>
                
            </li>
            <li>
                <a href="{{ url('admin/courses/course/'.$course->id.'/brochure') }}">  بروشور الدورة</a>    
            </li>
        </ul>
	</div>
	<!-- END PAGE HEADER-->
	<div class="tab-pane active" id="tab_6">
		@include('layouts.alert')
		<div class="portlet box blue ">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-gift"></i> إضافة بروشور 
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
					{!! Form::open(['route'=>['admin.course.brochure.store',$course->id] ,'files' => true ] ) !!}
                	    <div class="form-body form-horizontal form-bordered form-row-stripped">
                            <div class="form-group">
                                <label class="control-label col-md-2">البرشور <span style="color: red">*</span></label>
                                <div class="col-md-9">
                                    {!! Form::file('brochure',null,['class'=>'form-control input-circle']) !!}
                                </div>
                            </div>
                           
                            <div class="form-group " style="padding: 20px">
                                <label class="control-label col-md-2">البرشور الحالي<span style="color: red">*</span></label>
                                <div class="col-md-9">
                                    <img src="{{ asset($course->brochure) }}" class="img-thumbnail" width="200">
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
	</div>
@stop
