<!-- Modal -->
<div class="modal fade" id="editTestimoni_{{ $item->id }}" tabindex="-1" role="dialog" 
    aria-labelledby="editTestimoniLabel_{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h5 class="modal-title" id="exampleModalLabel">Edit Testimoni</h5>
        </div>
        <form action="{{route('testimony.update', $item->id)}}" method="post" enctype="multipart/form-data">
            @method('put') @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label>Upload Testimoni</label>
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