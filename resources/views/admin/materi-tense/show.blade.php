@extends('admin.templates.header')

@section('template_title')
    {{ $materiTense->name ?? __('Show') . " " . __('Materi Tense') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Materi Tense</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('materi-tenses.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Detail Tenses Id:</strong>
                                    {{ $materiTense->detail_tenses_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Name:</strong>
                                    {{ $materiTense->name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Description:</strong>
                                    {{ $materiTense->description }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
