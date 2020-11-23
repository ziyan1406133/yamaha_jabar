<!-- Modal -->
<div class="modal fade" id="createRegion" tabindex="-1" role="dialog" 
    aria-labelledby="createRegionLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h5 class="modal-title" id="exampleModalLabel">Tambah Region</h5>
        </div>
        <form action="{{route('partner-region.store')}}" method="post">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama Region</label>
                    <input type="text" name="name" class="form-control" required>
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