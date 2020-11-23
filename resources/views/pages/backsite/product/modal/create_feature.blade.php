<!-- Modal -->
<div class="modal fade" id="createFeature" tabindex="-1" role="dialog" 
    aria-labelledby="createFeatureLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h5 class="modal-title" id="exampleModalLabel">Buat Fitur</h5>
        </div>
        <form action="{{route('feature.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="product_id" value="{{ $produk->id }}">
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama Fitur</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Gambar</label>
                    <input type="file" name="image" class="form-control" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-empty" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        </div>
    </div>
</div>