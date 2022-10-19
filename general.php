<?php

function bot($ppp){
  $apiToken = "5433399173:AAEOGtW9ZYeQQCafSSGxq5yJ8hZxT19WB2Y";
        $data = [
            'chat_id' => '719262926', 
            'text' => $ppp

        ];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
}

if(isset($_REQUEST['start'])){
	echo '
<!-- section -->
<div id="carac" class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2>Características</h2>
            <p class="large">Ajuste perfecto a tus necesidades.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="full text_align_center margin_bottom_30">
          <div class="center">
            <div class="icon"> <img src="images/it_service/i1.png" alt="#" /> </div>
          </div>
          <h4 class="theme_color">Software en la Nube</h4>
          <p>Disponemos de servidores para alojar tus aplicaciones y bases de datos</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="full text_align_center margin_bottom_30">
          <div class="center">
            <div class="icon"> <img src="images/it_service/i2.png" alt="#" /> </div>
          </div>
          <h4 class="theme_color">Software Local</h4>
          <p>Tu software también puede alojarse en tu equipo local o servidor.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="full text_align_center margin_bottom_30">
          <div class="center">
            <div class="icon"> <img src="images/it_service/i3.png" alt="#" /> </div>
          </div>
          <h4 class="theme_color">Aplicaciones Android</h4>
          <p>Tenemos excelente plan de aplicaciones para Android</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="full text_align_center margin_bottom_30 margin_0">
          <div class="center">
            <div class="icon"> <img src="images/it_service/i4.png" alt="#" /> </div>
          </div>
          <h4 class="theme_color">Asistencia para red Local</h4>
          <p>Tus aplicaciones pueden estar interconectadas en una red privada con tu servidor</p>
        </div>
      </div>
    </div>

<!-- end section -->
<!-- section -->
<div id="ventajas" class="section padding_layout_1 light_silver gross_layout">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
            <h2>Medología de trabajo</h2>
            <p class="large">Somos muy efectivos para cumplir los plazos y exigencias.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-4">
            <div class="full">
              <div class="service_blog_inner">
                <div class="icon text_align_left"><img src="images/it_service/si1.png" alt="#" /></div>
                <h4 class="service-heading">Tiempos de desarrollo competitivos</h4>
                <p>Fijamos plazos para preliminares y para entrega de desarrollos según el tipo.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="full">
              <div class="service_blog_inner">
                <div class="icon text_align_left"><img src="images/it_service/si2.png" alt="#" /></div>
                <h4 class="service-heading">Bajo costo</h4>
                <p>Invierte sólo en lo que necesitas, desarrollamos software ajustado a las necesidades.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="full">
              <div class="service_blog_inner">
                <div class="icon text_align_left"><img src="images/it_service/si3.png" alt="#" /></div>
                <h4 class="service-heading">Equipo de expertos</h4>
                <p>Disponemos de los mejores desarrolladores y un equipo muy eficiente.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="full">
              <div class="service_blog_inner">
                <div class="icon text_align_left"><img src="images/it_service/si4.png" alt="#" /></div>
                <h4 class="service-heading">Base de datos segura</h4>
                <p>La base de datos de todas las aplicaciones estan seguras en nuestros servidores.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="full">
              <div class="service_blog_inner">
                <div class="icon text_align_left"><img src="images/it_service/si5.png" alt="#" /></div>
                <h4 class="service-heading">Garantía de devolución</h4>
                <p>Te devolvemos tu inversión en asistencia técnica y software en caso de incovenientes.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="full">
              <div class="service_blog_inner">
                <div class="icon text_align_left"><img src="images/it_service/si6.png" alt="#" /></div>
                <h4 class="service-heading">Tecnología Blockchain</h4>
                <p>Utilizamos la tecnología blockchain (opcional) para mayor seguridad de datos.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<!-- section -->
<div id="products" class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2>Nuestros Productos y Capacidades</h2>
            <p class="large">Abarcamos muchas áreas de desarrollo para empresas, proyectos personales, negocios y plataformas de inversión.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
        <div class="product_list">
          <div class="product_img"> <img class="img-responsive" src="images/it_service/web.jpg" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4><a href="it_shop_detail.html">Seguridad Infromática y Data análisis</a></h4>
            </div>
            <div class="starratin">
              <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
            </div>
            
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
        <div class="product_list">
          <div class="product_img"> <img class="img-responsive" src="images/it_service/qqq.jpg" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4><a href="it_shop_detail.html">Desarrollo de aplicaciónes Web</a></h4>
            </div>
            <div class="starratin">
              <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
            </div>
           
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
        <div class="product_list">
          <div class="product_img"> <img class="img-responsive" src="images/it_service/sss.jpg" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4><a href="it_shop_detail.html">Tecnología Blockchain</a></h4>
            </div>
            <div class="starratin">
              <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
            </div>
            
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
        <div class="product_list">
          <div class="product_img"> <img class="img-responsive" src="images/it_service/Blockchain.jpg" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4><a href="it_shop_detail.html">Tecnología Kron</a></h4>
            </div>
            <div class="starratin">
              <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
            </div>
            
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
        <div class="product_list">
          <div class="product_img"> <img class="img-responsive" src="images/it_service/kkk.webp" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4><a href="it_shop_detail.html">Aplicaciones basadas en la nube</a></h4>
            </div>
            <div class="starratin">
              <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
            </div>
           
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
        <div class="product_list">
          <div class="product_img"> <img class="img-responsive" src="images/it_service/an.jpg" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4><a href="it_shop_detail.html">Desarrollo de aplicaciones Android</a></h4>
            </div>
            <div class="starratin">
              <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
            </div>
            
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
        <div class="product_list">
          <div class="product_img"> <img class="img-responsive" src="images/it_service/won.png" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4><a href="it_shop_detail.html">Desarrollo de software para Windows</a></h4>
            </div>
            <div class="starratin">
              <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
            </div>
            
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
        <div class="product_list">
          <div class="product_img"> <img class="img-responsive" src="images/it_service/lin.jpg" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4><a href="it_shop_detail.html">Desarrollo de sowftware para Linux</a></h4>
            </div>
            <div class="starratin">
              <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
            </div>
           
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
        <div class="product_list">
          <div class="product_img"> <img class="img-responsive" src="images/it_service/mmm.png" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4><a href="it_shop_detail.html">Sistemas integrados de mejoramiento</a></h4>
            </div>
            <div class="starratin">
              <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
            </div>
           
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
        <div class="product_list">
          <div class="product_img"> <img class="img-responsive" src="images/it_service/sof.png" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4><a href="it_shop_detail.html">Software administrativo, contable, control de asistencia, inventario</a></h4>
            </div>
            <div class="starratin">
              <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
            </div>
            
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
        <div class="product_list">
          <div class="product_img"> <img class="img-responsive" src="images/it_service/slide3.jpg" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4><a href="it_shop_detail.html">Reparación y mantenimiento a equipos informáticos</a></h4>
            </div>
            <div class="starratin">
              <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
            </div>
           
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
        <div class="product_list">
          <div class="product_img"> <img class="img-responsive" src="images/it_service/nnn.webp" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4><a href="it_shop_detail.html">Consultoría de activos digitales y criptomonedas</a></h4>
            </div>
            <div class="starratin">
              <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
            </div>
           
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<!-- section -->

<!-- end section -->
<!-- section -->
<div class="section padding_layout_1" style="margin-top: 7px; margin-bottom: 7px;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
            <h3>Algunos Captures de Nuestros desarrollos</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="full blog_colum">
          <div class="blog_feature_img"> <img src="images/it_service/des5.JPG" alt="#" /> </div>
         
        </div>
      </div>

      <div class="col-md-4">
        <div class="full blog_colum">
          <div class="blog_feature_img"> <img src="images/it_service/des4.png" alt="#" /> </div>
          
        </div>
      </div>

      <div class="col-md-4">
        <div class="full blog_colum">
          <div class="blog_feature_img"> <img src="images/it_service/des6.png" alt="#" /> </div>
          
        </div>
      </div>

      <div class="col-md-4">
        <div class="full blog_colum">
          <div class="blog_feature_img"> <img src="images/it_service/des55.png" alt="#" /> </div>
          
        </div>
      </div>

      <div class="col-md-4">
      <div class="full blog_colum">
        <div class="blog_feature_img"> <img src="images/it_service/des88.png" alt="#" /> </div>
        
      </div>
    </div>

    <div class="col-md-4">
    <div class="full blog_colum">
      <div class="blog_feature_img"> <img src="images/it_service/des13.png" alt="#" /> </div>
      
    </div>
  </div>

  <div class="col-md-4">
    <div class="full blog_colum">
      <div class="blog_feature_img"> <img src="images/it_service/des15.png" alt="#" /> </div>
      
    </div>
  </div>

    <div class="col-md-4">
      <div class="full blog_colum">
        <div class="blog_feature_img"> <img src="images/it_service/des89.png" alt="#" /> </div>
        
      </div>
    </div>

    <div class="col-md-4">
      <div class="full blog_colum">
        <div class="blog_feature_img"> <img src="images/it_service/des98.png" alt="#" /> </div>
        
      </div>
    </div>

    <div class="col-md-4">
    <div class="full blog_colum">
      <div class="blog_feature_img"> <img src="images/it_service/des16.png" alt="#" /> </div>
      
    </div>
  </div>

    <div class="col-md-4">
      <div class="full blog_colum">
        <div class="blog_feature_img"> <img src="images/it_service/des12.jpg" alt="#" /> </div>
        
      </div>
    </div>

    <div class="col-md-4">
    <div class="full blog_colum">
      <div class="blog_feature_img"> <img src="images/it_service/des99.png" alt="#" /> </div>
      
    </div>
  </div>

      
    </div>
  </div>
</div>
 <!-- section -->
<!-- section -->

<!-- end section -->
<!-- section -->

<div class="section" >
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="contact_us_section" style="margin-top: 10px;">
            <div class="call_icon"> <img src="images/it_service/phone_icon.png" alt="#" /> </div>
            <div class="inner_cont">
              <h2>CONTACTA AL EQUIPO</h2>
              <p>Solicita una cotización de acuerdo a tus necesidades.</p>
            </div>
            <div class="button_Section_cont"> <a class="btn dark_gray_bt" href="#" onclick="caa()">Enviar Mensaje</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<!-- section -->
<div class="section padding_layout_1" style="padding: 50px 0;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
        <h4>ALGUNOS DE NUESTROS CLIENTES</h4>
          <ul class="brand_list">
            <li style="color: #000"><img src="images/it_service/madrinas.png" alt="#" width="80" height="50" /><br>Madrinas de Cardenales</li>
            <li style="color: #000"><img src="images/it_service/idea.jpg" alt="#" width="80" height="50"/><br>Social Idea CA</li>
            <li style="color: #000"><img src="images/it_service/logo.png" width="80" height="50" alt="#" /><br>Curvy Divas CA</li>
            <li style="color: #000"><img src="images/it_service/sumelca.png" width="80" height="50" alt="#" /><br>Distribuidora SUMEL CA.</li>
            <li style="color: #000"><img src="images/it_service/mabelca.png" width="80" height="50" alt="#" /><br>Electricos Mabelca</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<!-- Modal -->
<div class="modal fade" id="search_bar" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8 offset-lg-2 offset-md-2 offset-sm-2 col-xs-10 col-xs-offset-1">
            <div class="navbar-search">
              <form action="#" method="get" id="search-global-form" class="search-global">
                <input type="text" placeholder="Type to search" autocomplete="off" name="s" id="search" value="" class="search-global__input">
                <button class="search-global__btn"><i class="fa fa-search"></i></button>
                <div class="search-global__note">Begin typing your search above and press return to search.</div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>';
}


if(isset($_REQUEST['email'])){
	$email = $_REQUEST['email'];
	$telefono = $_REQUEST['telefono'];
	$asunto = $_REQUEST['asunto'];
	$descripcion = $_REQUEST['descripcion'];
	$nombre = $_REQUEST['nombre'];

	bot('Solicitud de servicio de Kron Developers:

		Correo: '.$email.'
		Telefono: '.$telefono.'
		Asunto: '.$asunto.'
		Razon Social: '.$nombre.'

		Descripcion: '.$descripcion);
		
	echo '<div class="alert noti alert-success"><strong>Hemos Recibido su solicitud. Nos pondremos en contacto con usted en las siguientes horas...</strong></div>';
	}
?> 
