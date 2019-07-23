@extends('admin.layout.app')
@section('title')
روابط مفيده
@stop
@section('content')
<div class="page-bar">
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <a href="{{ url('admin/home') }}" >لوحة التحكم</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="#"> إعدادات الموقع</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="{{ url('admin/settings/links') }}"> روابط مفيده </a>
        </li>
    </ul>
</div>
<!-- END PAGE HEADER-->
<div class="tab-pane active" id="tab_6">
    @include('layouts.alert')
    <div class="portlet box blue ">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-gift"></i>إضافة رابط مفيد
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
            {!! Form::open(['route'=>['admin.link.store']  ] ) !!}
	            <div class="form-body form-horizontal form-bordered form-row-stripped">
                    <div class="form-group">
                        <label class="control-label col-md-2">  الرابط بالعربيه  <span style="color: red">*</span></label>
                        <div class="col-md-4">
                            {!! Form::text('title_ar',null,['class'=>'form-control input-circle']) !!}
                        </div>
                        <label class="control-label col-md-2">الرابط بالإنجليزيه<span style="color: red">*</span></label>
                        <div class="col-md-4">
                            {!! Form::text('title_en',null,['class'=>'form-control input-circle']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2">  الرابط <span style="color: red">*</span></label>
                        <div class="col-md-10">
                            {!! Form::text('link',null,['class'=>'form-control input-circle']) !!}
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
                <i class="fa fa-gift"></i> كل الروابط 
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
                        <th> الرابط بالعربيه   </th>
                        <th> الرابط بالانجليزيه  </th>
                        <th>خيارات  </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1 ?>
                    @foreach($links as $link)
                    <tr>
                        <td> {{ $i++}} </td>
                        <td> <a href="{{ $link->link }}" target="_blank" >{{ $link->title_ar }}</a> </td>
                        <td> <a href="{{ $link->link }}" target="_blank" >{{ $link->title_en }}</a> </td>
                        <td>
                            {{ Form::open(['route'=>['admin.link.destroy',$link->id],'method'=>'delete','style'=>'display:inline'])}}
                            <button class="btn btn-circle alert-danger" onclick="return confirm('متاكد من الحذف');"><i class=" fa fa-trash-o" title="حذف الرابط "></i></button>
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
@section('script')
        {{ Html::script('assets/admin/pages/scripts/ckeditor/ckeditor.js') }}
        <script>
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace( 'details_ar' );
            CKEDITOR.replace( 'details_en' );
        </script>
@endsection