Vue.component('c_seccionuno', {
    template: `
        <div class="container bloque">
            <div class="row align-items-center">
                <div class="col-12 col-md-7 py-4">
                    <img class="img-fluid mt-md-n3 calidad" v-bind:src="img1">
                    <div v-html="texto">

                    </div>
                    
                    <div>
                        
                        <p class="gracias" v-html="agradecimiento"></p>
                    </div>

                </div>
                <div class="col-12 col-md"><img class="img-fluid mt-md-n3 fresh" v-bind:src="img2">
                </div>
            </div>
        </div>
   `,
    data() {
    return {
        img1: '',
        texto: '',
        img2: '',
        agradecimiento: ''
    }
    },
    mounted: function(){
        this.cargaMenu()
    },
    methods: {
       async cargaMenu(){
            await axios.post("api/conocenos.php?accion=seccionuno", {
                ide:  "es"
            })
            .then(response=>{
                //console.log(response);
               this.img1 = response.data.datos[0].img1; 
               this.texto = response.data.datos[0].texto;
               this.img2 = response.data.datos[0].img2;
               this.agradecimiento = response.data.datos[0].agradecimiento;
                //console.log(response);
                //console.log(response)
            });
          
        }
    },
});