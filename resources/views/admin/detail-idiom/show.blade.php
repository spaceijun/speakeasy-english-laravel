@extends('admin.templates.header')

@section('template_title')
    {{ $detailIdiom->name ?? __('Show') . " " . __('Detail Idiom') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Detail Idiom</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('detail-idioms.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Idiom Id:</strong>
                                    {{ $detailIdiom->idiom_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>English:</strong>
                                    {{ $detailIdiom->english }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Indonesia:</strong>
                                    {{ $detailIdiom->indonesia }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
