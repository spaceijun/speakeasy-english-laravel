@extends('layouts.app')

@section('template_title')
    {{ $tense->name ?? __('Show') . " " . __('Tense') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tense</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('tenses.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Category Id:</strong>
                                    {{ $tense->category_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Name:</strong>
                                    {{ $tense->name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Images:</strong>
                                    {{ $tense->images }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Description:</strong>
                                    {{ $tense->description }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
