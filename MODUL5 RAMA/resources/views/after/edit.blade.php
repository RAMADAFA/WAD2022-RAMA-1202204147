@extends('after.header')
@section('content')
@auth
   
    <div class="container my-3">
        <div class="row">
            <div class="col">
                <h2 class="fw-bold"></h2>
                <p>{{$mobil->name}}</p>
                <p>{{$mobil->description}}</p>
                <img src="/image/{{$mobil->image}}" alt="" style="width: 18rem;">
            </div>
            <div class="col">
                <form action="/mobil/{{$mobil-> id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="user_id" value="{{$mobil->user_id}}">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama mobil</label>
                            <input type="text" name="name" class="form-control" value="{{$mobil->name}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nama pemilik</label>
                            <input type="text" name="owner" class="form-control" value="{{$mobil->owner}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Merk</label>
                            <input type="text" name="merk" class="form-control" value="{{$mobil->brand}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tanggal</label>
                            <input type="datetime-local" name="tanggal" class="form-control" value="{{$mobil->purchase_date}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
                            <textarea type="text" name="deskripsi" class="form-control">{{$mobil->description}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Foto</label>
                            <input type="file" name="img_path" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Status</label>
                            <div class="form-check">
                                <input type="radio"  id="option1" name="status" value="Lunas"  {{ ($mobil->status=="Lunas")? "checked" : "" }} >Lunas</label>
                                <input type="radio" id="option2" name="status" value="Belum Lunas" {{ ($mobil->status=="Belum Lunas")? "checked" : "" }} >Belum Lunas</label>
                            </div>
                        </div>
                    <input type="submit" class="btn btn-primary" name="edit" id="toastbtn" value="Simpan">
                </form>
            </div>
        </div>
    </div>
</body></html>
@endauth
@endsection