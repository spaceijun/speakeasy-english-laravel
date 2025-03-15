@extends('layouts.app')

@section('template_title')
    {{ $grammar->name ?? __('Show') . ' ' . __('Grammar') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Grammar</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('grammars.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                        <div class="form-group mb-2 mb20">
                            <strong>Category Id:</strong>
                            {{ $grammar->category_id }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Name:</strong>
                            {{ $grammar->name }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Images:</strong>
                            {{ $grammar->images }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
