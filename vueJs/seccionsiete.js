Vue.component('seccionsiete', {
    template: `
    
    <div class="col-12">
        <div class="card-columns">
            <div class="card card__recomendacion" v-for="data in registros">
            <img class="card-img" v-bind:src="data.img">
                <div class="card-body">
                    <p class="card-text">{{data.texto}}</p>
                </div>
                <div class="card-footer">
                    <div class="d-block" v-html="data.nombre" ></div><a
                        class="btn btn-sm btn-link pl-0"
                        v-bind:href="data.url"
                        target="_blank">Ver link</a>
                </div>
            </div>

        </div>
    </div>
       
   `,
    data() {
    return {
        registros: []
    }
    },
    mounted: function(){
        this.cargaMenu()
    },
    methods: {
       async cargaMenu(){
            await axios.post("api/inicio.php?accion=seccionsiete", {
                ide:  "es"
            })
            .then(response=>{
                this.registros = response.data.datos;
               //console.log(response); 
                //console.log(response)
            });
          
        }
    },
});