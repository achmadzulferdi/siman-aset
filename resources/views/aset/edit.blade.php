@extends('layouts.master')

@section('content')
<div class="card mb-4">
    <div class="card-header pb-0">
      <h6>Edit Data Aset</h6>
    </div>
    <div class="card-body px-3 pt-0 pb-2">
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors ->all() as $error )
                    <li> {{$error}}</li>
                @endforeach

            </ul>
        </div>


        @endif
        <form action="/asets/{{$aset->id}}"  method="POST">
            @method('put')
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Kode Barang</label>
              <input name= 'kode_brg' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Barang" value={{$aset->kode_brg}}>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Barang</label>
                <input name= 'nama_brg'type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Barang"value={{$aset->kode_brg}}>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Jenis Barang</label>
                <input name= 'jenis_brg' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jenis Barang"value={{$aset->kode_brg}}>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Merk Barang</label>
                <input name= 'merk_brg' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Merk Barang"value={{$aset->nama_brg}}>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Type Barang</label>
                <input name= 'type_brg' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Barang"value={{$aset->type_brg}}>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Tahun Perolehan</label>
                <input name= 'tahun' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tahun Perolehan Barang"value={{$aset->tahun}}>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Harga Barang</label>
                <input name= 'harga' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Harga Perolehan Barang"value={{$aset->harga}}>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1"> Kondisi</label>
                <input name= 'kondisi' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" Barang Saat ini"value={{$aset->kondisi}}>
              </div>


            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

    </div>
</div>
@endsection
