@extends('docs.templates.header')
@section('content')
    <div class="row">
        <div class="container-fluid">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> {{ __('DOCS API SPEAKEASY ENGLISH') }}</h4>
                        <span class="badge bg-primary">BETA
                            Version</span>
                    </div>
                    <div class="card-body">
                        {{-- Introduction API --}}
                        <div class="alert alert-primary alert-border-left alert-dismissible fade show material-shadow"
                            role="alert">
                            <i class="ri-user-smile-line me-3 align-middle"></i> <strong>Warning!</strong> - Speakeasy
                            English API menyediakan berbagai endpoint untuk mendukung aplikasi pembelajaran bahasa Inggris
                            secara interaktif. API ini digunakan oleh aplikasi Flutter untuk mendapatkan materi
                            pembelajaran, latihan soal, audio percakapan, dan fitur lainnya.
                        </div>
                        {{-- Live Server --}}
                        <h4 class="card-title">API Base URL</h4>
                        <div class="alert alert-primary alert-dismissible bg-primary text-white fade show material-shadow"
                            role="alert">
                            <strong>Live Server</strong> -> <span id="server-url">{{ url('/api') }}</span>
                            <button type="button" class="btn btn-light btn-sm" onclick="copyToClipboard('#server-url')"
                                title="Copy URL">
                                <i class="las la-copy"></i>
                            </button>
                        </div>

                        <script>
                            function copyToClipboard(elementId) {
                                var urlText = document.querySelector(elementId).innerText;

                                var tempInput = document.createElement("input");
                                tempInput.value = urlText;
                                document.body.appendChild(tempInput);
                                tempInput.select();
                                document.execCommand("copy");
                                document.body.removeChild(tempInput);

                                alert("URL copied to clipboard: " + urlText);
                            }
                        </script>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function copyToClipboard(elementId) {
            var urlText = document.querySelector(elementId).innerText;
            var tempInput = document.createElement("input");
            tempInput.value = urlText;
            document.body.appendChild(tempInput);
            tempInput.select();
            document.execCommand("copy");
            document.body.removeChild(tempInput);

            alert("URL copied to clipboard: " + urlText);
        }
    </script>
@endsection
