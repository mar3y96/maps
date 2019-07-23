
	<div class="form-body form-horizontal form-bordered form-row-stripped">
            <div class="form-group">
                <label class="control-label col-md-2"> رمز الدوره<span style="color: red">*</span></label>
                <div class="col-md-10">
                    {!! Form::text('code',null,['class'=>'form-control input-circle',$process=='show'?'disabled':'']) !!}
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2"> الاسم بالعربيه <span style="color: red">*</span></label>
                <div class="col-md-4">
                    {!! Form::text('name_ar',null,['class'=>'form-control input-circle',$process=='show'?'disabled':'']) !!}
                </div>
                <label class="control-label col-md-2">الاسم بالإنجليزيه<span style="color: red">*</span></label>
                <div class="col-md-4">
                    {!! Form::text('name_en',null,['class'=>'form-control input-circle',$process=='show'?'disabled':'']) !!}
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2">دورة رئيسية أو فرعية<span style="color: red">*</span></label>
                <div class="col-md-10">
                @if ($process =='show')
                @if ($course->parent_id)
                    <input type="text" class="form-control input-circle" value="{{ $course->parent->name_ar }}" disabled>
                    @else
                    <input type="text" class="form-control input-circle" value="دورة رئيسية" disabled>
                @endif
                @else
                <select name="parent_id" class='form-control input-circle' style="padding: 2px">
                    <option value="" {{ $process =='create'?'selected':' ' }} > رئيسية </option>
                    @foreach ($mainCourses as $cour)
                    <option value="{{ $cour->id }}" @if ($process !='create' &&  $course->parent_id==$cour->id)
                            selected
                    @endif > تابعة ل : {{ $cour->name_ar }}</option>
                    @endforeach
                </select>
                @endif
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2">قسم الدورة<span style="color: red">*</span></label>
                <div class="col-md-10">
                    @if ($process == 'show')
                    <input type="text" class="form-control input-circle" value="{{ $course->category->name_ar }}" disabled>
                    @else
                    <select name="category_id" class='form-control input-circle' style="padding: 2px">
                        <option {{ $process =='create'?'selected':' ' }} disabled >اختار قسم الدوره  </option>
                        @foreach ($categories as $cat)
                        <option value="{{ $cat->id }}" @if ($process !='create' &&  $course->category_id==$cat->id)
                                selected
                        @endif>{{ $cat->name_ar }}</option>
                        @endforeach
                    </select>
                    @endif
                    {{-- {!! Form::st('details_ar',null,['class'=>'form-control input-circle',$process=='show'?'disabled':'']) !!} --}}
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2"> تاريخ الدورة <span style="color: red">*</span></label>
                <div class="col-md-4">
                    @if ($process!='create')
                        
                    {!! Form::date('course_date',$course->course_date,['class'=>'form-control input-circle',$process=='show'?'disabled':'']) !!}
                    @else
                    {!! Form::date('course_date',null,['class'=>'form-control input-circle',$process=='show'?'disabled':'']) !!}
                    @endif
                </div>
                <label class="control-label col-md-2">طريقة التدريب<span style="color: red">*</span></label>
                <div class="col-md-4">
                    {!! Form::select('attend', ['offline'=>'حضور','online'=>'عن بعد','both'=>'حضور و عن بعد'],'offline', ['class'=>'form-control input-circle','style'=>'padding:5px',$process=='show'?'disabled':'']) !!}
                  
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2"> لغة الدورة<span style="color: red">*</span></label>
                <div class="col-md-10">
                    {!! Form::select('course_lang', ['arbic'=>'العربيه','english'=>'الإنجليزيه','both'=>'العربيه و الإنجليزيه '],'arbic', ['class'=>'form-control input-circle','style'=>'padding:5px',$process=='show'?'disabled':'']) !!}
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2"> مكان الدوره بالعربيه <span style="color: red">*</span></label>
                <div class="col-md-4">
                    {!! Form::text('place_ar',null,['class'=>'form-control input-circle',$process=='show'?'disabled':'']) !!}
                </div>
                <label class="control-label col-md-2"> مكان الدوره بالإنجليزيه<span style="color: red">*</span></label>
                <div class="col-md-4">
                    {!! Form::text('place_en',null,['class'=>'form-control input-circle',$process=='show'?'disabled':'']) !!}
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2">  الحالة<span style="color: red">*</span></label>
                <div class="col-md-10">
                    {!! Form::select('course_set', ['now'=>'حالية','comming'=>'قادمة','ended'=>'انتهت '],null, ['class'=>'form-control input-circle','style'=>'padding:5px',$process=='show'?'disabled':'']) !!}
                </div>
            </div>
              <div class="form-group">
                <label class="control-label col-md-2"> رسوم الدورة <span style="color: red">*</span></label>
                <div class="col-md-4">
                    {!! Form::number('price',null,['class'=>'form-control input-circle',$process=='show'?'disabled':'']) !!}
                </div>
                <label class="control-label col-md-2">الخصم <span style="color: red">*</span></label>
                <div class="col-md-4">
                    {!! Form::number('discount',null,['class'=>'form-control input-circle','style'=>'display: initial; width:90%',$process=='show'?'disabled':'']) !!}
                    <i class="ace-icon fa fa-percent">%</i>
                </div>
                
            </div>
             <div class="form-group">
                <label class="control-label col-md-2">الوصف بالعربيه<span style="color: red">*</span></label>
                <div class="col-md-10">
                    {!! Form::textarea('details_ar',null,['class'=>'form-control input-circle',$process=='show'?'disabled':'']) !!}
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2">الوصف بالإنجليزيه<span style="color: red">*</span></label>
                <div class="col-md-10">
                    {!! Form::textarea('details_en',null,['class'=>'form-control input-circle',$process=='show'?'disabled':'']) !!}
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2">أهداف البرنامج  بالعربيه<span style="color: red">*</span></label>
                <div class="col-md-10">
                    {!! Form::textarea('goals_ar',null,['class'=>'form-control input-circle',$process=='show'?'disabled':'']) !!}
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2">أهداف البرنامج  بالإنجليزيه<span style="color: red">*</span></label>
                <div class="col-md-10">
                    {!! Form::textarea('goals_en',null,['class'=>'form-control input-circle',$process=='show'?'disabled':'']) !!}
                </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">الفئة المستهدفة بالعربيه<span style="color: red">*</span></label>
                    <div class="col-md-10">
                        {!! Form::textarea('target_ar',null,['class'=>'form-control input-circle',$process=='show'?'disabled':'']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">الفئة المستهدفة بالإنجليزيه<span style="color: red">*</span></label>
                    <div class="col-md-10">
                        {!! Form::textarea('target_en',null,['class'=>'form-control input-circle',$process=='show'?'disabled':'']) !!}
                    </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2">المحاور بالعربيه<span style="color: red">*</span></label>
                        <div class="col-md-10">
                            {!! Form::textarea('axes_ar',null,['class'=>'form-control input-circle',$process=='show'?'disabled':'']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2">المحاور بالإنجليزيه<span style="color: red">*</span></label>
                        <div class="col-md-10">
                            {!! Form::textarea('axes_en',null,['class'=>'form-control input-circle',$process=='show'?'disabled':'']) !!}
                        </div>
                    </div>
            @if ( $process != 'create' )
                <div class="form-group " style="padding: 20px">
                    <label class="control-label col-md-2">الصوره الحاليه<span style="color: red">*</span></label>
                    <div class="col-md-9">
                        <img src="{{ asset($course->image) }}" class="img-thumbnail" width="200">
                    </div>
                </div>
            @endif
            @if ( $process != 'show' )
                <div class="form-group">
                    <label class="control-label col-md-2">الصوره <span style="color: red">*</span></label>
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
        