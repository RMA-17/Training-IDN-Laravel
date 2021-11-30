@extends('layouts.template')

@section('tab')
Detail Jabatan
@endsection

@section('title')
Detail Jabatan
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">
                Detail Jabatan
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <tr>
                        <td>Nama jabatan</td>
                        <td>{{$jabatan->nama_jabatan}}</td>
                    </tr>
                    <tr>
                        <td>Gaji Pokok</td>
                        <td>{{$jabatan->gaji_pokok}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
    @endsection
