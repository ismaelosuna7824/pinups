<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pinups</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="../sweetAlert/sweetalert2@8.js"></script>
    <link href="css/inicioseccion1.css" rel="stylesheet">
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
                    <div class="container-fluid">
                        <!-- Page Heading -->
                        <div class="card shadow mb-8">
                            <div
                                style="padding-left: 50px; padding-right: 50px; padding-top: 60px; padding-bottom: 50px;">
                                <h1>Sección cinco página conocenos</h1><br>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <img class="margen img-fluid flex-grow-0 mr-2 shadow"
                                                    v-bind:src="'../' + img2es" style="width: 200px">
                                                    <form enctype="multipart/form-data" action="../api/editarImagenes.php"
                                                        method="POST">
                                                        <div class="">
                                                        <p class="filetext" style="color:black">Titulo Imagen (2400x500)</p>
                                                            <input id="fileImg1" name="nfileImg" class="" type="file">
                                                            <input type="text" hidden name="tabla" value="c_banner">
                                                            <input type="text" hidden name="campo" value="img">
                                                            <input type="text" hidden name="pagina" value="conocenosseccioncinco">
                                                            <input type="text" hidden name="img1" value="1">
                                                        </div>
                                                        <br>
                                                        <input type="submit" value="Upload" class="btn btn-info margen sub"
                                                            style="width: 100px"></input>
                                                    </form>
                                                    <label for=""> Url</label>
                                                    <input class="form-control" placeholder="Url" v-model="url1"/>
                                                    <br>

                                                    <button class="btn btn-primary" @click="update()"> Editar  </button>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <img class="margen img-fluid flex-grow-0 mr-2 shadow"
                                                    v-bind:src="'../' + img2en" style="width: 200px">
                                                    <form enctype="multipart/form-data" action="../api/editarImagenes.php"
                                                        method="POST">
                                                        <div class="">
                                                            <p class="filetext" style="color:black">Titulo Imagen (2400x500)</p>
                                                            <input id="fileImg1" name="nfileImg" class="" type="file">
                                                            <input type="text" hidden name="tabla" value="c_banner">
                                                            <input type="text" hidden name="campo" value="img">
                                                            <input type="text" hidden name="pagina" value="conocenosseccioncinco">
                                                            <input type="text" hidden name="img1" value="2">
                                                        </div>
                                                        <br>
                                                        <input type="submit" value="Upload" class="btn btn-info margen sub"
                                                            style="width: 100px"></input>
                                                    </form>
                                                   
                                                    
                                            </div>

                                            
                                            

                                        </div>
                                        <!--------Fomulario------->
                                       
                                        <br>

                                    </div>
                                    
                                </div>

                            </div>



                        </div>

                        <br><br><br>
                    </div>
                </div>

                <!-- DataTales Example -->


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
    let app = new Vue({
        el: "#app",
        data: {
            img2es: '',
            img2en: '',
            url1: '',
            url2: ''

        },
        mounted: function() {
            this.cargarDatos()
        },
        methods: {
            guardar: function() {


            },
            cargarDatos: function() {
                axios.post("../api/conocenos.php?accion=bannerimg")
                    .then(function(response) {
                        console.log(response);
                        //app.imagenes = response.data.datos;
                        app.img2es = response.data.datos[0].img;
                        app.img2en = response.data.datos[1].img;
                        app.url1 = response.data.datos[0].url;
                        app.url2 = response.data.datos[1].url;
                        // app.idtituloes = response.data.datos[0].id;
                        // app.datos = response.data.datos;
                    })
            },
            update: function(){
                axios.post("../api/conocenos.php?accion=updatebanner", {
                        url: this.url1,

                    }).then(function(response) {
                        //console.log(response.data);
                        if (response.status == '200') {

                            Swal.fire({

                                type: 'success',
                                title: 'Dato Actualizados Correctamente',
                                showConfirmButton: false,
                                timer: 3000
                            })
                        }

                        setTimeout(function() {
                            location.reload()
                        }, 3000, "JavaScript");
                    })
            }
        }
    })
    </script>
</body>

</html>