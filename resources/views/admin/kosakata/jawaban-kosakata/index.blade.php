@extends('admin.templates.header')

@section('template_title')
    Jawaban Kosakatas
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Jawaban Kosakatas') }}
                            </span>

                            {{-- <div class="float-right">
                                <a href="{{ route('jawaban-kosakatas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>Body Answers</th>
                                        <th>Nilai</th>
                                        <th>Status</th>
                                        <th>Status Kelulusan</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jawabanKosakatas as $jawabanKosakata)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $jawabanKosakata->user->name }}</td>
                                            <td>{{ $jawabanKosakata->tugasKosakata->kkm }}</td>
                                            <td>{{ $jawabanKosakata->body_answers }}</td>
                                            <td>
                                                @if ($jawabanKosakata->status == 'Sudah Dikoreksi')
                                                    <span class="text-primary fw-bold">{{ $jawabanKosakata->nilai }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                @php
                                                    $statusBadgeClass =
                                                        $jawabanKosakata->status == 'Sudah Dikoreksi'
                                                            ? 'bg-success'
                                                            : 'bg-warning';
                                                    $statusLabel =
                                                        $jawabanKosakata->status == 'Sudah Dikoreksi'
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
                                                    $nilai = $jawabanKosakata->nilai;
                                                    $kkm = $jawabanKosakata->tugasKosakata->kkm;
                                                    $statusKelulusan = $nilai >= $kkm ? 'Lulus' : 'Mengulang';
                                                @endphp
                                                <span
                                                    class="badge @if ($statusKelulusan == 'Lulus') bg-success @else bg-danger @endif">{{ $statusKelulusan }}</span>
                                            </td>

                                            <td>
                                                <form
                                                    action="{{ route('jawaban.kosakatas.destroy', $jawabanKosakata->id) }}"
                                                    method="POST">
                                                    <a class="btn btn-sm btn-success "
                                                        href="{{ route('jawaban.kosakatas.show', $jawabanKosakata->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> {{ __('Koreksi') }}</a>
                                                    {{-- <a class="btn btn-sm btn-success"
                                                        href="{{ route('jawaban.kosakatas.edit', $jawabanKosakata->id) }}"><i
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
                {!! $jawabanKosakatas->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
