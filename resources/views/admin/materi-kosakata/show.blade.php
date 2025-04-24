@extends('layouts.app')

@section('template_title')
    {{ $materiKosakata->name ?? __('Show') . " " . __('Materi Kosakata') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Materi Kosakata</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('materi-kosakatas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Kosakatas Id:</strong>
                                    {{ $materiKosakata->kosakatas_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>English:</strong>
                                    {{ $materiKosakata->english }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Indonesian:</strong>
                                    {{ $materiKosakata->indonesian }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
