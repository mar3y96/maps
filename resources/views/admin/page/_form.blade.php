
	<div class="form-body form-horizontal form-bordered form-row-stripped">
          
            <div class="form-group">
                <label class="control-label col-md-2"> اسم الصفحه بالعربيه <span style="color: red">*</span></label>
                <div class="col-md-4">
                    {!! Form::text('name_ar',null,['class'=>'form-control input-circle',$process=='show'?'disabled':'']) !!}
                </div>
                <label class="control-label col-md-2"> اسم الصفحه بالإنجليزيه<span style="color: red">*</span></label>
                <div class="col-md-4">
                    {!! Form::text('name_en',null,['class'=>'form-control input-circle',$process=='show'?'disabled':'']) !!}
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2">محتوي  الصفحه بالعربيه<span style="color: red">*</span></label>
                <div class="col-md-10">
                    {!! Form::textarea('content_ar',null,['class'=>'form-control input-circle',$process=='show'?'disabled':'']) !!}
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2">محتوي  الصفحه بالإنجليزيه<span style="color: red">*</span></label>
                <div class="col-md-10">
                    {!! Form::textarea('content_en',null,['class'=>'form-control input-circle',$process=='show'?'disabled':'']) !!}
                </div>
            </div>
            @if ( $process != 'show' )
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" class="btn btn-circle blue"><i class="fa fa-check"></i> حفظ </button>
                        </div>
                    </div>
                </div>
            @endif
        </div>
        