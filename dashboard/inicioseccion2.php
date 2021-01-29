<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Seccion 2</title>

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

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
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
        </ul>
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
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
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
                            <div class="form-row">
                                <div class="form-group col-md-4 ">
                                    <label for="inputEmail4">Titulo</label>
                                    <input type="text" class="form-control" v-model="titulo1">
                                    <button type="buttom" class="btn btn-primary margen"
                                        @click="actualizarTitulo()">Guardar Titulo</button>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <img class="margen img-fluid rounded-circle flex-grow-0 mr-2 shadow"
                                        v-bind:src="'../' + iuno">
                                    <form enctype="multipart/form-data" action="../api/imgS1.php" method="POST">
                                        <div class="divFile">
                                            <p class="filetext">Seleccionar Imagen</p>
                                            <input id="fileImg1" name="nfileImg" class="btnenviar" type="file">
                                            <input type="hidden" name="img1" id="img1" value="1">
                                        </div>
                                        <input type="submit" value="Modificar" class="btn btn-info margen sub"></input>
                                    </form>

                                    <label for="inputEmail4">Titulo columna 1</label>
                                    <input type="text" class="form-control" id="inputEmail4" v-model="tuno">
                                    <label class="margen" for="inputEmail4">descripcion</label>
                                    <textarea name="mensaje" class="form-control" v-model="puno"></textarea>
                                </div>
                                <div class="form-group col-md-3">
                                    <img class="margen img-fluid rounded-circle flex-grow-0 mr-2 shadow"
                                        v-bind:src="'../' + idos">
                                    <form enctype="multipart/form-data" action="../api/imgS1.php" method="POST">
                                        <div class="divFile">
                                            <p class="filetext">Seleccionar Imagen</p>
                                            <input id="fileImg1" name="nfileImg" class="btnenviar" type="file">
                                            <input type="hidden" name="img1" value="2">
                                        </div>
                                        <input type="submit" value="Modificar" class="btn btn-info margen sub"></input>
                                    </form>
                                    <label for="inputEmail4">Titulo columna 2</label>
                                    <input type="text" class="form-control" id="inputEmail4" v-model="tdos">
                                    <label class="margen" for="inputEmail4">descripcion</label>
                                    <textarea name="mensaje" class="form-control" v-model="pdos"></textarea>
                                </div>
                                <div class="form-group col-md-3">
                                    <img class="margen img-fluid rounded-circle flex-grow-0 mr-2 shadow"
                                        v-bind:src="'../' + itres">
                                    <form enctype="multipart/form-data" action="../api/imgS1.php" method="POST">
                                        <div class="divFile">
                                            <p class="filetext">Seleccionar Imagen</p>
                                            <input id="fileImg1" name="nfileImg" class="btnenviar" type="file">
                                            <input type="hidden" name="img1" value="3">
                                        </div>
                                        <input type="submit" value="Modificar" class="btn btn-info margen sub"></input>
                                    </form>
                                    <label for="inputEmail4">Titulo columna 3</label>
                                    <input type="text" class="form-control" id="inputEmail4" v-model="ttres">
                                    <label class="margen" for="inputEmail4">descripcion</label>
                                    <textarea name="mensaje" class="form-control" v-model="ptres"></textarea>
                                </div>
                                <div class="form-group col-md-3">
                                    <img class="margen img-fluid rounded-circle flex-grow-0 mr-2 shadow"
                                        v-bind:src="'../' + icuatro">
                                    <form enctype="multipart/form-data" action="../api/imgS1.php" method="POST">
                                        <div class="divFile">
                                            <p class="filetext">Seleccionar Imagen</p>
                                            <input id="fileImg1" name="nfileImg" class="btnenviar" type="file">
                                            <input type="hidden" name="img1" value="4">
                                        </div>
                                        <input type="submit" value="Modificar" class="btn btn-info margen sub"></input>
                                    </form>
                                    <label for="inputEmail4">Titulo columna 4</label>
                                    <input type="text" class="form-control" id="inputEmail4" v-model="tcuatro">
                                    <label class="margen" for="inputEmail4">descripcion</label>
                                    <textarea name="mensaje" class="form-control" v-model="pcuatro"></textarea>
                                </div>
                            </div>

                            <button type="buttom" class="btn btn-primary" @click="actualizarc1()">Guardar</button>
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
    <script>
    let app = new Vue({
        el: "#app",
        data: {
            tuno: '',
            tdos: '',
            ttres: '',
            tcuatro: '',
            puno: '',
            pdos: '',
            ptres: '',
            pcuatro: '',
            iuno: '',
            idos: '',
            itres: '',
            icuatro: '',
            titulo1: ''


        },
        mounted: function() {
            this.cargar()
            this.cargarTitulo()
        },
        methods: {
            async cargar() {
                await axios.post("../api/inicio.php?accion=secciondos", {
                        ide: "es"
                    })
                    .then(response => {
                        this.tuno = response.data.datos[0].titulo;
                        this.tdos = response.data.datos[1].titulo;
                        this.ttres = response.data.datos[2].titulo;
                        this.tcuatro = response.data.datos[3].titulo;
                        this.puno = response.data.datos[0].subtitulo;
                        this.pdos = response.data.datos[1].subtitulo;
                        this.ptres = response.data.datos[2].subtitulo;
                        this.pcuatro = response.data.datos[3].subtitulo;
                        this.iuno = response.data.datos[0].img;
                        this.idos = response.data.datos[1].img;
                        this.itres = response.data.datos[2].img;
                        this.icuatro = response.data.datos[3].img;
                    });

            },
            cargarTitulo: function() {
                axios.post("../api/inicio.php?accion=titulos", {
                        ide: "es"
                    })
                    .then(function(response) {
                        app.titulo1 = response.data.datos[0].titulo;
                    })
            },
            actualizarc1: function() {
                axios.post("../api/inicio.php?accion=secciondosActualizar", {
                    id: 1,
                    titulo: this.tuno,
                    descripcion: this.puno,
                    id2: 2,
                    titulo2: this.tdos,
                    descripcion2: this.pdos,
                    id3: 3,
                    titulo3: this.ttres,
                    descripcion3: this.ptres,
                    id4: 4,
                    titulo4: this.tcuatro,
                    descripcion4: this.pcuatro,
                }).then(function(response) {
                    //console.log(response.data);
                    if (response.status == '200') {
                        Swal.fire({
                            type: 'success',
                            title: 'Actualizado Correctamente',
                            showConfirmButton: false,
                            timer: 3000
                        })
                    }

                })
            },
            actualizarTitulo: function() {
                axios.post("../api/inicio.php?accion=secciondosActualizarTitulo", {
                    id: 1,
                    titulo: this.titulo1,
                }).then(function(response) {
                    //console.log(response.data);
                    if (response.status == '200') {
                        Swal.fire({
                            type: 'success',
                            title: 'Titulo Actualizada Correctamente',
                            showConfirmButton: false,
                            timer: 3000
                        })
                    }

                })
            },
        }
    });
    </script>
</body>

</html>