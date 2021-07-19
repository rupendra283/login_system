@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="" method="post">

            <div class="form-group">
                <label for="my-input">Text</label>
                <input id="my-input" class="form-control" type="text" value="{{$posts->title}}" name="">

            </div>
            <div class="form-group">
                <label for="my-input">Text</label>
                <input id="my-input" class="form-control" type="text" value="{{$posts->description}}" name="">

            </div>

            </form>

        </div>
    </div>
</div>


@endsection
