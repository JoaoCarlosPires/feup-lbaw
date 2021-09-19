<div class="card" style="border-color: #d9aded">
    <div class="card-body">
        <div class="row">
            <div class="col">
                <p>{{ $transfer->reference }}</p>
            </div>
            <div class="col">
                <p>{{ $transfer->limitdate }}</p>
            </div>
            <div class="col">
                <div>
                <button style="border-color: #008000 ; background-color: #008000; color: white" type="button"
                    class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Accept-{{$transfer->reference}}"
                    id="{{$transfer->reference}}">
                    ACCEPT
                </button>
                <button style="border-color: #ff0000 ; background-color: #ff0000; color: white" type="button"
                    class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Delete-{{$transfer->reference}}"
                    id="{{$transfer->reference}}">
                    REFUSE
                </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Delete-{{ $transfer->reference }}" tabindex="-1" aria-labelledby="DeletePayment" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="DeletePayment">Refuse Payment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to refuse this payment? This action cannot be undone.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                <a href="{{ route('payments.delete', $transfer->reference )}}">
                    <button style="border-color: #ff0000; background-color: #ff0000; color: white" type="submit"
                        class="btn btn-primary" href="google.pt">REFUSE</button></a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Accept-{{ $transfer->reference }}" tabindex="-1" aria-labelledby="AcceptPayment" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="AcceptPayment">Accept Payment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to accept this payment? This action cannot be undone.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                <a href="{{ route('payments.accept', $transfer->reference )}}">
                    <button style="border-color: #008000; background-color: #008000; color: white" type="submit"
                        class="btn btn-primary" href="google.pt">ACCEPT</button></a>
            </div>
        </div>
    </div>
</div>
