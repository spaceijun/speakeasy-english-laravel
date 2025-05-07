<div class="row padding-1 p-1">
    <div class="col-md-12">

        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        <input type="hidden" name="tugas_grammars_id" value="{{ $jawabanGrammar->tugas_grammars_id }}">
        <div class="form-group mb-2 mb20">
            <label for="body_answers" class="form-label">{{ __('Body Answers') }}</label>
            <input type="text" name="body_answers" class="form-control @error('body_answers') is-invalid @enderror"
                value="{{ old('body_answers', $jawabanGrammar?->body_answers) }}" id="body_answers"
                placeholder="Body Answers">
            {!! $errors->first('body_answers', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
