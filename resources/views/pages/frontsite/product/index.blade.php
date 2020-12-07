@extends('layouts.frontsite')

@section('content')
    <div style="font-family:open sans;font-weight:700;color:#326a95;font-size:36px;margin-top:20px;">
        Yamaha Products
    </div>
    <div style="font-family:open sans;font-weight:600;color:#4a4a4a;font-size:16px;text-transform:uppercase;">
        PLEASE Browse through our best product HERE
    </div>
    <div style="margin-bottom:20px;">
        <img src="{{ asset('images/line-blue.jpg') }}">
    </div>	
    <div class="row">
        @foreach ($category as $item)
            <div class="col-md-6">
                <h4>
                    <img src="{{ asset($item->image) }}" style="background-color:rgb(65, 93, 218)" height="50px" alt="tes">
                
                </h4>
                @foreach ($item->products as $product)
                    <a href="{{ route('produk.show', $product->id) }}">
                        <img src="{{ asset($product->cover) }}" alt="">
                    </a>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection