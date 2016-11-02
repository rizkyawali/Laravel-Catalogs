@extends("template.master")
@section("content")
        <div class="row col-lg-12">
            <table class="table table-striped">
                <thead>
                    <td>Name</td>
                    <td>Price</td>
                    <td>Image</td>
                </thead>

                <tbody>
                    @foreach($products as $product)

                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>
                                <img class="img-responsive" minimal-lightbox class="b-link-fade b-animate-go" src="/images/thumbnail/{{ 'thumb-' .$product->name .'.'. $product->image_extension . '?' . 'time='. time() }}">
                            <td>
                                {!! Form::model($product, ['route' => ['products.destroy', $product->id], 'method' => 'DELETE']) !!}
                                <div class="form-group">
                                    {!! Form::submit('Delete', array('class' => 'btn btn-raised btn-danger', 'Onclick' => 'return confirmDelete();')) !!}
                                </div>
                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
        <script src="js/minimal.lightbox.js"></script>
@stop