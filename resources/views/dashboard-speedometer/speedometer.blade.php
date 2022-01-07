@extends('layouts.main')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/speedometer.css') }}">
@endsection

@section('content')
<div class="container">
    <div class="row mt-3">
        <div class="col-md-8">
            <h1>ENVIRONMENT</h1>
        </div>
        <div class="col-md-2">
            <img class="img-logo" src="{{ asset('img/download2.jpeg') }}" alt="" srcset="">
        </div>
        <div class="col-md-2">
            <img class="img-logo2" src="{{ asset('img/download3.png') }}" alt="" srcset="">
        </div>
    </div>


    <!-- First Row  -->
    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card card-baku" style="width: 22rem;">
                <div class="card-body">
                    <h5 class="card-title">Baku Mutu Air</h5>
                    <p class="card-text">
                    <div class="row">
                        <div class="col-md-8">
                            Coliform                           
                        </div>
                        <div class="col-md-4 text-end">
                            18.900
                        </div>
                    </div>
                    </p>                
                </div>
            </div>
        </div>

        <!-- Speedometer -->
        <div class="col-md-4">
            <div id="wrapper">
                <svg id="meter">
                    <circle id="outline_curves" class="circle outline"  cx="50%" cy="50%">
                    </circle>
                    <circle id="low" class="circle range" cx="50%" cy="50%" stroke="#D90D0D">
                    </circle>
                    <circle id="avg" class="circle range" cx="50%" cy="50%" stroke="#E6FF00">
                    </circle>
                    <circle id="high" class="circle range" cx="50%" cy="50%" stroke="#00C026">
                    </circle>                 
                </svg>
                <img id="meter_needle" src="{{ asset('img/svg-meter-gauge-needle.svg') }}" alt="">
                <input id="slider" type="text" value="{{ $data['baku_mutu'] }}" disabled/> 
                <label id="lbl" id="value" for="">%</label>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Description</h5>
                    <p class="card-text">
                    <div class="row mb-1">
                        <div class="col-md-2">
                            <div class="box-desc1"></div>
                        </div>
                        <div class="col-md-10">
                            <span>&#8805;</span> 4 Parameter ( 1% - 85% )
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-md-2">
                            <div class="box-desc2"></div>
                        </div>
                        <div class="col-md-10">
                            1-3 Parameter ( 86% - 99% )
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="box-desc3"></div>
                        </div>
                        <div class="col-md-10">
                            0 Parameter ( 100% )
                        </div>
                    </div>                    
                    </p>                
                </div>
            </div>
        </div>
    </div>

    <!-- Second Row -->
    <div class="row">
        <div class="col-md-4">
            <div class="card card-baku-2" style="width: 22rem;">
                <div class="card-body">
                    <h5 class="card-title">Emisi Sumber Tidak Bergerak</h5>
                    <p class="card-text">
                    <div class="row">
                        <div class="col-md-8">
                            Carbon Dioxide (CO2)                           
                        </div>
                        <div class="col-md-4 text-end">
                            7,7%
                        </div>
                    </div>
                    </p>                
                </div>
            </div>
        </div>

        <!-- Speedometer 2 -->
        <div class="col-md-4">
            <div id="wrapper_2">
                <svg id="meter_2">
                    <circle id="outline_curves_2" class="circle outline"  cx="50%" cy="50%">
                    </circle>
                    <circle id="low_2" class="circle range" cx="50%" cy="50%" stroke="#D90D0D">
                    </circle>
                    <circle id="avg_2" class="circle range" cx="50%" cy="50%" stroke="#E6FF00">
                    </circle>
                    <circle id="high_2" class="circle range" cx="50%" cy="50%" stroke="#00C026">
                    </circle>                 
                </svg>
                <img id="meter_needle_2" src="{{ asset('img/svg-meter-gauge-needle.svg') }}" alt="">
                <input id="slider_2" type="text" value="{{ $data['emisi_sumber'] }}" disabled/> 
                <label id="lbl_2" id="value" for="">%</label>
            </div>
        </div>      

    </div>

    <!-- Third Row -->    
    <div class="row">
        <div class="col-md-4">
            <div class="card card-baku-3" style="width: 22rem;">
                <div class="card-body">
                    <h5 class="card-title">Udara Ambient</h5>
                    <p class="card-text">
                    <div class="row">
                        <div class="col-md-8">
                            Partikulat (TSP) Downwind                   
                        </div>
                        <div class="col-md-4 text-end">
                            60,21 µq/m<span>&#179;</span>
                        </div>
                    </div>
                    </p>                
                </div>
            </div>
        </div>

        <!-- Speedometer 3 -->
        <div class="col-md-4">
            <div id="wrapper_3">
                <svg id="meter_3">
                    <circle id="outline_curves_3" class="circle outline"  cx="50%" cy="50%">
                    </circle>
                    <circle id="low_3" class="circle range" cx="50%" cy="50%" stroke="#D90D0D">
                    </circle>
                    <circle id="avg_3" class="circle range" cx="50%" cy="50%" stroke="#E6FF00">
                    </circle>
                    <circle id="high_3" class="circle range" cx="50%" cy="50%" stroke="#00C026">
                    </circle>                 
                </svg>
                <img id="meter_needle_3" src="{{ asset('img/svg-meter-gauge-needle.svg') }}" alt="">
                <input id="slider_3" type="text" value="{{ $data['udara_ambient'] }}" disabled/> 
                <label id="lbl_3" id="value" for="">%</label>
            </div>
        </div>

    </div>

    <!-- Fourth Row -->
    <div class="row">
        <div class="col-md-4">
            <div class="card card-baku-4" style="width: 22rem;">
                <div class="card-body">
                    <h5 class="card-title text-center">ENVIRONMENT INCIDENT</h5>                                     
                </div>
            </div>
        </div>
        <div class="col-md-6 ps-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="fw-bold">
                        NO INCIDENT
                    </div> 
                </div>
                <div class="col-md-4">
                    <div class="card card-baku-5 text-center" style="width: 5rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $data['no_incident'] }}</h5>                                     
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2 mb-5">
                <div class="col-md-4">
                    <div class="fw-bold">
                        IMPACT
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-baku-6 text-center" style="width: 5rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $data['impact'] }}</h5>                                     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@section('scripts')
    <script src="{{ asset('js/speedometer.js') }}"></script>
@endsection