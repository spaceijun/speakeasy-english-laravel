<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="kosakatas_id" class="form-label">{{ __('KosakataId') }}</label>
            <select name="kosakatas_id" class="form-control @error('kosakatas_id') is-invalid @enderror" id="kategori_id">
                <option value="" disabled selected>Choose Hafalan</option>
                @foreach ($availableMateriKosakata as $kosakata)
                    <option value="{{ $kosakata->id }}"
                        {{ old('kosakatas_id', $materiKosakatas->kosakatas_id ?? '') == $kosakata->id ? 'selected' : '' }}>
                        {{ $kosakata->name }}
                    </option>
                @endforeach
            </select>
            @error('kosakatas_id')
                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
            @enderror
        </div>
        <div class="form-group mb-2 mb20">
            <label for="english" class="form-label">{{ __('English') }}</label>
            <input type="text" name="english" class="form-control @error('english') is-invalid @enderror"
                value="{{ old('english', $materiKosakata?->english) }}" id="english" placeholder="English">
            {!! $errors->first('english', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="indonesian" class="form-label">{{ __('Indonesian') }}</label>
            <input type="text" name="indonesian" class="form-control @error('indonesian') is-invalid @enderror"
                value="{{ old('indonesian', $materiKosakata?->indonesian) }}" id="indonesian" placeholder="Indonesian">
            {!! $errors->first('indonesian', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
