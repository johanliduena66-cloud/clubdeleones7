    <!--         <h1 id="colorlib-logo"><a href="{{url('/')}}"><img src="{{url('/')}}/plantilla/images/logo.png" width="180"/></a></h1>-->


<aside id="colorlib-aside" role="complementary" class="border js-fullheight">

            @guest
                <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
            @else

                {{ Auth::user()->name }}
                <br>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    Cerrar Sesión
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endguest


            <a href="{{url('/')}}"><img src="{{url('/')}}/plantilla/images/logo.png" width="180"/></a>
           
    <nav id="" role="navigation" align="center">
        <a href="https://www.facebook.com/profile.php?id=100004704316738" target="_blank"><i class="icon-facebook2"></i></a>
        <a href="#"><i class="icon-twitter2"></i></a>
        <a href="#"><i class="icon-instagram"></i></a>
        
    </nav>

   
    <div class="container">
        <br>
    </div>        
            
            <nav id="colorlib-main-menu" role="navigation">
                <ul>
                    <li class="colorlib-active"><a href="{{url('/')}}">Inicio</a></li>
                    <li><a href="{{url('/')}}/mision">Misión</a></li>
                    <li><a href="{{url('/')}}/vision">Visión</a></li>
                    <li><a href="{{url('/')}}/proposito">Propósito y ética</a></li>
                    <li><a href="{{url('/')}}/historiaclub">Historia del Club de Leones</a></li>
                    <li><a href="{{url('/')}}/proyectofestival">Proyecto Festival Estudiantil del porro</a></li>
                  <!--   <li><a href="{{url('/')}}/actividadservicios">Actividades de Servicio</a></li>
                  <li><a href="{{url('/')}}/login">Administración</a></li>-->
                  <!--<li><a href="contact.html">Contact</a></li>-->
                </ul>
            </nav>


            <h6 id="colorlib-logo">
                 <a href="https://mincultura.gov.co/Paginas/default.aspx"  target="_blank"><img src="{{url('/')}}/plantilla/images/mincultura.png" width="180"  height="50"/></a>
            <br>
                
                <a href="{{url('/')}}/index"><img src="{{url('/')}}/plantilla/images/logo2.png" width="150"/></a>
            </h1>



        </aside>

