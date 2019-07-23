@extends('admin.layout.app')
@section('style')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
<style>
    .select2-container--default .select2-search--inline .select2-search__field{
        padding: 2px !important;
    }
</style>
@endsection
@section('title','بيانات الموقع')
@section('content')
   
    <div class="tab-pane active" id="tab_6">
    <div class="portlet box blue ">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-gift"></i>تعديل بيانات الموقع
            </div>
            <div class="tools">
                <a href="javascript:;" class="collapse" data-original-title="" title="">
                </a>
                <a href="javascript:;" class="remove" data-original-title="" title="">
                </a>
            </div>
        </div>
        <div class="portlet-body form">
            <br>
            @include('layouts.alert')
            <!-- BEGIN FORM-->
            {!! Form::open(['url'=>'admin/settings','method'=>'put','files'=>true]) !!}
            <div class="form-body form-horizontal form-bordered form-row-stripped">
                <div class="form-group">
                    <label class="control-label col-md-2"> اسم الموقع بالعربيه  </label>
                    <div class="col-md-4">
                        {!! Form::text('site_name_ar',settings()->site_name_ar,['class'=>'form-control input-circle']) !!}
                    </div>
                    <label class="control-label col-md-2">  اسم الموقع بالانجليزيه</label>
                    <div class="col-md-4">
                        {!! Form::text('site_name_en',settings()->site_name_en,['class'=>'form-control input-circle']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">وصف الموقع بالعربيه</label>
                    <div class="col-md-4">
                        {!! Form::textarea('site_description_ar',settings()->site_description_ar,['class'=>'form-control input-circle']) !!}
                    </div>
                    <label class="control-label col-md-2">وصف الموقع بالانجليزيه</label>
                    <div class="col-md-4">
                        {!! Form::textarea('site_description_en',settings()->site_description_en,['class'=>'form-control input-circle lesson_from','min'=>'1']) !!}
                    </div>
                </div>
               
                <div class="form-group">
                   
                   
                    <label class="control-label col-md-2">ايميل الموقع</label>
                    <div class="col-md-4">
                        {!! Form::email('contact_email',settings()->contact_email,['class'=>'form-control input-circle']) !!}
                    </div>
                     <label class="control-label col-md-2">جوجل + </label>
                    <div class="col-md-4">
                        {!! Form::text('google_plus',settings()->google_plus,['class'=>'form-control input-circle']) !!}
                    </div>

                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">هاتف الموقع الاول</label>
                    <div class="col-md-4">
                        {!! Form::text('phone',settings()->phone,['class'=>'form-control input-circle']) !!}
                    </div>

                      <label class="control-label col-md-2">هاتف الموقع الثاني</label>
                    <div class="col-md-4">
                        {!! Form::text('phone2',settings()->phone2,['class'=>'form-control input-circle']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">فيس بوك</label>
                    <div class="col-md-4">
                        {!! Form::text('facebook',settings()->facebook,['class'=>'form-control input-circle']) !!}
                    </div>
                    <label class="control-label col-md-2">لينكد ان </label>
                    <div class="col-md-4">
                        {!! Form::text('linkedin',settings()->linkedin,['class'=>'form-control input-circle']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">تويتر</label>
                    <div class="col-md-4">
                        {!! Form::text('twitter',settings()->twitter,['class'=>'form-control input-circle']) !!}
                    </div>
                    <label class="control-label col-md-2">انستجرام</label>
                    <div class="col-md-4">
                        {!! Form::text('instagram',settings()->instagram,['class'=>'form-control input-circle']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">صندوق البريد</label>
                    <div class="col-md-4">
                        {!! Form::text('mail_box',settings()->mail_box,['class'=>'form-control input-circle']) !!}
                    </div>
                    <label class="control-label col-md-2">رقم الفاكس</label>
                    <div class="col-md-4">
                        {!! Form::text('fax',settings()->fax,['class'=>'form-control input-circle']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">خريطة الموقع</label>
                    <div class="col-md-4">
                        {!! Form::textarea('location',settings()->location,['class'=>'form-control input-circle']) !!}

                    </div>
                    <label class="control-label col-md-2">عنوان الموقع</label>
                    <div class="col-md-4">
                        {!! Form::text('address',settings()->address,['class'=>'form-control input-circle']) !!}

                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2">الكلمات الدلالية و المفتاحية للموقع</label>
                    <div class="col-md-9">
                        <select name="tags[]" class="form-control tags" multiple>
                            @foreach (settings()->tags as $tag)
                            <option value="{{ $tag }}" selected>{{ $tag }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
               
                <div class="form-group">
                    <label class="control-label col-md-2">لوجو الموقع</label>
                    <div class="col-md-4">
                        <input type="file" name="logo" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2"> لوجو الموقع</label>
                    <div class="col-md-9">
                        {!! Html::image(settings()->logo,'',['width'=>'100px','height'=>'100px'])!!}
                    </div>
                </div>
               
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" class="btn green"><i class="fa fa-check"></i> تعديل</button>
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
            <!-- END FORM-->
        </div>
    </div>



</div>

@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
    <script>
        $(".tags").select2({
            tags: true
        });
    </script>
@endsection