@extends('admin.layout.app')

@section('title')
رسائل الموقع
 
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
	            <a href="{{ url('admin/contact') }}"> رسائل الموقع  </a>
	            <i class="fa fa-circle"></i>
	        </li>
	        <li>
	            <a href="{{ url('admin/contact', $message->id) }}"> رساله  {{ $message->id }} </a>
	        </li>
    	</ul>

	</div>
	<!-- END PAGE HEADER-->
	<div class="tab-pane active" id="tab_6">
		<div class="portlet box blue ">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-gift"></i>عرض 
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
					{!! Form::model($message)!!}

					<div class="form-body form-horizontal form-bordered form-row-stripped">
					
						<div class="form-group">
							<label class="control-label col-md-2">صاحب الرساله  <span style="color: red">*</span></label>
							<div class="col-md-9">
								{!! Form::text('name',null,['class'=>'form-control ','disabled']) !!}
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2">البريد الالكتروني    <span style="color: red">*</span></label>
							<div class="col-md-9">
								{!! Form::text('email',null,['class'=>'form-control ','disabled']) !!}
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2"> رقم الهاتف <span style="color: red">*</span></label>
							<div class="col-md-9">
								{!! Form::text('phone',null,['class'=>'form-control ','disabled']) !!}
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2"> الرساله  <span style="color: red">*</span></label>
							<div class="col-md-9">
								{!! Form::textarea('message',null,['class'=>'form-control ','disabled']) !!}
							</div>
						</div>
					</div>
					{!! Form::close()!!}
				<!-- END FORM-->
			</div>
		</div>
	</div>
@stop
