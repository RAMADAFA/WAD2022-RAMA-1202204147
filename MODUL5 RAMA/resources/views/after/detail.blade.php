@extends('after.header')
@section('content')
@auth
    <div class="container my-3">
        <div class="row">
            <div class="col">
                <h2 class="fw-bold"></h2>
                <p>{{mobil->name}}</p>
                <p>{{mobil->description}}</p>
                <img src="/image/{{mobil->image}}" alt="" style="width: 20rem;" height="400px" width="800px">
            </div>
            <div class="col">
                <input type="hidden" name="id_mobil" value="{{mobil->id}}">
                <input type="hidden" name="user_id" value="{{mobil->user_id}}">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama mobil</label>
                        <input type="text" name="nama_mobil" class="form-control"value="{{mobil->name}}" disabled value="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama pemilik</label>
                        <input type="text" name="pemilik_mobil" class="form-control" disabled value="{{mobil->owner}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Merk</label>
                        <input type="text" name="merk_mobil" class="form-control" disabled value="{{mobil->brand}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tanggal</label>
                        <input type="datetime-local" name="tanggal_beli" class="form-control" disabled value="{{mobil->purchase_date}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
                        <textarea type="textarea" name="deskripsi" class="form-control" disabled>{{mobil->description}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label" >Foto</label>
                        <input type="file" name="foto_mobil" class="form-control" value="{{mobil->image}}"  disabled >
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Status</label>
                        <div class="form-check">
                            <input class="form-check-input" name="status_pembayaran" type="radio" name="flexRadioDefault" disabled value="" >
                            <label class="form-check-label" for="flexRadioDefault1">{{mobil->status}}
                            </label>
                        </div>
                    </div>
                    <a href="/mobil/{{mobil-> id}}/edit" class="btn btn-primary">Edit</a>
            </div>
        </div>
    </div>
</body></html>
@endauth
@endsection