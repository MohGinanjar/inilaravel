@extends('layout.app')

@section('header')
    <h1 class="m-0 text-dark">EDIT DATA</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @foreach($data_officer as $p)
                    <form action="/home/edit/{{$p->company_id}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                        <label for="exampleInputBorder">Company</label>
                        <input type="text" name="company_id" class="form-control" required="required" value="{{ $p->company_id }}" id="exampleInputBorder">
                        </div>
                        <div class="form-group">
                        <label for="exampleInputBorder">Officer_id</label>
                        <input type="text" name="officer_id" class="form-control" required="required" value="{{ $p->officer_id }}" id="exampleInputBorder">
                        </div>
                        <div class="form-group">
                        <label for="exampleInputBorder">Officer Name</label>
                        <input type="text" name="officer_name" class="form-control" required="required" value="{{ $p->officer_name }}" id="exampleInputBorder">
                        </div>
                        <div class="form-group">
                        <label for="exampleInputBorder">Officer QR</label>
                        <input type="text" name="officer_qr" class="form-control" required="required" value="{{ $p->officer_qr }}" id="exampleInputBorder">
                        </div>
                        <div class="form-group">
                        <label for="exampleInputBorder">Level</label>
                        <input type="text" name="level" class="form-control" required="required" value="{{ $p->level }}" id="exampleInputBorder">
                        </div>
                        <div class="form-group">
                        <label for="exampleInputBorder">Division</label>
                        <input type="text" name="division" class="form-control" required="required" value="{{ $p->division }}" id="exampleInputBorder">
                        </div>
                        <div class="form-group">
                        <label for="exampleInputBorder">Birth Date</label>
                        <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" name="birth_date" class="form-control" required="required" value="{{ $p->birth_date }}" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask>
                        </div>
                        <!-- /.input group -->
                        </div>
                        <!-- /.form group -->
                        </div>
                        <div class="form-group">
                        <label for="exampleInputBorder">Birth Place</label>
                        <input type="text" name="birth_place" class="form-control" required="required" value="{{ $p->birth_place }}" id="exampleInputBorder">
                        </div>
                        <div class="form-group">
                        <label for="exampleInputBorder">Placement Location</label>
                        <input type="text" name="placement_location" class="form-control" required="required" value="{{ $p->placement_location }}">
                        
                        </div>
                        <div class="form-group">
                        <label for="exampleInputBorder">PIN</label>
                        <input type="text" name="pin" class="form-control" required="required" value="{{ $p->pin }}" id="exampleInputBorder">
                        </div>
                        <div class="card-footer">
                        <button type="submit" class="btn btn-info">Save</button>
                        <button type="submit" class="btn btn-default float-right">Cancel</button>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @stop