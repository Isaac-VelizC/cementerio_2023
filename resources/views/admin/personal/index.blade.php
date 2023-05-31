@extends('layouts.user_type.auth')

@section('content')
<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
              <div class="card mb-4">
                @if($errors->any())
                    <div class="mt-3  alert alert-primary alert-dismissible fade show" role="alert">
                        <span class="alert-text text-white">
                        {{$errors->first()}}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <i class="fa fa-close" aria-hidden="true"></i>
                        </button>
                    </div>
                @endif
                @if(Session::has('msg'))
                    <div class="m-3  alert alert-success alert-dismissible fade show" id="alert-success" role="alert">
                        <span class="alert-text text-white">
                          {{ Session::get('msg') }}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <i class="fa fa-close" aria-hidden="true"></i>
                        </button>
                    </div>
                @endif
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <form  class="form-inline" method="get" action="{{ url('/admin/personals') }}">
                          <input id="search" type="text" class="bg-gradient-success btn-sm mb-0" placeholder="¿Buscar por nombre?" name="query">
                        </form>
                        <div>
                            <h5 class="mb-0">Lista de Trabajadores</h5>
                        </div>
                        <a href="{{ url('/admin/personals/create') }}" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; New</a>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                  <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">N°</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre del Trabajador</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Direccion</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Contacto</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Estado</th>
                          <th class="text-secondary opacity-7"></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($trabajadores as $item)
                        <tr>
                          <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">{{$item->id}}</span>
                          </td>
                          <td>
                            <div class="d-flex px-1 py-0">
                              <div>
                                <img src="../assets/img/User_perfil.png" class="avatar avatar-sm me-3" alt="user1">
                              </div>
                              <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">{{$item->nombre}} {{$item->apellido}}</h6>
                                <p class="text-xs text-secondary mb-0">CI: {{$item->CI}}</p>
                              </div>
                            </div>
                          </td>
                          <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">{{$item->direccion}}</span>
                          </td>
                          <td>
                            <p class="text-xs font-weight-bold mb-0">{{$item->email}}</p>
                            <p class="text-xs text-secondary mb-0">{{$item->telefono}}</p>
                          </td>
                          <td class="align-middle text-center text-sm">
                            @if( $item->estado === 'A' )
                              <span class="badge badge-sm bg-gradient-success">Activo</span>
                            @else
                            <span class="badge badge-sm bg-gradient-danger">Inactivo</span>
                            @endif
                          </td>
                          <td class="text-center">
                            <form method="post" action="{{ url('/admin/personals/'.$item->id ) }}">
                              {{ csrf_field() }}
                              {{ method_field('DELETE') }}
                              <a href="{{ url('/admin/personals/'.$item->id.'/edit') }}" class="btn-info badge badge-sm bg-gradient-black">
                                <i class="fas fa-user-edit text-black"></i>
                              </a>
                              <button type="submit" class="btn-info badge badge-sm bg-gradient-black">
                                <i class="fas fa-trash text-black"></i>
                              </button>
                            </form>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {{ $trabajadores->links() }}
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
</main>
@endsection

