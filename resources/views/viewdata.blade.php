@extends('layout.app')

@section('header')
    <h1 class="m-0 text-dark">View Data</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @foreach($data_officer as $p)
                    <div class="col">
                    <div class="row align-items-start">
                    Company : {{$p->company_id}}
                    </div>
                    </div>
                    <div class="col">
                    <div class="row align-items-start">
                    Officer Id : {{$p->officer_id}}
                    </div>
                    </div>
                    <div class="col">
                    <div class="row align-items-start">
                    Officer Name : {{$p->officer_name}}
                    </div>
                    </div>
                    <div class="col">
                    <div class="row align-items-start">
                    Company : {{$p->company_id}}
                    </div>
                    </div>
                    <div class="col">
                    <div class="row align-items-start">
                    Officer Id : {{$p->officer_id}}
                    </div>
                    </div>
                    <div class="col">
                    <div class="row align-items-start">
                    Officer Name : {{$p->officer_name}}
                    </div>
                    </div>
                    <div class="col">
                    <div class="row align-items-start">
                    officer_qr : {{$p->officer_qr}}
                    </div>
                    </div>
                    <div class="col">
                    <div class="row align-items-start">
                    Level : {{$p->level}}
                    </div>
                    </div>
                    <div class="col">
                    <div class="row align-items-start">
                    Division : {{$p->division}}
                    </div>
                    </div>
                    
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @stop