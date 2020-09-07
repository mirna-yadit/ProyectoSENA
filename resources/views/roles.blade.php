@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Roles</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <div class="list">
                    <input type="text" class="form-control mb-3" placeholder="Buscar...">
                    <ul>
                        <li>Administrador</li>
                        <li>Colaborador</li>
                        <li>Auditor</li>
                        <li>Invitado</li>
                    </ul>
                </div>
            </div>

            <div class="col-9">
                <div class="centered-card">
                    <form action="#">
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Nombre</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
