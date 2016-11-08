@extends("template.master")
@section("content")

    <div class="panel panel-body">

            <div class="col-lg-3">
                <img src="/images/{{ $product->name .'.'. $product->image_extension . '?' . 'time='. time() }}">
            </div>

            <h2>{!! $product->name !!}</h2>

            <h4>Rp. {{$product->price}}</h4>

            <article>
                <p>
                    {!! $product->description !!}
                </p>
            </article>
    </div>

    <div class="panel panel-body">
        <div class="col-lg-6">
            <h3>Give Your Feedbacks</h3>

            {!! Form::open(['route' => 'comments.store', 'class' => 'form-horizontal', 'role' => 'form']) !!}

            <div class="form-group">
                <div class="col-lg-8">
                    {!! Form::text('product_id', $value = $product->id, array('class' => 'form-control', 'placeholder' => 'Your Name', 'readonly')) !!}
                </div>
                <div class="clear"></div>
            </div>

            <div class="form-group">
                <div class="col-lg-8">
                    {!! Form::text('user', null, array('class' => 'form-control', 'placeholder' => 'Your Name')) !!}
                </div>
                <div class="clear"></div>
            </div>

            <div class="form-group">
                <div class="col-lg-12">
                    {!! Form::textarea('comment', null, array('class' => 'form-control', 'rows' => '5', 'placeholder' => 'Your Comments')) !!}
                </div>
                <div class="clear"></div>
            </div>

            <div class="form-group">
                <div class="col-lg-9">
                {!! Form::submit('Send Comment', array('class' => 'btn btn-raised btn-primary')) !!}
                </div>
                <div class="clear"></div>
            </div>
            <br><br><br><br>

            {!! Form::close() !!}

            <div class="col-lg-9 col-md-12">
                @foreach($comments as $comment)
                <div class="bg-info">
                    <blockquote>
                        <i>{!! $comment->user !!} <small>{!! $comment->created_at->format('d M Y') !!}</i></small><br/>
                        <p>{!! $comment->comment !!}</p>
                    </blockquote>
                </div>
                @endforeach
            </div>

        </div>
    </div>

    <script>

        $('#find').on('click', function(){

            $.ajax({

                url : '/comments',
                type : 'GET',
                dataType : 'json',

                data :
                {
                    'keywords' : $('#keywords').val()
                },

                success : function(data)
                {
                    $('show').html(data['view']);
                },

                error : function(xhr, status)
                {
                    console.log(xhr.error + " ERROR STATUS : " + status);
                },

                complete : function()
                {
                    alreadyloading = false;
                }
            });
        });
    </script>


@stop