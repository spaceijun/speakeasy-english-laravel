<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="detailgram_id" class="form-label">{{ __('Materi Grammar Name') }}</label>
            <select name="detailgram_id" class="form-control @error('detailgram_id') is-invalid @enderror"
                id="detailgram_id">
                <option value="" disabled selected>Choose Materi Grammar</option>
                @foreach ($availableDetailGrammars as $detailgram)
                    <option value="{{ $detailgram->id }}"
                        {{ old('detailgram_id', $materiGrammar->detailgram_id ?? '') == $detailgram->id ? 'selected' : '' }}>
                        {{ $detailgram->name }}
                    </option>
                @endforeach
            </select>
            @error('detailgram_id')
                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
            @enderror
        </div>
        <div class="form-group mb-2 mb20">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                value="{{ old('name', $materiGrammar?->name) }}" id="name" placeholder="Name">
            {!! $errors->first('name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="description" class="form-label">{{ __('Content') }}</label>
            <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description"
                placeholder="Your Content is here" rows="5">{{ old('description', $artikel->description ?? '') }}</textarea>
            @error('description')
                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
            @enderror
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
