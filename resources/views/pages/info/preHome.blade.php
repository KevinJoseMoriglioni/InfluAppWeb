@extends('layouts.empty')
    @section('title',"Home")
    @section('content')
    <div class="container-fluid bg-preHome">
        <div class="container text-center">
            <div class="row height100"></div>
            <div class="row">
                <div class="col-4 col-center">
                    <a href="{{route('Web.PreHomeInfo')}}"><img class="height100" src="{{asset('images/logos/logo1.png')}}"></a>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-4">
                    <a class="btn btni-primary" href="{{route('Web.BusinessInfo')}}">Business</a>
                </div>
                <div class="col-4">
                    <a class="btn btni-primary" href="{{route('Web.MembersInfo')}}">Members</a>
                </div>
                <div class="col-4">
                    <a class="btn btni-primary" href="{{route('Web.AmbassadorInfo')}}">Ambassadors</a>
                </div>
            </div>
            <div class="row">
                <div class="col-4 col-center">
                    <a class="btn btni-secundary" href="{{route('Web.HomeInfo')}}">Home page</a>
                </div>
            </div>
            <div class="row height100"></div>
        </div>
    </div>
    @endsection
