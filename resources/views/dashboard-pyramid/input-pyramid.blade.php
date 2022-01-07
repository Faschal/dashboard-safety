@extends('layouts.main')
@section('content')
    <div class="container">
        <h3 align = "center" class="mt-5">Upload Excel Pyramid</h3>
        <br>
        <div class="alert alert-danger" id="message" style="display: none"> <ul></ul> </div>
        <form id="upload-form" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <table class="table">
                    <tr>
                    <td width="40%" align="right"><label>Select File for Upload</label></td>
                    <td width="30"><input type="file" name="select_file" id="select_file" /></td>
                    <td width="30%" align="left"><input type="submit" name="upload" id="upload" class="btn btn-primary" value="Upload"></td>
                    </tr>
                    <tr>
                    <td width="40%" align="right"></td>
                    <td width="30"><span class="text-muted">xls, xlsx, csv</span></td>
                    <td width="30%" align="left"></td>
                    </tr>
                </table>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('js/input-pyramid.js') }}"></script>    
@endsection