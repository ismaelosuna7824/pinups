Vue.component('c_seccioncinco', {
    template: `

    <div class="container mt-5" style="width: 80%">
    
    <div class="carousel-container position-relative row">
      
    <div class="elfsight-app-3f9d8111-b0fc-4ac7-ab07-8206b3fa35a1" ></div>
    
    
    </div> <!-- /row -->
    </div> <!-- /container -->
   `,
    data() {
    return {
        img1: '',
        registros: [],
        imgSelect: ''
    }
    },
    mounted: function(){
        this.cargaMenu()
    },
    methods: {
       async cargaMenu(){
            await axios.post("api/conocenos.php?accion=seccioncuatro", {
                ide:  "es"
            })
            .then(response=>{
                //console.log(response);
                this.img1 = response.data.datos[0].img; 
                response.data.datos.forEach((item) => {
                    if(item.id == 1){
     
                    }else{
                         
                         this.registros.push(item);
                         this.imgSelect = this.registros[0].img;
                        //console.log(item.img);
                    }
                 }); 
            });
          
        },
        cambio(img){
           this.imgSelect = img;
        }
    },
});