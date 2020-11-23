@extends('layouts.backsite')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/datatables.min.css') }}">
@endsection

@section('content')
    <!-- OVERVIEW -->
    <div class="panel panel-headline">
        <div class="panel-heading">
            <div class="pull-right">
                <a href="{{ route('pengguna.create') }}" class="btn btn-md btn-primary" 
                    title="Tambah Pengguna.">
                    <i class="fa fa-plus"></i>
                </a>
            </div>
            <h3 class="panel-title">Daftar Admin</h3>
        </div>
    </div>
    
    <div class="panel">
        <div class="panel-body">
            <div class="table-responsive m-b-40">
                <table class="table table-bordered datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th class="text-center">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($user as $item)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$item->username}}</td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-warning" 
                                        href="{{ route('pengguna.edit', $item->id) }}" 
                                        itle="Edit Admin.">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="btn btn-sm btn-danger" data-toggle="modal" 
                                        data-target="#deletePengguna_{{$item->id}}" 
                                        href="#" title="Hapus Admin.">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @foreach ($user as $item)
        @include('pages.backsite.pengguna.modal.delete')
    @endforeach
@endsection

@section('script')
    <script src="{{ asset('js/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.datatable').DataTable();
        } );
    </script>
@endsection