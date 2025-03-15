@extends('admin.templates.header')

@section('template_title')
    Detail Hafalans
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                @include('admin.templates.messages')
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <h4 id="card_title">
                                {{ __('Add Materi Hafalan') }}
                            </h4>

                            <div class="float-right">
                                <a href="{{ route('detail-hafalans.create') }}" class="btn btn-primary btn-sm float-right"
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
                                        <th>Name</th>
                                        <th>Translate ID</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detailHafalans as $detailHafalan)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $detailHafalan->hafalan->name }}</td>
                                            <td>{{ $detailHafalan->name }}</td>
                                            <td>{{ $detailHafalan->description }}</td>

                                            <td>
                                                <form action="{{ route('detail-hafalans.destroy', $detailHafalan->id) }}"
                                                    method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('detail-hafalans.show', $detailHafalan->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('detail-hafalans.edit', $detailHafalan->id) }}"><i
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
                        @include('admin.templates.pagination', ['paginator' => $detailHafalans])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
