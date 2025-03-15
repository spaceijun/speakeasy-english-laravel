@extends('admin.templates.header')

@section('template_title')
    {{ __('Update') }} Grammar
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Grammar</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('grammars.update', $grammar->id) }}" role="form"
                            enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('grammar.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
