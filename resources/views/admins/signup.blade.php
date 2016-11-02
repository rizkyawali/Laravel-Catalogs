@extends("template.master")
@section("content")

    {!! Form::open(['route' => 'signup.store', 'class' => 'form-horizontal', 'role' => 'form']) !!}

    <div class="form-group">
        {!! Form::text('first_name', null, array('class' => 'form-control', 'placeholder' => 'Your First Name')) !!}
        <div class="text-danger">{!! $errors->first('first_name') !!}</div>
        <div class="clear"></div>
    </div>

    <div class="form-group">
        {!! Form::text('last_name', null, array('class' => 'form-control', 'placeholder' => 'Your Last Name')) !!}
        <div class="text-danger">{!! $errors->first('last_name') !!}</div>
        <div class="clear"></div>
    </div>

    <div class="form-group">
        {!! Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'Your Email')) !!}
        <div class="text-danger">{!! $errors->first('email') !!}</div>
        <div class="clear"></div>
    </div>

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
        <div class="col-lg-3"></div>
        {!! Form::submit('Sign Up', null, array('class' => 'btn btn-raised btn-primary')) !!}
        <div class="clear"></div>
    </div>

    {!! Form::close() !!}
@stop