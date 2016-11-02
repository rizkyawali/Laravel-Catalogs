@extends("template.master")
@section("content")

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
                                <a href="/images/{{ $product->id }}">
                                    <img src="/images/thumbnail/{{ 'thumb-' .$product->name .'.'. $product->image_extension . '?' . 'time='. time() }}"/></a>
                            </td>
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

@stop