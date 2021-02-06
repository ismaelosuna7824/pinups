Vue.component('t_secciondos', {
    template: `
    <div class="container mt-1" style="width: 100%">
    <div class="carousel-container position-relative row" style="width: 100%">
      
    <!-- Sorry! Lightbox doesn't work - yet. -->
      
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
      <div class="carousel-inner">
        <div   v-for="(item, index) in registros" :key="item.id" :class="[ index == 0 ? 'carousel-item active' : 'carousel-item' ]"  :data-slide-number="index" >
          <img v-bind:src="item.item.img" class="d-block w-100"  alt="..." data-remote="https://source.unsplash.com/Pn6iimgM-wo/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
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
    
    </div> <!-- /container -->
    
   `,
    data() {
    return {

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
            await axios.post("api/tienda.php?accion=secciondos", {
                ide:  "es"
            })
            .then(response=>{
                
                response.data.datos.forEach((item, i) => {
                    
                         
                    this.registros.push({item, n: i });
                         //this.imgSelect = this.registros[0].img;
                        //console.log(item.img);
                    
                 }); 
            });
            this.n = listToMatrix(this.registros, 3)
            console.log(this.n)
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