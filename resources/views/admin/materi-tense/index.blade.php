@extends('admin.templates.header')

@section('template_title')
    Materi Tenses
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
                                {{ __('Materi Tenses') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('materi-tenses.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Category Tenses</th>
									<th >Name</th>
									<th >Description</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($materiTenses as $materiTense)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $materiTense->detailTense->name }}</td>
										<td >{{ $materiTense->name }}</td>
										<td >{{ $materiTense->description }}</td>

                                            <td>
                                                <form action="{{ route('materi-tenses.destroy', $materiTense->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('materi-tenses.show', $materiTense->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('materi-tenses.edit', $materiTense->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $materiTenses->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
