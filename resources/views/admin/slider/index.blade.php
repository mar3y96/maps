@extends('admin.layout.app')
@section('title')
السلايدر
@stop
@section('content')
<div class="page-bar">
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <a href="{{ url('admin/home') }}" >لوحة التحكم</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="{{ url('admin/slider') }}"> السلايدر </a>
        </li>
    </ul>
</div>
<!-- END PAGE HEADER-->
<div class="tab-pane active" id="tab_6">
    @include('layouts.alert')
    <div class="portlet box blue ">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-gift"></i>إضافة صوره
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
            {!! Form::open(['route'=>['admin.slider.store'] ,'files' => true ] ) !!}
                @include('admin.slider._form',['process'=>'create'])
            {!! Form::close() !!}
            <!-- END FORM-->
        </div>
    </div>
    <div class="portlet box blue ">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-gift"></i> كل الصور 
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
                        <th> العنوان </th>
                        <th> الترتيب </th>
                        <th>خيارات  </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1 ?>
                    @foreach($sliders as $slider)
                    <tr>
                        <td> {{ $i++}} </td>
                        <td> <a href="{{ route('admin.slider.show',$slider->id) }}">{{ $slider->title_ar }}</a> </td>
                        <td> 
                            {{ $slider->order }}
                        <td>
                            <a href="{{ route('admin.slider.edit',['id'=>$slider->id])}}" class="btn btn-circle blue"><i class="fa fa-edit" title="تعديل  "></i></a>
                            {{ Form::open(['route'=>['admin.slider.destroy',$slider->id],'method'=>'delete','style'=>'display:inline'])}}
                            <button class="btn btn-circle alert-danger" onclick="return confirm('متاكد من الحذف');"><i class=" fa fa-trash-o" title="حذف  "></i></button>
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