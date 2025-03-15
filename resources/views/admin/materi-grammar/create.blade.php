@extends('admin.templates.header')

@section('template_title')
    {{ __('Create') }} Materi Grammar
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Materi Grammar</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('materi-grammars.store') }}" role="form"
                            enctype="multipart/form-data">
                            @csrf

                            @include('admin.materi-grammar.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
