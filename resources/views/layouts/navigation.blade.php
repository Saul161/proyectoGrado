<div>
<nav class="navbar bg-body-tertiary  ">
  <div class="container-fluid justify-content-start  ">
    <div class="container" href="#">
     <a  class="btn btn-secondary dropdown-primary  text-dark"  type="button"  href="{{ route('dashboard') }}" >INICIO</a>
     <a  class="btn btn-secondary dropdown-primary  text-dark"  type="button"  href="{{ route('cursos.index') }}" >CURSOS</a>
    </div>
    <div class=" dropdown">
            <button class="btn btn-secondary dropdown-primary  text-dark   " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Dropdown
            </button>
            <ul class="dropdown-menu ">
                <li><a class="dropdown-item"  href ="{{ route('profile.edit') }}">Perfil</a></li>
                <li><a class="dropdown-item" onclick="event.preventDefault();cerrarSession.submit()" >Cerrar Session</a></li>
                <form action="{{ route('logout') }}" id="cerrarSession" method="POST" >
                    @csrf
                </form>
             </ul>
    </div>


    


</div>
</nav>

</div>