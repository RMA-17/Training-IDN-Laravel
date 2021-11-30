@extends('layouts.template')

{{-- Untuk mengubah nama tab yang diatas --}}
@section('tab')
Halaman Berita
@endsection

{{-- Menaruh Judul Di header HTML --}}
@section('title')
Halaman Berita
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
                                <th>Judul Berita</th>
                                <th>Tanggal Terbit</th>
                                <th>Penerbit</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($berita as $row)
                            <tr>
                                <td>{{$loop->iteration + ($berita->perpage()) * ($berita->currentPage() -1)}}</td>
                                <td>{{$row->judul_berita}}</td>
                                <td>{{$row->tanggal_terbit}}</td>
                                <td>{{$row->penerbit}}</td>
                                <td>
                                    <form action="{{route('berita.destroy', [$row->id])}}" method="post" onsubmit="return confirm('Hapus {{$row->judul_berita}}?')">
                                        @csrf
                                        {{method_field('DELETE')}}
                                        <a href="{{route('berita.show', [$row->id])}}" class="btn btn-primary"><i class="fa fa-eye"></i> Lihat</a>
                                        <a href="{{route('berita.edit', [$row->id])}}" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$berita->appends(Request::all())->links()}}
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabelLogout">Tambahkan Berita</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('berita.store')}}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="form-label">Nama Berita</label>
                            <input type="text" class="form-control" name="judul_berita" value="{{old('judul_berita')}}" required="required">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Isi Berita</label>
                            <textarea name="isi_berita" cols="30" rows="10" class="form-control">{{old('isi_berita')}}</textarea>

                        </div>
                        <div class="form-group">
                            <label class="form-label">Penerbit</label>
                            <input name="penerbit" name="penerbit" value="{{old('penerbit')}}" required="required" class="form-control">
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
