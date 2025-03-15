<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="hafalan_id" class="form-label">{{ __('Hafalan Id') }}</label>
            <select name="hafalan_id" class="form-control @error('hafalan_id') is-invalid @enderror" id="kategori_id">
                <option value="" disabled selected>Choose Hafalan</option>
                @foreach ($hafalans as $hafalan)
                    <option value="{{ $hafalan->id }}"
                        {{ old('hafalan_id', $detailHafalan->hafalan_id ?? '') == $hafalan->id ? 'selected' : '' }}>
                        {{ $hafalan->name }}
                    </option>
                @endforeach
            </select>
            @error('hafalan_id')
                <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
            @enderror
        </div>
        <div class="form-group mb-2 mb20">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                value="{{ old('name', $detailHafalan?->name) }}" id="name" placeholder="Name">
            {!! $errors->first('name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="description" class="form-label">{{ __('Description') }}</label>
            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror"
                value="{{ old('description', $detailHafalan?->description) }}" id="description"
                placeholder="Description">
            {!! $errors->first('description', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
