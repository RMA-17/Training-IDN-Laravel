@extends('layouts.template')

@section('tab')
Entri Penggajian Karyawan
@endsection

@section('title')
Entri Penggajian Karyawan
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="/post-gaji" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="label-control">Nama Karyawan</label>
                            <input type="text" value="{{$karyawan->nama_karyawan}}" disabled class="form-control">
                            <input type="hidden" name="id_karyawan" value="{{$karyawan->id}}">
                        </div>
                        <div class="form-group">
                            <label class="label-control">Tunjangan</label>
                            @foreach($tunjangan as $row)
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" value="{{$row->id}}"
                                    name="id_tunjangan[]">
                                <label class="form-check-label">
                                    {{$row->nama_tunjangan}}
                                </label>
                            </div>
                            @endforeach
                        </div>
                        <div class="form-group">
                            <label class="label-control">Potongan</label>
                            <input type="number" name="potongan" value="{{old('potongan')}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="label-control">Bulan</label>
                            <select name="bulan_gajian" class="form-control">
                                <option value="Januari">Januari</option>
                                <option value="Februari">Februari</option>
                                <option value="Maret">Maret</option>
                                <option value="April">April</option>
                                <option value="Mei">Mei</option>
                                <option value="Juni">Juni</option>
                                <option value="Juli">Juli</option>
                                <option value="Agustus">Agustus</option>
                                <option value="September">September</option>
                                <option value="Oktober">Oktober</option>
                                <option value="November">November</option>
                                <option value="Desember">Desember</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="label-control">Tahun</label>
                            <input type="number" name="tahun_gajian" value="{{old('tahun')}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"> Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
