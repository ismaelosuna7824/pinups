Vue.component('c_secciondos', {
    template: `
    <div class="comodidadesBackground" v-bind:style="{ backgroundImage: 'url(' + imgback + ')' }">
    <div class="container">
            <div class="row">
                <img class=" img-fluid comodidadesimg" v-bind:src="imgT">
            </div>
            <div class="row">
                <div class="col-12 col-lg-4 col-md-4">
                    <img class="opcionesimg" v-bind:src="img1">
                    <div class="interlineado">
                        <p class="titulosComodidades text-center">{{titulo1}}</p>
                        <p class="textosComodidades text-center bordederecho" v-html="texto1">
                       
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-4">
                    <img class="opcionesimg" v-bind:src="img2">
                    <p class="titulosComodidades text-center">{{titulo2}}</p>
                    <div>
                        <p class="textosComodidades text-center" v-html="texto2">
                        </p>
                        <img class="tarjetaimg" v-bind:src="img3">
                        <p class="titulosComodidades text-center">{{titulo3}}</p>
                        <p class="textosComodidades text-center" v-html="texto3">
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-4">
                    <img class="familiaimg" v-bind:src="img4">
                    <div class="interlineado">
                        <div>
                        <p class="titulosComodidades text-center">{{titulo4}}</p>
                        <p class="textosComodidades text-center bordeizq" v-html="texto4">
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   `,
    data() {
    return {
        img1: '',
        titulo1: '',
        texto1: '',
        img2: '',
        titulo2: '',
        texto2: '',
        img3: '',
        titulo3: '',
        texto3: '',
        img4: '',
        titulo4: '',
        texto4: '',
        imgT: '',
        imgback:''
    }
    },
    mounted: function(){
        this.cargaMenu()
        this.cargaImg()
    },
    methods: {
       async cargaMenu(){
            await axios.post("api/conocenos.php?accion=secciondos", {
                ide:  localStorage.getItem('idioma')
            })
            .then(response=>{
               //console.log(response);
               this.img1 = response.data.datos[0].img;
               this.titulo1 = response.data.datos[0].titulo;
               this.texto1 = response.data.datos[0].texto;
               this.img2 = response.data.datos[1].img;
               this.titulo2 = response.data.datos[1].titulo;
               this.texto2 = response.data.datos[1].texto;
               this.img3 = response.data.datos[2].img;
               this.titulo3 = response.data.datos[2].titulo;
               this.texto3 = response.data.datos[2].texto;
               this.img4 = response.data.datos[3].img;
               this.titulo4 = response.data.datos[3].titulo;
               this.texto4 = response.data.datos[3].texto;
               
                //console.log(response);
                //console.log(response)
            });
          
        },
        async cargaImg(){
            await axios.post("api/conocenos.php?accion=secciondosimg", {
                ide:  "es"
            })
            .then(response=>{
            //console.log(response);
            const idioma = localStorage.getItem('idioma');
            if(idioma == 'es' ){
                this.imgT = response.data.datos[0].img1;
            }else{
                this.imgT = response.data.datos[1].img1;
            }
            
            this.imgback = response.data.datos[0].img2;
            //    this.img1 = response.data.datos[0].img;
            //    this.titulo1 = response.data.datos[0].titulo;
            //    this.texto1 = response.data.datos[0].texto;
            //    this.img2 = response.data.datos[1].img;
            //    this.titulo2 = response.data.datos[1].titulo;
            //    this.texto2 = response.data.datos[1].texto;
            //    this.img3 = response.data.datos[2].img;
            //    this.titulo3 = response.data.datos[2].titulo;
            //    this.texto3 = response.data.datos[2].texto;
            //    this.img4 = response.data.datos[3].img;
            //    this.titulo4 = response.data.datos[3].titulo;
            //    this.texto4 = response.data.datos[3].texto;
               
                //console.log(response);
                //console.log(response)
            });
          
        }
    },
});