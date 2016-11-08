@extends("template.master")
@section("content")
    @include('flash::message')

    <section id="pinBoot">

        @foreach ($products as $product)
        <article class="white-panel">
            <img class="img-responsive" minimal-lightbox class="b-link-fade b-animate-go"
                 src="/images/{{ $product->name .'.'. $product->image_extension . '?' . 'time='. time() }}"/>
            <h4>{{$product->name}}</h4>
            <bold>Rp. {{$product->price}}</bold><hr>
            <small>
                {!! str_limit($product->description, 50) !!}
                {!! link_to(route('front-route.show', $product->id),'Read More') !!}
            </small>
        </article>
        @endforeach
    </section>
    <script src="js/minimal.lightbox.js"></script>

    {{--{!! $products->render() !!}--}}
@stop