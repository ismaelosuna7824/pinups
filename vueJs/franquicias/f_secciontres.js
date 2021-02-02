Vue.component('f_secciontres', {
    template: `
    
    <div>
    
    <div class="text-uppercase mb-4 text-center" style="margin-top: 60px;">
    <span class="section-title" style="font-size: 25px; color:  #212529; ">{{titulo}}</span> <br>
    <p>{{texto}}</p>
    <span style="color:#d7263d; font-size: 2rem">{{telefono}}</span>
    </div>
    <div style="padding: 20px;">
    <form>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">{{name}}*</label>
            <input type="text" class="form-control" id="inputEmail4">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">{{last}}*</label>
            <input type="text" class="form-control" id="inputPassword4">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">{{email}}*</label>
            <input type="text" class="form-control" id="inputEmail4">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">{{phone}}*</label>
            <input type="text" class="form-control" id="inputPassword4">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">{{city}}*</label>
            <input type="text" class="form-control" id="inputEmail4">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">{{state}}*</label>
            <input type="text" class="form-control" id="inputPassword4">
        </div>
    </div>
    <div class="form-group">
        <label for="inputAddress">{{message}}</label>
        <input type="text" class="form-control" id="inputAddress">
    </div>
    



    <button type="submit" class="btn btn-primary">{{boton}}</button>
</form>
</div>
    <br>
</div>

       
   `,
    data() {
    return {
       titulo: '',
       texto: '',
       telefono: '',
       name: '',
       last: '',
       email: '',
       phone: '',
       city: '',
       state: '',
       message: '',
       boton: ''
    }
    },
    mounted: function(){
        this.cargaMenu()
    },
    methods: {
       async cargaMenu(){
            await axios.post("api/franquicias.php?accion=secciontrestitulo", {
                ide:  localStorage.getItem('idioma')
            })
            .then(response=>{
                //console.log(response);
                this.titulo = response.data.datos[0].titulo;
                this.texto = response.data.datos[0].texto;
                this.telefono = response.data.datos[0].telefono;
                this.name = response.data.datos[0].name;
                this.last = response.data.datos[0].lastname;
                this.email = response.data.datos[0].email;
                this.phone = response.data.datos[0].phone;
                this.city = response.data.datos[0].city;
                this.state = response.data.datos[0].state;
                this.message = response.data.datos[0].message;
                this.boton = response.data.datos[0].boton;
            });
          
        }
    },
});

