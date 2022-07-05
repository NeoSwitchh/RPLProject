@extends('layouts.app')
@section('content')
<body  style="background-image: url('http://127.0.0.1:8000/image/Picture1.png') center;">
    <div class="relative flex items-center min-h-screen" >
        <div class="continer mx-auto flex flex-col lg:flex-row items-center justify-center pb-40 mt-5 pt-5">
            <div class="text-center my-4 lg:my-0 lg:mr-24">
                <h1 class="text-black text-5xl lg:text-6xl dark:text-white font-bold">VRD Simulation</h1>
                <h3 class="text-black text-3xl lg:text-4xl dark:text-white font-semibold">a VR-based Disaster Simulation</h3>
                {{-- <div class="mr-5 pt-5">
                    <a href="{{ route('login') }}" class="btn btn-dark ml-5 text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                    <a href="{{ route('register') }}" class="btn btn-dark ml-5 text-sm text-gray-700 dark:text-gray-500 underline">Register</a
                </div> --}}
            </div>
            <div class="continer mx-auto flex flex-col lg:flex-row items-center justify-center pb-40">
            </div>
        </div>
    </div>
    </body> 
@endsection
