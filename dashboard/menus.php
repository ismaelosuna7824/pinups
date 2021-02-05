<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Menus</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/inicioseccion1.css" rel="stylesheet">
    <script src="../sweetAlert/sweetalert2@8.js"></script>
</head>

<body id="page-top">
    <div id="app">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <menu-component></menu-component>

        
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                   

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Alerts -->
                        

                        <!-- Nav Item - Messages -->
                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Administrador</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                
                                
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar Sesión
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid" id="app">
                    <!-- Page Heading -->
                        <div class="card shadow mb-4">
                            <div style="padding-left: 50px; padding-right: 50px; padding-top: 60px; padding-bottom: 50px;">
                            <h1>Menu de Navegación</h1><br>
                                <div class="form-row">
                               
                                    <div class="form-group col-md-6 ">
                                        <label for="inputEmail4">Inicio</label>
                                        <input type="text" class="form-control" v-model="home">
                                        <label for="inputEmail4">Menu</label>
                                        <input type="text" class="form-control" v-model="menu">
                                        <label for="inputEmail4">Conocenos</label>
                                        <input type="text" class="form-control" v-model="about">
                                        <label for="inputEmail4">Musica</label>
                                        <input type="text" class="form-control" v-model="music">
                                        <label for="inputEmail4">Tienda</label>
                                        <input type="text" class="form-control" v-model="store">
                                        <label for="inputEmail4">Franquicias</label>
                                        <input type="text" class="form-control" v-model="pinups">
                                        <label for="inputEmail4">Privacidad</label>
                                        <input type="text" class="form-control" v-model="privacy">
                                        <label for="inputEmail4">Footer Español</label>
                                        <input type="text" class="form-control" v-model="footerEs">
                                        <label for="inputEmail4">Teléfono</label>
                                        <input type="text" class="form-control" v-model="telefono">
                                        <button type="buttom" class="btn btn-primary margen"  @click="actualizar()">Guardar</button>
                                    </div>
                                    <div class="form-group col-md-6 ">
                                    <label for="inputEmail4">Inicio Ingles</label>
                                        <input type="text" class="form-control" v-model="homeE">
                                        <label for="inputEmail4">Menu Ingles</label>
                                        <input type="text" class="form-control" v-model="menuE">
                                        <label for="inputEmail4">Conocenos Ingles</label>
                                        <input type="text" class="form-control" v-model="aboutE">
                                        <label for="inputEmail4">Musica Ingles</label>
                                        <input type="text" class="form-control" v-model="musicE">
                                        <label for="inputEmail4">Tienda Ingles</label>
                                        <input type="text" class="form-control" v-model="storeE">
                                        <label for="inputEmail4">Franquicias Ingles</label>
                                        <input type="text" class="form-control" v-model="pinupsE">
                                        <label for="inputEmail4">Privacidad</label>
                                        <input type="text" class="form-control" v-model="privacyE">
                                        <label for="inputEmail4">Footer Español</label>
                                        <input type="text" class="form-control" v-model="footerEn">
                                    </div>

                                </div>
                            </div>
                        </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="../vueJs/axios.min.js"></script>
    <script src="../vueJs/vue.js"></script>
    <script src="components/menu.js"></script>
    <script>
        let app =	new Vue({
           el: "#app",
           data: {
            home: '',
            menu: '',
            about: '',
            music: '',
            store: '',
            pinups: '',
            privacy:'',
            homeE: '',
            menuE: '',
            aboutE: '',
            musicE: '',
            storeE: '',
            pinupsE: '',
            privacyE:'',
            telefono: '',
            footerEs: '',
            footerEn: ''
            

           },
           mounted: function(){
            this.cargaMenu()
            this.cargaMenuE()
           
           },
           methods: {
            async cargaMenu(){
                await axios.post("../api/menu.php?accion=menu", {
                    ide:  "es"
                })
                .then(response=>{
                    this.home =  response.data.datos[0].nombre;
                    this.menu =  response.data.datos[1].nombre;
                    this.about = response.data.datos[2].nombre;
                    this.music = response.data.datos[3].nombre;
                    this.store = response.data.datos[4].nombre;
                    this.pinups = response.data.datos[5].nombre;
                    this.privacy = response.data.datos[6].nombre;
                    this.telefono = response.data.datos[7].nombre;
                    this.telefono = response.data.datos[7].nombre;
                    this.footerEs = response.data.datos[8].nombre;
                    //console.log(response)
                });
            
            },
            async cargaMenuE(){
                await axios.post("../api/menu.php?accion=menu", {
                    ide:  "en"
                })
                .then(response=>{
                    this.homeE =  response.data.datos[0].nombre;
                    this.menuE =  response.data.datos[1].nombre;
                    this.aboutE = response.data.datos[2].nombre;
                    this.musicE = response.data.datos[3].nombre;
                    this.storeE = response.data.datos[4].nombre;
                    this.pinupsE = response.data.datos[5].nombre;
                    this.privacyE = response.data.datos[6].nombre;
                    this.footerEn = response.data.datos[8].nombre;
                    //console.log(response)
                });
            
            },
            actualizar: function() {
                axios.post("../api/menu.php?accion=actualizar", {
                    home: this.home,
                    menu: this.menu,
                    about: this.about,
                    music: this.music,
                    store: this.store,
                    pinups: this.pinups,
                    privacy: this.privacy,
                    telefono: this.telefono,

                    homeE: this.homeE,
                    menuE: this.menuE,
                    aboutE: this.aboutE,
                    musicE: this.musicE,
                    storeE: this.storeE,
                    pinupsE: this.pinupsE,
                    privacyE: this.privacyE,

                    footerEs: this.footerEs,
                    footerEn: this.footerEn,

                }).then(function(response) {
                    //console.log(response.data);
                    if (response.status == '200') {
                        Swal.fire({
                            type: 'success',
                            title: 'Datos Actualizados Correctamente',
                            showConfirmButton: false,
                            timer: 3000
                        })
                    }
                    setTimeout(function() {
                            location.reload()
                        }, 3000, "JavaScript");
                })
            },
            

               
        }
    });
   </script>
</body>

</html>

