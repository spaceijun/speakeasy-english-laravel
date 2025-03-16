@extends('admin.templates.header')

@section('template_title')
    Detail Tenses
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
                                {{ __('Detail Tenses') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('detail-tenses.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                                <a href="{{ route('materi-tenses.create') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                                    {{ __('Add Materi') }}
                                  </a>
                                  <a href="{{ route('materi-tenses.index') }}" class="btn btn-info btn-sm float-right"  data-placement="left">
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
                                        
									<th >Name</th>
									<th >Images</th>
									<th >Description</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detailTenses as $detailTense)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $detailTense->name }}</td>
                                        <td><img src="{{ asset('assets/tenses/' . $detailTense->images) }}"
                                            alt="Current Image" width="100">
                                    </td>
                                <td >{{ $detailTense->description }}</td>

                                            <td>
                                                <form action="{{ route('detail-tenses.destroy', $detailTense->id) }}" method="POST">
                                                    {{-- <a class="btn btn-sm btn-primary " href="{{ route('materi-tenses.create', $detailTense->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a> --}}
                                                    <a class="btn btn-sm btn-success" href="{{ route('detail-tenses.edit', $detailTense->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                        @include('admin.templates.pagination', ['paginator' => $detailTenses])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
