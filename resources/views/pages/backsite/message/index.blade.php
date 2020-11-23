@extends('layouts.backsite')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/datatables.min.css') }}">
@endsection

@section('content')
    <!-- OVERVIEW -->
    <div class="panel panel-headline">
        <div class="panel-heading">
            <h3 class="panel-title">Daftar Pesan</h3>
        </div>
    </div>
    
    <div class="panel">
        <div class="panel-body">
            <div class="table-responsive m-b-40">
                <table class="table table-bordered datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nama</th>
                            <th>Isi Pesan</th>
                            <th class="text-center">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($message as $item)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{ date('Y-m-d', strtotime($item->created_at))}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{strlen($item->content) > 100 ? substr($item->content,0,100)."..." : $item->content}}</td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-info"  data-toggle="modal" 
                                        data-target="#detailPesan_{{$item->id}}" 
                                        title="Edit Pesan." href="#">
                                        <i class="fa fa-info"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @foreach ($message as $item)
        @include('pages.backsite.message.modal.detail')
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