Vue.component('seccioncinco', {
    template: `
        <div class="row my-4">
            <div class="col-12 col-md-4 text-center card-info"><img class="img-fluid flex-grow-0 mb-2 conocenos-img" v-bind:src="img1">
                <div class="h4 conocenos-title">{{titulo1}}</div>
                <p class="conocenos-p" v-html="texto11"></p><a
                    class="btn btn-link"
                    href="https://www.google.com/maps/place/PINUPS+FUN+N+GRILL/@23.2423425,-106.4543712,17z/data=!3m1!4b1!4m5!3m4!1s0x869f54a32ba5dcf3:0x32273f7b960b4a21!8m2!3d23.2423425!4d-106.4521825"
                    target="_blank">{{texto21}}</a>
            </div>
            <div class="col-12 col-md-4 text-center card-info"><img class="img-fluid flex-grow-0 mb-2 conocenos-img" v-bind:src="img2">
                <div class="h4 conocenos-title">{{titulo2}}</div>
                <p class="conocenos-p">{{texto12}}</p><a class="btn btn-link btn-lg" href="tel:669 2506360">{{texto22}}</a>
            </div>
            <div class="col-12 col-md-4 text-center card-info"><img class="img-fluid flex-grow-0 mb-2 conocenos-img" v-bind:src="img3">
                <div class="h4 conocenos-title">{{titulo3}}</div>
                <p class="conocenos-p" v-html="texto13"></p>
                <p class="conocenos-p" v-html="texto23"></p>
            </div>
        </div>
   `,
    data() {
    return {
        img1: '',
        img2: '',
        img3: '',
        titulo1: '',
        titulo2: '',
        titulo3: '',
        texto11: '',
        texto12: '',
        texto13: '',
        texto21: '',
        texto22: '',
        texto23: ''
    }
    },
    mounted: function(){
        this.cargaMenu()
        this.cargaImg()
    },
    methods: {
       async cargaMenu(){
            await axios.post("api/inicio.php?accion=seccioncinco", {
                ide: localStorage.getItem('idioma')
            })
            .then(response=>{
                this.titulo1 = response.data.datos[0].titulo;
                this.titulo2 = response.data.datos[1].titulo;
                this.titulo3 = response.data.datos[2].titulo;
                this.texto11  = response.data.datos[0].texto1;
                this.texto12  = response.data.datos[1].texto1;
                this.texto13  = response.data.datos[2].texto1;
                this.texto21  = response.data.datos[0].texto2;
                this.texto22  = response.data.datos[1].texto2;
                this.texto23  = response.data.datos[2].texto2;
                // this.img1 = response.data.datos[0].img;
                // this.img2 = response.data.datos[1].img;
                // this.img3 = response.data.datos[2].img;
                
                //console.log(response);
                //console.log(response)
            });
          
        },
        async cargaImg(){
            await axios.post("api/inicio.php?accion=seccioncinco", {
                ide: 'en'
            })
            .then(response=>{
                this.img1 = response.data.datos[0].img;
                this.img2 = response.data.datos[1].img;
                this.img3 = response.data.datos[2].img;
                
                //console.log(response);
                //console.log(response)
            });
          
        }
    },
});