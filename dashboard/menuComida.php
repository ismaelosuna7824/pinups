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
                    <div class="container-fluid">
                        <!-- Page Heading -->
                        <div class="card shadow mb-4">
                            <div
                                style="padding-left: 50px; padding-right: 50px; padding-top: 60px; padding-bottom: 50px;">
                                <h1>Página del menú</h1><br>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <div class="form-row">

                                            <div class="form-group col-md-4">
                                                <img class="margen img-fluid flex-grow-0 mr-2 shadow"
                                                    v-bind:src="'../' + img1es" style="width: 200px">
                                                <form enctype="multipart/form-data" action="../api/menuComidaImg.php"
                                                    method="POST">
                                                    <div class="divFile" style="width: 200px">
                                                        <p class="filetext">Seleccionar Título tamaño (780x132)</p>
                                                        <input id="fileImg1" name="nfileImg" class="btnenviar"
                                                            type="file">
                                                        <input type="hidden" name="img1" id="img1" value="1">
                                                        <input type="hidden" name="campo" id="img1" value="img1">

                                                    </div>
                                                    <br>
                                                    <input type="submit" value="Modificar"
                                                        class="btn btn-info margen sub" style="width: 200px"></input>
                                                </form>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <img class="margen img-fluid flex-grow-0 mr-2 shadow"
                                                    v-bind:src="'../' + img1en" style="width: 200px">
                                                <form enctype="multipart/form-data" action="../api/menuComidaImg.php"
                                                    method="POST">
                                                    <div class="divFile" style="width: 200px">
                                                        <p class="filetext">Seleccionar Título Ingles  tamaño (780x132)</p>
                                                        <input id="fileImg1" name="nfileImg" class="btnenviar"
                                                            type="file">
                                                        <input type="hidden" name="img1" id="img1" value="2">
                                                        <input type="hidden" name="campo" id="img1" value="img1">

                                                    </div>
                                                    <br>
                                                    <input type="submit" value="Modificar"
                                                        class="btn btn-info margen sub" style="width: 200px"></input>
                                                </form>
                                            </div>
                                        </div>




                                    </div>



                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Texto</label>
                                        <textarea name="" class="form-control" id="" cols="10" rows="5"
                                            v-model="texto1es"></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Texto Ingles</label>
                                        <textarea name="" class="form-control" id="" cols="10" rows="5"
                                            v-model="texto1en"></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Télefono</label>
                                        <input type="text" class="form-control" id="inputEmail4" v-model="telefono">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Texto depues de telefono</label>
                                        <input type="text" class="form-control" id="inputEmail4" v-model="texto2es">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Ingles</label>
                                        <input type="text" class="form-control" id="inputPassword4" v-model="texto2en">
                                    </div>
                                </div>

                                <div class="form-row">

                                    <div class="form-group col-md-6">
                                        <img class="margen img-fluid flex-grow-0 mr-2 shadow" v-bind:src="'../' + img2"
                                            style="width: 200px">
                                        <form enctype="multipart/form-data" action="../api/menuComidaImg2.php"
                                            method="POST">
                                            <div class="divFile" style="width: 200px">
                                                <p class="filetext">Imagen tienda tamaño (186x86)</p>
                                                <input id="fileImg1" name="nfileImg" class="btnenviar" type="file">
                                                <input type="hidden" name="img1" id="img1" value="1">
                                                <input type="hidden" name="campo" id="img1" value="img2">
                                            </div>
                                            <br>
                                            <input type="submit" value="Modificar" class="btn btn-info margen sub"
                                                style="width: 200px"></input>
                                        </form><br>
                                        <div class="form-group col-md-10">
                                            <label for="inputEmail4">Url</label>
                                            <input type="text" class="form-control" id="inputEmail4" v-model="url1">
                                        </div>

                                    </div>
                                    <div class="form-group col-md-6">
                                        <img class="margen img-fluid flex-grow-0 mr-2 shadow" v-bind:src="'../' + img3"
                                            style="width: 200px">
                                        <form enctype="multipart/form-data" action="../api/menuComidaImg2.php"
                                            method="POST">
                                            <div class="divFile" style="width: 200px">
                                                <p class="filetext">Imagen whatsapp tamaño (186x86)</p>
                                                <input id="fileImg1" name="nfileImg" class="btnenviar" type="file">
                                                <input type="hidden" name="img1" id="img1" value="2">
                                                <input type="hidden" name="campo" id="img1" value="img3">
                                            </div>
                                            <br>
                                            <input type="submit" value="Modificar" class="btn btn-info margen sub"
                                                style="width: 200px"></input>
                                        </form>
                                        <br>
                                        <div class="form-group col-md-10">
                                            <label for="inputEmail4">Url</label>
                                            <input type="text" class="form-control" id="inputEmail4" v-model="url2">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">tercer texto debajo de imagnes tienda y
                                            whatsapp</label>
                                        <textarea name="" class="form-control" id="" cols="10" rows="5"
                                            v-model="texto3es"></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Texto Ingles</label>
                                        <textarea name="" class="form-control" id="" cols="10" rows="5"
                                            v-model="texto3en"></textarea>
                                    </div>
                                </div>
                                <div class="form-row">

                                    <div class="form-group col-md-6">
                                        <img class="margen img-fluid flex-grow-0 mr-2 shadow" v-bind:src="'../' + img4"
                                            style="width: 200px">
                                        <form enctype="multipart/form-data" action="../api/menuComidaImg2.php"
                                            method="POST">
                                            <div class="divFile" style="width: 200px">
                                                <p class="filetext">Imagen pagos tamaño (319x55)</p>
                                                <input id="fileImg1" name="nfileImg" class="btnenviar" type="file">
                                                <input type="hidden" name="img1" id="img1" value="1">
                                                <input type="hidden" name="campo" id="img1" value="img4">
                                            </div>
                                            <br>
                                            <input type="submit" value="Modificar" class="btn btn-info margen sub"
                                                style="width: 200px"></input>
                                        </form><br>

                                    </div>
                                    <div class="form-group col-md-4">

                                        <form enctype="multipart/form-data" action="../api/menuComidaImg2.php"
                                            method="POST">
                                            <div class="divFile" style="width: 200px">
                                                <p class="filetext">Seleccionar Archivo menu</p>
                                                <input id="fileImg1" name="nfileImg" class="btnenviar" type="file">
                                                <input type="hidden" name="img1" id="img1" value="2">
                                                <input type="hidden" name="campo" id="img1" value="archivo">

                                            </div>
                                            <br>
                                            <input type="submit" value="Modificar" class="btn btn-info margen sub"
                                                style="width: 200px"></input>
                                        </form>
                                    </div>
                                </div>
                                <button type="buttom" class="btn btn-primary" @click="guardar()">Guardar</button>
                                <br><br><br>
                                <div class="form-group col-md-3">



                                    <form enctype="multipart/form-data" action="../api/menuImagenes.php" method="POST"
                                        class="col-md-6">
                                        
                                        <div class="divFile" style="width: 200px">
                                            <p class="filetext">Seleccionar Imagen,  tamaño (915x1200)</p>
                                            <input id="fileImg1" name="uploaded_file" class="btnenviar" type="file">
                                            <br>
                                            <input type="hidden" name="img1" id="img1" v-bind:value="idtituloes">

                                        </div>
                                        <br>
                                        <input type="submit" value="Upload" class="btn btn-info margen sub"></input>
                                    </form>



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
                                                <tr v-for="dts in imagenes">
                                                    <td><img v-bind:src="'../' + dts.img" style="width: 100px;" />
                                                    <td>
                                                    <form enctype="multipart/form-data"
                                                        action="../api/editarImagenes.php" method="POST">
                                                        <div class="divFile">
                                                            <p class="filetext">Seleccionar Imagen</p>
                                                            <input id="fileImg1" name="nfileImg" class="btnenviar" type="file">
                                                            <input type="text" hidden name="tabla" value="menuimagenes">
                                                            <input type="text" hidden name="campo" value="img">
                                                            <input type="text" hidden name="pagina" value="menuComida">
                                                            <input type="text" hidden name="img1" v-bind:value="dts.id">
                                                        </div>
 
                                                        <input type="submit" value="Upload"
                                                            class="btn btn-info margen sub"></input>
                                                    </form>
                                                    </td>
                                                    </td>
                                                    <td> <button class="btn btn-danger mr-1" data-trigger="hover"
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
            img1es: '',
            img1en: '',
            texto1es: '',
            texto1en: '',
            telefono: '',
            texto2es: '',
            texto2en: '',
            texto3es: '',
            texto3en: '',
            img2: '',
            img3: '',
            url1: '',
            url2: '',
            img4: '',
            imagenes: []
        },
        mounted: function() {
            this.cargarDatos()
            this.cargarImg()
        },
        methods: {
            guardar: function() {

                if (this.titulo != '') {
                    //console.log(app.iden)
                    axios.post("../api/menuComida.php?accion=updateuno", {
                        texto1es: this.texto1es,
                        texto1en: this.texto1en,
                        telefono: this.telefono,
                        texto2es: this.texto2es,
                        texto2en: this.texto2en,
                        texto3es: this.texto3es,
                        texto3en: this.texto3en,
                        url1: this.url1,
                        url2: this.url2
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
                axios.post("../api/menuComida.php?accion=dseccionuno")
                    .then(function(response) {
                        //app.imagenes = response.data.datos;
                        app.ides = response.data.datos[0].id;
                        app.iden = response.data.datos[1].id;
                        app.img1es = response.data.datos[0].img1;
                        app.img1en = response.data.datos[1].img1;
                        app.texto1es = response.data.datos[0].texto;
                        app.texto1en = response.data.datos[1].texto;
                        app.telefono = response.data.datos[0].telefono;
                        app.texto2es = response.data.datos[0].texto2;
                        app.texto2en = response.data.datos[1].texto2;
                        app.texto3es = response.data.datos[0].texto3;
                        app.texto3en = response.data.datos[1].texto3;
                        app.img2 = response.data.datos[0].img2;
                        app.img3 = response.data.datos[1].img3;
                        app.url1 = response.data.datos[0].url1;
                        app.url2 = response.data.datos[0].url2;
                        app.img4 = response.data.datos[0].img4;
                        console.log(response);
                    })
            },
            cargarImg: function() {
                axios.post("../api/menuComida.php?accion=cargaimg")
                    .then(function(response) {
                        app.imagenes = response.data.datos;

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
                        axios.post("../api/menuComida.php?accion=dsecciontresEliminarImagen", {
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