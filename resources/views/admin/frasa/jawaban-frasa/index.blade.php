@extends('admin.templates.header')

@section('template_title')
    Jawaban Frasas
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Jawaban Frasas') }}
                            </span>

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
                                        <th>Answers</th>
                                        <th>Nilai</th>
                                        <th>Status</th>
                                        <th>Status Kelulusan</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jawabanFrasas as $jawabanFrasa)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $jawabanFrasa->user->name }}</td>
                                            <td>{{ $jawabanFrasa->tugasFrasa->kkm }}</td>
                                            <td>{{ $jawabanFrasa->body_answers }}</td>
                                            <td>
                                                @if ($jawabanFrasa->status == 'Sudah Dikoreksi')
                                                    <span
                                                        class="text-primary fw-bold">{{ $jawabanFrasa->nilai ? $jawabanFrasa->nilai : '0' }}
                                                    </span>
                                                @endif
                                            </td>
                                            <td>
                                                @php
                                                    $statusBadgeClass =
                                                        $jawabanFrasa->status == 'Sudah Dikoreksi'
                                                            ? 'bg-success'
                                                            : 'bg-warning';
                                                    $statusLabel =
                                                        $jawabanFrasa->status == 'Sudah Dikoreksi'
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
                                                    $nilai = $jawabanFrasa->nilai;
                                                    $kkm = $jawabanFrasa->tugasFrasa->kkm;
                                                    $statusKelulusan = $nilai >= $kkm ? 'Lulus' : 'Mengulang';
                                                @endphp
                                                <span
                                                    class="badge @if ($statusKelulusan == 'Lulus') bg-success @else bg-danger @endif">{{ $statusKelulusan }}</span>
                                            </td>


                                            <td>
                                                <form action="{{ route('jawaban.frasa.destroy', $jawabanFrasa->id) }}"
                                                    method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('jawaban.frasa.show', $jawabanFrasa->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('jawaban.frasa.edit', $jawabanFrasa->id) }}"><i
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
                {!! $jawabanFrasas->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
