@extends("template.master")
@section("content")

    <section id="pinBoot">

        @foreach ($products as $product)
        <article class="white-panel">
            <img class="img-responsive" minimal-lightbox class="b-link-fade b-animate-go"
                 src="/images/{{ $product->name .'.'. $product->image_extension . '?' . 'time='. time() }}"/>
            <h3>{{$product->name}}</h3>
            <h4>Rp. {{$product->price}}</h4>
            <small>{!! str_limit($product->description, 250) !!}</small>
        </article>
        @endforeach
    </section>
    <script src="js/minimal.lightbox.js"></script>
@stop