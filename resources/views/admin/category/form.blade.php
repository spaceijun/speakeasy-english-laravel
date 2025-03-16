<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="name" class="form-label">{{ __('Category Name') }}</label>
            <select name="name" id="name" class="form-select">
                <option value="Hafalan">Hafalan</option>
                <option value="Grammar">Grammar</option>
                <option value="Tenses">Tenses</option>
                <option value="Kosakata">Kosakata</option>
                <option value="Ujian">Ujian</option>
                <option value="Frasa dan Idiom">Frasa dan Idiom</option>
            </select>
            {!! $errors->first('name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="images" class="form-label">{{ __('Images') }}</label>
            <input type="file" name="images" class="form-control @error('images') is-invalid @enderror"
                id="images" placeholder="Image Category" required>
            @if ($category && $category->images)
                <div class="mt-2">
                    <img src="{{ asset('assets/category/' . $category->images) }}" alt="Current Image" width="100">
                </div>
            @endif
            {!! $errors->first('images', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="description" class="form-label">{{ __('Description') }}</label>
            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror"
                value="{{ old('description', $category?->description) }}" id="description" placeholder="Description">
            {!! $errors->first('description', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
