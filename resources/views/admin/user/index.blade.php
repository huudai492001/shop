@extends('admin.layout.layout')
@section('content')
    @if(\Illuminate\Support\Facades\Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{\Illuminate\Support\Facades\Session::get('success')}}
        </div>
    @endif
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>S.no</th>
            <th>Product Name</th>
            <th>Category Name</th>
            <th>Role</th>
            <th>Created_At</th>
            <th>Action</th>

        </tr>
        </thead>
        <tbody>
        @php
            $i = 1
        @endphp
        @foreach($users as $user)
            @if($user->role!='admin')
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$user->name}}</td>
                    <td>
                        {{$user->email}}
                    </td>
                    <td>{{$user->role}}</td>
                    <td>
                        {{$user->created_at}}
                    </td>

                    <td>
                        {{--                    <a href="{{route('product.edit', $product->id)}}" style="font-size: 25px; padding: 5px"> <i class="fa fa-edit"></i></a>--}}
                        |
                        <a href="{{route('product.delete', $user->id)}}" style="font-size: 25px; padding: 5px"> <i class="fa fa-trash"></i></a>

                    </td>
                </tr>


            @endif

        @endforeach
        </tbody>


    </table>


@endsection
