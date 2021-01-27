Vue.component('f_seccioncinco', {
    template: `
    
    <div class="row">
                <div class="col-md-6" style="width: 100%; height: auto; background-color: white;">

                    <div class="hijo">
                        <div class="text-uppercase mb-4 title_icon text-left">

                            <span class=" section-title" style="font-size: 25px; color:  #212529;">{{titulo}}</span>

                        </div>
                    </div>
                    <div>
                        <p style="font-family:Arial, Helvetica, sans-serif" v-html="texto">
                            
                        </p>
                    </div>
                    <div>
                        <div class="text-uppercase mb-4 title_icon text-left"
                            style="border-bottom: solid 2px; color: #d7263d;">

                            <span class=" section-title" style="font-size: 25px; color:  #212529;" v-html="agradecimiento"></span>

                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-md-6 padre" style="width: 100%; height: auto; background-color: white;">

                    <div class="hijo">
                        <div class="text-uppercase mb-4 title_icon text-center">
                            <img v-bind:src="img" alt="" width="350">
                        </div>


                    </div>

                </div>
            </div>
       
   `,
    data() {
    return {
       titulo: '',
       texto: '',
       img: '',
       agradecimiento: ''
    }
    },
    mounted: function(){
        this.cargaMenu()
    },
    methods: {
       async cargaMenu(){
            await axios.post("api/franquicias.php?accion=seccioncinco", {
                ide:  "es"
            })
            .then(response=>{
                this.titulo = response.data.datos[0].titulo;
                this.texto = response.data.datos[0].texto;
                this.img = response.data.datos[0].img;
                this.agradecimiento = response.data.datos[0].agradecimiento;
                //console.log(response)
            });
          
        }
    },
});


