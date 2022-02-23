<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!--LINKS-->
        <a href="https://icons8.com/icon/TTpVm8tPePng/sacola-de-compras"></a>
        <link rel="stylesheet" href="{{ asset('css/app.css')}}" type="text/css">
        <!--JS-->
        <script
            src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
        <!--CSS-->        
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
        <!-- Font Awesome -->
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
            rel="stylesheet"/>
        <!-- Google Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
            rel="stylesheet"/>
        <!-- MDB -->
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
            rel="stylesheet"/>
            <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>

            <script src="http://maps.google.com/maps?file=api&v=2&key={GMAK}" type="text/javascript"></script>

        <title>Home</title>
    </head>
    <body >
        
        <div class="top">
            <nav>
                <!--LOGO-->
                <div class="logo-cl">
                    <img src="{{URL::asset('/imagem/logoBranca.png')}}" class="logo">
                </div>
                <!--MENU-->
                <button>&#9776;</button>
                <ul>
                    <li>
                        <p class="p-ul">Home</p>
                    </li>
                    <li>
                        <p class="p-ul"><a href="#top" style="color: white">Produtos</a></p>
                    </li>
            
                        <p class="p-ul"><a href="#cont" style="padding:8px; border:1px solid white; color:white; border-radius:20px; width:250px;"> Contato</a></p>
              
                </ul>
            </nav>
        </div>
        <!--SLIDESHOW-->
       
        <section class="header-site">
            <div class="container">
                <div class="row"">
                </div></div>
        </section>
        <br>
        <center>
      
<br>
            <h1 class="h1-top" id="top">PRODUTOS</h1>
            <p class="p-h1" align="Center">SEPARAMOS NOSSOS MELHORES<br>PRODUTOS PARA VOCÊ!</p>
            @foreach ($Produto as $produtos)
            <!--CONTAINER-->
            <div class="container">
                <br>
                <!--CARD-->
                <div class="card">
                    <p class="Marca">
                        <img src="data:image/jpeg;base64,<?php echo base64_encode($produtos->imagem_produto); ?>"
                             width="280"
                             height="220" />
                             
                        {{$produtos-> marca_produto}}</p>
                    <p>{{$produtos-> descricao_produto}}</p>
                    <p>
                        
                        <a  class="api-tag"
                            style="Text-decoration:none; box-shadow: 0 0 10px rgba(0,0,0,0.6); border-radius:10px;"
                            href="https://api.whatsapp.com/send?phone=5511975215175&text=Olá! Gostaria de mais informações sobre o produto {{$produtos-> descricao_produto}}">Verificar disponibilidade<span class="iconify" data-icon="logos:whatsapp" style="color: white; font-size: 30px; margin-left:10px"></span>
                       
                        </a>
                    </div>

                </div>
                @endforeach
            </div>
<div class="contato" id="cont">
    <section style="max-width: 100%;height:500px; margin-top:200px;">
<div class="infos" id="infos">
    <img src="{{URL::asset('/imagem/imgg.png')}}" class="imagem">
</div>
<div class="texto" style="float:left">
   <h2 style="margin-left:20px;" >WhatsApp</h2>
   <br>
   <label for=""><strong><span class="iconify" data-icon="logos:whatsapp" style="color: white; font-size: 30px; margin-left:30px; margin-right: 5px;"></span> (11) 4554-1650</strong></label>
   <br><br>
   <h2 style="margin-left:20px;">Endereço</h2>
   <br>
   <label for=""><strong><span class="iconify" data-icon="ep:location"  style="color: black; font-size: 35px;margin-left:50px;"></span>Rua Aquario Nº:111</strong></label>
<br><br>
<h2 >E-mail</h2>
<br>
<label for=""><strong><span class="iconify" data-icon="ic:twotone-email" style="color: black; font-size: 35px; margin-left:120px;"></span> tommotos2020@gmail.com</strong></label>

</div>
    </section>
</div>
            <!-- Footer -->
            <footer class="page-footer font-small cyan darken-3" style="margin-top: 200px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 py-5">
                            <div class="mb-5 flex-center">
                                <a class="fb-ic">
                                    <span class="iconify" data-icon="brandico:facebook" style="color: white; font-size: 40px;"></span>
                                </a>
                                <a class="ins-ic">
                                    <span class="iconify" data-icon="akar-icons:instagram-fill" style="color: white; font-size: 40px;margin-left:20px"></span>
                                </a>
                                <a class="tw-ic">
                                    <span class="iconify" data-icon="ep:location"  style="color: white; font-size: 45px;margin-left:20px;"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright text-center py-3 footer-site" style="color: white">© 2022 Copyright:
                    <a href="#">Tom Motos</a>
                    
                </div>

            </footer>
            

        </center>
