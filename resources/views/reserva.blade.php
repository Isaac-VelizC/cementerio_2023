@extends('layouts.user_type.clients')

@section('content')

    <section class="hero-section">
        <div class="container">
            <center><h3>RESERVA DE NICHO</h3></center>
            <div class="row">
                <div class="col-lg-5">
                    @include('client.nicho_recerva')
                </div>
                <div class="col-lg-7">
                    <div class="booking-form" style="background-color: bisque">
                        <form action="{{ url('/reserva') }}" method="POST" role="form text-left">
                            @csrf
                            <h6 class="px-0">{{ __('Datos del Familiar') }}</h6><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="@error('nombre')border border-danger rounded-3 @enderror">
                                        <label for="nombre" class="form-control-label">{{ __('Nombre') }}</label>
                                        <input class="form-control" type="text" value="{{ old('nombre', $user->name) }}" name="nombre" id="nombre_cliente" placeholder="Nombre...">
                                        @error('nombre')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="@error('apellido')border border-danger rounded-3 @enderror">
                                        <label for="apellido" class="form-control-label">{{ __('Apellidos') }}</label>
                                        <input class="form-control" type="text" name="apellido" id="apellido_cliente" placeholder="Apellidos....">
                                        @error('apellido')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="@error('ci')border border-danger rounded-3 @enderror">
                                        <label for="ci" class="form-control-label">{{ __('Cedula de Identidad') }}</label>
                                        <input class="form-control"  type="text" name="ci" id="nombre_cliente" placeholder="Cedula Identidad....">
                                        @error('ci')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="@error('email')border border-danger rounded-3 @enderror">
                                        <label for="email" class="form-control-label">{{ __('Correo Electronico') }}</label>
                                        <input class="form-control" value="{{ old('email', $user->email) }}" type="email" name="email" id="email" placeholder="G-mail....">
                                        @error('email')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="@error('telefono')border border-danger rounded-3 @enderror">
                                        <label for="telefono" class="form-control-label">{{ __('Telefono') }}</label>
                                        <input class="form-control" value="{{ old('telefono') }}" type="text" placeholder="Telefono" name="telefono">
                                        @error('telefono')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="@error('direccion')border border-danger rounded-3 @enderror">
                                        <label for="direccion" class="form-control-label">{{ __('Direccion') }}</label>
                                        <input class="form-control" value="{{ old('direccion') }}" type="text" placeholder="Direccion" name="direccion">
                                        @error('direccion')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <br><h6 class="px-0">{{ __('Datos del Difunto') }}</h6><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="@error('nombre_difunto')border border-danger rounded-3 @enderror">
                                        <label for="nombre_difunto" class="form-control-label">{{ __('Nombre del Difunto') }}</label>
                                        <input class="form-control" type="text" name="nombre_difunto" id="nombre_difunto" placeholder="Nombre...">
                                        @error('nombre_difunto')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="@error('apellido_difunto')border border-danger rounded-3 @enderror">
                                        <label for="apellido_difunto" class="form-control-label">{{ __('Apellidos del Difunto') }}</label>
                                        <input class="form-control" type="text" name="apellido_difunto" id="apellido_difunto" placeholder="Apellidos....">
                                        @error('apellido_difunto')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="@error('ci_difunto')border border-danger rounded-3 @enderror">
                                        <label for="ci_difunto" class="form-control-label">{{ __('Cedula de Identidad') }}</label>
                                        <input class="form-control" type="text" name="ci_difunto" id="ci_difunto" placeholder="Cedula Identidad....">
                                        @error('ci_difunto')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="personal_civil" class="form-control-label">{{ __('Estado civil') }}</label>
                                        <div class="@error('civil_id')border border-danger rounded-3 @enderror">
                                            <select class="form-control" name="civil_id" id="civil_id" placeholder="Seleccionar">
                                                <option value="0">Selecionar</option>
                                                @foreach ($civil as $item)
                                                    <option value="{{ $item->id }}"> {{ $item->civil }}</option>
                                                @endforeach
                                            </select>
                                            @error('civil_id')
                                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="personal_fecha_nacimiento" class="form-control-label">{{ __('Fecha de nacimiento') }}</label>
                                        <div class="@error('fecha_nacimiento')border border-danger rounded-3 @enderror">
                                            <input class="form-control" value="{{ old('fecha_nacimiento') }}" type="date" placeholder="fecha_nacimiento" id="personal_fecha_nacimiento" name="fecha_nacimiento">
                                                @error('fecha_nacimiento')
                                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="user-fecha_muerte" class="form-control-label">{{ __('Fecha de muerte') }}</label>
                                        <div class="@error('fecha_muerte')border border-danger rounded-3 @enderror">
                                            <input class="form-control" value="{{ old('fecha_muerte') }}" type="date" placeholder="fecha_muerte" id="user-fecha_muerte" name="fecha_muerte">
                                                @error('fecha_muerte')
                                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="user-causa_muerte" class="form-control-label">{{ __('Causa de muerte') }}</label>
                                        <div class="@error('causa_muerte')border border-danger rounded-3 @enderror">
                                            <input class="form-control" value="{{ old('causa_muerte') }}" type="text" placeholder="causa_muerte" id="user-causa_muerte" name="causa_muerte">
                                                @error('causa_muerte')
                                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><h6 class="px-0">{{ __('Datos de la Reserva') }}</h6><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user.sector" class="form-control-label">{{ __('sector') }}</label>
                                        <div class="@error('user.sector')border border-danger rounded-3 @enderror">
                                            <select class="form-control" name="sector_id" id="sector_id" placeholder="Seleccionar">
                                                <option value=""> Seleccione un sector</option>
                                                @foreach ($sector as $item)
                                                    <option value="{{ $item->id }}"> {{ $item->sector }}</option>
                                                @endforeach
                                            </select>
                                            @error('sector')
                                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user-fecha_limite" class="form-control-label">{{ __('Fecha limite') }}</label>
                                        <div class="@error('fecha_limite')border border-danger rounded-3 @enderror">
                                            <input class="form-control" value="{{ old('fecha_limite') }}" type="date" placeholder="fecha_limite" id="user-fecha_limite" name="fecha_limite">
                                                @error('fecha_limite')
                                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" name="id_nicho_reserva" id="id_nicho">
                            <input type="hidden" name="precio" id="precio">
                            <div class="check-date">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input value="{{ old('numero') }}" type="text" placeholder="numero" id="nicho_numero" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input value="{{ old('precio') }}" type="decimal" placeholder="precio" id="nicho_precio" name="precio" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn bg-gradient-success btn-md mt-4 mb-4">{{ 'Reservar' }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


@endsection
