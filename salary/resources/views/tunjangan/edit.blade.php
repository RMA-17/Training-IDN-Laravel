{{-- Untuk memulai ngoding di Blade, tambahkan @section('bagian') dan di extend dulu ke template klo ada--}}

@extends('layouts.template')

@section('tab')
Edit Tunjangan
@endsection

@section('title')
Edit Tunjangan
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">
                Edit Tunjangan
            </div>
            <div class="card-body">
                <form action="{{route('tunjangan.update', $tunjangan->id)}}" method="POST">
                    @csrf
                    {{method_field('PUT')}}
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="form-label">Nama Tunjangan</label>
                            <input type="text" class="form-control" name="nama_tunjangan" value="{{$tunjangan->nama_tunjangan}}" required="required" class="form-tabel">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Nominal</label>
                            <input type="number" class="form-control" name="nominal" value="{{$tunjangan->nominal}}" required="required" class="form-nominal">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-primary">Ubah</button>
                        <button type="reset" class="btn btn-outline-warning">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    @endsection

    {{-- Copy-copy aja, manfaatkan dialog dan modal yang telah dibuat --}}
