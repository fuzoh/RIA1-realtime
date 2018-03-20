@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('status'))
                <div class="card text-white bg-danger mb-3">
                    <div class="card-body">
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    </div>
                </div>
            @endif
            <div class="card">
                <div class="card-header"><strong>Messages</strong></div>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>

                <div class="card-footer">
                    <div class="input-group mb-3">
                        <input id="message" type="text" class="form-control" placeholder="Message" aria-label="Message" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button id="send" class="btn btn-outline-secondary" type="button">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
