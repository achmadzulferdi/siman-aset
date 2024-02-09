@extends('layouts.master')

@section('content')
<div class="card mb-4">
    <div class="card-header pb-0">
      <h6>DATA ASET DINKES PPKB KOTA PROBOLINGGO</h6>
        <a href="/asets/baru" class="btn btn-primary float-end">Data Baru</a>
    </div>
    <div class="card-body px-0 pt-0 pb-2">
      <div class="table-responsive p-0">
        <table class="table align-items-center mb-0">
          <thead>
            <tr>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kode Barang</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Barang</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis Barang</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Merek</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Type</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tahun Perolehan</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Harga Perolehan</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kondisi</th>
              <th class="text-secondary opacity-7">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($asets as $aset )

            <tr>
                <td>{{$aset->kode_brg}}</td>
                <td>{{$aset->nama_brg}}</td>
                <td>{{$aset->jenis_brg}}</td>
                <td>{{$aset->merk_brg}}</td>
                <td>{{$aset->type_brg}}</td>
                <td>{{$aset->tahun}}</td>
                <td>{{$aset->harga}}</td>
                <td>{{$aset->kondisi}}</td>
                <td>
                    <a href="/asets/{{$aset->id}}/edit" class="btn btn-warning">Edit</a>
                    <form action="/asets/{{$aset->id}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </form>
                </td>
            @endforeach
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
