@extends("template.master")
@section("content")

    {!! Form::open(['route' => 'forgotpasswords.store', 'class' => 'form-horizontal', 'role' => 'form']) !!}

    <div class="form-group">
        {!! Form::email('email', null, array('class' => 'form-control','placeholder' => 'Your Email')) !!}
        <div class="text-danger">{!! $errors->first('email') !!}</div>
        <div class="clear"></div>
    </div>

    <div class="form-group">
        {!! Form::submit('Submit', array('class' => 'btn btn-raised btn-primary')) !!}
        <div class="clear"></div>
    </div>

    {!! Form::close() !!}

@stop