@extends('template.layout')

@section('title', 'Akta Kematian')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Akta Kematian</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Akta Kematian</h6>
    </div>
    <div class="card-body">
        <form action="/akta-kematian/store" method="POST">
            @csrf
            <div class="form-group">
                <label for="no_seri_akta">No Seri Akta</label>
                <input type="text" class="form-control" id="no_seri_akta" aria-describedby="no_seri_akta" placeholder="Enter no seri akta" name="no_seri_akta">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" aria-describedby="nama" placeholder="Enter Nama" name="nama">
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