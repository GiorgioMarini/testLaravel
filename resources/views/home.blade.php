@extends('master')
@section('title', 'Home')

@section('content')



    <div class="container">
        <div class="row banner">

            <div class="col-md-12">

                <h1 class="text-center margin-top-100 editContent">
                    TEST LARAVEL
                </h1>

                <h3 class="text-center margin-top-100 editContent">{{ trans('message.welcome1')}}</h3>

                <div class="text-center">
                   <h1>{{ trans('message.welcome') }}</h1>
                </div>

            </div>

        </div>
    </div>

@endsection