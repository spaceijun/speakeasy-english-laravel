<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="category_id" class="form-label">{{ __('Kategori') }}</label>
            <select name="category_id" class="form-control @error('category_id') is-invalid @enderror" id="kategori_id">
                <option value="" disabled selected>Choose Category</option>
                @foreach ($categories as $kategori)
                    <option value="{{ $kategori->id }}"
                        {{ old('category_id', $hafalan->kategori_id ?? '') == $kategori->id ? 'selected' : '' }}>
                        {{ $kategori->name }}
                    </option>
                @endforeach
            </select>
            @error('kategori_id')
                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
            @enderror
        </div>
        <div class="form-group mb-2 mb20">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                value="{{ old('name', $grammar?->name) }}" id="name" placeholder="Name">
            {!! $errors->first('name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="images" class="form-label">{{ __('Images') }}</label>
            <input type="file" name="images" class="form-control @error('images') is-invalid @enderror"
                id="images" placeholder="Image Hafalan" required>
            <span class="text-danger">*Type File : JPG, JPEG, PNG</span>
            @if ($grammar && $grammar->images)
                <div class="mt-2">
                    <img src="{{ asset('assets/grammar/' . $grammar->images) }}" alt="Current Image" width="100">
                </div>
            @endif
            {!! $errors->first('images', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
