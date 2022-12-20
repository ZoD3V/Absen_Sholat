@extends('layouts.app')

@section('title')
    Absen | Create
@endsection

@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
@endsection

@section('javascript')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(function () {
            $('textarea[name=slug]').summernote({height: 200});

        });
                $(function(){
            $('input[name="name"]').on('keyup', function(){
                let Text = $(this).val();

                Text = Text.toLowerCase();
                Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');

                $('input[name="slug"]').val(Text);
            })
        })
    </script>

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Absen | Create') }}</div>
                <div class="card-body">
                    <form id="contactForm" action="{{ route('backend.manage.create.process.absensi') }}" method="post">
                        @csrf
                            <div class="row">
                                <div class="col-xs-12 col-sm-12  col-md-12 mb-3">
                                    <div class="form-group mb-2">
                                        <div class="@error('nama')
                                        text-danger fw-bold
                                        @enderror">
                                        Name:
                                        </div>
                                        <input type="text" name="nama" value="{{ old('name') }}" placeholder="Nama.."
                                        class="form-control @error('nama')
                                        text-danger is-invalid
                                        @enderror">

                                    </div>
                                    @error('name')
                                    <div nama="text-danger small" >{!! $message !!}</div>
                                    @enderror
                                    <div class="form-group mb-2">
                                        <div class="@error('nama_sholat')
                                        text-danger fw-bold
                                        @enderror">
                                        Sholat:
                                        </div>
                                        <select class="form-select @error('nama_sholat')
                                        text-danger is-invalid
                                        @enderror"" aria-label="Default select example" name="nama_sholat">
                                            <option selected>Pilih Sholat : </option>
                                            <option value="Shubuh">Shubuh</option>
                                            <option value="Dzuhur">Dzuhur</option>
                                            <option value="Ashar">Ashar</option>
                                            <option value="Maghrib">Maghrib</option>
                                            <option value="Isya">Isya</option>
                                        </select>
                                    </div>
                                     @error('nama_sholat')
                                    <div class="text-danger small mb-2" >{!! $message !!}</div>
                                    @enderror

                                    <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Send</button>
                                </div>
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
