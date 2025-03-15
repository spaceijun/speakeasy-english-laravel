@extends('admin.templates.header')

@section('template_title')
    Tenses
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
                                {{ __('Tenses') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tenses.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Category</th>
									<th >Name</th>
									<th >Images</th>
									<th >Description</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tenses as $tense)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $tense->category->name }}</td>
										<td >{{ $tense->name }}</td>
                                        <td><img src="{{ asset('assets/tenses/' . $tense->images) }}"
                                            alt="Current Image" width="100">
                                    </td>
                                <td >{{ $tense->description }}</td>

                                            <td>
                                                <form action="{{ route('tenses.destroy', $tense->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tenses.show', $tense->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tenses.edit', $tense->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                        @include('admin.templates.pagination', ['paginator' => $tenses])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
