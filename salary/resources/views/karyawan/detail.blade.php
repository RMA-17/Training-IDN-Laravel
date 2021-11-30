@extends('layouts.template')

@section('tab')
Detail Karyawan
@endsection

@section('title')
Detail Karyawan
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">
                Detail Karyawan
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <tr>
                        <td>Nama karyawan</td>
                        <td>{{$karyawan->nama_karyawan}}</td>
                    </tr>
                    <tr>
                        <td>Jabatan karyawan</td>
                        <td>{{$karyawan->jabatan->nama_jabatan}}</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>Karyawan{{$karyawan->status}}</td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>{{$karyawan->username}}</td>
                    </tr>
                    <tr>
                        <td>Tanggal masuk</td>
                        <td>{{$karyawan->tanggal_masuk}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
    @endsection
