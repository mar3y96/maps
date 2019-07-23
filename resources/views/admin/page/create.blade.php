@extends('admin.layout.app')

@section('title')
	إضافة صفحه
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
        <a href="#">  المدونه</a>
        <i class="fa fa-circle"></i>
    </li>
     <li>
        <a href="#"> إعدادات الصفحات  </a>
        <i class="fa fa-circle"></i>
    </li>
    <li>
        <a href="{{ url('admin/page/about') }}"> عن الموقع </a>
        <i class="fa fa-circle"></i>
    </li>
    <li>
        <a href="{{ url('admin/page/about/create') }}"> إضافة صفحه</a>
    </li>
</ul>
	</div>
	<!-- END PAGE HEADER-->
	<div class="tab-pane active" id="tab_6">
		@include('layouts.alert')
		<div class="portlet box blue ">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-gift"></i> إضافة صفحه 
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
					 {!! Form::open(['route'=>['admin.about.store'] ,'files' => true ] ) !!}
			            @include('admin.page._form',['process'=>'create'])
			        {!! Form::close() !!}
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
        CKEDITOR.replace( 'content_ar' );
        CKEDITOR.replace( 'content_en' );
    </script>
@endsection