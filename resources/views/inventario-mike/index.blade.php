@extends('layouts.app')

@section('template_title')
    Inventario Mike
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Inventario Mike') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('inventario-mikes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Descripcion</th>
										<th>Cantidad</th>
										<th>Precio</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($inventarioMikes as $inventarioMike)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $inventarioMike->nombre }}</td>
											<td>{{ $inventarioMike->descripcion }}</td>
											<td>{{ $inventarioMike->cantidad }}</td>
											<td>{{ $inventarioMike->precio }}</td>

                                            <td>
                                                <form action="{{ route('inventario-mikes.destroy',$inventarioMike->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('inventario-mikes.show',$inventarioMike->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('inventario-mikes.edit',$inventarioMike->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $inventarioMikes->links() !!}
            </div>
        </div>
    </div>
@endsection
