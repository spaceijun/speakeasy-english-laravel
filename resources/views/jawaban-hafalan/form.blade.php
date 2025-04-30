<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="user_id" class="form-label">{{ __('User Id') }}</label>
            <input type="text" name="user_id" class="form-control @error('user_id') is-invalid @enderror" value="{{ old('user_id', $jawabanHafalan?->user_id) }}" id="user_id" placeholder="User Id">
            {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tugas_hafalan_id" class="form-label">{{ __('Tugas Hafalan Id') }}</label>
            <input type="text" name="tugas_hafalan_id" class="form-control @error('tugas_hafalan_id') is-invalid @enderror" value="{{ old('tugas_hafalan_id', $jawabanHafalan?->tugas_hafalan_id) }}" id="tugas_hafalan_id" placeholder="Tugas Hafalan Id">
            {!! $errors->first('tugas_hafalan_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="body_answers" class="form-label">{{ __('Body Answers') }}</label>
            <input type="text" name="body_answers" class="form-control @error('body_answers') is-invalid @enderror" value="{{ old('body_answers', $jawabanHafalan?->body_answers) }}" id="body_answers" placeholder="Body Answers">
            {!! $errors->first('body_answers', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nilai" class="form-label">{{ __('Nilai') }}</label>
            <input type="text" name="nilai" class="form-control @error('nilai') is-invalid @enderror" value="{{ old('nilai', $jawabanHafalan?->nilai) }}" id="nilai" placeholder="Nilai">
            {!! $errors->first('nilai', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="status" class="form-label">{{ __('Status') }}</label>
            <input type="text" name="status" class="form-control @error('status') is-invalid @enderror" value="{{ old('status', $jawabanHafalan?->status) }}" id="status" placeholder="Status">
            {!! $errors->first('status', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>