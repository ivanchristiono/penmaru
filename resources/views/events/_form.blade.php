<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
    {!! Form::label('eventType', 'Tipe Event', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-4">
        {!! Form::select('event_type_id', [''=>'']+App\EventType::pluck('name','id')->all(), null, [
        'class'=>'js-selectize form-control',
        'placeholder' => 'Pilih Tipe Event'
        ]) !!}
        {!! $errors->first('event_type_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
       
<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
    {!! Form::label('school', 'Sekolah', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-4">
        {!! Form::select('event_type_id', [''=>'']+App\School::pluck('name','id')->all(), null, [
        'class'=>'select2 form-control',
        'placeholder' => 'Pilih Tipe Event'
        ]) !!}
        {!! $errors->first('event_type_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
<label>Basic Date Range Picker</label>
    <div class='col-md-6 input-group date'>
        <input type='text' class="form-control daterange">
        <div class="input-group-append">
        <span class="input-group-text">
            <span class="fa fa-calendar"></span>
        </span>
        </div>
    </div>
    <small class="text-muted">The Date Range Picker is attached to a text input. It will
        use the current value of the input to initialize, and update
        the input if new dates are chosen.</small>
</div>
      
<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
    {!! Form::label('title', 'Judul', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-4">
        {!! Form::text('title', null, ['class'=>'form-control']) !!}
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('author_id') ? ' has-error' : '' }}">
    {!! Form::label('author_id', 'Penulis', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-4">
        {!! Form::select('author_id', [''=>'']+App\School::pluck('name','id')->all(), null, [
            'class'=>'js-selectize',
            'placeholder' => 'Pilih Penulis'
            ]) !!}
        {!! $errors->first('author_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
    {!! Form::label('amount', 'Jumlah', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-4">
        {!! Form::text('amount', null, ['class'=>'form-control', 'min'=>1]) !!}
        {!! $errors->first('amount', '<p class="help-block">:message</p>') !!}
        @if(isset($book))
            <p class="help-block">{{$book->borrowed}} buku sedang dipinjam</p>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
    {!! Form::label('cover', 'Cover', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-4">
        {!! Form::file('cover') !!}
        
        <!-- memeriksa ada tidaknya cover -->
        @if(isset($book) && $book->cover )
        <p>
            {!! Html::image(asset('img/'.$book->cover), null, ['class'=>'img-rounded img-responsive']) !!}
        </p>
        @endif

        {!! $errors->first('cover', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-4 col-md-offset-2">
        {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
    </div>
</div>