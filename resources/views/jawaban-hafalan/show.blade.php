@extends('admin.templates.header')

@section('template_title')
    {{ $jawabanHafalan->name ?? __('Show') . " " . __('Jawaban Hafalan') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Jawaban Hafalan</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('jawaban-hafalans.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>User Id:</strong>
                                    {{ $jawabanHafalan->user_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tugas Hafalan Id:</strong>
                                    {{ $jawabanHafalan->tugas_hafalan_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Body Answers:</strong>
                                    {{ $jawabanHafalan->body_answers }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nilai:</strong>
                                    {{ $jawabanHafalan->nilai }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Status:</strong>
                                    {{ $jawabanHafalan->status }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
