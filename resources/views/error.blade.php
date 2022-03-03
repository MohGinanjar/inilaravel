
@extends('layout.app')

@section('header')
    <h1 class="m-0 text-dark">ERROR</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <i class='fas fa-exclamation-circle' style='font-size:48px;color:red'></i>
                <p style="color:red;">ERROR MOHON MASUKAN PIN YANG BENAR ! SILAHKAN COBA KEMBALI</p>
                </div>
            </div>
        </div>
    </div>
    @stop