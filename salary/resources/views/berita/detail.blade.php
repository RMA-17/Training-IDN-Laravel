@extends('layouts.template')

@section('tab')
Detail Berita
@endsection

@section('title')
Detail Berita
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">
                Detail Berita
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <tr>
                        <td>Judul Berita</td>
                        <td>{{$berita->judul_berita}}</td>
                    </tr>
                    <tr>
                        <td>Isi Pokok</td>
                        <td>{{$berita->isi_berita}}</td>
                    </tr>
                    <tr>
                        <td>Diterbitkan</td>
                        <td>{{$berita->tanggal_terbit}}</td>
                    </tr>
                    <tr>
                        <td>Penerbit</td>
                        <td>{{$berita->penerbit}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
    @endsection
