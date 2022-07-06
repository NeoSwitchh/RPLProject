@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-around align-items-center flex-column">
        <div class="">
            <h2 class="greet">Selamat Datang <span class="">{{ Auth::user()->nama_depan}}</span> di VRD Simulation System</h2>
            <h4 class="date">Today is {{ Carbon\Carbon::now('Asia/Jakarta')->format('l') }}, {{ Carbon\Carbon::now('Asia/Jakarta')->format('d-m-Y') }}</h4>
        </div>
        <br>
        <div class="">
            <div class="">
                <h5>Statistik Data User</h5>
            </div>
            <div class="">
                <div class="">
                    <span class="">{{ $users->count() - rand(0,$users->count()) }}</span>
                    <span class="">Pengguna Aktif</span>
                    <span class="">Dari {{ $users->count() }} Nasabah</span>
                </div>
                <div class="">
                    <span class="">{{ $userCompleted->count() }}</span>
                    <span class="">User yang</span>
                    <span class="">Lulus</span>
                </div>
            </div>
        </div>
    </div>
@endsection