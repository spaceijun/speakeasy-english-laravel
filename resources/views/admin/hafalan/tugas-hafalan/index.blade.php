@extends('admin.templates.header')

@section('template_title')
    Tugas Hafalans
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
                                {{ __('Tugas Hafalans') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('tugas-hafalans.create') }}" class="btn btn-primary btn-sm float-right"
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

                                        <th>Hafalan Id</th>
                                        <th>Kkm</th>
                                        <th>Body Questions</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tugasHafalans as $tugasHafalan)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $tugasHafalan->hafalan->name }}</td>
                                            <td>{{ $tugasHafalan->kkm }}</td>
                                            <td>{{ $tugasHafalan->body_questions }}</td>

                                            <td>
                                                <form action="{{ route('tugas-hafalans.destroy', $tugasHafalan->id) }}"
                                                    method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('tugas-hafalans.show', $tugasHafalan->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('tugas-hafalans.edit', $tugasHafalan->id) }}"><i
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
                        @include('admin.templates.pagination', ['paginator' => $detailFrasas])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
