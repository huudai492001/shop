@extends('admin.layout.layout')
@section('content')
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>S.no</th>
                <th>Product Name</th>
                <th>Category Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>

        @foreach($products as $key=>$product)
            <tr>
                <td>{{$key +1}}</td>
                <td>{{$product->name}}</td>
                <td>
                    @if($product->category_id)
                        {{$product->category->name}}
                    @endif
                </td>
                <td>{{$product->price}}</td>
                <td>
                    <img style="height: 80px ; width: 80px" src="{{asset('upload/'.$product->image)}}">
                </td>   <td>
                    <a href="{{route('product.edit', $product->id)}}" style="font-size: 25px; padding: 5px"> <i class="fa fa-edit"></i></a>
                </td>
            </tr>

        @endforeach
        </tbody>


    </table>


@endsection
