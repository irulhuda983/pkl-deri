@extends('template.layout')

@section('title', 'KK')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">KK</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data KK</h6>
    </div>
    <div class="card-body">
        <form action="/kk/store" method="POST">
            @csrf
            <div class="form-group">
                <label for="nik">NO KK</label>
                <input type="text" class="form-control" id="nik" aria-describedby="nik" placeholder="Enter KK" name="nik">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
                <label for="nama">Nama KK</label>
                <input type="text" class="form-control" id="no_hp" aria-describedby="nik" placeholder="Enter Nama" name="nama">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
                <label for="no_hp">No Hp</label>
                <input type="text" class="form-control" id="no_hp" aria-describedby="no_hp" placeholder="Enter No HP" name="no_hp">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea type="text" class="form-control" id="alamat" aria-describedby="alamat" placeholder="Enter Alamat" name="alamat"></textarea>
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->

@endsection('content')