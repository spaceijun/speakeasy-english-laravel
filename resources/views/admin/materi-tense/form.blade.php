<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="detail_tenses_id" class="form-label">{{ __('Materi Tenses Name') }}</label>
            <select name="detail_tenses_id" class="form-control @error('detail_tenses_id') is-invalid @enderror"
                id="detail_tenses_id">
                <option value="" disabled selected>Choose Category Tenses</option>
                @foreach ($availableDetailTenses as $detailtenses)
                    <option value="{{ $detailtenses->id }}"
                        {{ old('detail_tenses_id', $materiGrammar->detail_tenses_id ?? '') == $detailtenses->id ? 'selected' : '' }}>
                        {{ $detailtenses->name }}
                    </option>
                @endforeach
            </select>
            @error('detail_tenses_id')
                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
            @enderror
        </div>
        <div class="form-group mb-2 mb20">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $materiTense?->name) }}" id="name" placeholder="Name">
            {!! $errors->first('name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="description" class="form-label">{{ __('Description') }}</label>
            <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="descriptionTenses" placeholder="Description">{{ old('description', $materiTense?->description) }}</textarea>
            {!! $errors->first('description', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
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
            .create(document.querySelector('#descriptionTenses'), {
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