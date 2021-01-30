Vue.component('t_secciondos', {
    template: `
    <div class="galeriaBackground">
        <div>
      
            <div class="containerS">
                <ul class="slider galeria">
                    <li id="slide1">
                        <img v-bind:src="imgSelect" />
                    </li>

                </ul>
                <img class="ima" v-bind:src="imgSelect" />
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