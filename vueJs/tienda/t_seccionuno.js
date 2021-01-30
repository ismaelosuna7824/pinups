Vue.component('t_seccionuno', {
    template: `
    <div class="py-4 py-lg-5 padding-bottom-5px">
        <div class="hero container">
            <div class="row"><div class="col-12 text-center"></div></div>
        </div>
        <div class="h1 text-uppercase mb-4 title_icon"><span class="mx-md-3 section-title">{{titulo}}</span></div>
        <div class="container my-4">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-lg-8 col-xl-9 text-center">
                    <h2 class="h4 text-uppercase"></h2>
                    <p class="textos">{{texto}}</p>
                </div>
            </div>
        </div>
    </div>
   `,
    data() {
    return {
        titulo: '',
        texto: '',
    }
    },
    mounted: function(){
        this.cargaMenu()
    },
    methods: {
       async cargaMenu(){
            await axios.post("api/tienda.php?accion=seccionuno", {
                ide:  "es"
            })
            .then(response=>{
                this.titulo = response.data.datos[0].titulo;
                this.texto = response.data.datos[0].texto;
                //console.log(response);
            });
          
        },
        cambio(img){
           this.imgSelect = img;
        }
    },
});