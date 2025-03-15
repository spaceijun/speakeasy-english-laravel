@extends('layouts.app')

@section('template_title')
    {{ $detailGrammar->name ?? __('Show') . " " . __('Detail Grammar') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Detail Grammar</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('detail-grammars.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Grammars Id:</strong>
                                    {{ $detailGrammar->grammars_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Name:</strong>
                                    {{ $detailGrammar->name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Images:</strong>
                                    {{ $detailGrammar->images }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
