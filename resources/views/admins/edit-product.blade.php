@extends("template.master")
@section("content")
    @include('flash::message')

    {!! Form::model($product, ['route' => ['products.update', $product->id],
    'method' => 'PATCH',
    'class' => 'form',
    'files' => true]) !!}

    <div class="form-group">
        {!! Form::text('name', null, ['class' => 'form-control' , 'placeholder' => 'Product Name']) !!}
    </div>

    <div class="form-group">
        {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => '3', 'placeholder' => 'Product Description']) !!}
    </div>

    <div class="form-group">
        {!! Form::text('price', null, ['class' => 'form-control', 'placeholder' => 'Product Price']) !!}
    </div>

    <div class="form-group">
        <div class="input-group">
            {!! Form::file('image', null, array('required', 'class' => 'form-control')) !!}
            <input readonly="" class="form-control" type="text">
        </div>
    </div>

    <div class="form-group">
        {!! Form::submit('Confirm', array('class' => 'btn btn-raised btn-primary')) !!}
    </div>

    {!! Form::close() !!}

@stop