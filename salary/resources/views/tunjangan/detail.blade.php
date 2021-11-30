@extends('layouts.template')

@section('tab')
Detail Tunjangan
@endsection

@section('title')
Detail Tunjangan
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">
                Detail Tunjangan
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <tr>
                        <td>Nama Tunjangan</td>
                        <td>{{$tunjangan->nama_tunjangan}}</td>
                    </tr>
                    <tr>
                        <td>Nominal</td>
                        <td>{{$tunjangan->nominal}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
    @endsection
