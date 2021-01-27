Vue.component('c_secciontres', {
    template: `
        <div class="premiosBackground">
            <div class="container">
                <div class="row">
                    <img class=" img-fluid premiosImg" v-bind:src="img1" >
                </div>
                <div class="row margenpremios">
                    <div class="col-12 col-lg-4 col-md-4" v-for="(item, index) in registros">
                        <img class="certificados" v-bind:src="item.img">
                    </div>
                </div>
                <br>
            </div>
        </div>
   `,
    data() {
    return {
        img1: '',
        registros: []
    }
    },
    mounted: function(){
        this.cargaMenu()
    },
    methods: {
       async cargaMenu(){
            await axios.post("api/conocenos.php?accion=secciontres", {
                ide:  "es"
            })
            .then(response=>{
            //console.log(response);
            this.img1 = response.data.datos[0].img;
            response.data.datos.forEach((item) => {
               if(item.id == 1){

               }else{
                    this.registros.push(item);
                   //console.log(this.registros);
               }
            }); 
            //    this.texto = response.data.datos[0].texto;
            //    this.img2 = response.data.datos[0].img2;
            //    this.agradecimiento = response.data.datos[0].agradecimiento;
                //console.log(response);
                //console.log(response)
            });
          
        }
    },
});