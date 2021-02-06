Vue.component('menu-component', {
    template: `
    <div class="header">
		<div class="navbar navbar-top">
			<div class="container">
				<div class="navbar-text d-flex align-items-center nav-icon-1">
					<svg class="icon mr-1">
						<use href="#icon-pin" xlink:href="#icon-pin"></use>
					</svg><a href="https://g.page/Pinupsbargrill?share" target="_blank">Av. Playa Gaviotas 404, Zona
						Dorada</a>
				</div>
				<div class="navbar-text d-flex align-items-center nav-icon-1">
					<svg class="icon mr-1">
						<use href="#icon-phone" xlink:href="#icon-pin"></use>
					</svg><a v-bind:href="'tel:' + telefono">{{telefono}}</a>
				</div>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a class="nav-link nav-link-franquicias"
							href="franquicias">{{pinups}}</a></li>
				</ul>
				<ul class="nav nav-social">
					<li class="nav-item"><a class="nav-link nav-link-social"
							href="https://www.facebook.com/Pinupsfungrill/" target="_blank">
							<svg class="icon">
								<use href="#icon-facebook" xlink:href="#icon-facebook"></use>
							</svg></a></li>
					<li class="nav-item"><a class="nav-link nav-link-social"
							href="https://www.instagram.com/pinupsfungrill/" target="_blank">
							<svg class="icon">
								<use href="#icon-instagram" xlink:href="#icon-instagram"></use>
							</svg></a></li>
					<li class="nav-item"><a class="nav-link nav-link-social"
							href="https://www.tripadvisor.com.mx/Restaurant_Review-g150792-d13559561-Reviews-Pinups_Fun_N_Grill-Mazatlan_Pacific_Coast.html"
							target="_blank">
							<svg class="icon tripadvisor">
								<use href="#icon-tripadvisor" xlink:href="#icon-tripadvisor"></use>
							</svg></a></li>
					
				</ul>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			<div class="container navbar-desktop"><a class="navbar-brand" href="index"><img class="float-left"
						v-bind:src="logo"></a>
				<ul class="navbar-nav mr-auto">
					<li class="nav-item"><a class="nav-link active" href="index">{{home}}</a></li>
					<li class="nav-item"><a class="nav-link" href="menu">{{menu}}</a></li>
					<li class="nav-item"><a class="nav-link" href="conocenos">{{about}}</a></li>
					<li class="nav-item"><a class="nav-link" href="musica-en-vivo">{{music}}</a></li>
					<li class="nav-item"><a class="nav-link" href="tienda">{{store}}</a></li>
					<li class="nav-item"><a class="nav-link" href="franquicias" style="background-color: black; border-radius: 7px; ">{{pinups}}</a></li>
				</ul>
				<ul class="navbar-nav">
				<div class="dropdown show" >
				<a class="btn btn-secondary dropdown-toggle"  style="background-color: #D7263D ; border:none" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  Idioma
				</a>
			  
				<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
				  <a class="dropdown-item" href="" @click="changeIdioma(1)">Español</a>
				<!--  <a class="dropdown-item" href="" @click="changeIdioma(2)">English</a> -->
				</div>
			  </div>
					
				</ul>
			</div>
			<div class="container navbar-mobile d-lg-none"><a class="navbar-brand" href="index.html"><img
						class="float-left" src="assets/images/logo-pinups-new.png"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMobile"
					aria-controls="navbarMobile" aria-expanded="false" aria-label="Toggle navigation"><span
						class="navbar-toggler-icon"></span></button>
				<div class="collapse navbar-collapse justify-content-center text-center" id="navbarMobile">
					<ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link active" href="index">{{home}}</a></li>
					<li class="nav-item"><a class="nav-link" href="menu">{{menu}}</a></li>
					<li class="nav-item"><a class="nav-link" href="conocenos">{{about}}</a></li>
					<li class="nav-item"><a class="nav-link" href="musica-en-vivo">{{music}}</a></li>
					<li class="nav-item"><a class="nav-link" href="tienda">{{store}}</a></li>
					<li class="nav-item"><a class="nav-link" href="franquicias" style="background-color: black; border-radius: 7px;">{{pinups}}</a></li>
					</ul>
					<ul class="nav nav-social justify-content-center mt-3">
						<li class="nav-item"><a class="nav-link" href="https://www.facebook.com/Pinupsfungrill/"
								target="_blank">
								<svg class="icon">
									<use href="#icon-facebook" xlink:href="#icon-facebook"></use>
								</svg></a></li>
						<li class="nav-item"><a class="nav-link"
								href="https://www.instagram.com/pinupsfungrill/ target=&quot;_blank&quot;">
								<svg class="icon">
									<use href="#icon-instagram" xlink:href="#icon-instagram"></use>
								</svg></a></li>
						<li class="nav-item"><a class="nav-link" href="#" target="_blank">
								<svg class="icon tripadvisor">
									<use href="#icon-tripadvisor" xlink:href="#icon-tripadvisor"></use>
								</svg></a></li>
					</ul>
					<select class="custom-select-lang my-3" id="langSelect">
						<option value="es" selected="">Español</option>

					</select>
				</div>
			</div>
		</nav>
    </div>`,
    data() {
    return {
        home: '',
        menu: '',
        about: '',
        music: '',
		store: '',
		pinups: '',
		telefono: '',
		logo: ''
    }
    },
    mounted: function(){
        this.cargaMenu()
		this.cargaLogo()
    },
    methods: {
       async cargaMenu(){
            await axios.post("api/menu.php?accion=menu", {
                ide:  localStorage.getItem('idioma')
            })
            .then(response=>{
                this.home =  response.data.datos[0].nombre;
                this.menu =  response.data.datos[1].nombre;
                this.about = response.data.datos[2].nombre;
                this.music = response.data.datos[3].nombre;
				this.store = response.data.datos[4].nombre;
				this.pinups = response.data.datos[5].nombre;
				this.telefono = response.data.datos[7].nombre;
                //console.log(response)
            });
          
		},
		changeIdioma(parm){
			if(parm == 1){
				localStorage.setItem('idioma', 'es');
				location.reload();
			}else{
				localStorage.setItem('idioma', 'en');
				location.reload();
			}
		},
		async cargaLogo(){
            await axios.post("api/menu.php?accion=menulogo", {
                // ide:  localStorage.getItem('idioma')
            })
            .then(response=>{
                this.logo =  response.data.datos[0].img;
                //console.log(response)
            });
          
		},
    },
});