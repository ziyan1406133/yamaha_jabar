@extends('layouts.backsite')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/datatables.min.css') }}">
@endsection

@section('content')
    <!-- OVERVIEW -->
    <div class="panel panel-headline">
        <div class="panel-heading">
            <div class="pull-right">
                <a href="{{ route('career.create') }}" class="btn btn-md btn-primary" 
                    title="Tambah Career.">
                    <i class="fa fa-plus"></i>
                </a>
            </div>
            <h3 class="panel-title">Career Recruitments</h3>
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
                            <th>Deskripsi</th>
                            <th>Status</th>
                            <th class="text-center">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($career as $item)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$item->name}}</td>
                                <td>
                                    {!! Str::length(strip_tags($item->description)) > 200 ? substr(strip_tags($item->description), 0, 200)."..." : strip_tags($item->description) !!}    
                                </td>
                                <td>
                                    <a href="#" id="status_{{ $item->id }}" data-career_id="{{ $item->id }}" class="status">{{ isActive($item->is_active) }}</a>
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-warning" 
                                        href="{{ route('career.edit', $item->id) }}" 
                                        itle="Edit Career.">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="btn btn-sm btn-danger" data-toggle="modal" 
                                        data-target="#deleteCareer_{{$item->id}}" 
                                        href="#" title="Hapus Career.">
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
 
    <div id="loading_message" style="display:none;"> 
         <h4>Mohon tunggu sebentar...</h4> 
    </div> 

    @foreach ($career as $item)
        @include('pages.backsite.career.modal.delete')
    @endforeach
@endsection

@section('script')
    <script src="{{ asset('js/datatables.min.js') }}"></script>
    <script src="{{ asset('vendor/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('vendor/blockUI/jquery.blockUI.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.datatable').DataTable();
        } );

        $('.status').click(function() {
            // $.blockUI({ message: $('#loading_message') });
            var id = $(this).data("career_id");
            change_status(id);
        });

        function change_status(id)
        {
            $.ajax({
                url: "{{ route('career.change_status') }}",
                type: 'post',
                data: {
                    _token: "{{ csrf_token() }}",
                    career_id : id
                }
            })
            .done(function(response) {
                $('#status_' + id).fadeOut('fast');
                $('#status_' + id).html(response);
                $('#status_' + id).fadeIn('fast');
                // $.unblockUI();
            });
        }
    </script>
@endsection