@extends('admin.templates.header')

@section('template_title')
    {{ $detailFrasa->name ?? __('Show') . " " . __('Detail Frasa') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Detail Frasa</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('detail-frasas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Frasa Id:</strong>
                                    {{ $detailFrasa->frasa_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>English:</strong>
                                    {{ $detailFrasa->english }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Indonesian:</strong>
                                    {{ $detailFrasa->indonesian }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
