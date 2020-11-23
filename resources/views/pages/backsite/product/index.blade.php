@extends('layouts.backsite')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/datatables.min.css') }}">
@endsection

@section('content')
    <!-- OVERVIEW -->
    <div class="panel panel-headline">
        <div class="panel-heading">
            <div class="pull-right">
                <a href="{{ route('product.create') }}" class="btn btn-md btn-primary" 
                    title="Tambah Produk.">
                    <i class="fa fa-plus"></i>
                </a>
            </div>
            <h3 class="panel-title">Daftar Produk</h3>
        </div>
    </div>
    
    <div class="panel">
        <div class="panel-body">
            <div class="table-responsive m-b-40">
                <table class="table table-bordered datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Name</th>
                            <th class="text-center">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($produk as $item)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>
                                    <img src="{{ asset($item->slider) }}" style="height: 50px">    
                                </td>
                                <td>{{$item->name}}</td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-info" 
                                        href="{{ route('product.show', $item->id) }}" 
                                        itle="Lihat Produk.">
                                        <i class="fa fa-info"></i>
                                    </a>
                                    <a class="btn btn-sm btn-warning" 
                                        href="{{ route('product.edit', $item->id) }}" 
                                        itle="Edit Produk.">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="btn btn-sm btn-danger" data-toggle="modal" 
                                        data-target="#deleteProduct_{{$item->id}}" 
                                        href="#" title="Hapus Produk.">
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
    @foreach ($produk as $item)
        @include('pages.backsite.product.modal.delete')
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