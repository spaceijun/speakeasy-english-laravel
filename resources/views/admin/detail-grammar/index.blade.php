@extends('admin.templates.header')

@section('template_title')
    Detail Grammars
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                @include('admin.templates.messages')
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Detail Grammars') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('detail-grammars.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Create New') }}
                                </a>
                                <a href="{{ route('materi-grammars.create') }}" class="btn btn-success btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Add Materi') }}
                                </a>
                                <a href="{{ route('materi-grammars.index') }}" class="btn btn-info btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Data Materi') }}
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

                                        {{-- <th>Grammars Id</th> --}}
                                        <th>Name</th>
                                        <th>Images</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detailGrammars as $detailGrammar)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            {{-- <td>{{ $detailGrammar->grammars_id }}</td> --}}
                                            <td>{{ $detailGrammar->name }}</td>
                                            <td><img src="{{ asset('assets/grammar/' . $detailGrammar->images) }}"
                                                    alt="Current Image" width="100">
                                            </td>

                                            <td>
                                                <form action="{{ route('detail-grammars.destroy', $detailGrammar->id) }}"
                                                    method="POST">
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('detail-grammars.edit', $detailGrammar->id) }}"><i
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
                {!! $detailGrammars->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
