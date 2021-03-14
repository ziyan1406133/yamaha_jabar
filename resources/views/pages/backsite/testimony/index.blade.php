@extends('layouts.backsite')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/datatables.min.css') }}">
@endsection

@section('content')
    <!-- OVERVIEW -->
    <div class="panel panel-headline">
        <div class="panel-heading">
            <div class="pull-right">
                <a href="#" class="btn btn-md btn-primary" data-toggle="modal" 
                    data-target="#createTestimoni" 
                    title="Tambah Testimoni.">
                    <i class="fa fa-plus"></i>
                </a>
            </div>
            <h3 class="panel-title">Daftar Testimoni</h3>
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
                            <th class="text-center">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($testimonies as $item)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#showTestimoni_{{ $item->id }}">
                                        <img src="{{ asset($item->image) }}" alt="" height="200px">
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-warning"  data-toggle="modal" 
                                        data-target="#editTestimoni_{{$item->id}}" 
                                        title="Edit Testimoni." href="#">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="btn btn-sm btn-danger" data-toggle="modal" 
                                        data-target="#deleteTestimoni_{{$item->id}}" 
                                        href="#" title="Hapus Reegion.">
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
    @include('pages.backsite.testimony.modal.create')
    @foreach ($testimonies as $item)
        @include('pages.backsite.testimony.modal.show')
        @include('pages.backsite.testimony.modal.edit')
        @include('pages.backsite.testimony.modal.delete')
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