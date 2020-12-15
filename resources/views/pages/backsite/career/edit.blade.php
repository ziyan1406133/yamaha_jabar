@extends('layouts.backsite')

@section('content')
    <!-- OVERVIEW -->
    <div class="panel panel-headline">
        <div class="panel-heading">
            <h3 class="panel-title">Edit Career</h3>
        </div>
    </div>
    
    <div class="panel">
        <div class="panel-body">
            <form action="{{route('career.update', $career->id)}}" method="post">
                @method('put') @csrf
                <div class="row form-group">
                    <div class="col-md-5">
                        <label>Nama Karir</label>
                    </div>
                    <div class="col-md-7">
                        <input type="text" name="name" class="form-control" value="{{ $career->name }}" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-5">
                        <label>Aktif ?</label>
                    </div>
                    <div class="col-md-7">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="is_active" value="1" {{ $career->is_active ? 'checked' : '' }}>
                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="is_active" value="0" {{ !$career->is_active ? 'checked' : '' }}>
                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                          </div>
                    </div>
                </div>
                <div class="row form-grpup">
                    <div class="col-md-12">
                        <label>Deskripsi</label>
                        <textarea id="description" name="description"
                        >{{ $career->description }}</textarea>
                    </div>
                </div>
                <button type="submit" class="pull-right btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('ckeditor4/ckeditor.js') }}"></script>

    <script>
        CKEDITOR.replace('description');
    </script>
@endsection