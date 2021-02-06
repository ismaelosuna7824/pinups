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
                                <h1>Página de tienda </h1><br>
                                <div class="form-row">
                                    <div class="form-group col-md-12">

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">título</label>
                                                <textarea class="form-control" name="" id="" cols="30" rows="1"
                                                    v-model="tituloes"></textarea>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword4">título ingles</label>
                                                <textarea class="form-control" name="" id="" cols="30" rows="1"
                                                    v-model="tituloen"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">texto </label>
                                                <textarea class="form-control" name="" id="" cols="30" rows="3"
                                                    v-model="textoes"></textarea>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword4">texto ingles</label>
                                                <textarea class="form-control" name="" id="" cols="30" rows="3"
                                                    v-model="textoen"></textarea>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary" @click="guardar()" >Guardar</button>
                                    </div>
                                    <!--------Fomulario------->
                                    <div class="form-group col-md-3">



                                        <form enctype="multipart/form-data" action="../api/tiendaS1Col.php"
                                            method="POST" class="col-md-6">
                                            <p>Tamaño (382x321)</p>
                                            <div class="" style="width: 200px">
                                                <p class="filetext">Seleccionar Imagen</p>
                                                <input id="fileImg1" name="uploaded_file" class="" type="file">
                                                <input type="hidden" name="img1" id="img1" >

                                            </div>

                                            <input type="submit" value="Upload" class="btn btn-info margen sub"></input>
                                        </form>



                                    </div><br>

                                </div>
                                <div class="card-body col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>imagen</th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr v-for="dts in datos">
                                                    <td><img v-bind:src="'../' + dts.img" style="width: 100px;" /> </td>
                                                    <td>
                                                    <form enctype="multipart/form-data"
                                                        action="../api/editarImagenes.php" method="POST">
                                                        <div class="">
                                                            <p class="filetext">Seleccionar Imagen</p>
                                                            <input id="fileImg1" name="nfileImg" class="" type="file">
                                                            <input type="text" hidden name="tabla" value="tiendaimg">
                                                            <input type="text" hidden name="campo" value="img">
                                                            <input type="text" hidden name="pagina" value="tiendaseccionuno">
                                                            <input type="text" hidden name="img1" v-bind:value="dts.id">
                                                        </div>
 
                                                        <input type="submit" value="Upload"
                                                            class="btn btn-info margen sub" style="width: 100px"></input>
                                                    </form>
                                                    </td>
                                                    <td> <button class="btn btn-primary mr-1" data-trigger="hover"
                                                            data-toggle="tooltip" data-placement="top"
                                                            data-title="Modificar" @click="pasar(dts.img, dts.id)">
                                                            Eliminar
                                                        </button></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>



                    </div>

                    <br><br>
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
            ides: '',
            iden: '',
            tituloes: '',
            tituloen: '',
            textoes: '',
            textoen: '',
            datos: []

        },
        mounted: function() {
            this.cargarDatos()
            this.cargarTitulos()
        },
        methods: {
            guardar: function() {

                if (this.titulo != '') {
                    //console.log(app.iden)
                    axios.post("../api/tienda.php?accion=updateuno", {
                        ides : this.ides,
                        iden : this.iden,
                        tituloes : this.tituloes,
                        tituloen : this.tituloen,
                        textoes : this.textoes,
                        textoen : this.textoen,

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
                axios.post("../api/tienda.php?accion=secciondos")
                    .then(function(response) {
                        //app.imagenes = response.data.datos;
                        // app.img = response.data.datos[0].img;
                        // app.imgen = response.data.datos[1].img;
                        // app.idtituloes = response.data.datos[0].id;
                        app.datos = response.data.datos;
                        console.log(response)
                    })
            },
            cargarTitulos: function() {
                axios.post("../api/tienda.php?accion=dseccionuno")
                    .then(function(response) {
                        //app.imagenes = response.data.datos;
                        // app.img = response.data.datos[0].img;
                        // app.imgen = response.data.datos[1].img;
                        app.ides = response.data.datos[0].id;
                        app.tituloes = response.data.datos[0].titulo;
                        app.textoes = response.data.datos[0].texto;

                        app.iden = response.data.datos[1].id;
                        app.tituloen = response.data.datos[1].titulo;
                        app.textoen = response.data.datos[1].texto;
                        //app.datos = response.data.datos;
                        console.log(response)
                    })
            },
            pasar: function(img, id) {

                Swal.fire({
                    title: '¿Desea Eliminar Este Evento?',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, Eliminar!'
                }).then(function(result) {
                    if (result.value) {
                        axios.post("../api/tienda.php?accion=dseccioncuatroEliminarImagen", {
                            ide: id,
                            path: img,

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
                })


                //console.log(img, id)
            }
        }
    })
    </script>
</body>

</html>