<script>
    if (GBrowserIsCompatible()) {
    var map = new GMap2(document.getElementById("googleMap"));
    var lat = {-23.4878313}; // Latitude do marcador
    var lon = {-46.9787112}; // Longitude do marcador
    var zoom = {ZOOM}; // Zoom

    map.addControl(new GMapTypeControl());
    map.addControl(new GLargeMapControl());
    map.setCenter(new GLatLng(lat, lon), zoom);

    var marker = new GMarker(new GLatLng(lat,lon));

    GEvent.addListener(marker, "click", function() {
      marker.openInfoWindowHtml("Texto");
    });

    map.addOverlay(marker);
    map.setCenter(point, zoom);
  }
</script>
    </body>
</html>
<style >
    .imagem{
        width: 500px;
        float: left;
    }
    .infos{
        width: 1050px;
    }
        .header-site{
    background-image:url('/imagem/img001.png');
    background-position: center top;
    background-repeat:no-repeat;
    background-size: cover;
    background-attachment:fixed;
    color:rgb(0, 0, 0);
    padding-top: 300px;
    padding-bottom:300px ;
    max-width:100%;
}
.img-site{
    background-image:url(home.jpg);
    background-repeat: no-repeat;
    background-position: center top;
    background-size: cover;
    background-attachment:fixed;
    padding-top: 200px;
    padding-bottom: 200px;
}
    /*RESPONSIVIDADE DESKTOP*/
    * {
        margin: 0;
        padding: 0;
        
    }
    .quad{
        margin-left: auto;
        margin-right: auto;
        width: 1300px;
        margin-top: 50px;
    }
    .svg{
        float: left;
    }
    .h1-top {
        margin-top: 0px;
    }
    .Svg-zap {
        margin-left: 15px;
    }
    .p-ul {
        color: white;
    }
    .page-footer {
        background: rgba(37, 41, 62, 0.9);
        bottom: 0;
        display: block;
        width: 100%;
    }

    .top {
        background-color: #1e243c;
        box-shadow: 0 0 20px 5px rgb(0 0 0 / 40%);

    }
    .container {
        width: auto;
        display: inline-block;
        font-size: 16px;
        max-width: 360px;
        margin-left: auto;
        margin-right: auto;
        display: inline-block;
    }
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        width: 280px;
        margin: auto;
        height: 420px;
        text-align: center;
        font-family: arial;

    }

    .Marca {
        color: grey;
        font-size: 22px;
    }

    a {
        text-decoration: none;
    }

    .card button:hover {
        opacity: 0.7;
    }
    body {
        margin: 0;
    }

    ul {
        list-style: none;
        padding: 0;
        overflow: hidden;
        transition: all 0.5s;
        padding-top: 30px;
        margin-left: auto;
        margin-right: 50px;
    }

    nav {
        padding: 0 20px;
        justify-content: space-between;
        align-items: center;
        margin-left: auto;
        margin-right: auto;
        display: block;
        max-width: 1350px;
    }

    p {
        color: black;
    }

    nav,
    ul {
        display: flex;
        flex-direction: row;
    }

    li {
        padding: 0 20px;
    }

    .logo {
        margin: 0;
        padding: 10px;
        width: 120px;
    }

    button {
        background-color: transparent;
        border: none;
        color: #FFF;
        font-size: 36px;
        position: absolute;
        right: 10px;
        top: 10px;
        display: none;
    }

    button:focus~ul {
        height: 260px;
        outline: none;
    }

    .p-h1 {
        color: black;
        font-family: Arial, Helvetica, sans-serif;

    }

    .logo-cl {
        margin-left: 50px;
        display: block;
    }

    h1 {
        border-bottom: 3px solid #ef4f29 !important;
        width: 300px;
        font-weight: 700;
        font-family: Arial, Helvetica, sans-serif;
    }

    .slideee {
        width: 1349px;
        margin-right: auto;
        margin-left: auto;
        display: block;
    }
    .api-tag {
        color: black;
        padding: 6px;
        display: block;
        line-height: 40px;
        margin: 20px;
        background-color: transparent;
        border: 1px solid black;
        border-radius: 1px;
    }
    .api-tag:hover {
        color: white;
        padding: 6px;
        display: block;
        line-height: 40px;
        margin: 20px;
        background-color: #142C54;
        border: 1px solid black;
        border-radius: 1px;
        transition: 5ms;

    }
    /*RESPONSIVIDADE DE NO MAZ 700PX*/
    @media (max-width: 700px) {

        .ol {
            visibility: hidden;
        }

        .carousel-control-prev {
            height: 203px;
        }
        .carousel-control-next {
            height: 203px;
        }
        .slideee {
            width: 700px;
            margin-right: auto;
            margin-left: auto;
            display: block;
        }
        .container {
            width: auto;
            display: inline-block;
            font-size: 16px;
            margin-left: auto;
            margin-right: auto;
            display: block;
        }
        button:focus~ul {
            height: 260px;
        }
        nav,
        ul {
            flex-direction: column;
        }
        ul {
            text-align: center;
            margin: 0;
            height: 0;
            margin-left: auto;
            margin-right: 50px;
        }
        nav {
            padding: 0;
            align-items: flex-start;
        }
        h1 {
            margin: 10px;
        }
        button {
            display: flex;
        }
        li,
        ul {
            width: 100%;
            color: white;
        }
        .logo-cl {
            margin-left: 10px;
            display: block;
        }
        li:hover {
            padding: 0 10px;
            border-bottom: 2px solid #ef4f29;
        }
        .card button {
            border: none;
            outline: 0;
            padding: 12px;
            color: white;
            background-color: gray;
            text-align: center;
            cursor: pointer;
            width: 200px;
            font-size: 16px;
        }
        p {
            color: black;
        }
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: auto;
            text-align: center;
            font-family: arial;
        }
        .api-tag {
            color: black;
            padding: 6px;
            display: block;
            line-height: 40px;
            margin: 20px;
            background-color: transparent;
            border: 1px solid black;
            border-radius: 1px;
        }
        .api-tag:hover {
            color: black;
            padding: 6px;
            display: block;
            line-height: 40px;
            margin: 20px;
            background-color: lightgreen;
            border: 1px solid black;
            border-radius: 1px;
        }
        .p-ul {
            color: white;
        }
    }
    /*RESPONSIVIDADE MAX 360PX*/
    @media (max-width: 360px) {
        .ol {
            visibility: hidden;
        }

        .carousel-control-prev {
            height: 203px;
        }
        .carousel-control-next {
            height: 203px;
        }
        .slideee {
            width: 360px;
            height: 100px;
            margin-right: auto;
            margin-left: auto;
            display: block;
        }
        .container {
            width: auto;
            display: inline-block;
            font-size: 16px;
            margin-left: auto;
            margin-right: auto;
            display: block;
        }
        button:focus~ul {
            height: 260px;
        }
        nav,
        ul {
            flex-direction: column;
        }
        ul {
            text-align: center;
            margin: 0;
            height: 0;
            margin-left: auto;
            margin-right: 50px;
        }
        nav {
            padding: 0;
            align-items: flex-start;
        }
        h1 {
            margin: 10px;
        }
        button {
            display: flex;
        }
        li,
        ul {
            width: 100%;
            color: white;
        }
        .logo-cl {
            margin-left: 10px;
            display: block;
        }
        li:hover {
            padding: 0 10px;
            border-bottom: 2px solid #ef4f29;
        }
        .card button {
            border: none;
            outline: 0;
            padding: 12px;
            color: white;
            background-color: gray;
            text-align: center;
            cursor: pointer;
            width: 200px;
            font-size: 16px;
        }
        p {
            color: black;
        }
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: auto;
            text-align: center;
            font-family: arial;
        }
        .api-tag {
            color: black;
            padding: 6px;
            display: block;
            line-height: 40px;
            margin: 20px;
            background-color: transparent;
            border: 1px solid black;
            border-radius: 1px;
        }
        .api-tag:hover {
            color: white;
            padding: 6px;
            display: block;
            line-height: 40px;
            margin: 20px;
            background-color: #142C54;
            border: 1px solid black;
            border-radius: 1px;
        }
        .p-ul {
            color: white;
        }
        .p-h1 {
            margin-top: 20px;
        }
        .h1-top {
            margin-top: 130px;
        }

    }
</style>