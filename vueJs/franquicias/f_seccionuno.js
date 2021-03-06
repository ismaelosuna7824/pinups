Vue.component('f_seccionuno', {
    template: `
    <div class="row">
    <div class="col-md-4 padre" style="width: 100%; height: 500px; background-color: #212529;">

                    <div class="hijo">
                        <div class="text-uppercase mb-4 title_icon text-center ">
                            <img v-bind:src="titulo" alt="" width="300">
                        </div>
                        <div class="mb-4 title_icon text-center ">
                            <p style="color:white;" v-html="texto"></p>
                        </div>

                    </div>
                </div>
                <div class="col-md-8"
                    style="width: 100%; height: 500px; background-color: blue; padding-left: 0px; padding-right: 0px;">

                    <div v-html="url">
                       
                    </div>

                </div>
    </div>
       
   `,
    data() {
    return {
       titulo: '',
       texto: '',
       boton: '',
       url: ''
    }
    },
    mounted: function(){
        this.cargaMenu()
    },
    methods: {
       async cargaMenu(){
            await axios.post("api/franquicias.php?accion=seccionuno", {
                ide:  localStorage.getItem('idioma')
            })
            .then(response=>{
                this.titulo = response.data.datos[0].titulo;
                this.texto = response.data.datos[0].texto;
                this.boton = response.data.datos[0].boton;
                this.url = response.data.datos[0].url;
                //console.log(response)
            });
          
        }
    },
});