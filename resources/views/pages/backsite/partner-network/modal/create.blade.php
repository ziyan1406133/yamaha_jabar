<!-- Modal -->
<div class="modal fade" id="createNetwork" tabindex="-1" role="dialog" 
    aria-labelledby="createNetworkLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h5 class="modal-title" id="exampleModalLabel">Tambah Network</h5>
        </div>
        <form action="{{route('partner-network.store')}}" method="post">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label>Region</label>
                    <select name="region_id" class="form-control" required>
                        <option value="">-- Pilih Salah Satu --</option>
                        @foreach ($regions as $region)
                            <option value="{{ $region->id }}">{{ $region->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Nama Network</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="address" rows="3" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label>No Telp</label>
                    <input type="text" name="phone" class="form-control" required>
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