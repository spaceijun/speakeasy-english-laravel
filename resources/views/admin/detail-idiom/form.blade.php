<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="idiom_id" class="form-label">{{ __('Idiom Id') }}</label>
            <select name="idiom_id" class="form-control @error('idiom_id') is-invalid @enderror" id="idiom_id">
                <option value="" disabled selected>Choose Idiom</option>
                @foreach ($idioms as $idiom)
                    <option value="{{ $idiom->id }}"
                        {{ old('idiom_id', $detailidioms->idiom_id ?? '') == $idiom->id ? 'selected' : '' }}>
                        {{ $idiom->name }}
                    </option>
                @endforeach
            </select>
            @error('idiom_id')
                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
            @enderror
        </div>
        <div class="form-group mb-2 mb20">
            <label for="english" class="form-label">{{ __('English') }}</label>
            <input type="text" name="english" class="form-control @error('english') is-invalid @enderror"
                value="{{ old('english', $detailIdiom?->english) }}" id="english" placeholder="English">
            {!! $errors->first('english', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="indonesia" class="form-label">{{ __('Indonesia') }}</label>
            <input type="text" name="indonesia" class="form-control @error('indonesia') is-invalid @enderror"
                value="{{ old('indonesia', $detailIdiom?->indonesia) }}" id="indonesia" placeholder="Indonesia">
            {!! $errors->first('indonesia', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
