@extends('adminlte::page')

@section('title', 'PreAlta')

@section('content_header')
    <h1>PreAlta</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Aqui se subirá la prealta</h1>
        </div>
        <div class="card-body">


            <form action="" class="form form-style" style="width: 80%; ">
                <div class="row">
                    <div class="col">
                        <label for="curp">CURP :</label>
                    </div>
                    <div class="col">
                        <input type="text" id="curp" name="curp" class="form-control">
                    </div>
                </div>



            </form>
        </div>

    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        .form-style {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
    </style>
@stop

@section('js')
    <script>
        $(document).ready(function() {


            const options = {
                method: 'POST',
                url: 'https:///tu-url//v1/curp',
                headers: {
                    'content-type': 'application/json',
                    '/tu-authorization-header/': '/tu-api-key/'
                },
                data: {
                    curp: 'CAHF620818HMNLNL09'
                }
            };

            axios.request(options).then(function(response) {
                console.log(response.data);
            }).catch(function(error) {
                console.error(error);
            });

        });
    </script>
@stop
