
@extends('layout.app')

@section('header')
    <h1 class="m-0 text-dark">LIST API</h1>
@stop

@section('content')
    <div class="row">
            
        <div class="col-12">
        <div class = "row justify-content-center">
        <div class= "col-md-6">
        </div>
        </div>
        
            <div class="card">
                <div class="card-body">
                   <table border="1" class= "col-md-12 cjustify-content-center">
                   <tr>
                        <th>Method</th>
                        <th>URI</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    
                    <tr>
                        <td>GET|HEAD</td>
                        <td>api/officer</td>
                        <td>officer.index</td>
                        <td>App\Http\Controllers\API\OfficerApiController@index</td>
                    </tr>
                    <tr>
                        <td>POST</td>
                        <td>api/officer</td>
                        <td>officer.store</td>
                        <td>App\Http\Controllers\API\OfficerApiController@store</td>
                    </tr>
                    <tr>
                        <td>GET|HEAD</td>
                        <td>api/officer/create</td>
                        <td>officer.create</td>
                        <td>App\Http\Controllers\API\OfficerApiController@create</td>
                    </tr>
                    <tr>
                        <td>GET|HEAD</td>
                        <td>api/officer/{officer}</td>
                        <td>officer.show</td>
                        <td>App\Http\Controllers\API\OfficerApiController@show</td>
                    </tr>
                    <tr>
                        <td>GET|HEAD</td>
                        <td>api/officer/{officer}</td>
                        <td>officer.update</td>
                        <td>App\Http\Controllers\API\OfficerApiController@update</td>
                    </tr>
                    <tr>
                        <td>GET|HEAD</td>
                        <td>api/officer/{officer}</td>
                        <td>officer.destroy</td>
                        <td>App\Http\Controllers\API\OfficerApiController@destroy</td>
                    </tr>
                   </table>
                </div>
            </div>
        </div>
    </div>
    @stop