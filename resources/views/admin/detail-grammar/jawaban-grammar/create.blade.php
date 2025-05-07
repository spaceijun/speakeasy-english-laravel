@extends('admin.templates.header')

@section('template_title')
    {{ __('Create') }} Jawaban Grammar
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Jawaban Grammar</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('jawaban.grammar.store', $jawabanGrammar->tugas_grammars_id) }}"
                            role="form" enctype="multipart/form-data">
                            @csrf

                            @include('admin.detail-grammar.jawaban-grammar.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
