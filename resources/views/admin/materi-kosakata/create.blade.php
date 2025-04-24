@extends('admin.templates.header')

@section('template_title')
    {{ __('Create') }} Materi Kosakata
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Materi Kosakata</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('materi-kosakatas.store') }}" role="form"
                            enctype="multipart/form-data">
                            @csrf

                            @include('admin.materi-kosakata.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
