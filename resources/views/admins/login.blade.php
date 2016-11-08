@extends("template.master")
@section("content")
@include('flash::message')

    {!! Form::open(['route' => 'login.store', 'class' => 'form-horizontal', 'role' => 'form']) !!}

    <div class="form-group">
        {!! Form::email('email', null, array('class' => 'form-control','placeholder' => 'Your Email')) !!}
        <div class="text-danger">{!! $errors->first('email') !!}</div>
        <div class="clear"></div>
    </div>

    <div class="form-group">
        {!! Form::password('password', array('class' => 'form-control','placeholder' => 'Your Password')) !!}
        <div class="text-danger">{!! $errors->first('password') !!}</div>
        <div class="clear"></div>
    </div>

    <div class="form-group">
        {!! Form::label('remember', 'Remember Me', array('class' => 'col-lg-3 control-label')) !!}
        <div class="col-lg-1">
            {!! Form::checkbox('remember', null, array('class' => 'form-control' )) !!}
        </div>
        <div class="clear"></div>
    </div>

    <div class="form-group">
        {!! Form::submit('Login', array('class' => 'btn btn-raised btn-primary')) !!}
        <div class="clear"></div>
    </div>

    <div class="text-info">
        <div class="col-lg-6">
            {!! link_to(route('forgotpasswords.create'), 'Forgot Password ?') !!}
        </div>
        <div class="clear"></div>
    </div>

    {!! Form::close() !!}
@stop