@extends('admin.layout.app')

@section('title')
	{{ trans('app.add') }} قسم
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
					<i class="fa fa-gift"></i> {{ trans('app.add') }} قسم
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
				{!! Form::open(['route'=>['admin.lessons.store'] ,'files' => true ] ) !!}
					@include('admin.users._form',['btn'=>trans('app.add') ,'process'=>'create'])
				{!! Form::close() !!}
				<!-- END FORM-->
			</div>
		</div>
	</div>

@stop

@section('script')
	
	<script type="text/javascript">
		function surahSelect(argument) {
			var id = argument.value;
			$.get("http://api.alquran.cloud/surah/"+id,function (argument) {
				console.log(argument);
				var numberOfAyahs = argument.data.numberOfAyahs;
				$('.lesson_to').val(numberOfAyahs);
				$('.lesson_to').attr("max",numberOfAyahs);
				$('.lesson_from').attr("max",numberOfAyahs-1);
			});
		}
	</script>

@stop