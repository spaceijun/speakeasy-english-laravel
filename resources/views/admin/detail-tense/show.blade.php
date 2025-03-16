@extends('layouts.app')

@section('template_title')
    {{ $detailTense->name ?? __('Show') . " " . __('Detail Tense') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Detail Tense</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('detail-tenses.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Name:</strong>
                                    {{ $detailTense->name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Images:</strong>
                                    {{ $detailTense->images }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Description:</strong>
                                    {{ $detailTense->description }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
