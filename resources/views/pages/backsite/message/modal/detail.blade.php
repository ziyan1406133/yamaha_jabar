<!-- Modal -->
<div class="modal fade" id="detailPesan_{{ $item->id }}" tabindex="-1" role="dialog" 
    aria-labelledby="detailPesanLabel_{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-center" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h5 class="modal-title" id="exampleModalLabel">Detail Pesan</h5>
        </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <p>Nama : {{ $item->name }}</p>
                    </div>
                    <div class="col-md-6">
                        <p>Email : {{ $item->email }}</p>
                    </div>
                    <div class="col-md-6">
                        <p>Company : {{ $item->company }}</p>
                    </div>
                    <div class="col-md-6">
                        <p>Phone : {{ $item->phone }}</p>
                    </div>
                    <div class="col-md-6">
                        <p>Fax : {{ $item->fax }}</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <p>{{ $item->content }}</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-empty" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>