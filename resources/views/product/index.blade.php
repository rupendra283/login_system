@extends("layouts.app")
@section("content")


<div class="container">
    <div class="row">
        <div class="col-md-6">
    <table class="table table-bordered table-light">
    <thead class="thead-light">
        <tr>
            <th>Sr No</th>
            <th>Product Title</th>
            <th>Product description</th>
        </tr>
    </thead>
    <tbody>
        @php
            $x =1;

        @endphp
        @foreach ($posts as $post)
        <tr>
            <td>{{$x++}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->description}}</td>
        </tr>
        <td>
        <a href="{{route('product-edit',$post->id)}}" class="btn btn-info btn-circle btn-md edit-btn" data-toggle="tooltip" title="edit" >Edit</a>
        <a href="{{route('product-delete',$post->id)}}" class="btn btn-danger btn-circle btn-md edit-btn" data-toggle="tooltip" title="Delete" >Delete</a>
    </td>
        @endforeach
    </tbody>

</table>



        </div>
    </div>
</div>

@endsection
