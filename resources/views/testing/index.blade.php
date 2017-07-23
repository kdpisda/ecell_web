@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="/blogs/oauth/authorize/?response_type=code&client_id=A0jl8Chq4VredzjE0NQkmGLXHlTGSk&redirect_uri=http://127.0.2.1/blogs">
                        {{ csrf_field() }}
                        <input type="hidden" name="access_token" value="utkNOsp5Tu1kJfT3TTRKedqZb7k4Od">
                        <input type="text" name="username">
                        <input type="text" name="name">
                        <input type="text" name="first_name">
                        <input type="text" name="last_name">
                        <input type="email" name="email">
                        <input type="password" name="password">

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
