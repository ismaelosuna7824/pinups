Vue.component('secciondos', {
    template: `
    <div class="container my-4 my-lg-6 no-margin-bottom">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-3">
            <div class="d-flex align-items-center menu-items"><img
                    class="img-fluid rounded-circle flex-grow-0 mr-2 shadow" v-bind:src="iuno">
                <p class="small mb-0 title1">{{tuno}}</p>
                <p class="p">{{puno}}</p>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 mt-3 mt-lg-0">
            <div class="d-flex align-items-center menu-items"><img
                    class="img-fluid rounded-circle flex-grow-0 mr-2 shadow" v-bind:src="idos">
                <p class="small mb-0 title1">{{tdos}}</p>
                <p class="p">{{pdos}}</p>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 mt-3 mt-lg-0">
            <div class="d-flex align-items-center menu-items"><img
                    class="img-fluid rounded-circle flex-grow-0 mr-2 shadow" v-bind:src="itres">
                <p class="small mb-0 title1">{{ttres}}</p>
                <p class="p">{{ptres}}</p>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 mt-3 mt-lg-0">
            <div class="d-flex align-items-center menu-items"><img
                    class="img-fluid rounded-circle flex-grow-0 mr-2 shadow" v-bind:src="icuatro">
                <p class="small mb-0 title1">{{tcuatro}}</p>
                <p class="p">{{pcuatro}}</p>
            </div>
        </div>
    </div>
    
</div>`,
    data() {
    return {
        tuno: '',
        tdos: '',
        ttres: '',
        tcuatro: '',
        puno: '',
        pdos: '',
        ptres: '',
        pcuatro: '',
        iuno: '',
        idos: '',
        itres: '',
        icuatro: ''
    }
    },
    mounted: function(){
        this.cargaMenu()
        this.cargaImg()
    },
    methods: {
       async cargaMenu(){
            await axios.post("api/inicio.php?accion=secciondos", {
                ide:  localStorage.getItem('idioma')
            })
            .then(response=>{
                this.tuno = response.data.datos[0].titulo;
                this.tdos = response.data.datos[1].titulo;
                this.ttres = response.data.datos[2].titulo;
                this.tcuatro = response.data.datos[3].titulo;
                this.puno = response.data.datos[0].subtitulo;
                this.pdos = response.data.datos[1].subtitulo;
                this.ptres = response.data.datos[2].subtitulo;
                this.pcuatro = response.data.datos[3].subtitulo;
               
            });
          
        },
        async cargaImg(){
            await axios.post("api/inicio.php?accion=secciondos", {
                ide:  "en"
            })
            .then(response=>{
                this.iuno = response.data.datos[0].img;
                this.idos = response.data.datos[1].img;
                this.itres = response.data.datos[2].img;
                this.icuatro = response.data.datos[3].img;
            });
          
        }
    },
});