@extends('admin.templates.header')

@section('template_title')
    Jawaban Idioms
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Jawaban Idioms') }}
                            </span>

                            {{-- <div class="float-right">
                                <a href="{{ route('jawaban-idioms.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div> --}}
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

                                        <th>Username</th>
                                        <th>KKM</th>
                                        <th> Answers</th>
                                        <th>Nilai</th>
                                        <th>Status</th>
                                        <th>Status Kelulusan</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jawabanIdioms as $jawabanIdiom)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $jawabanIdiom->user->name }}</td>
                                            <td>{{ $jawabanIdiom->tugasIdiom->kkm }}</td>
                                            <td>{{ $jawabanIdiom->body_answers }}</td>
                                            <td>
                                                @if ($jawabanIdiom->status == 'Sudah Dikoreksi')
                                                    <span
                                                        class="text-primary fw-bold">{{ $jawabanIdiom->nilai ? $jawabanIdiom->nilai : '0' }}
                                                    </span>
                                                @endif
                                            </td>
                                            <td>
                                                @php
                                                    $statusBadgeClass =
                                                        $jawabanIdiom->status == 'Sudah Dikoreksi'
                                                            ? 'bg-success'
                                                            : 'bg-warning';
                                                    $statusLabel =
                                                        $jawabanIdiom->status == 'Sudah Dikoreksi'
                                                            ? 'Sudah Dikoreksi'
                                                            : 'Belum Dikoreksi';
                                                @endphp
                                                <span class="badge {{ $statusBadgeClass }}">
                                                    {{ $statusLabel }}
                                                </span>
                                            </td>
                                            <td>
                                                @php
                                                    // Menentukan Status kelulusan
                                                    $nilai = $jawabanIdiom->nilai;
                                                    $kkm = $jawabanIdiom->tugasIdiom->kkm;
                                                    $statusKelulusan = $nilai >= $kkm ? 'Lulus' : 'Mengulang';
                                                @endphp
                                                <span
                                                    class="badge @if ($statusKelulusan == 'Lulus') bg-success @else bg-danger @endif">{{ $statusKelulusan }}</span>
                                            </td>

                                            <td>
                                                <form action="{{ route('jawaban.idioms.destroy', $jawabanIdiom->id) }}"
                                                    method="POST">
                                                    <a class="btn btn-sm btn-success "
                                                        href="{{ route('jawaban.idioms.show', $jawabanIdiom->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> {{ __('Koreksi') }}</a>
                                                    {{-- <a class="btn btn-sm btn-success"
                                                        href="{{ route('jawaban.idioms.edit', $jawabanIdiom->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a> --}}
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
                {!! $jawabanIdioms->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
