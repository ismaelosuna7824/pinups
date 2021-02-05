Vue.component('f_seccioncuatro', {
    template: `

    <div class="row">
    <div class="col-md-4 padre" style="width: 100%; height: 500px; background-color: #212529;">

                    <div class="hijo">
                        <div class="text-uppercase mb-4 title_icon text-center ">
                            <img v-bind:src="img" alt="" width="300">
                            
                        </div>
                        <div class="mb-4 title_icon text-center ">
                            <p style="color:white;">{{titulo}}</p>
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
       img: '',
       titulo: '',
       url: '',
    }
    },
    mounted: function(){
        this.cargaMenu()
    },
    methods: {
       async cargaMenu(){
            await axios.post("api/franquicias.php?accion=seccioncuatro", {
                ide:  localStorage.getItem('idioma')
            })
            .then(response=>{
                this.img = response.data.datos[0].img;
                this.titulo = response.data.datos[0].titulo;
                this.url = response.data.datos[0].url;
                //console.log(response)
            });
          
        }
    },
});