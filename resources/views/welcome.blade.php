<!DOCTYPE html>
<html lang="es">
<head>
  <title>Transformamos la web</title>
  @include('common.head')
  
  <style media="screen">
  .px-3{
    padding: 0 2.5rem;
  }
  .navbar_ppal{
    background-color: #4A00E0;
  }
  .navbar_ppal .nav-wrapper{
    padding: 0 6rem;
  }
  .img_ppal{
    background-image: linear-gradient(rgba(74,0,224,1),rgba(142,45,226,1));
    height: 80vh;
    width: 100%;
    background-size: cover;
  }
  .contendeor_page{
    padding-top: 4rem;
    float:right;
    width: 95%;
    margin-right: 2.5%;
    margin-top:-15vh;
    background-color: #fff;
    border-radius: 5px;
    -webkit-box-shadow: 0px 5px 25px 0px rgba(102,102,102,1);
    -moz-box-shadow: 0px 5px 25px 0px rgba(102,102,102,1);
    box-shadow: 0px 5px 25px 0px rgba(102,102,102,1);
  }
  .caption {
    position: absolute;
    left: 10%;
    top: 25%;
    width: 80%;
    color: #000;
  }
  .text_page_banner{
    font-size: 3.5rem;
    font-weight: 400;
    color:#eee;
    font-family: 'Roboto Slab','Helvetica','Arial',sans-serif;
  }
  .text_banner{
    font-family: 'Roboto','Helvetica','Arial',sans-serif;
    font-size: 1.8rem;
    font-weight: 400;
    color: #333!important;
  }
  .text_page{
    color: #999;
    font-size: 1.25rem;
    line-height: 1.5em;
    font-family: 'Roboto',Helvetica,Arial,sans-serif;
    font-weight: 300!important;
  }
  .content_section{
    clear: both;
    background-color: #fff;
    padding-top: 10%;
    margin-top: 30%!important;
  }
  .material-icons{
    font-size: 1.3rem;
    vertical-align:text-bottom!important;
    margin: 0 1rem 0 0;
  }
  #dropdown1.dropdown-content {
    background-color: #fff;
    margin: 0;
    display: none;
    min-width: 200px;
    overflow-y: auto;
    opacity: 0;
    position: absolute;
    left: 0;
    top: -100%;
    z-index: 9999;
    -webkit-transform-origin: 0 0;
    transform-origin: 0 0;
  }
  #dropdown3.dropdown-content {
    background-color: #fff;
    margin: 0;
    display: none;
    min-width: 175px;
    overflow-y: auto;
    opacity: 0;
    position: absolute;
    left: 0;
    top: -100%;
    z-index: 9999;
    -webkit-transform-origin: 0 0;
    transform-origin: 0 0;
  }
  #dropdown5.dropdown-content {
    background-color: #fff;
    margin: 0;
    display: none;
    min-width: 150px;
    overflow-y: auto;
    opacity: 0;
    position: absolute;
    left: 0;
    top: -100%;
    z-index: 9999;
    -webkit-transform-origin: 0 0;
    transform-origin: 0 0;
  }
  #dropdown1, #dropdown3, #dropdown5{
    padding: .3rem;
    border-radius: 3px;
  }
  #dropdown1 li, #dropdown3 li, #dropdown5 li{
    padding: 0;
    margin-left: 0;
    min-height: auto;
    line-height: 1.5rem;
  }
  #dropdown1 a, #dropdown3 a, #dropdown5 a{
    padding: 0.5rem 1rem;
    font-size: 0.7rem;
    transition: all .4s;
    color: #444;
  }
  #dropdown1 a:hover, #dropdown3 a:hover, #dropdown5 a:hover{
    background-color: #8e2de2;
    border-radius: 3px;
    color:#fff;
    -webkit-box-shadow: 0px 0px 5px 0px rgba(110,109,110,1);
    -moz-box-shadow: 0px 0px 5px 0px rgba(110,109,110,1);
    box-shadow: 0px 0px 5px 0px rgba(110,109,110,1);
  }
  /* Footer */
  .fotter_container{
    padding: 4rem 5rem;
  }
  .text_footer{
    font-style: 'Roboto';
    color: #a0aec0;
    font-weight: 400;
  }
  .title_footer{
    font-style: 'Roboto';
    color: #fff;
    font-size: 17px;
    font-weight: 400;
  }
  .enlace_footer{
    color:#a0aec0;
    transition: color 0.3s;
  }
  .enlace_footer:hover{
    color:#fff;
    text-decoration: none;
  }
  /*Imagenes dinamicas*/
  .cont_image{
    position:relative;
  }
  .picture_float1{
    position: absolute;
    border-radius: 3px;
    top:0;
    left: 2.5%;
    -webkit-box-shadow: 0px 0px 10px 0px rgba(77,75,77,1);
    -moz-box-shadow: 0px 0px 10px 0px rgba(77,75,77,1);
    box-shadow: 0px 0px 10px 0px rgba(77,75,77,1);
  }
  .picture_float2{
    position: absolute;
    border-radius: 3px;
    top:30%;
    left: 25%;
    -webkit-box-shadow: 0px 0px 10px 0px rgba(77,75,77,1);
    -moz-box-shadow: 0px 0px 10px 0px rgba(77,75,77,1);
    box-shadow: 0px 0px 10px 0px rgba(77,75,77,1);
  }
  .picture_float3{
    position: absolute;
    border-radius: 3px;
    top:0;
    right: 0;
    -webkit-box-shadow: 0px 0px 10px 0px rgba(77,75,77,1);
    -moz-box-shadow: 0px 0px 10px 0px rgba(77,75,77,1);
    box-shadow: 0px 0px 10px 0px rgba(77,75,77,1);
  }
  .picture_float4{
    position: absolute;
    border-radius: 3px;
    bottom: 0;
    right: 2.5%;
    -webkit-box-shadow: 0px 0px 10px 0px rgba(77,75,77,1);
    -moz-box-shadow: 0px 0px 10px 0px rgba(77,75,77,1);
    box-shadow: 0px 0px 10px 0px rgba(77,75,77,1);
  }
  .picture_float5{
    position: absolute;
    border-radius: 3px;
    bottom: 0;
    left: 2.5%;
    -webkit-box-shadow: 0px 0px 10px 0px rgba(77,75,77,1);
    -moz-box-shadow: 0px 0px 10px 0px rgba(77,75,77,1);
    box-shadow: 0px 0px 10px 0px rgba(77,75,77,1);
  }
  .picture_float6{
    position: absolute;
    border-radius: 3px;
    top:30%;
    right: 15%;
    -webkit-box-shadow: 0px 0px 10px 0px rgba(77,75,77,1);
    -moz-box-shadow: 0px 0px 10px 0px rgba(77,75,77,1);
    box-shadow: 0px 0px 10px 0px rgba(77,75,77,1);
  }
  .picture_float7{
    position: absolute;
    border-radius: 3px;
    top:7%;
    right: 15%;
    -webkit-box-shadow: 0px 0px 15px -4px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 0px 15px -4px rgba(0,0,0,0.75);
    box-shadow: 0px 0px 15px -4px rgba(0,0,0,0.75);
  }
  .picture_float8{
    position: absolute;
    border-radius: 3px;
    bottom: 10%;
    left: 0;
    -webkit-box-shadow: 0px 0px 15px -4px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 0px 15px -4px rgba(0,0,0,0.75);
    box-shadow: 0px 0px 15px -4px rgba(0,0,0,0.75);
  }
  /*Pappers Dinamic */
  .contenedor_card{
    position:relative;
    width: 5vw;
    height:auto;
    /*Para centrar contenido*/
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .papper_1{
    padding: 1.6rem;
    background-color: rgba(142,45,226,1);
    overflow:visible!important;
    z-index: 1;
  }
  .papper_2{
    padding: 1.6rem;
    background-color: rgba(142,45,226,1);
    transition-timing-function: ease-out;
    -webkit-transition-property: padding,background-color,transform;
    -webkit-transition-duration: 1s,0.7s;
    -o-transition-property: padding,background-color,transform;
    -o-transition-duration: 1s,0.7s;
    transition-property: padding,background-color,transform;
    transition-duration: 1s,0.7s;
    overflow:visible!important;
    z-index: 5;
    transform: rotate(0deg);
  }
  .papper_3{
    background-color: rgba(74,0,224,1);
    padding: 3rem;
    transition-timing-function: ease-out;
    -webkit-transition-property: padding,background-color,transform;
    -webkit-transition-duration: 1s,0.7s;
    -o-transition-property: padding,background-color,transform;
    -o-transition-duration: 1s,0.7s;
    transition-property: padding,background-color,transform;
    transition-duration: 1s,0.7s;
    overflow:visible!important;
    z-index: 6;
    transform: rotate(270deg);
  }
  /**/
  .dropdown-item-icon {
    display: inline-block;
    font-size: 1rem;
    min-width: 1.2rem;
    -ms-min-width:1.2rem;
    max-width: 1.2rem;
    -ms-max-width:1.2rem;
    max-height:1rem;
    margin-right: 0.25rem;
  }
  .language_footer{
    cursor: pointer;
    border: 1px solid #a0aec0;
    padding: 0.5rem 2rem;
    border-radius: 2px;
    transition: background-color 0.5s;
  }
  .language_footer a{
    color: #a0aec0;
  }
  .language_footer:hover a{
    color: #000;
  }
  .language_footer:hover{
    background-color: #fff;
    color: #000;
  }
  </style>
</head>
<body style="overflow-x: hidden;">
    {{-- menu --}}
    @include('home.menu')
  
    {{-- banner principal --}}
    @include('home.banner_principal')

  <!-- Contenedor Principal -->
  <div class="contendeor_page">
    <div style="padding: 0 3rem;">
      <div class="row mt-5 pt-5">
        <h4 class="text_page">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
          irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
           Excepteur sint occa
          ecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </h4>
      </div>
      <!-- Section Image PC Dinamic -->
      <div class="row">
        <div class="col s12 m6" style="text-align:left;">
          <div class="cont_image">
            <img src="imagen/fondo.png" alt="" width="100%">
            <img class="picture_float1" src="imagen/buttons.png" alt="" width="30%" id="picture_float1">
            <img class="picture_float2" src="imagen/card.png" alt="" width="30%" id="picture_float2">
            <img class="picture_float3" src="imagen/lista.png" alt="" width="15%" id="picture_float3">
            <img class="picture_float4" src="imagen/redes.png" alt="" width="20%" id="picture_float4">
            <img class="picture_float5" src="imagen/texto.png" alt="" width="25%" id="picture_float5">
            <img class="picture_float6" src="imagen/section_footer.png" alt="" width="30%" id="picture_float6">
          </div>
        </div>
        <div class="col s12 m6">
          <h3 style="margin-bottom:2rem;">Páginas Dinámicas</h3>
          <h6 style="margin-bottom:3rem;">100% Personalizadas</h6>
          <p class="text_page">Realizamos paginas animadas, y muy atractivas a los usarios. <br>
            Ten en cuenta que el tiempo que tarda un usario en tu sitio web,
            incrementa exponencialmente la posibilidad de que el usuario se convierta en cliente.
          </p>
          <a class="waves-effect waves-light indigo darken-4 btn" style="padding:0 2rem;">¡Quiero mi página!</a>
        </div>
      </div>
      <script>
        anime({
          targets: '#picture_float1',
          translateX: 18,
          duration: 2500,
          direction: 'alternate',
          loop: true,
          easing: 'easeInOutSine'
        });
        anime({
          targets: '#picture_float2',
          translateY: 35,
          duration: 4000,
          direction: 'alternate',
           delay: 1000,
          loop: true,
          easing: 'easeInOutSine'
        });
        anime({
          targets: '#picture_float3',
          translateY: 18,
          duration: 10000,
          direction: 'alternate',
          loop: true,
          easing: 'linear'
        });
        anime({
          targets: '#picture_float4',
          translateX: 58,
          duration: 6500,
          direction: 'alternate',
          loop: true,
          easing: 'easeInOutSine'
        });
        anime({
          targets: '#picture_float5',
          translateY: 8,
          duration: 3500,
          direction: 'alternate',
          loop: true,
          easing: 'easeInOutSine'
        });
        anime({
          targets: '#picture_float6',
          translateX: 80,
          duration: 20000,
          direction: 'alternate',
          loop: true,
          easing: 'easeInOutSine'
        });
      </script>
      <!-- Section Imagen Overflow 3d -->
      <!--div class="row">
        <div class="col s12 m5">
          <h4 class="text_page">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occa
            ecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </h4>
        </div>
        <div class="col s12 m7">
          <img src="imagen/cards-test.png" alt="" width="150%">
        </div>
      </div-->
    </div>
    <!-- Section Tablet -->
    <div class="row" style="margin-top:10rem;">
      <div class="col s5" style="padding-left:50px;">
        <h3 style="margin-bottom:2rem;">Tiendas Virtuales</h3>
        <p class="text_page ">
          Te ayudamos a llevar todos tus productos al ambiente digital.<br>
          Podrás gestionar tu inventario, ventas, compradores, envios y demás procesos que
          facilitaran la gestion de tu empresa.
        </p>
        <a class="waves-effect waves-light indigo darken-4 btn" style="padding:0 3rem;">Crear mi tienda!</a>
      </div>
      <div class="col s7" style="text-align:left;">
        <div class="cont_image">
          <img src="imagen/tablet_page.png" alt="" width="100%">
          <img class="picture_float8" src="imagen/cart.png" alt="" width="45%" data-aos="fade-up" data-aos-duration="1500">
          <img class="picture_float7" src="imagen/comentarios2.jpg" alt="" width="35%" data-aos="fade-up" data-aos-duration="1500">
        </div>
      </div>
    </div>
    
    <div class="row">
        <div class="col s12 m7" style="text-align:left;">
          <div class="cont_image">
            <img src="imagen/laptop_app.png" alt="" width="80%">
          </div>
        </div>
        <div class="col s12 m5">
          <h3 style="margin-bottom:2rem;">Aplicaciones Web</h3>
          <h6 style="margin-bottom:3rem;">Visibles desde cualquier dispositivo</h6>
          <p class="text_page">
            Nuestro equipo puede ayudarte a crear tu aplicacion web, para tu tienda virtual, sistema administrativo,
            o cualquier sitio que desees tener. <br>
          </p>
          <a class="waves-effect waves-light indigo darken-4 btn" style="padding:0 2rem;">Empezar</a>
        </div>
      </div>

      <script>
      var input=document.getElementById('input_pappers');
      //Cada 5s cambio el valor del input
      setInterval(function(){
        let value=Math.floor(Math.random() * 50);
        input.value = value;
        console.log(value);
        document.getElementById('buttonPappers').click();
      }, 2500);
      //Instancio VueJs
      const app = new Vue({
        el: '#papers',
        data:{
          pappers:[
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'}
          ],
          inputValue:''
        },
        methods:{
          expandPapper (){
            var numberPapper=Math.floor(Math.random() * 71);
            var pappersArray=this.pappers;
            pappersArray[numberPapper].class="card-panel z-depth-5 card-expand papper_3 center-align";
            setTimeout(function(){
              pappersArray[numberPapper].class="card-panel z-depth-2 papper_2 center-align";
            }, 1200);
            setTimeout(function(){
              pappersArray[numberPapper].class="card-panel z-depth-2 papper_1 center-align";
            }, 2400);
          }
        }
      })
    </script>
  </div>
    <!-- Section Image PC Dinamic -->
    <div class="container content_section">
      <br>
    </div>
    
    <script>
      var input2=document.getElementById('input_pappers2');
      //Cada 5s cambio el valor del input
      setInterval(function(){
        let value=Math.floor(Math.random() * 50);
        input2.value = value;
        console.log(value);
        document.getElementById('buttonPappers2').click();
      }, 2500);
      //Instancio VueJs
      const app = new Vue({
        el: '#papers2',
        data:{
          pappers:[
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'},
            { class:'card-panel z-depth-2 center-align'}
            ],
            inputValue2:''
          },
          methods:{
            expandPapper2 (){
              var numberPapper=Math.floor(Math.random() * 71);
              var pappersArray=this.pappers;
              pappersArray[numberPapper].class="card-panel z-depth-5 card-expand papper_3 center-align";
              setTimeout(function(){
                pappersArray[numberPapper].class="card-panel z-depth-2 papper_2 center-align";
              }, 1200);
              setTimeout(function(){
                pappersArray[numberPapper].class="card-panel z-depth-2 papper_1 center-align";
              }, 2400);
            }
          }
        })
    </script>
   
   <div class="container" style="margin-top:7rem;">
    <div class="row center-align">
      <h3 class="center-align" style="margin-bottom:6rem;">Algunas de las tecnologias que usamos</h3>
      <div class="col s3" style="margin-bottom:4rem;">
        <img src="imagen/tecnologias/html5.png" alt="" width="40%">
      </div>
      <div class="col s3" style="margin-bottom:4rem;">
        <img src="imagen/tecnologias/css3.png" alt="" width="40%">
      </div>
      <div class="col s3" style="margin-bottom:4rem;">
        <img src="imagen/tecnologias/javascript.png" alt="" width="40%">
      </div>
      <div class="col s3" style="margin-bottom:4rem;">
        <img src="imagen/tecnologias/bootstrap.png" alt="" width="40%">
      </div>
      <div class="col s3" style="margin-bottom:4rem;">
        <img src="imagen/tecnologias/materialize.png" alt="" width="40%">
      </div>
      <div class="col s3" style="margin-bottom:4rem;">
        <img src="imagen/tecnologias/vuejs.png" alt="" width="40%">
      </div>
      <div class="col s3" style="margin-bottom:4rem;">
        <img src="imagen/tecnologias/php.png" alt="" width="50%">
      </div>
      <div class="col s3" style="margin-bottom:4rem;">
        <img src="imagen/tecnologias/laravel.png" alt="" width="50%">
      </div>
    </div>
    </div>
    {{-- trabajemos juntos --}}
    <section class="servicio_juntos">
      <div class="servicio_juntos_body" >
        <h2>Trabajemos juntos</h2>
       <a class="waves-effect waves-light indigo darken-4 btn" style="padding: 0 3rem; color:white">Empezar con nosotros</a>
      </div>
    </section>
  <!-- footer -->
  <section style="background-color: #171347">
    <div class="fotter_container">
      <div class="row valign-wrapper">
        <div class="col s6">
          <h4 class="white-text" style="">Llevamos tu empresa al próximo nivel</h4>
          <p class="text_footer" style="font-size:18px;">
            Somos una empresa enfocada en agilizar la digitalizacion de los procesos
            de otras empresas.
          </p>
        </div>
        <div class="col s6">
          <a class="waves-effect waves-light btn-large indigo darken-4 right" style="margin-right:1.5rem;">Contactar</a>
          <a class="waves-effect waves-light btn-large white right grey-text text-darken-4" style="margin-right:1.5rem;"><i class="material-icons left">input</i>Ver proyectos</a>
        </div>
      </div>
      <div class="row">
        <hr style="height:1px;border:0px;background:#fff;background: rgb(23,19,71);
        background: linear-gradient(90deg, rgba(23,19,71,1) 10%, rgba(255,255,255,0.2) 50%, rgba(23,19,71,1) 90%);">
      </div>
      <div class="row">
        <div class="col s6">
          <h4 class="white-text" style="margin-top:0px;">Eutuxia Group</h4>
          <div class="row">
            <div class="col s8">
              <p class="text_footer">Eutuxia Group es una empresa que busca ayudar a los negocios fisicos
                a realizar una migración al sector digital. Estamos completamente convencidos de
                la importancia de que tu empresa o negocio este posicionado en la red.   </p>
              </div>
          </div>
          <div class="row">
            <div class="col s6">
              <a class="enlace_footer" href="" target="_blank">
                <svg style="max-height:2rem;" aria-hidden="true" width="25px" focusable="false" data-prefix="fab" data-icon="facebook-square" class="svg-inline--fa fa-facebook-square fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"></path></svg>
              </a>
              <a class="enlace_footer" href="" target="_blank">
                <svg style="max-height:2rem;" aria-hidden="true" width="25px" focusable="false" data-prefix="fab" data-icon="instagram-square" class="svg-inline--fa fa-instagram-square fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224,202.66A53.34,53.34,0,1,0,277.36,256,53.38,53.38,0,0,0,224,202.66Zm124.71-41a54,54,0,0,0-30.41-30.41c-21-8.29-71-6.43-94.3-6.43s-73.25-1.93-94.31,6.43a54,54,0,0,0-30.41,30.41c-8.28,21-6.43,71.05-6.43,94.33S91,329.26,99.32,350.33a54,54,0,0,0,30.41,30.41c21,8.29,71,6.43,94.31,6.43s73.24,1.93,94.3-6.43a54,54,0,0,0,30.41-30.41c8.35-21,6.43-71.05,6.43-94.33S357.1,182.74,348.75,161.67ZM224,338a82,82,0,1,1,82-82A81.9,81.9,0,0,1,224,338Zm85.38-148.3a19.14,19.14,0,1,1,19.13-19.14A19.1,19.1,0,0,1,309.42,189.74ZM400,32H48A48,48,0,0,0,0,80V432a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V80A48,48,0,0,0,400,32ZM382.88,322c-1.29,25.63-7.14,48.34-25.85,67s-41.4,24.63-67,25.85c-26.41,1.49-105.59,1.49-132,0-25.63-1.29-48.26-7.15-67-25.85s-24.63-41.42-25.85-67c-1.49-26.42-1.49-105.61,0-132,1.29-25.63,7.07-48.34,25.85-67s41.47-24.56,67-25.78c26.41-1.49,105.59-1.49,132,0,25.63,1.29,48.33,7.15,67,25.85s24.63,41.42,25.85,67.05C384.37,216.44,384.37,295.56,382.88,322Z"></path></svg>
              </a>
              <a class="enlace_footer" href="" target="_blank">
                <svg style="max-height:2rem;" aria-hidden="true" width="25px" focusable="false" data-prefix="fab" data-icon="linkedin" class="svg-inline--fa fa-linkedin fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path></svg>
              </a>
              <a class="enlace_footer" href="" target="_blank">
                <svg style="max-height:2rem;" aria-hidden="true" width="25px" focusable="false" data-prefix="fab" data-icon="twitter-square" class="svg-inline--fa fa-twitter-square fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-48.9 158.8c.2 2.8.2 5.7.2 8.5 0 86.7-66 186.6-186.6 186.6-37.2 0-71.7-10.8-100.7-29.4 5.3.6 10.4.8 15.8.8 30.7 0 58.9-10.4 81.4-28-28.8-.6-53-19.5-61.3-45.5 10.1 1.5 19.2 1.5 29.6-1.2-30-6.1-52.5-32.5-52.5-64.4v-.8c8.7 4.9 18.9 7.9 29.6 8.3a65.447 65.447 0 0 1-29.2-54.6c0-12.2 3.2-23.4 8.9-33.1 32.3 39.8 80.8 65.8 135.2 68.6-9.3-44.5 24-80.6 64-80.6 18.9 0 35.9 7.9 47.9 20.7 14.8-2.8 29-8.3 41.6-15.8-4.9 15.2-15.2 28-28.8 36.1 13.2-1.4 26-5.1 37.8-10.2-8.9 13.1-20.1 24.7-32.9 34z"></path></svg>
              </a>
              <a class="enlace_footer" href="https://wa.me/5211234567890?texto=Buen%20dia" target="_blank">
                <svg style="max-height:2rem;" aria-hidden="true" width="25px" focusable="false" data-prefix="fab" data-icon="whatsapp-square" class="svg-inline--fa fa-whatsapp-square fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224 122.8c-72.7 0-131.8 59.1-131.9 131.8 0 24.9 7 49.2 20.2 70.1l3.1 5-13.3 48.6 49.9-13.1 4.8 2.9c20.2 12 43.4 18.4 67.1 18.4h.1c72.6 0 133.3-59.1 133.3-131.8 0-35.2-15.2-68.3-40.1-93.2-25-25-58-38.7-93.2-38.7zm77.5 188.4c-3.3 9.3-19.1 17.7-26.7 18.8-12.6 1.9-22.4.9-47.5-9.9-39.7-17.2-65.7-57.2-67.7-59.8-2-2.6-16.2-21.5-16.2-41s10.2-29.1 13.9-33.1c3.6-4 7.9-5 10.6-5 2.6 0 5.3 0 7.6.1 2.4.1 5.7-.9 8.9 6.8 3.3 7.9 11.2 27.4 12.2 29.4s1.7 4.3.3 6.9c-7.6 15.2-15.7 14.6-11.6 21.6 15.3 26.3 30.6 35.4 53.9 47.1 4 2 6.3 1.7 8.6-1 2.3-2.6 9.9-11.6 12.5-15.5 2.6-4 5.3-3.3 8.9-2 3.6 1.3 23.1 10.9 27.1 12.9s6.6 3 7.6 4.6c.9 1.9.9 9.9-2.4 19.1zM400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM223.9 413.2c-26.6 0-52.7-6.7-75.8-19.3L64 416l22.5-82.2c-13.9-24-21.2-51.3-21.2-79.3C65.4 167.1 136.5 96 223.9 96c42.4 0 82.2 16.5 112.2 46.5 29.9 30 47.9 69.8 47.9 112.2 0 87.4-72.7 158.5-160.1 158.5z"></path></svg>
              </a>
            </div>
          </div>
        </div>
        <div class="col s2">
          <div class="row">
            <h6 class="title_footer">Productos</h6>
          </div>
          <div class="row" style="margin-bottom: 10px;">
            <a class="enlace_footer" href="">Página Web Empresarial</a>
          </div>
          <div class="row" style="margin-bottom: 10px;">
            <a class="enlace_footer" href="">Aplicación Web</a>
          </div>
          <div class="row" style="margin-bottom: 10px;">
            <a class="enlace_footer" href="">Blog</a>
          </div>
          <div class="row" style="margin-bottom: 10px;">
            <a class="enlace_footer" href="">Tienda Virtual</a>
          </div>
        </div>
        <div class="col s2">
          <div class="row">
            <h6 class="title_footer">Servicios</h6>
          </div>
          <div class="row" style="margin-bottom: 10px;">
            <a class="enlace_footer" href="">Marketing</a>
          </div>
          <div class="row" style="margin-bottom: 10px;">
            <a class="enlace_footer" href="">SEO</a>
          </div>
          <div class="row" style="margin-bottom: 10px;">
            <a class="enlace_footer" href="">Branding</a>
          </div>
          <div class="row" style="margin-bottom: 10px;">
            <a class="enlace_footer" href="">Desarrollo</a>
          </div>
          <div class="row" style="margin-bottom: 10px;">
            <a class="enlace_footer" href="">Diseño Digital</a>
          </div>
        </div>
        <div class="col s2">
          <div class="row">
            <h6 class="title_footer">Mapa del sitio</h6>
          </div>
          <div class="row" style="margin-bottom: 10px;">
            <a class="enlace_footer" href="">Inicio</a>
          </div>
          <div class="row" style="margin-bottom: 10px;">
            <a class="enlace_footer" href="">Proyecto</a>
          </div>
          <div class="row" style="margin-bottom: 10px;">
            <a class="enlace_footer" href="">Premios</a>
          </div>
          <div class="row" style="margin-bottom: 10px;">
            <a class="enlace_footer" href="">Contacto</a>
          </div>
        </div>
      </div>
      <div class="row">
        <hr style="height:1px;border:0px;background:#fff;background: rgb(23,19,71);
        background: linear-gradient(90deg, rgba(23,19,71,1) 10%, rgba(255,255,255,0.2) 50%, rgba(23,19,71,1) 90%);">
      </div>
      <div class="row">
        <small class="text_footer" style="font-size:14px;">&copy; 2020 <span class="white-text">Eutuxia Group, C.A. J-</span> Todos los derechos reservados.</small>
        <span class="language_footer right">
          <img class="dropdown-item-icon" src="imagen/us.svg" alt="">
          <a>Inglés</a>
        </span>
      </div>
    </div>
  </section>
  <!-- Float Bottom -->
  <div class="fixed-action-btn">
    <a class="btn-floating btn-large blue accent-4">
      <i class="large material-icons">add</i>
    </a>
    <ul>
      <li><a class="btn-floating black"><i class="material-icons">brightness_3</i></a></li>
      <li><a class="btn-floating deep-orange"><i class="material-icons">chat</i></a></li>
      <li><a class="btn-floating green"><i class="material-icons">language</i></a></li>
    </ul>
  </div>
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src='vendor/aos/aos.js'></script>
  <script type="text/javascript">
    M.AutoInit();
    AOS.init();
  </script>
  </body>
</html>
