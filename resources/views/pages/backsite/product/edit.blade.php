@extends('layouts.backsite')

@section('content')
    <!-- OVERVIEW -->
    <div class="panel panel-headline">
        <div class="panel-heading">
            <h3 class="panel-title">Edit Produk</h3>
        </div>
    </div>
    
    <div class="panel">
        <div class="panel-body">
            <form action="{{route('product.update', $produk->id)}}" method="post" enctype="multipart/form-data">
                @method('put') @csrf
                <div class="row form-group">
                    <div class="col-md-5">
                        <label>Kategori</label>
                    </div>
                    <div class="col-md-7">
                        <select name="category_id" class="form-control">
                            <option value="" style="display: none">-- Pilih Salah Satu --</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ $category->id == $produk->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 form-group">
                        <label>Nama Produk</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="text" name="name" class="form-control"
                        value="{{ $produk->name }}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 form-group">
                        <label>Gambar Cover</label>
                        <input type="file" name="cover" class="form-control-file">
                    </div>
                    <div class="col-md-7">
                        <img src="{{ asset($produk->cover) }}" style="height: 200px" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 form-group">
                        <label>Gambar Slider</label>
                        <input type="file" name="slider" class="form-control-file">
                    </div>
                    <div class="col-md-7">
                        <img src="{{ asset($produk->slider) }}" style="height: 200px" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="pull-right btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection