<!-- Modal -->
<div class="modal fade" id="deleteProduct_{{ $item->id }}" tabindex="-1" role="dialog" 
    aria-labelledby="deleteProductLabel_{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h5 class="modal-title" id="exampleModalLabel">Hapus Produk</h5>
        </div>
        <form action="{{route('product.destroy', $item->id)}}" method="post">
            @method('delete') @csrf
            <div class="modal-body">
                Anda yakin ingin menghapus produk ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-empty" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-danger">Ya</button>
            </div>
        </form>
        </div>
    </div>
</div>