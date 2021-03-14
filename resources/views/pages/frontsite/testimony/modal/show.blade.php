<!-- Modal -->
<div class="modal fade" id="showTestimoni_{{ $testimonies[$i]["id"] }}" tabindex="-1" role="dialog" 
    aria-labelledby="showTestimoniLabel_{{ $testimonies[$i]["id"] }}" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <img src="{{ asset($testimonies[$i]["image"]) }}" width="100%">
            </div>
        </div>
    </div>
</div>