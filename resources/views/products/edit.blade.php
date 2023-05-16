@extends('products.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Edit product</div>
        <div class="card-body">

            <form action="{{ url('product/' . $product->id) }}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')
                <input type="hidden" name="id" id="id" value="{{ $product->id }}" id="id" />
                <label>Name</label></br>
                <input type="text" name="name" id="name" value="{{ $product->name }}" class="form-control"></br>
                <label>Price</label></br>
                <input type="text" name="address" id="address" value="{{ $product->price }}" class="form-control"></br>
                <label>Images</label></br>
                <input type="text" name="mobile" id="mobile" value="{{ $product->images['links'][0] ?? '' }}"
                    class="form-control"></br>
                <label>Category-id</label></br>
                <input type="text" name="address" id="address" value="{{ $product->category_id }}"
                    class="form-control"></br>
                <label>description</label></br>
                <input type="text" name="address" id="address" value="{{ $product->description }}"
                    class="form-control"></br>

                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
