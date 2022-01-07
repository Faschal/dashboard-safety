@extends('layouts.main')
@section('content')
    <div class="container">        
        <div class="col-md-4 mx-auto mt-5">
            <div class="alert print-msg" style="display: none">
                <ul></ul>      
            </div>              
            <div class="card">
                <div class="card-header text-center">
                    LOGIN
                </div>
                <div class="card-body">
                    <form class="user" id="login-form">
                        @csrf
                        <div class="mb-3">
                          <label for="name" class="form-label">Username</label>
                          <input type="text" class="form-control" id="name" name="name">                      
                        </div>
                        <div class="mb-3">
                          <label for="password" class="form-label">Password</label>
                          <input type="password" class="form-control" id="password" name="password">
                        </div>                    
                        <button type="submit" class="btn btn-outline-primary btn-user">Submit</button>
                      </form>
                </div>
            </div>        
        </div>                
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/login.js') }}"></script>      
@endsection