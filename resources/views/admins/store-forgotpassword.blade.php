@extends("template.master")
@section("content")

    {!! Form::open(['route' => ['forgotpasswords.update', $id, $code], 'class' => 'form-horizontal', 'role' => 'form']) !!}

    <div class="form-group">
        {!! Form::password('password', array('class' => 'form-control','placeholder' => 'Password')) !!}
        <div class="text-danger">{!! $errors->first('password') !!}</div>
        <div class="clear"></div>
    </div>

    <div class="form-group">
        {!! Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Re-type Your Password')) !!}
        <div class="clear"></div>
    </div>

    <div class="form-group">
        {!! Form::submit('Submit', array('class' => 'btn btn-raised btn-primary')) !!}
        <div class="clear"></div>
    </div>

    {!! Form::close() !!}

@stop