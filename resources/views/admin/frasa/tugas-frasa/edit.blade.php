@extends('admin.templates.header')

@section('template_title')
    {{ __('Update') }} Tugas Frasa
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Tugas Frasa</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('tugas-frasas.update', $tugasFrasa->id) }}" role="form"
                            enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('admin.frasa.tugas-frasa.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
