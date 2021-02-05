Vue.component('t_secciondos', {
    template: `
    <div class="galeriaBackground">
        <div>
      
            <div class="containerS">
            <div class="hero" style="width: 100%;">
            <div class="carousel slide" id="carousel" data-ride="carousel" data-interval="5000" data-keyboard="false"
                data-pause="false">
                <div class="carousel-inner">

                    <div v-for="(item, index) in registros" :key="item.id" :class="[ index == 0 ? 'carousel-item active' : 'carousel-item' ]">
                        
                        <picture>

                            <img class="w-100" v-bind:src="item.img" alt="">
                        </picture>
                    </div>
                </div><a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev"><span
                        class="carousel-control-prev-icon" aria-hidden="true"></span><span
                        class="sr-only">Anterior</span></a><a class="carousel-control-next" href="#carousel"
                    role="button" data-slide="next"><span class="carousel-control-next-icon"
                        aria-hidden="true"></span><span class="sr-only">Siguiente</span></a>
            </div>
        </div>
            </div>
            <ul class="menuS">
                
                <center>
                <div class="scrollmenu" style="width: 60%; height: auto;" id="style-1">
                    <li v-for="(item, index) in registros" >
                        <a id="p1" @click="cambio(item.img)">
                        <img class="previews" v-bind:src="item.img" style="width: 100px; height:70px;"/></a>
                    </li>
                </div>
                </center>

               
            </ul>
        </div>
        <br>
    </div>
   `,
    data() {
    return {

        registros: [],
        imgSelect: ''
    }
    },
    mounted: function(){
        this.cargaMenu()
    },
    methods: {
       async cargaMenu(){
            await axios.post("api/tienda.php?accion=secciondos", {
                ide:  "es"
            })
            .then(response=>{
                
                response.data.datos.forEach((item) => {
                    
                         
                         this.registros.push(item);
                         this.imgSelect = this.registros[0].img;
                        //console.log(item.img);
                    
                 }); 
            });
          
        },
        cambio(img){
           this.imgSelect = img;
        }
    },
});