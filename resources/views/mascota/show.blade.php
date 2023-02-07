@extends('layouts.app')

@section('template_title')
    {{ $mascota->name ?? 'Show Mascota' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Mascota</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('mascota.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $mascota->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $mascota->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Cliente Id:</strong>
                            {{ $mascota->cliente_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
