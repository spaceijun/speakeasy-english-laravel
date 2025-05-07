<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="grammars_id" class="form-label">{{ __('Grammars Id') }}</label>
            <select name="grammars_id" class="form-control @error('hafalan_id') is-invalid @enderror" id="hafalan_id">
                <option value="" disabled selected>Choose Grammar</option>
                @foreach ($grammars as $grammar)
                    <option value="{{ $grammar->id }}"
                        {{ old('grammars_id', $detailgrammar->grammars_id ?? '') == $grammar->id ? 'selected' : '' }}>
                        {{ $grammar->name }}
                    </option>
                @endforeach
            </select>
            @error('hafalan_id')
                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
            @enderror
        </div>
        <div class="form-group mb-2 mb20">
            <label for="kkm" class="form-label">{{ __('KKM (Kriteria Ketentuan Minimal)') }}</label>
            <input type="text" name="kkm" class="form-control @error('kkm') is-invalid @enderror"
                value="{{ old('kkm', $tugasGrammar?->kkm) }}" id="kkm" placeholder="Kkm">
            {!! $errors->first('kkm', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="body_questions" class="form-label">{{ __('Questions') }}</label>
            <textarea name="body_questions" class="form-control @error('body_questions') is-invalid @enderror"
                id="body_questions_grammars" placeholder="Your Content is here" rows="5">{{ old('body_questions', $artikel->body_questions ?? '') }}</textarea>
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
            .create(document.querySelector('#body_questions_grammars'), {
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
