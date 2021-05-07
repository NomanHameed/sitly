@extends('frontend.layouts.app')

@section('title', __('Welcome'))

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <img src="{{ asset('img/welcome.png') }}" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a class="btn btn-primary" href="{{route('frontend.user.profile')}}">Next</a>
            </div>
        </div>
    </div><!--container-->
@endsection
