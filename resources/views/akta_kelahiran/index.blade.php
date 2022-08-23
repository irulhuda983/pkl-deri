@extends('template.layout')

@section('title', 'Akta Kelahiran')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Akta Kelahiran</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Data Akta Kelahiran</h6>
        <a href="/akta-kelahiran/create" class="btn btn-sm btn-outline-primary">Tambah</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No Akta</th>
                        <th>Nama</th>
                        <th>No Hp</th>
                        <th>Alamat</th>
                        <th>Tanggal Register</th>
                        <th>Status Diambil</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No Akta</th>
                        <th>Nama</th>
                        <th>No Hp</th>
                        <th>Alamat</th>
                        <th>Tanggal Register</th>
                        <th>Status Diambil</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($data as $item)
                    <tr>
                        <td>{{ $item->no_seri_akta }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->no_hp }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->tgl_register }}</td>
                        <td>{{ $item->status }}</td>
                        <td>
                            @if($item->status != 'diambil')
                            <a href="/akta-kelahiran/{{ $item->id }}/show_ubah" class="btn btn-sm btn-outline-success"><i class="fas fa-pen-square"></i></a>
                            @endif
                            <a href="/akta-kelahiran/{{ $item->id }}/edit" class="btn btn-sm btn-outline-primary"><i class="fas fa-pen"></i></a>
                            <a href="/akta-kelahiran/{{ $item->id}}/delete" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
@endsection('content')

@section('script')
<!-- Page level plugins -->
<script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('assets/js/demo/datatables-demo.js') }}"></script>
@endsection('script')