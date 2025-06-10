@extends('admin.templates.header')

@section('template_title')
    {{ $jawabanKosakara->name ?? __('Show') . ' ' . __('Jawaban Kosakata') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Detail Jawaban Kosakata</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('jawaban.kosakatas.index') }}">
                                {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        <table class="table table-bordered border-secondary table-nowrap">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <td>{{ $jawabanKosakata->user->name }}</td>
                                </tr>
                                <tr>
                                    <th>Questions</th>
                                    <td>{!! $jawabanKosakata->tugasKosakata->body_questions !!}</td>
                                </tr>
                                <tr>
                                    <th>Answers</th>
                                    <td>{{ $jawabanKosakata->body_answers }}</td>
                                </tr>
                                <tr>
                                    <th>Nilai</th>
                                    <td>
                                        <form action="{{ route('jawaban.kosakatas.update', $jawabanKosakata->id) }}"
                                            method="POST" role="form" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="user_id" value="{{ $jawabanKosakata->user_id }}">
                                            <input type="hidden" name="tugas_kosakatas_id"
                                                value="{{ $jawabanKosakata->tugas_kosakatas_id }}">
                                            <input type="hidden" name="body_answers" id="body_answer"
                                                value="{{ old('body_answers', $jawabanKosakata?->body_answers) }}">
                                            <input type="number" name="nilai"
                                                value="{{ old('body_answers', $jawabanKosakata?->nilai) }}">
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
