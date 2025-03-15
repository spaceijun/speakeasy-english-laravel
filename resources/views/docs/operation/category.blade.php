@extends('docs.templates.header')
@section('content')
<div class="row">
    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Endpoint</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>URL</th>
                                    <td>:</td>
                                    <td> {{ url('/api/categories') }} </td>
                                </tr>
                                <tr>
                                    <th>Method</th>
                                    <td>:</td>
                                    <td>GET</td>
                                </tr>
                                <tr>
                                    <th>Response</th>
                                    <td>:</td>
                                    <td>JSON</td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            {{-- Body --}}
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Body</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Parameter</th>
                                    <th>Tipe</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>id</td>
                                    <td>string</td>
                                </tr>
                                <tr>
                                    <td>name</td>
                                    <td>string</td>
                                </tr>
                                <tr>
                                    <td>images</td>
                                    <td>string</td>
                                </tr>
                                <tr>
                                    <td>description</td>
                                    <td>string</td>
                                </tr>
                                <tr>
                                    <td>created_at</td>
                                    <td>string</td>
                                </tr>
                                <tr>
                                    <td>updated_at</td>
                                    <td>string</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- Response --}}
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Body</h4>
                </div>
                <div class="card-body">
                    <h4 class="text-success">Responses <span class="badge bg-success">200</span></h4>
                    <pre>
{
  "data": [
    {
      "id": 0,
      "name": "string",
      "images": "string",
      "description": "string",
      "created_at": "2019-08-24T14:15:22Z",
      "updated_at": "2019-08-24T14:15:22Z"
    }
  ]
}                            </pre>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Body</h4>
                </div>
                <div class="card-body">
                    <h4 class="text-success">Responses <span class="badge bg-success">200</span></h4>
                    <pre>
                        &lt;?php

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_PORT => "8000",
  CURLOPT_URL => "http://127.0.0.1:8000/api/categories",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => [
    "Accept: application/json"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
                    </pre>
                </div>
            </div>


        </div>
    </div>
    @endsection