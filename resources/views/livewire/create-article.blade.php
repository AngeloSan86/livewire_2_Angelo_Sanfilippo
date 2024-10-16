<div>

<div class="container mt-5">
    <div class="row justify-content-center">
        <h2 class="text-center mb-5">Crea articolo</h2>
        <div class="col-12 col-md-6">

        

            @if(session('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
            @endif

            <form class="shadow p-5 rounded-5 bg-secondary" wire:submit="store">

                <div class="mb-3">
                     <label for="title" class="form-label">Titolo articolo</label>
                    <input wire:model.live="title" type="text" class="form-control" id="title">
                    <div class="text-danger fw-bold">@error('title') {{ $message }} @enderror</div>
                </div>

                <div class="mb-3">
                     <label for="subtitle" class="form-label">Sottotitolo articolo</label>
                    <input wire:model.live="subtitle" type="text" class="form-control" id="subtitle">
                    <div class="text-danger fw-bold">@error('subtitle') {{ $message }} @enderror</div>
                </div>

                <div class="mb-3">
                     <label for="body" class="form-label">Testo articolo</label>
                    <textarea wire:model.live="body" name="body" id="body" class="form-control" cols="30" rows="10"></textarea>
                    <div class="text-danger fw-bold">@error('body') {{ $message }} @enderror</div>
                </div>

                <button type="submit" class="btn btn-primary">Crea articolo</button>

            </form>

        </div>
    </div>
</div>

</div>
