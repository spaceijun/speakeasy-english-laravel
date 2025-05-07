@extends('admin.templates.header')

@section('template_title')
    {{ __('Create') }} Tugas Tense
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Tugas Tense</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('tugas-tenses.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('admin.detail-tense.tugas-tense.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
