Vue.component('seccioncuatro', {
    template: `
    <div>
		<div>
			<a href="###"><img  v-bind:src="img" width="100%" height="100%" alt="" /></a>

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
                this.img = response.data.datos[1].image;
                //console.log(response)
            });
          
        }
    },
});