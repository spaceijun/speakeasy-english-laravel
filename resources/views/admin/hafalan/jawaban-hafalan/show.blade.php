@extends('admin.templates.header')

@section('template_title')
    {{ $jawabanHafalan->name ?? __('Show') . ' ' . __('Jawaban Hafalan') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Detail Jawaban Hafalan</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('jawaban.hafalan.index') }}">
                                {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        <table class="table table-bordered border-secondary table-nowrap">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <td>{{ $jawabanHafalan->user->name }}</td>
                                </tr>
                                <tr>
                                    <th>Questions</th>
                                    <td>{!! $jawabanHafalan->tugasHafalan->body_questions !!}</td>
                                </tr>
                                <tr>
                                    <th>Answers</th>
                                    <td>{{ $jawabanHafalan->body_answers }}</td>
                                </tr>
                                <tr>
                                    <th>Nilai</th>
                                    <td>
                                        <form action="{{ route('jawaban.hafalan.update', $jawabanHafalan->id) }}"
                                            method="POST" role="form" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="user_id" value="{{ $jawabanHafalan->user_id }}">
                                            <input type="hidden" name="tugas_hafalan_id"
                                                value="{{ $jawabanHafalan->tugas_hafalan_id }}">
                                            <input type="hidden" name="body_answers" id="body_answer"
                                                value="{{ old('body_answers', $jawabanHafalan?->body_answers) }}">
                                            <input type="number" name="nilai"
                                                value="{{ old('body_answers', $jawabanHafalan?->nilai) }}">
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
