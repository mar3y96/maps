	<div class="form-body form-horizontal form-bordered form-row-stripped">
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
                <label class="control-label col-md-2">الوصف بالعربيه<span style="color: red">*</span></label>
                <div class="col-md-9">
                    {!! Form::textarea('details_ar',null,['class'=>'form-control input-circle',$process=='show'?'disabled':'']) !!}
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2">الوصف بالإنجليزيه<span style="color: red">*</span></label>
                <div class="col-md-9">
                    {!! Form::textarea('details_en',null,['class'=>'form-control input-circle',$process=='show'?'disabled':'']) !!}
                </div>
            </div>
            @if ( $process != 'create' )
                <div class="form-group " style="padding: 20px">
                    <label class="control-label col-md-2">الصوره الحاليه<span style="color: red">*</span></label>
                    <div class="col-md-9">
                        <img src="{{ asset($category->image) }}" class="img-thumbnail" width="200">
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
        