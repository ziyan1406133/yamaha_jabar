<!-- Modal -->
<div class="modal fade" id="editRegion_{{ $item->id }}" tabindex="-1" role="dialog" 
    aria-labelledby="editRegionLabel_{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h5 class="modal-title" id="exampleModalLabel">Edit Region</h5>
        </div>
        <form action="{{route('partner-region.update', $item->id)}}" method="post">
            @method('put') @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama Region</label>
                    <input type="text" name="name" class="form-control"
                    value="{{ $item->name }}" required>
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