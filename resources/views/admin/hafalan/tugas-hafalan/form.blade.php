<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="frasa_id" class="form-label">{{ __('Frasa Id') }}</label>
            <select name="frasa_id" class="form-control @error('frasa_id') is-invalid @enderror" id="frasa_id">
                <option value="" disabled selected>Choose Frasa</option>
                @foreach ($frasas as $frasa)
                    <option value="{{ $frasa->id }}"
                        {{ old('frasa_id', $detailfrasa->frasa_id ?? '') == $frasa->id ? 'selected' : '' }}>
                        {{ $frasa->name }}
                    </option>
                @endforeach
            </select>
            @error('frasa_id')
                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
            @enderror
        </div>
        <div class="form-group mb-2 mb20">
            <label for="kkm" class="form-label">{{ __('Kkm') }}</label>
            <input type="text" name="kkm" class="form-control @error('kkm') is-invalid @enderror"
                value="{{ old('kkm', $tugasHafalan?->kkm) }}" id="kkm" placeholder="Kkm">
            {!! $errors->first('kkm', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="body_questions" class="form-label">{{ __('Body Questions') }}</label>
            <input type="text" name="body_questions"
                class="form-control @error('body_questions') is-invalid @enderror"
                value="{{ old('body_questions', $tugasHafalan?->body_questions) }}" id="body_questions"
                placeholder="Body Questions">
            {!! $errors->first(
                'body_questions',
                '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>',
            ) !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
