<div class="row mb-3">
    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
            value="{{ old('name') ?? $study->name }}" required autocomplete="name" autofocus>

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="date" class="col-md-4 col-form-label text-md-end">{{ __('Data') }}</label>

    <div class="col-md-6">
        <input id="date" type="datetime-local" class="form-control @error('date') is-invalid @enderror" name="date"
            value="{{ old('date') ?? date_format($study->date, 'Y-m-d\TH:i') }}" required autocomplete="date">

        @error('date')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Descrição') }}</label>

    <div class="col-md-6">
        <textarea id="description" type="description" class="form-control @error('description') is-invalid @enderror"
            name="description" required autocomplete="description"
            rows="3">{{ old('description') ?? $study->description }}</textarea>
        @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>


<div class="row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ __('Register') }}
        </button>
    </div>
</div>
