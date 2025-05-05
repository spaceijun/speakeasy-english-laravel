<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="frasa_id" class="form-label">{{ __('Hafalan Id') }}</label>
            <select name="frasa_id" class="form-control @error('frasa_id') is-invalid @enderror" id="frasa_id">
                <option value="" disabled selected>Choose Hafalan</option>
                @foreach ($frasas as $frasa)
                    <option value="{{ $frasa->id }}"
                        {{ old('frasa_id', $detailfrasa->frasa_id ?? '') == $frasa->id ? 'selected' : '' }}>
                        {{ $frasa->name }}
                    </option>
                @endforeach
            </select>
            @error('hafalan_id')
                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
            @enderror
        </div>
        <div class="form-group mb-2 mb20">
            <label for="kkm" class="form-label">{{ __('Kriteria Ketentuan Minimal (KKM)') }}</label>
            <input type="number" name="kkm" class="form-control @error('kkm') is-invalid @enderror"
                value="{{ old('kkm', $tugasFrasa?->kkm) }}" id="kkm" placeholder="Kkm">
            {!! $errors->first('kkm', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="body_questions" class="form-label">{{ __('Questions') }}</label>
            <textarea name="body_questions" class="form-control @error('body_questions') is-invalid @enderror"
                id="body_questions_frasa" placeholder="Your Content is here" rows="5">{{ old('body_questions', $artikel->body_questions ?? '') }}</textarea>
            @error('body_questions')
                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
            @enderror
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>


<script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        ClassicEditor
            .create(document.querySelector('#body_questions_frasa'), {
                toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', '|',
                    'outdent', 'indent', '|', 'imageUpload', 'blockQuote', 'insertTable', 'mediaEmbed',
                    'undo', 'redo'
                ],
            })
            .then(editor => {
                console.log('CKEditor berhasil diinisialisasi', editor);
            })
            .catch(error => {
                console.error('CKEditor error:', error);
            });
    });
</script>
