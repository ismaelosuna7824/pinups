Vue.component('c_seccioncuatro', {
    template: `
    <div class="galeriaBackground">
        <div>
        <div class="row">
                    <img class=" img-fluid tituloGaleria" v-bind:src="img1">
        </div>
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
                        <img class="previews" v-bind:src="item.img" style="width: 100px; height=300px;"/></a>
                    </li>
                </div>
                </center>

               
            </ul>
        </div>
        <div class="row">
            <img class="img-fluid tituloVideos" v-bind:src="img2">
        </div>
    </div>
   `,
    data() {
    return {
        img1: '',
        img2: '',
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
                console.log(response);
                var cat = localStorage.getItem('idioma');
                if(cat == "es"){
                    this.img1 = response.data.datos[0].img;
                    this.img2 = response.data.datos[2].img; 
                }else{
                    this.img1 = response.data.datos[1].img;
                    this.img2 = response.data.datos[3].img; 
                }
                
                response.data.datos.forEach((item) => {
                    if(item.id == 1 || item.id == 2 || item.id == 3 || item.id == 4){
     
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