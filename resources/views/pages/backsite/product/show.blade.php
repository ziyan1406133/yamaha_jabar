@extends('layouts.backsite')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/datatables.min.css') }}">
@endsection

@section('content')
    <!-- OVERVIEW -->
    <div class="panel panel-headline">
        <div class="panel-heading">
            <h3 class="panel-title">{{ $produk->name }}</h3>
        </div>
    </div>
    
    <div class="panel">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-center">
                        <img src="{{ asset($produk->cover) }}" style="height: 200px; max-width: 75%" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-center">
                        <img src="{{ asset($produk->slider) }}" style="height: 200px; max-width: 75%" alt="">
                    </div>
                </div>
            </div>
            <br> <br>
            <div class="row">
                <div class="col-md-6">
                    <div class="text-center">
                        <img src="{{ asset($produk->spec) }}" style="height: 200px; max-width: 75%" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-center">
                        <img src="{{ asset($produk->logo) }}" style="height: 200px; max-width: 75%" alt="">
                    </div>
                </div>
            </div>
            @if ($produk->tvc !== null)
                <br><br>
                <div class="row">
                    <div class="text-center">
                        <iframe width="560" height="315px"
                        src="{{ $produk->tvc }}">
                        </iframe>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <div class="panel panel-headline">
        <div class="panel-heading">
            <div class="pull-right">
                <a class="btn btn-sm btn-info"  data-toggle="modal" 
                    data-target="#createFeature" 
                    title="Tambah Fitur." href="#">
                    <i class="fa fa-plus"></i>
                </a>
            </div>
            <h3 class="panel-title">Fitur</h3>
        </div>
    </div>
    
    <div class="panel">
        <div class="panel-body">
            <div class="row">
                <div class="table-responsive m-b-40">
                    <table class="table table-bordered datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Nama</th>
                                <th class="text-center">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @forelse ($produk->features as $feature)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>
                                        <img src="{{ asset($feature->image) }}" style="height: 50px">    
                                    </td>
                                    <td>{{$feature->name}}</td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-danger" data-toggle="modal" 
                                            data-target="#deleteFeature_{{$feature->id}}" 
                                            href="#" title="Hapus Fitur.">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan="4">
                                        <i>Belum ada fitur untuk produk ini</i>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @include('pages.backsite.product.modal.create_feature')
    @foreach ($produk->features as $feature)
        @include('pages.backsite.product.modal.delete_feature')
    @endforeach

    <div class="panel panel-headline">
        <div class="panel-heading">
            <div class="pull-right">
                <a class="btn btn-sm btn-info"  data-toggle="modal" 
                    data-target="#createColor" 
                    title="Tambah Warna." href="#">
                    <i class="fa fa-plus"></i>
                </a>
            </div>
            <h3 class="panel-title">Warna</h3>
        </div>
    </div>
    
    <div class="panel">
        <div class="panel-body">
            <div class="row">
                <div class="table-responsive m-b-40">
                    <table class="table table-bordered datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Nama</th>
                                <th class="text-center">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @forelse ($produk->colors as $color)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>
                                        <img src="{{ asset($color->image) }}" style="height: 50px">    
                                    </td>
                                    <td>{{$color->name}}</td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-danger" data-toggle="modal" 
                                            data-target="#deleteColor_{{$color->id}}" 
                                            href="#" title="Hapus Fitur.">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan="4">
                                        <i>Belum ada warna untuk produk ini</i>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @include('pages.backsite.product.modal.create_color')
    @foreach ($produk->colors as $color)
        @include('pages.backsite.product.modal.delete_color')
    @endforeach
@endsection