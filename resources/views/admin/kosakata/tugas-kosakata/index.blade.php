@extends('admin.templates.header')

@section('template_title')
    Tugas Kosakatas
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tugas Kosakatas') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('tugas-kosakatas.create') }}" class="btn btn-primary btn-sm float-right"
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

                                        <th>Kosakatas</th>
                                        <th>Kkm</th>
                                        <th>Questions</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tugasKosakatas as $tugasKosakata)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $tugasKosakata->kosakata->name }}</td>
                                            <td>{{ $tugasKosakata->kkm }}</td>
                                            <td>{!! $tugasKosakata->body_questions !!}</td>

                                            <td>
                                                <form action="{{ route('tugas-kosakatas.destroy', $tugasKosakata->id) }}"
                                                    method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('jawaban.kosakatas.create', $tugasKosakata->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> {{ __('Add Answers') }}</a>
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('tugas-kosakatas.edit', $tugasKosakata->id) }}"><i
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
                {!! $tugasKosakatas->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
