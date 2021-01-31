Vue.component('pie', {
    template: `
    
    <div class="footer bg-dark text-white py-4 py-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md col-lg-4 col-xl-5 order-md-last order-lg-first mt-md-3 mt-lg-0">
                    <ul class="list-unstyled columns">
                        <li><a href="index.html">{{home}}</a></li>
                        <li><a href="conocenos.html">{{about}}</a></li>
                        <li><a href="menu.html">{{menu}}</a></li>
                        <li><a href="{{music}}">Música en vivo</a></li>
                        <li><a href="tienda.html">{{store}}</a></li>
                        <li><a href="franquicias.html">{{pinups}}</a></li>
                        <li><a href="privacy.html">{{privacy}}</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-7 col-lg-5 col-xl-4 mt-3 mt-md-0">
                    <div class="d-flex align-items-baseline h6 font-weight-normal">
                        <svg class="icon mr-2">
                            <use href="#icon-pin" xlink:href="#icon-pin"></use>
                        </svg><a href="https://g.page/Pinupsbargrill?share" target="_blank">Av. Playa Gaviotas 404,
                            Zona
                            Dorada</a>
                    </div>
                    <div class="d-flex align-items-center h6 font-weight-normal">
                        <svg class="icon mr-2">
                            <use href="#icon-phone" xlink:href="#icon-phone"></use>
                        </svg><a href="tel:6692506360">669 2506360</a>
                    </div>
                </div>
                <div class="col-12 col-md-5 col-lg-3 text-md-right mt-3 mt-md-0">
                    <ul class="nav nav-social justify-content-md-end mb-3">
                        <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/Pinupsfungrill/"
                                target="_blank">
                                <svg class="icon">
                                    <use href="#icon-facebook" xlink:href="#icon-facebook"></use>
                                </svg></a></li>
                        <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/pinupsfungrill/"
                                target="_blank">
                                <svg class="icon">
                                    <use href="#icon-instagram" xlink:href="#icon-instagram"></use>
                                </svg></a></li>
                        <li class="nav-item"><a class="nav-link"
                                href="https://www.tripadvisor.com.mx/Restaurant_Review-g150792-d13559561-Reviews-Pinups_Bar_N_Grill-Mazatlan_Pacific_Coast.html"
                                target="_blank">
                                <svg class="icon tripadvisor">
                                    <use href="#icon-tripadvisor" xlink:href="#icon-tripadvisor"></use>
                                </svg></a></li>
                    </ul>
                    <p class="small mb-1">&copy; 2018
                        <script type="a2d9097f9f140b4865ee6feb-text/javascript">
                        new Date().getFullYear() > 2018 && document.write("-" + new Date().getFullYear());
                        </script>
                        , Pinups Fun & Grill.
                    </p>
                    <p class="small"></p>
                </div>
            </div>
        </div>
    </div>
   `,
   data() {
    return {
        home: '',
        menu: '',
        about: '',
        music: '',
		store: '',
        pinups: '',
        privacy:''
    }
    },
    mounted: function(){
        this.cargaMenu()
    },
    methods: {
       async cargaMenu(){
            await axios.post("api/menu.php?accion=menu", {
                ide:  "es"
            })
            .then(response=>{
                this.home =  response.data.datos[0].nombre;
                this.menu =  response.data.datos[1].nombre;
                this.about = response.data.datos[2].nombre;
                this.music = response.data.datos[3].nombre;
				this.store = response.data.datos[4].nombre;
                this.pinups = response.data.datos[5].nombre;
                this.privacy = response.data.datos[6].nombre;
                //console.log(response)
            });
          
        }
    },
});