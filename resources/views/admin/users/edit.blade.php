@extends('admin.layouts.app')

@section('title')
	{{ trans('app.edit') }} قسم {{ $category->name}}
@stop

@section('content')
	<!-- BEGIN PAGE HEADER-->
	<div class="page-bar">
		<ul class="page-breadcrumb">
			<li>
				<i class="fa fa-home"></i>
				<a href="{{ url('admin/home') }}">{{ trans('admin.dashboard') }}</a>
				<i class="fa fa-angle-right"></i>
			</li>
			<li>
				<a href="{{ url('admin/category') }}">الاقسام</a>
			</li>
		</ul>
		
	</div>
	<!-- END PAGE HEADER-->
	<div class="tab-pane active" id="tab_6">
		@include('layouts.alert')
		<div class="portlet box blue ">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-gift"></i>  {{ trans('app.edit') }} قسم {{ $category->name}}
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
					{!! Form::model($category,['route'=>['admin.category.update',$category],'method'=>'put','files'=>true])!!}
					@include('admin.category._form',['btn'=>trans('app.edit') ,'process'=>'edit'])
					{!! Form::close()!!}
				<!-- END FORM-->
			</div>
		</div>
	</div>
@stop