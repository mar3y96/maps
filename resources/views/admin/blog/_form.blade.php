
	<div class="form-body form-horizontal form-bordered form-row-stripped">
          
            <div class="form-group">
                <label class="control-label col-md-2"> عنوان التدوينه بالعربيه <span style="color: red">*</span></label>
                <div class="col-md-4">
                    {!! Form::text('title_ar',null,['class'=>'form-control input-circle',$process=='show'?'disabled':'']) !!}
                </div>
                <label class="control-label col-md-2"> عنوان التدوينه بالإنجليزيه<span style="color: red">*</span></label>
                <div class="col-md-4">
                    {!! Form::text('title_en',null,['class'=>'form-control input-circle',$process=='show'?'disabled':'']) !!}
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2">قسم التدوينه<span style="color: red">*</span></label>
                <div class="col-md-4">
                    @if ($process == 'show')
                    <input type="text" class="form-control input-circle" value="{{ $record->category->name_ar }}" disabled>
                    @else
                    <select name="category_id" class='form-control input-circle' style="padding: 2px">
                        <option {{ $process =='create'?'selected':' ' }} disabled >اختار قسم التدوينه  </option>
                        @foreach ($categories as $cat)
                        <option value="{{ $cat->id }}" @if ($process !='create' &&  $record->category_id==$cat->id)
                                selected
                        @endif>{{ $cat->name_ar }}</option>
                        @endforeach
                    </select>
                    @endif
                </div>
                <label class="control-label col-md-2"> تاريخ التدوينه <span style="color: red">*</span></label>
                <div class="col-md-4">
                    {!! Form::date('blog_date',null,['class'=>'form-control input-circle',$process=='show'?'disabled':'']) !!}
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2">نص التدوينه بالعربيه<span style="color: red">*</span></label>
                <div class="col-md-10">
                    {!! Form::textarea('details_ar',null,['class'=>'form-control input-circle',$process=='show'?'disabled':'']) !!}
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2">نص التدوينه بالإنجليزيه<span style="color: red">*</span></label>
                <div class="col-md-10">
                    {!! Form::textarea('details_en',null,['class'=>'form-control input-circle',$process=='show'?'disabled':'']) !!}
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2">فيديو التدوينه - أدخل رابط اليوتيوب كاملاً </label>
                <div class="col-md-10">
                    {!! Form::text('link',null,['class'=>'form-control input-circle','placeholder'=>' مثال : https://www.youtube.com/watch?v=xxxxxxxxxxx',$process=='show'?'disabled':'']) !!}
                </div>
            </div>
            @if ( $process != 'create' )
                <div class="form-group " style="padding: 20px">
                    <label class="control-label col-md-2">الصوره الحاليه</label>
                    <div class="col-md-9">
                        <img src="{{ asset($record->image) }}" class="img-thumbnail" width="200">
                    </div>
                </div>
            @endif
            @if ( $process != 'show' )
                <div class="form-group">
                    <label class="control-label col-md-2">الصوره</label>
                    <div class="col-md-9">
                        {!! Form::file('image',null,['class'=>'form-control input-circle']) !!}
                    </div>
                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" class="btn btn-circle blue"><i class="fa fa-check"></i> حفظ </button>
                        </div>
                    </div>
                </div>
            @endif
        </div>
        