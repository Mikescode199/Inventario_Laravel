@extends('layouts.app')

@section('template_title')
    {{ $inventarioMike->name ?? 'Show Inventario Mike' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Inventario Mike</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('inventario-mikes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $inventarioMike->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $inventarioMike->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $inventarioMike->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $inventarioMike->precio }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
