@extends('layouts.main')
@section('css')
    <link href="{{ asset('css/pyramid.css') }}" rel="stylesheet">        
@endsection

@section('content')

    <img src="{{ asset('img/download2.jpeg') }}" class="img-logo1" alt="logo" srcset="">                     
    <img src="{{ asset('img/download.png') }}" class="img-logo2" alt="logo" srcset="">                     
    
    <div class="triangle">
        <div class="first">    
            <b>{{ $data['lost_time'] }}</b>
            <br>
            LOST TIME INJURY                                                                 
        </div>                                                                                      
        <div class="second">           
            <b>{{ $data['medical_treatment'] }}</b>         
            <br> 
            MEDICAL TREATMENT INJURY
        </div>
        <div class="third">
            <b>{{ $data['work_injury'] }}</b>            
            <br>            
            WORK INJURY
        </div>
        <div class="fourth">
            <b>{{ $data['nearmiss_potensial'] }}</b>
            <br>
            NEARMISS POTENSIAL (LTI)
        </div>
        <div class="fifth">
            <div class="container" id="container">
                <div class="box1">
                    <table>
                        <tr>
                            <th>Safety Report </th>
                            <th width='34%'> </th>
                        </tr>                      
                        <tr>
                            <th>Report</th>
                            <th>: <input type="text" class="input-triangle" value="{{ $data['report_report'] }}" disabled></th>
                        </tr>
                        <tr>
                            <th>Number Of People</th>
                            <th>: <input type="text" class="input-triangle" value="{{ $data['report_nop'] }}" disabled></th>
                        </tr>
                        <tr>
                            <th>Potensial LTI</th> 
                            <th>: <input type="text" class="input-triangle" value="{{ $data['report_lti'] }}" disabled></th>
                        </tr>
                    </table>
                
                </div>
                <div class="box2">
                    <table>
                        <tr>
                            <th>Safety Audit </th>
                            <th width='34%'> </th>
                        </tr>                      
                        <tr>
                            <th>Report</th>
                            <th>: <input type="text" class="input-triangle" value="{{ $data['audit_report'] }}" disabled></th>
                        </tr>
                        <tr>
                            <th>Number Of People</th>
                            <th>: <input type="text" class="input-triangle" value="{{ $data['audit_nop'] }}" disabled></th>
                        </tr>
                        <tr>
                            <th>Potensial LTI</th> 
                            <th>: <input type="text" class="input-triangle" value="{{ $data['audit_lti'] }}" disabled></th>
                        </tr>
                    </table>                  
                </div>
                <div class="box3">
                    <table>                                       
                        <tr>
                            <th> Unsafe Action</th>
                            <th>: <input type="text" class="input-triangle" value="{{ $data['unsafe_action'] }}" disabled></th>
                            <th width='34%'><canvas id="myChart" width="106" height="106"></canvas></th>
                        </tr>
                        <tr>
                            <th>Unsafe Condition</th>
                            <th>: <input type="text" class="input-triangle" value="{{ $data['unsafe_condition'] }}" disabled></th>
                            <th width='34%'><canvas id="myChart2" width="106" height="106"></canvas></th>
                        </tr>                       
                    </table>  
                </div>
            </div>
        </div>
    </div>    

    <div class="row justify-content-end mb-1">
        <div class="col-sm-4">
            Site Man Hours
        </div>
        <div class="col-sm-5">
            Zero LTI Man Hours
        </div>
    </div>
    <div class="row justify-content-end mb-4">            
        <div class="col-sm-4">
            <input type="text" id="man-hours" class="btn btn-danger" value="{{ $data['site_man'] }}" disabled>        
        </div>
        <div class="col-sm-5">
            <input type="text" id="man-hours" class="btn btn-primary" value="{{ $data['zero_lti_man'] }}" disabled>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
    <script>
        var number1_1 = "{{ $data['lingkaran_1_1'] }}";
        var number1_2 = "{{ $data['lingkaran_1_2'] }}";
        var number2_1 = "{{ $data['lingkaran_2_1'] }}";
        var number2_2 = "{{ $data['lingkaran_2_2'] }}";

        var triangle_1 = "{{ $data['lost_time'] }}";
        var triangle_2 = "{{ $data['medical_treatment'] }}";
        var triangle_3 = "{{ $data['work_injury'] }}";
        var triangle_4 = "{{ $data['nearmiss_potensial'] }}";

    </script>    
    <script src="{{ asset('js/pyramid.js') }}"></script>
@endsection