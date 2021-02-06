Vue.component('c_seccioncuatro', {
    template: `
    <div class="container mt-5" style="width: 80%">
    <div class="row">
                    <img class=" img-fluid tituloGaleria" v-bind:src="img1" width="100%">
        </div>
    <div class="carousel-container position-relative row">
      
    <!-- Sorry! Lightbox doesn't work - yet. -->
      
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
      <div class="carousel-inner">
        <div   v-for="(item, index) in registros" :key="item.id" :class="[ index == 0 ? 'carousel-item active' : 'carousel-item' ]"  :data-slide-number="index" >
          <img v-bind:src="item.item.img" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/Pn6iimgM-wo/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
        </div>
      </div>
    </div>
    
    <!-- Carousel Navigation -->
    <div id="carousel-thumbs" class="carousel slide" data-ride="carousel" data-interval="false">
      <div class="carousel-inner">
        <div v-for="(item, index) in n" :key="item.id" :class="[ index == 0 ? 'carousel-item active' : 'carousel-item' ]" >
          <div class="row mx-0" >
            <div  v-for="(dts, ind) in n[index]" class="thumb col-4 col-sm-2 px-1 py-2 selected" data-target="#myCarousel" :id="'carousel-selector-' + dts.n " :data-slide-to="dts.n">
              <img v-bind:src="dts.item.img" class="img-fluid" alt="...">
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carousel-thumbs" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-thumbs" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    
    </div> <!-- /row -->
    <div class="row">
                    <img class=" img-fluid tituloGaleria" v-bind:src="img2">
        </div>
    </div> <!-- /container -->
   
   `,
    data() { 
    return {
        img1: '',
        img2: '',
        registros: [],
        imgSelect: '',
        n: []
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
                var cat = localStorage.getItem('idioma');
                if(cat == "es"){
                    this.img1 = response.data.datos[0].img;
                    this.img2 = response.data.datos[2].img; 
                }else{
                    this.img1 = response.data.datos[1].img;
                    this.img2 = response.data.datos[3].img; 
                }
                
                response.data.datos.forEach((item, i) => {
                    if(item.id == 1 || item.id == 2 || item.id == 3 || item.id == 4){
     
                    }else{
                         
                         this.registros.push({item, n: i - 4});
                         //this.imgSelect = this.registros[0].img;
                        //console.log(item.img);
                       
                    }
                 }); 
                //  const newArr = [];
                //  while(this.registros) newArr.push(this.registros.splice(0,3));
                 console.log(this.registros)
                    // var n = [];
                    // var i = 0;
                    // for (l = this.registros.length + 1; (i + 3) < l; i += 3) {
                    //     this.n.push(this.registros.slice(i, i + 3));
                    // }
                   this.n = listToMatrix(this.registros, 3)
            });
          
        },
        cambio(img){
           this.imgSelect = img;
        }
    },
});

function listToMatrix(list, elementsPerSubArray) {
    var matrix = [], i, k;
    for (i = 0, k = -1; i < list.length; i++) {
      if (i % elementsPerSubArray === 0) {
        k++;
        matrix[k] = [];
      }
      matrix[k].push(list[i]);
    }
    return matrix;
}