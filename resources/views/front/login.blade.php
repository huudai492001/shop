@extends('front.layout.layout')

@section('content')
    <div class="span9">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a> <span class="divider">/</span></li>
            <li class="active">Registration</li>
        </ul>

{{--        ==============LOGIN--}}
        <h3> Login</h3>
        <div class="well">
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </div>
            @endif
            <form class="form-horizontal" method="post" action="{{route('user_login_store')}}">
                @csrf
                <div class="control-group">
                    <label class="control-label" for="inputFname1">Email <sup>*</sup></label>
                    <div class="controls">
                        <input type="text" name="email" required="required" id="inputFname1" placeholder="Input email here">
                    </div>
                </div>
                <div class="control-group" >
                    <label class="control-label" for="inputFname1">Password<sup>*</sup></label>
                    <div class="controls">
                        <input type="password" required="required" name="password" id="inputFname1" placeholder="Input password here">
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <input type="submit" value="Login">
                    </div>
                </div>
            </form>
        </div>

        {{--        ==============END LOGIN--}}
        {{--        ==============Register--}}
        <div class="well">
            @if(\Illuminate\Support\Facades\Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{\Illuminate\Support\Facades\Session::get('success')}}
                </div>
            @endif
            <h3> Register</h3>
            <div class="well">
                <form class="form-horizontal" method="post" action="{{route('user_store')}}" >
                    @csrf
                    <div class="control-group">
                        <label class="control-label" for="inputFname1">First Name <sup>*</sup></label>
                        <div class="controls">
                            <input type="text" name="first_name" required="required" id="inputFname1" placeholder="Input First Name here">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputFname1">Last Name <sup>*</sup></label>
                        <div class="controls">
                            <input type="text" name="last_name" required="required" id="inputFname1" placeholder="Input Last Name here">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputFname1">Email <sup>*</sup></label>
                        <div class="controls">
                            <input type="text" name="email" required="required" id="inputFname1" placeholder="Input email here">
                        </div>
                    </div>
                    <div class="control-group" >
                        <label class="control-label" for="inputFname1">Password<sup>*</sup></label>
                        <div class="controls">
                            <input type="password" required="required" name="password" id="inputFname1" placeholder="Input password here">
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="controls">
                            <input type="submit" value="Submit">
                        </div>
                    </div>


                    {{--        ============== END Register--}}






                    {{--BUTTON LOGIN--}}
                    {{--                <div class="control-group">--}}
                    {{--                    <label class="control-label" for="inputFname1"> <sup></sup></label>--}}
                    {{--                    <div class="controls">--}}
                    {{--                        <button  class="btn btn-primary " name="btnlogin">--}}
                    {{--                            Login--}}
                    {{--                        </button>--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}
                    {{--                <div class="control-group "style="margin-left: 100px">--}}
                    {{--                    <button  class="btn btn-primary " name="btnlogin">--}}
                    {{--                        Login--}}
                    {{--                    </button>--}}
                    {{--                </div>--}}
                </form>
            </div>




        </div>

    </div>
@endsection
