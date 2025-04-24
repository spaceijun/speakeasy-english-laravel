@extends('admin.templates.header')

@section('template_title')
    Materi Kosakatas
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
                                {{ __('Materi Kosakatas') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('materi-kosakatas.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Create New') }}
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

                                        <th>Kosakatas Id</th>
                                        <th>English</th>
                                        <th>Indonesian</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($materiKosakatas as $materiKosakata)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $materiKosakata->kosakata->name }}</td>
                                            <td>{{ $materiKosakata->english }}</td>
                                            <td>{{ $materiKosakata->indonesian }}</td>

                                            <td>
                                                <form action="{{ route('materi-kosakatas.destroy', $materiKosakata->id) }}"
                                                    method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('materi-kosakatas.show', $materiKosakata->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('materi-kosakatas.edit', $materiKosakata->id) }}"><i
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
                {!! $materiKosakatas->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
