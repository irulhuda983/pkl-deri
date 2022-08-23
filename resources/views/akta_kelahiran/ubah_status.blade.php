@extends('template.layout')

@section('title', 'Akta Kelahiran')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Akta Kelahiran</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Ubah Status Data Akta Kelahiran</h6>
    </div>
    <div class="card-body">
        <form action="/akta-kelahiran/{{ $data->id }}/ubah_status" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Pengambil</label>
                <input type="text" class="form-control" id="no_hp" aria-describedby="nik" placeholder="Enter Nama" name="nama">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
                <label for="no_hp">No Hp Pengambil</label>
                <input type="text" class="form-control" id="no_hp" aria-describedby="no_hp" placeholder="Enter No HP" name="no_hp">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->

@endsection('content')