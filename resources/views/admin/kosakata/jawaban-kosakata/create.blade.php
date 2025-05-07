@extends('admin.templates.header')

@section('template_title')
    {{ __('Create') }} Jawaban Kosakata
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Jawaban Kosakata</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST"
                            action="{{ route('jawaban.kosakatas.store', $jawabanKosakata->tugas_kosakatas_id) }}"
                            role="form" enctype="multipart/form-data">
                            @csrf

                            @include('admin.kosakata.jawaban-kosakata.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
