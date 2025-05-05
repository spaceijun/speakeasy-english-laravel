@extends('admin.templates.header')

@section('template_title')
    {{ $jawabanFrasa->name ?? __('Show') . ' ' . __('Jawaban Frasa') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Jawaban Frasa</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('jawaban.frasa.index') }}">
                                {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        <table class="table table-bordered border-secondary table-nowrap">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <td>{{ $jawabanFrasa->user->name }}</td>
                                </tr>
                                <tr>
                                    <th>Questions</th>
                                    <td>{!! $jawabanFrasa->tugasFrasa->body_questions !!}</td>
                                </tr>
                                <tr>
                                    <th>Answers</th>
                                    <td>{{ $jawabanFrasa->body_answers }}</td>
                                </tr>
                                <tr>
                                    <th>Nilai</th>
                                    <td>
                                        <form action="{{ route('jawaban.frasa.update', $jawabanFrasa->id) }}" method="POST"
                                            role="form" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                            <input type="hidden" name="tugas_frasa_id"
                                                value="{{ $jawabanFrasa->tugas_frasa_id }}">
                                            <input type="hidden" name="body_answers" id="body_answer"
                                                value="{{ old('body_answers', $jawabanFrasa?->body_answers) }}">
                                            <input type="number" name="nilai"
                                                value="{{ old('body_answers', $jawabanFrasa?->nilai) }}">
                                            <button type="submit"
                                                class="btn btn-soft-secondary waves-effect material-shadow-none btn-sm">{{ __('Update Nilai') }}</button>
                                        </form>
                                    </td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
