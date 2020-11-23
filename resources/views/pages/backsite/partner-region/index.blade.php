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
                    data-target="#createRegion" 
                    title="Tambah Region.">
                    <i class="fa fa-plus"></i>
                </a>
            </div>
            <h3 class="panel-title">Daftar Region</h3>
        </div>
    </div>
    
    <div class="panel">
        <div class="panel-body">
            <div class="table-responsive m-b-40">
                <table class="table table-bordered datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th class="text-center">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($region as $item)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$item->name}}</td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-warning"  data-toggle="modal" 
                                        data-target="#editRegion_{{$item->id}}" 
                                        title="Edit Region." href="#">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="btn btn-sm btn-danger" data-toggle="modal" 
                                        data-target="#deleteRegion_{{$item->id}}" 
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
    @include('pages.backsite.partner-region.modal.create')
    @foreach ($region as $item)
        @include('pages.backsite.partner-region.modal.edit')
        @include('pages.backsite.partner-region.modal.delete')
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