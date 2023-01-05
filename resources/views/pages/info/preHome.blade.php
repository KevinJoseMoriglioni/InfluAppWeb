@extends('layouts.empty')
    @section('title',"Home")
    @section('content')
    <div class="container-fluid bg-preHome mt-4" style="background-image: url('{{asset('images/backgrounds/prehome.png')}}') ;">
        <div class="container text-center">
            <div class="row">
                <div class="col-4 col-center">
                    <a href="{{route('Web.PreHomeInfo')}}"><img class="height150" src="{{asset('images/logos/logo1.png')}}"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row my-4">
            <div class="col-4">
                <a class="btn btni-primary" href="{{route('Web.BusinessInfo')}}">Business</a>
            </div>
            <div class="col-4">
                <a class="btn btni-primary" href="{{route('Web.UsersInfo')}}">Users</a>
            </div>
            <div class="col-4">
                <a class="btn btni-primary" href="{{route('Web.MembershipsInfo')}}">Memberships</a>
            </div>
        </div>
        <div class="row">
            <div class="col-4 col-center">
                <a class="btn btni-secundary" href="{{route('Web.HomeInfo')}}">Home page</a>
            </div>
        </div>
    </div>
    @endsection
