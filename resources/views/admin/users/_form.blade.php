
	<div class="form-body form-horizontal form-bordered form-row-stripped">
		<div class="form-group">
			<label class="control-label col-md-2">الاسم<span style="color: red">*</span></label>
			<div class="col-md-9">
				{!! Form::text('name',null,['class'=>'form-control input-circle']) !!}
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-md-2">الاسم<span style="color: red">*</span></label>
			<div class="col-md-9">
				{!! Form::text('name',null,['class'=>'form-control input-circle']) !!}
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-md-2">surah<span style="color: red">*</span></label>
			<div class="col-md-9">
				<select class="form-control " name="surah" onchange="surahSelect(this)">
					<option>اختر سورة</option>
					@foreach($surah->data as $s)
					<option value="{{ $s->number}}" >{{$s->name}}</option>
					@endforeach
				</select>
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-md-2">lesson_from<span style="color: red">*</span></label>
			<div class="col-md-9">
				{!! Form::number('lesson_from',null,['class'=>'form-control input-circle lesson_from','min'=>'1']) !!}
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-md-2">lesson_to<span style="color: red">*</span></label>
			<div class="col-md-9">
				{!! Form::number('lesson_to',null,['class'=>'form-control input-circle lesson_to','min'=>'2']) !!}
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-md-2">lesson_day<span style="color: red">*</span></label>
			<div class="col-md-9">
				{!! Form::date('lesson_day',null,['class'=>'form-control input-circle']) !!}
			</div>
		</div>

		@if(isset($btn))
		<div class="form-actions">
			<div class="row">
				<div class="col-md-offset-3 col-md-9">
					<button type="submit" class="btn btn-circle blue"><i class="fa fa-check"></i> {{ $btn }} </button>
				</div>
			</div>
		</div>
		@endif
	</div>
	