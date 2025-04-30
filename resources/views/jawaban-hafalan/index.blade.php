@extends('admin.templates.header')

@section('template_title')
    Jawaban Hafalans
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Jawaban Hafalans') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('jawaban-hafalans.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >User Id</th>
									<th >Tugas Hafalan Id</th>
									<th >Body Answers</th>
									<th >Nilai</th>
									<th >Status</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jawabanHafalans as $jawabanHafalan)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $jawabanHafalan->user_id }}</td>
										<td >{{ $jawabanHafalan->tugas_hafalan_id }}</td>
										<td >{{ $jawabanHafalan->body_answers }}</td>
										<td >{{ $jawabanHafalan->nilai }}</td>
										<td >{{ $jawabanHafalan->status }}</td>

                                            <td>
                                                <form action="{{ route('jawaban-hafalans.destroy', $jawabanHafalan->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('jawaban-hafalans.show', $jawabanHafalan->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('jawaban-hafalans.edit', $jawabanHafalan->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $jawabanHafalans->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
