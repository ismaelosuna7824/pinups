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
                <div class="container-fluid" >
                    <!-- Page Heading -->
                    <div class="card shadow mb-4">
                        <div style="padding-left: 50px; padding-right: 50px; padding-top: 60px; padding-bottom: 50px;">
                            
                           
                                <div class="form-row">
                                  <div class="form-group col-md-2">
                                    <label for="inputEmail4">Horario</label>
                                    <input type="text" class="form-control" id="inputEmail4" v-model="horario" >
                                  </div>
                                  <div class="form-group col-md-2">
                                    <label for="inputPassword4">Lunes</label>
                                    <input type="text" class="form-control" id="inputPassword4"  v-model="lunes">
                                  </div>
                                  <div class="form-group col-md-2" >
                                    <label for="inputAddress">Martes</label>
                                    <input type="text" class="form-control" id="inputAddress" v-model="martes" >
                                  </div>
                                  <div class="form-group col-md-2">
                                      <label for="inputAddress">Miércoles</label>
                                      <input type="text" class="form-control" id="inputAddress" v-model="miercoles" >
                                  </div>
                                  <div class="form-group col-md-2">
                                      <label for="inputAddress">Jueves</label>
                                      <input type="text" class="form-control" id="inputAddress" v-model="jueves" >
                                  </div>
                                  <div class="form-group col-md-2">
                                      <label for="inputAddress">Viernes</label>
                                      <input type="text" class="form-control" id="inputAddress" v-model="viernes" >
                                  </div>
                                  <div class="form-group col-md-2">
                                      <label for="inputAddress">Sábado</label>
                                      <input type="text" class="form-control" id="inputAddress" v-model="sabado" >
                                  </div>
                                  <div class="form-group col-md-2">
                                      <label for="inputAddress">Domingo</label>
                                      <input type="text" class="form-control" id="inputAddress" v-model="domingo" >
                                  </div>
                                </div>
                               
                                <button type="buttom" class="btn btn-primary"  @click="accion()">Guardar</button>
                             
                        </div>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Calendario</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Horario</th>
                                            <th>Lunes</th>
                                            <th>Martes</th>
                                            <th>Miércoles</th>
                                            <th>Jueves</th>
                                            <th>Viernes</th>
                                            <th>Sábado</th>
                                            <th>Domingo</th>
                                            <th>Actualizar</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <tr v-for="dts in imagenes">
                                            <td>{{dts.horarios}}</td>
                                            <td>{{dts.lunes}}</td>
                                            <td>{{dts.martes}}</td>
                                            <td>{{dts.miercoles}}</td>
                                            <td>{{dts.jueves}}</td>
                                            <td>{{dts.viernes}}</td>
                                            <td>{{dts.sabado}}</td>
                                            <td>{{dts.domingo}}</td>
                                            <td> <button class="btn btn-warning mr-1" data-trigger="hover" data-toggle="tooltip" data-placement="top" data-title="Eliminar" @click="pasar( dts.id,  dts.horarios, dts.lunes, dts.martes, dts.miercoles, dts.jueves, dts.viernes, dts.sabado, dts.domingo)">
                                                Actualizar
                                            </button></td>
                                            <td> <button class="btn btn-danger mr-1" data-trigger="hover" data-toggle="tooltip" data-placement="top" data-title="Eliminar" @click="eliminar(dts.id)">
                                                Eliminar
                                            </button></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
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
               nombre: 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample91.jpg',
               horario: '',
               lunes: '',
               martes: '',
               miercoles: '',
               jueves: '',
               viernes: '',
               sabado: '',
               domingo: '',
               imagenes: [],
               id: ''
           },
           mounted: function(){
            this.cargarImagenes()
           },
           methods: {
            guardar:function(){
            
                if(this.titulo != ''){
                axios.post("../api/eventos.php?accion=insertarCalendario",
                {
                    horario : this.horario, 
                    lunes : this.lunes, 
                    martes : this.martes, 
                    miercoles : this.miercoles,
                    jueves : this.jueves, 
                    viernes : this.viernes, 
                    sabado : this.sabado, 
                    domingo : this.domingo, 

                }).then(function(response){
                    //console.log(response.data);
                    if(response.status == '200'){
                     
                        Swal.fire({
                       
                        type: 'success',
                        title: 'Horario Registrado Correctamente',
                        showConfirmButton: false,
                        timer: 3000
                        })
                    }
                    
                    setTimeout(function(){
                            location.reload()
                        },3000,"JavaScript");
                })
            }else
            {
                Swal.fire({
                       
                        type: 'info',
                        title: 'Faltan Campos por llenar',
                        showConfirmButton: false,
                        timer: 3000
                        })
                if(this.nombre == ''){
                    document.getElementById("ciudad").style.borderColor = "red";
                } 

            }
            
                
            },
            cargarImagenes:function(){
                axios.get("../api/eventos.php?accion=calendario")
                .then(function(response){  
                  app.imagenes = response.data.datos;
                  
                //console.log(response);
                  })
                },
                eliminar:function(id){
                Swal.fire({
                title: '¿Desea Eliminar Este Evento?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Eliminar!'
                }).then(function(result) {
                    if (result.value) {
                        axios.post("../api/eventos.php?accion=eliminarCalendario", {
                            ide: id
                        }).then(function(response){
                            //console.log(response.data);
                            if(response.status == '200'){
                            
                                Swal.fire({
                            
                                type: 'success',
                                title: 'Almacen Eliminado',
                                showConfirmButton: false,
                                timer: 3000
                                })
                            }
                            
                            setTimeout(function(){
                                    location.reload()
                                },3000,"JavaScript");
                        })
                    }
                })
                },
                pasar: function(
                    id,
                    horarios,
                    lunes,
                    martes,
                    miercoles,
                    jueves,
                    viernes,
                    sabado,
                    domingo){
                         this.id = id;
                         this.horario =   horarios;  
                         this.lunes =     lunes;     
                         this.martes =    martes;    
                         this.miercoles = miercoles; 
                         this.jueves =    jueves;    
                         this.viernes =   viernes;   
                         this.sabado =    sabado;    
                         this.domingo =   domingo;    
                },
                actualizar: function(){
                    axios.post("../api/eventos.php?accion=actualizar",
                {
                    id: this.id,
                    horario : this.horario, 
                    lunes : this.lunes, 
                    martes : this.martes, 
                    miercoles : this.miercoles,
                    jueves : this.jueves, 
                    viernes : this.viernes, 
                    sabado : this.sabado, 
                    domingo : this.domingo, 

                }).then(function(response){
                    //console.log(response.data);
                    if(response.status == '200'){
                     
                        Swal.fire({
                       
                        type: 'success',
                        title: 'Horario Actualizado Correctamente',
                        showConfirmButton: false,
                        timer: 3000
                        })
                    }
                    
                    setTimeout(function(){
                            location.reload()
                        },3000,"JavaScript");
                })
                },
                accion: function(){
                    if(this.id == ""){
                        this.guardar();
                        //console.log(this.id);
                    }else{
                        this.actualizar();
                    }
                }
           }
        })
   </script>
</body>

</html>