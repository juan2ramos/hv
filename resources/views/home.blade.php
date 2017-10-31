@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
            <a href="/download" class="btn btn-success " style="margin-bottom: 16px">Descargar excel</a>
            </div>
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <div class="panel-heading">Usuarios</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table ">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Teléfono</th>
                                <th>Email</th>
                                <th>suject</th>
                                <th>hv</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $candidates as $candidate)
                                <tr>
                                    <td>{{$candidate->username}}</td>
                                    <td>{{$candidate->phone}}</td>
                                    <td>{{$candidate->email}}</td>
                                    <td>{{$candidate->subjet}}</td>
                                    <td>
                                        <a target="_blank" href="{{ asset($candidate->hv)}}">
                                            <i class="fa fa-link" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
