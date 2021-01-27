Vue.component('seccionseis', {
    template: `
    <div class="container my-lg-5 py-4">
    <div class="row align-items-stretch">
        <div class="col-12 col-lg-6">
            <div>
                <div>
                    <div>
                        <center><a href="#"><img v-bind:src="img1" width="90%"
                                    height="300"></a></center>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 mt-3 mt-lg-0">
            <div>
                <div>
                    <center>
                        <a href="#"><img v-bind:src="img2" width="90%" height="300"></a>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row align-items-stretch">
        <div class="col-12 col-lg-6">
            <div>
                <div>
                    <div>
                        <center><a href="#"><img v-bind:src="img3" width="90%"
                                    height="300"></a></center>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 mt-3 mt-lg-0">
            <div>
                <div>
                    <center>
                        <a href="#"><img v-bind:src="img4" width="90%" height="300"></a>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
   `,
    data() {
    return {
        img1: '',
        img2: '',
        img3: '',
        img4: ''
    }
    },
    mounted: function(){
        this.cargaMenu()
    },
    methods: {
       async cargaMenu(){
            await axios.post("api/inicio.php?accion=seccionseis", {
                ide:  "es"
            })
            .then(response=>{
                this.img1 = response.data.datos[0].img;
                this.img2 = response.data.datos[1].img;
                this.img3 = response.data.datos[2].img;
                this.img4 = response.data.datos[3].img; 
                //console.log(response)
            });
          
        }
    },
});