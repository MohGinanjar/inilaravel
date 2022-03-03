@extends('layout.app')

@section('header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
                <div class= "col-md-12">
                    <form action="/home" method="get">
                            <div class = "input-group mb-12">
                                <input type="text" class="form-control" placeholder="Search .." name="search" value="{{request('search')}}">
                                <button class="btn btn-info" type="submit">SEARCH</button>
                            
                            </div>
                    </form>
                </div>
                <div class = "row justify-content-center">
                <div class= "col-md-12">
                    <a href="/home/add" class="btn btn-info justify-content-center"> + Tambah</a>
                </div>
                </div>
                <div class = "row justify-content-center">
                <div class= "col-md-12">
                    <a href="/listapi" class="btn btn-danger justify-content-center"> List API</a>
                </div>
                </div>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid">
                        <div class="p-6">
                        <div class="table-responsive">
                        <table border="1" class= "col-md-12 cjustify-content-center">
                   <tr>
                        <th>Company ID</th>
                        <th>Officer</th>
                        <th>Officer Name</th>
                        <th>Officer QR</th>
                        <th>Level</th>
                        <th>Division</th>
                        <th>Birth Day</th>
                        <th>Birth Place</th>
                        <th>Placement Location</th>
                        <th>Opsi</th>
                        <th>Opsi View</th>
                     </tr>
                    @foreach($data_officer as $p)
                        <tr>
                        <td>{{ $p->company_id }}</td>
                        <td>{{ $p->officer_id }}</td>
                        <td>{{ $p->officer_name }}</td>
                        <td>{{ $p->officer_qr }}</td>
                        <td>{{ $p->level }}</td>
                        <td>{{ $p->division }}</td>
                        <td>{{ $p->birth_date }}</td>
                        <td>{{ $p->birth_place }}</td>
                        <td>{{ $p->placement_location }}</td>
                        <td>
                            <a href="/home/editdata/{{$p->company_id}}" class="btn btn-warning"> Edit</a> ||
                            <a href="/home/delete/{{$p->company_id}}" class="btn btn-danger"> Delete</a> ||
                        </td>
                        <td>
                        <form action="/viewdata" method="get">
                        <div class = "input-group mb-6">
                        <input type="text" class="form-control" placeholder="PIN" name="pin" required>
                        <input type="text" hidden name="company_id" value="{{$p->company_id}}"></p>
                        <button class="btn btn-info" type="submit">VIEW</button>
                        </div>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                   </table>
</div>
</div>
</div>
</div>
</div>
@stop