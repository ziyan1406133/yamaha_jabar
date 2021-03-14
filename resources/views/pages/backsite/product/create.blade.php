@extends('layouts.backsite')

@section('content')
    <!-- OVERVIEW -->
    <div class="panel panel-headline">
        <div class="panel-heading">
            <h3 class="panel-title">Tambah Produk</h3>
        </div>
    </div>
    
    <div class="panel">
        <div class="panel-body">
            <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row form-group">
                    <div class="col-md-5">
                        <label>Kategori</label>
                    </div>
                    <div class="col-md-7">
                        <select name="category_id" class="form-control">
                            <option value="" style="display: none">-- Pilih Salah Satu --</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 form-group">
                        <label>Nama Produk</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="text" name="name" class="form-control" required>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 50px">
                    <div class="col-md-5 form-group">
                        <label>TVC</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="text" name="tvc" class="form-control" placeholder="https://www.youtube.com/embed/Y8liMsWDC80">
                    </div>
                </div>
                <div class="row" style="margin-bottom: 50px">
                    <div class="col-md-5 form-group">
                        <label>Gambar Cover</label>
                        <input type="file" name="cover" class="form-control-file" required>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 50px">
                    <div class="col-md-5 form-group">
                        <label>Gambar Slider</label>
                        <input type="file" name="slider" class="form-control-file" required>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 50px">
                    <div class="col-md-5 form-group">
                        <label>Logo</label>
                        <input type="file" name="logo" class="form-control-file" required>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 50px">
                    <div class="col-md-5 form-group">
                        <label>Specs</label>
                        <input type="file" name="spec" class="form-control-file">
                    </div>
                </div>
                <div class="row" style="margin-bottom: 50px">
                    <div class="col-md-5 form-group">
                        <label>Detail Harga</label>
                        <input type="file" name="price_detail" class="form-control-file">
                    </div>
                </div>
                <div class="row" style="margin-bottom: 50px">
                    <div class="col-md-12">
                        <button type="submit" class="pull-right btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection