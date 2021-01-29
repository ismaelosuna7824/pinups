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
                <div class="container-fluid" >
                    <!-- Page Heading -->
                    <div class="card shadow mb-4">
                        <div style="padding-left: 50px; padding-right: 50px; padding-top: 60px; padding-bottom: 50px;">


                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Título</label>
                                    <input type="text" class="form-control" id="inputEmail4" v-model="tituloes" >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Título Ingles</label>
                                    <input type="text" class="form-control" id="inputPassword4" v-model="tituloen" >
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Telefono texto</label>
                                    <input type="text" class="form-control" id="inputEmail4" v-model="phonees">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Telefono texto</label>
                                    <input type="text" class="form-control" id="inputPassword4" v-model="phoneen" >
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Texto</label>
                                    <input type="text" class="form-control" id="inputEmail4" v-model="textoes">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Texto Ingles</label>
                                    <input type="text" class="form-control" id="inputPassword4" v-model="textoen" >
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Nombre</label>
                                    <input type="text" class="form-control" id="inputEmail4" v-model="nombrees" >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Nombre Ingles</label>
                                    <input type="text" class="form-control" id="inputPassword4" v-model="nombreen">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Apellido</label>
                                    <input type="text" class="form-control" id="inputEmail4" v-model="apellidoes" >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Apellido Ingles</label>
                                    <input type="text" class="form-control" id="inputPassword4" v-model="apellidoen">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Correo</label>
                                    <input type="text" class="form-control" id="inputEmail4" v-model="correoes" >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Correo Ingles</label>
                                    <input type="text" class="form-control" id="inputPassword4" v-model="correoen">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Teléfono</label>
                                    <input type="text" class="form-control" id="inputEmail4" v-model="telefonoes" >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Teléfono Ingles</label>
                                    <input type="text" class="form-control" id="inputPassword4" v-model="telefonoen">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Ciudad</label>
                                    <input type="text" class="form-control" id="inputEmail4" v-model="ciudades" >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Ciudad Ingles</label>
                                    <input type="text" class="form-control" id="inputPassword4" v-model="ciudaden">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Estado</label>
                                    <input type="text" class="form-control" id="inputEmail4" v-model="estadoes" >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Estado Ingles</label>
                                    <input type="text" class="form-control" id="inputPassword4" v-model="estadoen">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Mensaje</label>
                                    <input type="text" class="form-control" id="inputEmail4" v-model="mensajees" >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Mensaje Ingles</label>
                                    <input type="text" class="form-control" id="inputPassword4" v-model="mensajeen">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Botón</label>
                                    <input type="text" class="form-control" id="inputEmail4" v-model="botones" >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Botón Ingles</label>
                                    <input type="text" class="form-control" id="inputPassword4" v-model="botonen">
                                </div>
                            </div>
                            <button type="buttom" class="btn btn-primary" @click="guardar()">Guardar</button>

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
            tituloes: '',
            textoes: '',
            botones: '',
            ides: '',
            tituloen: '',
            textoen: '',
            botonen: '',
            iden: '',

            nombrees: '',
            apellidoes: '',
            correoes: '',
            telefonoes: '',
            ciudades: '',
            estadoes: '',
            mensajees: '',
            phonees: '',

            nombreen: '',
            apellidoen: '',
            correoen: '',
            telefonoen: '',
            ciudaden: '',
            estadoen: '',
            mensajeen: '',
            phoneen: '',


        },
        mounted: function() {
         this.cargarDatos()
        },
        methods: {
            guardar: function() {

                if (this.titulo != '') {
                    //console.log(app.iden)
                    axios.post("../api/franquicias.php?accion=updatetres", {
                        ides       : this.ides,
                        iden       : this.iden,
                        nombrees   : this.nombrees,
                        apellidoes : this.apellidoes,
                        correoes   : this.correoes,
                        telefonoes : this.telefonoes,
                        ciudades   : this.ciudades,
                        estadoes   : this.estadoes,
                        mensajees  : this.mensajees,
                        botonenes  : this.botones,
                        tituloes   : this.tituloes,
                        textoes    : this.textoes,
                        phonees    : this.phonees,

                        nombreen    : this.nombreen,
                        apellidoen  : this.apellidoen,
                        correoen    : this.correoen,
                        telefonoen  : this.telefonoen,
                        ciudaden    : this.ciudaden,
                        estadoen    : this.estadoen,
                        mensajeen   : this.mensajeen,
                        botonen     : this.botonen,
                        tituloen   : this.tituloen,
                        textoen    : this.textoen,
                        phoneen    : this.phoneen,


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
                } else {
                    Swal.fire({

                        type: 'info',
                        title: 'Faltan Campos por llenar',
                        showConfirmButton: false,
                        timer: 3000
                    })
                    if (this.nombre == '') {
                        document.getElementById("ciudad").style.borderColor = "red";
                    }

                }


            },
            cargarDatos: function() {
                axios.post("../api/franquicias.php?accion=dsecciontres")
                    .then(function(response) {
                        //app.imagenes = response.data.datos;
                        app.ides = response.data.datos[0].id;
                        app.iden = response.data.datos[1].id;
                        app.tituloes = response.data.datos[0].titulo;
                        app.tituloen = response.data.datos[1].titulo;
                        app.textoes =  response.data.datos[0].texto;
                        app.textoen =  response.data.datos[1].texto;
                        app.botones =  response.data.datos[0].boton;
                        app.botonen =  response.data.datos[1].boton;
                        // app.url =  response.data.datos[0].url;

                        app.nombrees = response.data.datos[0].name;
                        app.apellidoes = response.data.datos[0].lastname;
                        app.correoes = response.data.datos[0].email;
                        app.telefonoes = response.data.datos[0].phone;
                        app.ciudades = response.data.datos[0].city;
                        app.estadoes = response.data.datos[0].state;
                        app.mensajees = response.data.datos[0].message;
                        app.phonees = response.data.datos[0].telefono;

                        app.nombreen = response.data.datos[1].name;
                        app.apellidoen = response.data.datos[1].lastname;
                        app.correoen = response.data.datos[1].email;
                        app.telefonoen = response.data.datos[1].phone;
                        app.ciudaden = response.data.datos[1].city;
                        app.estadoen = response.data.datos[1].state;
                        app.mensajeen = response.data.datos[1].message;
                        app.phoneen = response.data.datos[1].telefono;

                        // nombreen: '',
                        // apellidoen: '',
                        // correoen: '',
                        // telefonoen: '',
                        // ciudaden: '',
                        // estadoen: '',
                        // mensajeen: '',
                        //console.log(response);
                    })
            },
            // eliminar: function(id) {
            //     Swal.fire({
            //         title: '¿Desea Eliminar Esta Imagen?',
            //         type: 'warning',
            //         showCancelButton: true,
            //         confirmButtonColor: '#3085d6',
            //         cancelButtonColor: '#d33',
            //         confirmButtonText: 'Si, Eliminar!'
            //     }).then(function(result) {
            //         if (result.value) {
            //             axios.post("../api/eventos.php?accion=eliminar", {
            //                 ide: id
            //             }).then(function(response) {
            //                 //console.log(response.data);
            //                 if (response.status == '200') {

            //                     Swal.fire({

            //                         type: 'success',
            //                         title: 'Imagen Eliminado',
            //                         showConfirmButton: false,
            //                         timer: 3000
            //                     })
            //                 }

            //                 setTimeout(function() {
            //                     location.reload()
            //                 }, 3000, "JavaScript");
            //             })
            //         }
            //     })

            // }
        }
    })
    </script>
</body>

</html>