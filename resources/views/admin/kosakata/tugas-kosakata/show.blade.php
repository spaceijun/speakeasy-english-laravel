@extends('admin.templates.header')

@section('template_title')
    {{ $tugasKosakata->name ?? __('Show') . " " . __('Tugas Kosakata') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tugas Kosakata</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('tugas-kosakatas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Kosakatas Id:</strong>
                                    {{ $tugasKosakata->kosakatas_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Kkm:</strong>
                                    {{ $tugasKosakata->kkm }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Body Questions:</strong>
                                    {{ $tugasKosakata->body_questions }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
