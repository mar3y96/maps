@extends('admin.layout.app')

@section('title')
	تعديل {{ $slider->title_ar }}
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
				<a href="{{ url('admin/slider') }}"> السلايدر </a>
				<i class="fa fa-circle"></i>
			</li>
			<li>
				<a href="{{ url('admin/courses/slider/'.$slider->id.'/edit') }}">  تعديل {{ $slider->title_ar }} </a>
			</li>
		</ul>
		
	</div>
	<!-- END PAGE HEADER-->
	<div class="tab-pane active" id="tab_6">
		@include('layouts.alert')
		<div class="portlet box blue ">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-gift"></i> تعديل  {{ $slider->title_ar}}
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
					{!! Form::model($slider,['route'=>['admin.slider.update',$slider],'method'=>'put','files'=>true])!!}
					@include('admin.slider._form',['process'=>'edit'])
					{!! Form::close()!!}
				<!-- END FORM-->
			</div>
		</div>
	</div>
@stop
@section('script')
	{{ Html::script('assets/admin/pages/scripts/ckeditor/ckeditor.js') }}
	<script>
		// Replace the <textarea id="editor1"> with a CKEditor
		// instance, using default configuration.
		CKEDITOR.replace( 'details_ar' );
		CKEDITOR.replace( 'details_en' );
	</script>
@endsection