@extends('layouts.app')

@section('content')
    <div class="main-fill-second">
        <div class="main-container">
            <div class="main-content">
                <div class="greeting border-transparent shadow-lg rounded-xl">
                    <span class="greet">Selamat Datang <span class="user-account text-green-400">{{ Auth::user()->nama_depan}}</span> di VRD Simulation System</span> <br>
                    Today is 
                    <span class="date">{{ Carbon\Carbon::now('Asia/Jakarta')->format('l') }}, {{ Carbon\Carbon::now('Asia/Jakarta')->format('d-m-Y') }}</span>
                </div>
                <div class="statistic-container border-transparent shadow-lg rounded-xl p-5">
                    <div class="title-statistic">
                        <span>Statistik Data User</span>
                    </div>
                    <div class="statistic-category border-transparent rounded-xl">
                        <div class="s-category border-transparent shadow-lg rounded-xl">
                            <div class="s-category-name rounded-t-xl">
                                <div class="s-c-name-detail">
                                    <span class="count-category">{{ $users->count() - rand(0,$users->count()) }}</span>
                                    <span class="active-category">Pengguna Aktif</span>
                                    <span class="spesific-category">Dari {{ $users->count() }} Nasabah</span>
                                </div>
                            </div>
                        </div>
                        <div class="s-category border-transparent shadow-lg rounded-xl">
                            <div class="s-category-name rounded-t-xl">
                                <div class="s-c-name-detail">
                                    <span class="count-category">{{ $userCompleted->count() }}</span>
                                    <span class="active-category">User yang</span>
                                    <span class="spesific-category">Lulus</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection