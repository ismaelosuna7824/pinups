Vue.component('menu-component', {
    template: `
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Pinups<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseZero"
                    aria-expanded="true" aria-controls="collapseZero">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Navegacion</span>
                </a>
                <div id="collapseZero" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="menus.php">Menus</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Eventos</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="calendario.php">Calendario</a>
                        <a class="collapse-item" href="index.php">Imagenes de Bandas</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Imagenes</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="imagenes.php">imagenes banners</a>
                        <a class="collapse-item" href="imagenesHeader.php">Imagenes de Header</a>
                        <a class="collapse-item" href="imagenes_conocenos.php">Imagenes de Conocenos</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="true" aria-controls="collapseThree">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Página de inicio</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="collapseThree" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="imagenesHeader.php">Imagenes de Header</a>
                        <a class="collapse-item" href="inicioseccion2.php">Seccion 2</a>
                        <a class="collapse-item" href="inicioseccion3.php">Seccion 3 y 4</a>
                        <a class="collapse-item" href="inicioseccion5.php">Seccion 5</a>
                        <a class="collapse-item" href="inicioseccion6.php">Seccion 6</a>
                        <a class="collapse-item" href="inicioseccion7.php">Seccion 7</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive"
                    aria-expanded="true" aria-controls="collapseFive">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Conocenos</span>
                </a>
                <div id="collapseFive" class="collapse" aria-labelledby="collapseFive" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="conocenosseccionuno">Seccion 1</a>
                        <a class="collapse-item" href="conocenossecciondos">Seccion 2</a>
                        <a class="collapse-item" href="conocenossecciontres">Seccion 3</a>
                        <a class="collapse-item" href="conocenosseccioncuatro">Seccion 4</a>
                        
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSix"
                    aria-expanded="true" aria-controls="collapseSix">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Tienda</span>
                </a>
                <div id="collapseSix" class="collapse" aria-labelledby="collapseSix" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="tiendaseccionuno.php">Seccion 1</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
                    aria-expanded="true" aria-controls="collapseFour">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Franquicias</span>
                </a>
                <div id="collapseFour" class="collapse" aria-labelledby="collapseFour" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="franquiciasseccionuno">Seccion 1</a>
                        <a class="collapse-item" href="franquiciassecciondos">Seccion 2</a>
                        <a class="collapse-item" href="franquiciassecciontres">Seccion 3</a>
                        <a class="collapse-item" href="franquiciasseccioncuatro">Seccion 4</a>
                        <a class="collapse-item" href="franquiciasseccioncinco">Seccion 5</a>
                    </div>
                </div>
            </li>
        </ul>`,
    data() {
    return {
      
    }
    },
    mounted: function(){
        
    },
    methods: {
      
    },
});