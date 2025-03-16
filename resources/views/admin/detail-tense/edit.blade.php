@extends('admin.templates.header')

@section('template_title')
    {{ __('Update') }} Detail Tense
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Detail Tense</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('detail-tenses.update', $detailTense->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('admin.detail-tense.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
