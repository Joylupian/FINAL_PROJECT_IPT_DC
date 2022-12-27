@extends('base')

@extends('navbar')

@section('title', 'Dashboard')

@section('content')
    <div class="container mt-3">
        <h1 class="text-left" style="font-weight: 500; color:rgb(255, 255, 255); font-size: 30px;">Dashboard</h1>
        <div class="content " style="position: relative; margin-left: 500px;">
            <div class="mt-5 text-center">
                <div class="col-md-3 mb-5">
                    <div class="card shadow">
                        <a href="/recent-post" id="dash-link">
                            <div class="card-body rounded " style="background-color:#1d1d1f;">
                                <div class="row">
                                    <div class="col">
                                        <i class="fa fa-history text-white mt-2" id="dash-icon"></i>
                                    </div>
                                    <div class="col mt-4">
                                        <span class="text-white float-right" id="text">Recent Talk</span><br>
                                        <span class="text-white" id="text2">{{ $allPosts }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 mb-5">
                    <div class="card shadow">
                        <a href="/my-post" id="dash-link">
                            <div class="card-body rounded" style="background-color:#1d1d1f;">
                                <div class="row">
                                    <div class="col">
                                        <i class="fa fa-commenting-o text-white mt-2" id="dash-icon"></i>
                                    </div>
                                    <div class="col mt-4">
                                        <span class="text-white float-right" id="text">Your Talk</span><br>
                                        <span class="text-white" id="text2">{{ $posts }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @role('admin')
                <div class="col-md-3 mb-2">
                    <div class="card shadow">
                        <a href="/log" id="dash-link">
                            <div class="card-body rounded" style="background-color:#1d1d1f;">
                                <div class="row">
                                    <div class="col">
                                        <i class="fa fa-book text-white mt-2" id="dash-icon"></i>
                                    </div>
                                    <div class="col mt-4">
                                        <span class="text-white float-right" id="text">Total Logs</span><br>
                                        <span class="text-white" id="text2">{{ $logs }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endrole
            </div>
        </div>

    </div>
@endsection

<style>
    .card {
        width: 240px;
    }
    .card:hover {
        transform: scale(1.02);
        transition: transform 0.4s ease;
    }

    #dash-icon {
        font-size: 30px;
        opacity: 0.5;
    }
    #dash-link {
        text-decoration: none;
    }
    .time {
        opacity: 0.8;
    }
    .recent-only {
        border: 1px solid rgba(0, 0, 0, 0.23);
        border-radius: 10px;
        box-shadow: 3px 3px 1px 0px rgba(0, 0, 0, 0.2);
    }
</style>
