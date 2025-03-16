@extends('admin.templates.header')

@section('template_title')
    {{ $kosakata->name ?? __('Show') . " " . __('Kosakata') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Kosakata</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('kosakatas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Name:</strong>
                                    {{ $kosakata->name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Images:</strong>
                                    {{ $kosakata->images }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Description:</strong>
                                    {{ $kosakata->description }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
