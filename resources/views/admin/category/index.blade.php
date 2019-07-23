@extends('admin.layout.app')
@section('title')
التخصصات
@stop
@section('content')
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
            <a href="{{ url('admin/courses/category') }}"> التخصصات </a>
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
            {!! Form::open(['route'=>['admin.category.store'] ,'files' => true ] ) !!}
                @include('admin.category._form',['process'=>'create'])
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
                            {{ Form::open(['route'=>['admin.category.toggleStatus',$category->id],'method'=>'get','style'=>'display:inline'])}}
                            <button class="btn btn-circle green" ><i class="fa fa-{{ $category->status=='active'?'times':'check' }}" title="تغيير الحاله "></i></button>
                            {{ Form::close() }}

                            
                            <a href="{{ route('admin.category.edit',['id'=>$category->id])}}" class="btn btn-circle blue"><i class="fa fa-edit" title="تعديل التخصص "></i></a>
                            {{ Form::open(['route'=>['admin.category.destroy',$category->id],'method'=>'delete','style'=>'display:inline'])}}
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
@section('script')
        {{ Html::script('assets/admin/pages/scripts/ckeditor/ckeditor.js') }}
        <script>
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace( 'details_ar' );
            CKEDITOR.replace( 'details_en' );
        </script>
@endsection