Vue.component('seccioncuatro', {
    template: `
    <div>
		<div>
			<a v-bind:href="url2" target="_blank"><img  v-bind:src="img" width="100%" height="100%" alt="" /></a>

		</div>
	</div>
   `,
    data() {
    return {
        img: '',
        url: '',
        url2: ''
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
                this.img = response.data.datos[1].image;
                this.url2 = response.data.datos[1].url;
                //console.log(response)
            });
          
        }
    },
});