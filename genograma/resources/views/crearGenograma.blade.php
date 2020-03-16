@extends('layouts.app')

@section('sidebar')
<nav id="sidebar">
        <div class="sidebar-header">
            <h3>Acciones </h3>
        </div>
        <ul class="list-unstyled components">
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Nueva Persona</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="#">Hombre</a>
                    </li>
                    <li>
                        <a href="#">Mujer</a>
                    </li>
                    <li>
                        <a href="#">Elle</a>
                    </li>
                </ul>
                <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Relaciones Familiares</a>
                <ul class="collapse list-unstyled" id="homeSubmenu1">
                    <li>
                        <a href="#">Madre</a>
                    </li>
                    <li>
                        <a href="#">Padre</a>
                    </li>
                    <li>
                        <a href="#">Hermane</a>
                    </li>
                    <li>
                        <a href="#">Tie</a>
                    </li>
                    <li>
                        <a href="#">Sobrine</a>
                    </li>
                    <li>
                        <a href="#">Abuele</a>
                    </li>
                    <li>
                        <a href="#">ETC</a>
                    </li>
                </ul>
                <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Relacion Emocionales</a>
                <ul class="collapse list-unstyled" id="homeSubmenu2">
                    <li>
                        <a href="#">Casade</a>
                    </li>
                    <li>
                        <a href="#">Amantes</a>
                    </li>
                    <li>
                        <a href="#">Novies</a>
                    </li>
                    <li>
                        <a href="#">Es complicado</a>
                    </li>
                    <li>
                        <a href="#">ETC</a>
                    </li>
                </ul>
                <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Operaciones</a>
                <ul class="collapse list-unstyled" id="homeSubmenu3">
                    <li>
                        <a href="#">Eliminar</a>
                    </li>
                    <li>
                        <a href="#">Editar</a>
                    </li>
                    <li>
                        <a href="#">ETC</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Accion</a>
            </li>
            
            
        </ul>
</nav>
@endsection
@section('content')
<!-- https://www.w3schools.com/howto/howto_js_dropdown_sidenav.asp -->
asdsd

@endsection
@extends('layouts.fother')