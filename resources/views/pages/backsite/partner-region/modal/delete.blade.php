<!-- Modal -->
<div class="modal fade" id="deleteRegion_{{ $item->id }}" tabindex="-1" role="dialog" 
    aria-labelledby="deleteRegionLabel_{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h5 class="modal-title" id="exampleModalLabel">Hapus Region</h5>
        </div>
        <form action="{{route('partner-region.destroy', $item->id)}}" method="post">
            @method('delete') @csrf
            <div class="modal-body">
                Anda yakin ingin menghapus region ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-empty" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-danger">Ya</button>
            </div>
        </form>
        </div>
    </div>
</div>