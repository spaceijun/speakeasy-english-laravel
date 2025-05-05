@extends('admin.templates.header')

@section('template_title')
    {{ $tugasFrasa->name ?? __('Show') . " " . __('Tugas Frasa') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tugas Frasa</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('tugas-frasas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Frasa Id:</strong>
                                    {{ $tugasFrasa->frasa_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Kkm:</strong>
                                    {{ $tugasFrasa->kkm }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Body Questions:</strong>
                                    {{ $tugasFrasa->body_questions }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
