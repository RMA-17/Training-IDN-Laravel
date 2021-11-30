{{-- Untuk memulai ngoding di Blade, tambahkan @section('bagian') dan di extend dulu ke template klo ada--}}

@extends('layouts.template')

@section('tab')
Edit Berita
@endsection

@section('title')
Edit Berita
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">
                Edit Berita
            </div>
            <div class="card-body">
                <form action="{{route('berita.update', $berita->id)}}" method="POST">
                    @csrf
                    {{method_field('PUT')}}
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="form-label">Nama Berita</label>
                            <input type="text" class="form-control" name="judul_berita" value="{{$berita->judul_berita}}" required="required">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Isi Berita</label>
                            <textarea name="isi_berita" cols="30" rows="10" class="form-control">{{$berita->isi_berita}}</textarea>

                        </div>
                        <div class="form-group">
                            <label class="form-label">Penerbit</label>
                            <input name="penerbit" name="penerbit" value="{{$berita->penerbit}}" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-primary">Edit</button>
                        <button type="reset" class="btn btn-outline-warning">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    @endsection

    {{-- Copy-copy aja, manfaatkan dialog dan modal yang telah dibuat --}}
