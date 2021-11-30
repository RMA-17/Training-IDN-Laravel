@extends('layouts.template')

@section('tab')
Detail Konten
@endsection

@section('title')
Detail Konten
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">
                Detail Konten
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <tr>
                        <td>Judul konten</td>
                        <td>{{$konten->judul_konten}}</td>
                    </tr>
                    <tr>
                        <td>Isi Pokok</td>
                        <td>{{$konten->isi_konten}}</td>
                    </tr>
                    <tr>
                        <td>Diterbitkan</td>
                        <td>{{$konten->tanggal_terbit}}</td>
                    </tr>
                    <tr>
                        <td>Penerbit</td>
                        <td>{{$konten->penerbit}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
    @endsection
