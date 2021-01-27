Vue.component('f_secciondos', {
    template: `
    
    <div>
    <div style="margin-top: 60px; margin-left: 60px; margin-right: 80px;">
                        <div class=" mb-4 text-left ">
                            <span class=" section-title" style="font-size: 25px;">
                            <div v-html="titulo">
                            
                            </div>
                            <br>
                                <div class="text-center"><br>
                                    <p
                                        style="font-size: 15px; font-family: Arial, Helvetica, sans-serif;  text-align: justify;">
                                        {{texto}}
                                    </p>
                                </div>
                            </span>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="row">
                        <div style="width: 100%; height: 300px;" class="col-md-4">
                            <div class="text-center">
                                <img v-bind:src="img1" width="90"><br>
                                <div class="text-center" style="color: white;">
                                    <span style="font-size: 14px;">{{titulo1}}</span><br>
                                    <p style="font-size: 14px; text-align: justify;">{{texto1}}</p>
                                </div>
                            </div>
                        </div>
                        <div style="width: 100%; height: 300px;" class="col-md-4">
                            <div class="text-center">
                                <img v-bind:src="img2" width="90">
                            </div>
                            <div class="text-center" style="color: white;">
                                <span style="font-size: 14px;">{{titulo2}}</span><br>
                                <p style="font-size: 14px; text-align: justify;">{{texto2}}</p>
                            </div>
                        </div>
                        <div style="width: 100%; height: 300px;" class="col-md-4">
                            <div class="text-center">
                                <img v-bind:src="img3" width="90">
                            </div>
                            <div class="text-center" style="color: white;">
                                <span style="font-size: 14px;">{{titulo3}}</span><br>
                                <p style="font-size: 14px; text-align: justify;">{{texto3}}</p>
                            </div>
                        </div>
                    </div>
     </div>         
    </div>      
   `,
    data() {
    return {
       titulo: '',
       texto: '',
       titulo1: '',
       img1: '',
       texto1: '',
       titulo2: '',
       img2: '',
       texto2: '',
       titulo3: '',
       img3: '',
       texto3: '',
    }
    },
    mounted: function(){
        this.cargaMenu()
        this.cargaCol()
    },
    methods: {
       async cargaMenu(){
            await axios.post("api/franquicias.php?accion=secciodostitulo", {
                ide:  "es"
            })
            .then(response=>{
                this.titulo = response.data.datos[0].titulo;
                this.texto = response.data.datos[0].texto;
                // this.boton = response.data.datos[0].boton;
                // this.url = response.data.datos[0].url;
                //console.log(response)
            });
          
        },
        async cargaCol(){
            await axios.post("api/franquicias.php?accion=secciodoscol", {
                ide:  "es"
            })
            .then(response=>{
                this.titulo1 = response.data.datos[0].titulo;
                this.texto1 = response.data.datos[0].texto;
                this.img1 = response.data.datos[0].img;
                this.titulo2 = response.data.datos[1].titulo;
                this.texto2 = response.data.datos[1].texto;
                this.img2 = response.data.datos[1].img;
                this.titulo3 = response.data.datos[2].titulo;
                this.texto3 = response.data.datos[2].texto;
                this.img3 = response.data.datos[2].img;
                // this.url = response.data.datos[0].url;
                //console.log(response)
            });
          
        }
    },
});