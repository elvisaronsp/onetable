@extends('layouts.app')

@section('titulo', 'Negocios')

    <!-- Main -->
    @section('content')
        <div class="panel panel-default">
            <div class="panel-heading">Administración</div>
            <div class="panel-body">
                <h1>Negocios</h1>
                <p><a href="{{ route('negocios.create')}}" class="btn btn-primary"> Añadir Negocio</a></p>
                <table class="table table-bordered">
                    <thead>
                        <th>ID</th>
                        <th>Razon Social</th>
                        <th>Logo</th>
                        <th>Usuario</th>
                        <th>E-mail</th>
                        <th>Pais</th>
                        <th>Estado</th>
                        <th>Accion</th>
                    </thead>
                    <tbody>
                        @foreach ($negocios as $negocio)
                            <tr>
                                <td>{{$negocio->id}}</td>
                                <td>{{$negocio->razonSocial}}</td>
                                <td>{{$negocio->user->name}}</td>
                                <td><img src="{{url('/logotipos/'.$negocio->logo)}}" class="img-responsive center-block" style="width:100px"></td>
                                <td>{{$negocio->email}}</td>
                                <td>{{$negocio->pais->nombre}}</td>
                                <td>{{$negocio->status}}</td>
                                <td>
                                    <a href="{{route('negocios.edit',$negocio->id)}}" class="btn btn-sm btn-default">Editar</a>

                                    {!! Form::open(['route' => ['negocios.destroy',$negocio], 'method'=>'DELETE', 'class'=>'form-delete']) !!}
                                    {!! Form::submit('Eliminar',['class'=> 'btn btn-sm btn-danger'])!!}
                                    {!! Form::close() !!}

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $negocios->render() !!}
                @foreach ($negocios as $negocio)

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <p class="text-right">
                                <span class="label label-info">{{$negocio->id}}</span>
                            </p>
                            <img src="{{url('/logotipos/'.$negocio->logo)}}">
                            <div class="caption"> <h3>{{$negocio->razonSocial}}</h3>
                                <p>Responsable: {{$negocio->user->name}}</p>
                                <p>E-mail: {{$negocio->email}}</p>
                                <p>Pais: {{$negocio->pais->nombre}}</p>

                                <p class="text-center btn-group btn-group-sm btn-group-justified">
                                    <a href="#" class="btn btn-default" role="button">Detalles</a>
                                    <a href="{{route('negocios.edit',$negocio->id)}}" class="btn btn-default">Editar</a>
                                </p>
                                <p class="text-center">
                                    <span class="label label-default">{{$negocio->status}}</span>
                                </p>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
