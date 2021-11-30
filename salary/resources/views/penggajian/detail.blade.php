@extends('layouts.template')

@section('tab')
Riwayat Penggajian
@endsection

@section('title')
Riwayat Penggajian Karyawan
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">
                Riwayat Penggajian
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
                        <td>Karyawan {{$karyawan->status}}</td>
                    </tr>
                </table>
            </div>
            <div class="card-header">
                Riwayat Penggajian
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <tr>
                        <th>Periode Gaji</th>
                        <th>Jumlah Tunjangan</th>
                        <th>Jumlah Potongan</th>
                        <th>Total Gaji</th>
                    </tr>
                    @foreach ($penggajian as $row)
                        <tr>
                            <td>{{$row->bulan_gajian}}/{{$row->tahun_gajian}}</td>
                            <td>Rp.{{number_format($row->total_tunjangan)}}</td>
                            <td>Rp.{{number_format($row->potongan)}}</td>
                            <td>Rp.{{number_format($row->total_gajian)}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
    @endsection
