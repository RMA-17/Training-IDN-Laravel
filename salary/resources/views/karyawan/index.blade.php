@extends('layouts.template')

{{-- Untuk mengubah nama tab yang diatas --}}
@section('tab')
Halaman Karyawan
@endsection

{{-- Menaruh Judul Di header HTML --}}
@section('title')
Halaman Karyawan
@endsection

{{-- Menaruh Isi --}}
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#addModal" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</a>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Karyawan</th>
                                <th>Jabatan</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($karyawan as $row)
                            <tr>
                                <td>{{$loop->iteration + ($karyawan->perpage()) * ($karyawan->currentPage() -1)}}</td>
                                <td>{{$row->nama_karyawan}}</td>
                                <td>{{$row->jabatan->nama_jabatan}}</td>
                                <td>{{$row->status}}</td>
                                <td>
                                    <form action="{{route('karyawan.destroy', [$row->id])}}" method="post" onsubmit="return confirm('Hapus {{$row->nama_karyawan}}?')">
                                        @csrf
                                        {{method_field('DELETE')}}
                                        <a href="{{route('karyawan.show', [$row->id])}}" class="btn btn-primary"><i class="fa fa-eye"></i> Lihat</a>
                                        <a href="{{route('karyawan.edit', [$row->id])}}" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$karyawan->appends(Request::all())->links()}}
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabelLogout">Tambahkan karyawan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('karyawan.store')}}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="form-label">Nama karyawan</label>
                            <input type="text" class="form-control" name="nama_karyawan" value="{{old('nama_karyawan')}}" required="required">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Jabatan karyawan</label>
                            <select name="id_jabatan" required="required" class="form-control">
                                <option value="">Pilih Jabatan</option>
                                @foreach ($jabatan as $row)
                                <option value="{{$row->id}}">{{$row->nama_jabatan}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Status karyawan</label>
                            <select name="status" required="required" class="form-control">
                                <option value="">Pilih Status</option>
                                {{-- value = nilai yang akan dibawa ke database --}}
                                {{-- Sedangkan yang sebelahnya adalah mask nya --}}
                                {{-- value nya harus sesuai dengan enum nya --}}
                                <option style="color:red" value="kontrak">Karyawan Kontrak</option>
                                <option style="color:blue" value="magang">Karyawan Magang</option>
                                <option style="color: green" value="tetap">Karyawan Tetap</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Nomor HP</label>
                            <input type="number" class="form-control" name="nomor_hp" value="{{old('judul_karyawan')}}" required="required">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Username</label>
                            <input type="text" type="number" class="form-control" name="username" value="{{old('judul_karyawan')}}" required="required">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" value="{{old('judul_karyawan')}}" required="required">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-primary">Tambah</button>
                        <button type="reset" class="btn btn-outline-warning">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection