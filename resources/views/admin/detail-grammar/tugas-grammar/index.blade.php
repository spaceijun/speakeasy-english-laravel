@extends('admin.templates.header')

@section('template_title')
    Tugas Grammars
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tugas Grammars') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('tugas-grammars.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Create New') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

                                        <th>Grammars</th>
                                        <th>KKM</th>
                                        <th>Body Questions</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tugasGrammars as $tugasGrammar)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $tugasGrammar->grammar->name }}</td>
                                            <td>{{ $tugasGrammar->kkm }}</td>
                                            <td>{!! $tugasGrammar->body_questions !!}</td>

                                            <td>
                                                <form action="{{ route('tugas-grammars.destroy', $tugasGrammar->id) }}"
                                                    method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('jawaban.grammar.create', $tugasGrammar->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> {{ __('Add Answers') }}</a>
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('tugas-grammars.edit', $tugasGrammar->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i
                                                            class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tugasGrammars->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
