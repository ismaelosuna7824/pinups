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
                <div class="container-fluid" >
                    <!-- Page Heading -->
                    <div class="card shadow mb-4">
                        <div style="padding-left: 50px; padding-right: 50px; padding-top: 60px; padding-bottom: 50px;">
                        <h1>Sección dos Página franquicias</h1><br>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Título</label>
                                    <textarea class="form-control" rows="5" v-model="tituloes" ></textarea>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Título Ingles</label>
                                    <textarea class="form-control" rows="5" v-model="tituloen" ></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Texto</label>
                                    <textarea class="form-control" rows="5" v-model="textoes" ></textarea>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Texto Ingles</label>
                                    <textarea class="form-control" rows="5" v-model="textoen"></textarea>
                                </div>
                            </div>
                            
                           
                            <button type="buttom" class="btn btn-primary" @click="guardar()">Guardar</button>

                        </div>
                    </div>

                    <!-- DataTales Example -->
                    

                </div>
                <div class="container-fluid" >
                    <!-- Page Heading -->
                    <div class="card shadow mb-4">
                        <div style="padding-left: 50px; padding-right: 50px; padding-top: 60px; padding-bottom: 50px;">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <img class="margen img-fluid rounded-circle flex-grow-0 mr-2 shadow"
                                        v-bind:src="'../' + img1">
                                    <form enctype="multipart/form-data" action="../api/franquiciaS2img1.php" method="POST">
                                    <p>Tamaño (140x150)</p>
                                        <div class="divFile">
                                            <p class="filetext">Seleccionar Imagen</p>
                                            <input id="fileImg1" name="nfileImg" class="btnenviar" type="file">
                                            <input type="hidden" name="img1" id="img1" value="1">
                                            <input type="hidden" name="img1p" id="img1p" v-bind:value="img1">
                                        </div>
                                        <input type="submit" value="Modificar" class="btn btn-info margen sub"></input>
                                    </form>

                                    <label for="inputEmail4">Titulo columna 1</label>
                                    <input type="text" class="form-control" id="inputEmail4" v-model="titulo1es">
                                    <label class="margen" for="inputEmail4">descripcion</label>
                                    <textarea name="mensaje" class="form-control" v-model="texto1es" rows="5"></textarea>
                                </div>
                                <div class="form-group col-md-4">
                                    <img class="margen img-fluid rounded-circle flex-grow-0 mr-2 shadow"
                                        v-bind:src="'../' + img2">
                                    <form enctype="multipart/form-data" action="../api/franquiciaS2img1.php" method="POST">
                                    <p>Tamaño (140x150)</p>
                                        <div class="divFile">
                                            <p class="filetext">Seleccionar Imagen</p>
                                            <input id="fileImg1" name="nfileImg" class="btnenviar" type="file">
                                            <input type="hidden" name="img1" value="2">
                                            <input type="hidden" name="img1p" id="img1p" v-bind:value="img2">
                                        </div>
                                        <input type="submit" value="Modificar" class="btn btn-info margen sub"></input>
                                    </form>
                                    <label for="inputEmail4">Titulo columna 2</label>
                                    <input type="text" class="form-control" id="inputEmail4" v-model="titulo2es" >
                                    <label class="margen" for="inputEmail4">descripcion</label>
                                    <textarea name="mensaje" class="form-control" v-model="texto2es" rows="5"></textarea>
                                </div>
                                <div class="form-group col-md-4">
                                    <img class="margen img-fluid rounded-circle flex-grow-0 mr-2 shadow"
                                        v-bind:src="'../' + img3">
                                        <p>Tamaño (140x150)</p>
                                    <form enctype="multipart/form-data" action="../api/franquiciaS2img1.php" method="POST">
                                        <div class="divFile">
                                            <p class="filetext">Seleccionar Imagen</p>
                                            <input id="fileImg1" name="nfileImg" class="btnenviar" type="file">
                                            <input type="hidden" name="img1" value="3">
                                            <input type="hidden" name="img1p" id="img1p" v-bind:value="img3">
                                        </div>
                                        <input type="submit" value="Modificar" class="btn btn-info margen sub"></input>
                                    </form>
                                    <label for="inputEmail4">Titulo columna 3</label>
                                    <input type="text" class="form-control" id="inputEmail4"  v-model="titulo3es">
                                    <label class="margen" for="inputEmail4">descripcion</label>
                                    <textarea name="mensaje" class="form-control" v-model="texto3es" rows="5"></textarea>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">

                                    <label for="inputEmail4">Titulo columna 1 Ingles</label>
                                    <input type="text" class="form-control" id="inputEmail4" v-model="titulo1en">
                                    <label class="margen" for="inputEmail4">descripcion</label>
                                    <textarea name="mensaje" class="form-control" v-model="texto1en" rows="5"></textarea>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputEmail4">Titulo columna 2 Ingles</label>
                                    <input type="text" class="form-control" id="inputEmail4" v-model="titulo2en" >
                                    <label class="margen" for="inputEmail4">descripcion</label>
                                    <textarea name="mensaje" class="form-control" v-model="texto2en" rows="5"></textarea>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputEmail4">Titulo columna 3 Ingles</label>
                                    <input type="text" class="form-control" id="inputEmail4"  v-model="titulo3en">
                                    <label class="margen" for="inputEmail4">descripcion</label>
                                    <textarea name="mensaje" class="form-control" v-model="texto3en" rows="5"></textarea>
                                </div>
                            </div>
                            <button type="buttom" class="btn btn-primary" @click="guardar2()">Guardar</button>
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
            ides: '',
            tituloen: '',
            textoen: '',
            iden: '',


            img1: '',
            img2: '',
            img3: '',
            img4: '',
            titulo1es: '',
            titulo2es: '',
            titulo3es: '',
            texto1es:'',
            texto2es:'',
            texto3es:'',
            idcol1es: '',
            idcol2es: '',
            idcol3es: '',

            titulo1en: '',
            titulo2en: '',
            titulo3en: '',
            texto1en:'',
            texto2en:'',
            texto3en:'',
            idcol1en: '',
            idcol2en: '',
            idcol3en: ''
        },
        mounted: function() {
         this.cargarDatos()
         this.cargarDatosCol()
        },
        methods: {
            guardar: function() {

                if (this.titulo != '') {
                    //console.log(app.iden)
                    axios.post("../api/franquicias.php?accion=updatedostitulo", {
                        tituloes: this.tituloes,
                        textoes:  this.textoes,
                        ides: this.ides,
                        tituloen: this.tituloen,
                        textoen:  this.textoen,
                        iden: this.iden

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
                axios.post("../api/franquicias.php?accion=dsecciondos")
                    .then(function(response) {
                        //app.imagenes = response.data.datos;
                        app.ides = response.data.datos[0].id;
                        app.iden = response.data.datos[1].id;
                        app.tituloes = response.data.datos[0].titulo;
                        app.tituloen = response.data.datos[1].titulo;
                        app.textoes =  response.data.datos[0].texto;
                        app.textoen =  response.data.datos[1].texto;
                        // app.botones =  response.data.datos[0].boton;
                        // app.botonen =  response.data.datos[1].boton;
                        // app.url =  response.data.datos[0].url;
                       // console.log(response);
                    })
            },
            cargarDatosCol: function() {
                axios.post("../api/franquicias.php?accion=dsecciondoscol")
                    .then(function(response) {
                        //app.imagenes = response.data.datos;
                        app.img1 = response.data.datos[0].img;
                        app.img2 = response.data.datos[1].img;
                        app.img3 = response.data.datos[2].img;
                        app.titulo1es = response.data.datos[0].titulo;
                        app.titulo2es = response.data.datos[1].titulo;
                        app.titulo3es = response.data.datos[2].titulo;
                        app.texto1es  = response.data.datos[0].texto;
                        app.texto2es  = response.data.datos[1].texto;
                        app.texto3es  = response.data.datos[2].texto;
                        app.idcol1es   = response.data.datos[0].id;
                        app.idcol2es   = response.data.datos[1].id;
                        app.idcol3es   = response.data.datos[2].id;


                        app.titulo1en = response.data.datos[3].titulo;
                        app.titulo2en = response.data.datos[4].titulo;
                        app.titulo3en = response.data.datos[5].titulo;
                        app.texto1en  = response.data.datos[3].texto;
                        app.texto2en  = response.data.datos[4].texto;
                        app.texto3en  = response.data.datos[5].texto;
                        app.idcol1en   = response.data.datos[3].id;
                        app.idcol2en   = response.data.datos[4].id;
                        app.idcol3en   = response.data.datos[5].id;
                        // app.iden = response.data.datos[1].id;
                        // app.tituloes = response.data.datos[0].titulo;
                        // app.tituloen = response.data.datos[1].titulo;
                        // app.textoes =  response.data.datos[0].texto;
                        // app.textoen =  response.data.datos[1].texto;
                        // app.botones =  response.data.datos[0].boton;
                        // app.botonen =  response.data.datos[1].boton;
                        // app.url =  response.data.datos[0].url;
                       
                    })
            },
            guardar2: function() {

            if (this.titulo != '') {
                //console.log(app.iden)
                axios.post("../api/franquicias.php?accion=updatedoscol", {
                    titulo1es: this.titulo1es, 
                    titulo2es: this.titulo2es, 
                    titulo3es: this.titulo3es, 
                    texto1es:  this.texto1es,
                    texto2es:  this.texto2es,
                    texto3es:  this.texto3es,
                    idcol1es:  this.idcol1es,
                    idcol2es:  this.idcol2es,
                    idcol3es:  this.idcol3es,


                    titulo1en: this.titulo1en, 
                    titulo2en: this.titulo2en, 
                    titulo3en: this.titulo3en, 
                    texto1en: this.texto1en, 
                    texto2en: this.texto2en, 
                    texto3en: this.texto3en, 
                    idcol1en: this.idcol1en, 
                    idcol2en: this.idcol2en, 
                    idcol3en: this.idcol3en

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


            }
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