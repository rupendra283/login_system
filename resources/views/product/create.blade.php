@extends("layouts.app")
@section("content")
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('product-store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="product">Product</label>
                    <input id="product" class="form-control" type="text" name="title">
                </div>
                <div class="form-group">
                    <label for="product-details">Product Details</label>
                    <input id="product-details" class="form-control" type="text" name="description">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
        </div>
    </div>
</div>


@endsection
