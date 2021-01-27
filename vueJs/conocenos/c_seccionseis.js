Vue.component('c_seccionseis', {
    template: `
    <div> 
    <img v-bind:src="img1" style="width: 100%;"/>
    </div>

   `,
    data() {
    return {
        img1: '',
        registros: [],
        imgSelect: ''
    }
    },
    mounted: function(){
        this.cargaMenu()
    },
    methods: {
       async cargaMenu(){
            await axios.post("api/conocenos.php?accion=seccionseis", {
                ide:  "es"
            })
            .then(response=>{
                console.log(response);
                this.img1 = response.data.datos[0].img; 
               
            });
          
        }
    },
});