Vue.component('secciontres', {
    template: `
    <div class="row" style="margin-left: 0px; margin-right: 0px;">
		<div class="col-12 video-container" v-bind:style="{ backgroundImage: 'url(' + img + ')' }">
        <center>
        <div v-html="url" class="videos"></div>
        </center>
		</div>
	</div>
   `,
    data() {
    return {
        img: '',
        url: '',
    }
    },
    mounted: function(){
        this.cargaMenu()
    },
    methods: {
       async cargaMenu(){
            await axios.post("api/inicio.php?accion=secciontres", {
                ide:  "es"
            })
            .then(response=>{
                this.url = response.data.datos[0].url;
                this.img = response.data.datos[0].image;
                //console.log(response)
            });
          
        }
    },
});