<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  	<meta name="viewport" content="width=device-width, initial-scale=1" />
  	<title>Blog</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="stylesheet" href="estilos.css" />
      <!-- jQuery Library -->
    <script src="js/jquery-1.11.2.min.js"></script>
  	<script src="plugin/isMobile-master/isMobile.js"></script>
  	<script type="text/javascript">
		function getstoreios(appName, appId) {
			var baseurl = "itms-apps://itunes.apple.com/app/";
        	var name = appName;
        	var id = appId;
			var ruta = baseurl + name + "/id" + id;
			return ruta;

		}
		function getstoreandroid(appId) {
			var baseurl = "https://play.google.com/store/apps/details?id=";
	        var id = appId;
	        var ruta = baseurl + id;
			return ruta;
		}
    function cronometro() {
         var cronometro;
         var contador_s =0;
	       var contador_m =0;
	       var s = document.getElementById("segundos");
	       var m = document.getElementById("minutos");
         cronometro = setInterval(
 	            function(){
 	                if(contador_s==60)
 	                {
 	                    contador_s=0;
 	                    contador_m++;
                      console.log(contador_m);
                      document.getElementById('minutos').innerHTML = contador_m;
 	                   //  m.innerHTML = contador_m;
 	                    if(contador_m==60)
 	                    {
 	                        contador_m=0;
 	                    }
 	                }
                  document.getElementById('segundos').innerHTML = contador_s;
                  console.log(contador_s);
 	               //  s.innerHTML = contador_s;
 	                contador_s++;
 	            }
 	            ,1000);
    }

    function mostrar(){
      document.getElementById("mostrarbtn").style.display="block";
      document.getElementById("mostrarbtn2").style.display="block";
    }

    function cronometro_inverso() {
         var cronometro;
         var contador_s =10;
         cronometro = setInterval(
 	       function(){
 	            if(contador_s==0)
 	            {
                document.getElementById('segundos').innerHTML = 0;
                mostrar();
                setTimeout(function(){
                  $('#formpr').submit();
                }, 1000);
                console.log('detener');
 	            }
              else {
                document.getElementById('segundos').innerHTML = contador_s;
                console.log(contador_s);
                contador_s--;
              }
 	       },1200);
    }

		(function () {
            var MOBILE_SITE = '/mobile/index.html', // site to redirect to
                NO_REDIRECT = 'noredirect'; // cookie to prevent redirect
                cronometro_inverso();
            // I only want to redirect iPhones, Android phones and a handful of 7" devices
            
            // Mover a página de redirección.
            // if (isMobile.apple.device || isMobile.android.phone || isMobile.seven_inch) {

            // 	if (isMobile.apple.device){
            // 		console.log('hola ios');
            // 		var name_game= "iberostar-hotels-resorts";
            // 		var id_game = "922530529";
            // 		fallbackLink = getstoreios(name_game, id_game);
            // 	}
	           //  if (isMobile.android.phone) {
	           //  	console.log('hola android');
	           //  	var id_game= 'com.mo2o.iberostar';
	           //  	fallbackLink = getstoreandroid(id_game);
	           //  }

            //     // Only redirect if the user didn't previously choose
            //     // to explicitly view the full site. This is validated
            //     // by checking if a "noredirect" cookie exists
            //     if ( document.cookie.indexOf(NO_REDIRECT) === -1 ) {
            //         document.location = fallbackLink;
            //         //window.location.replace(fallbackLink);
            //     }
            // }

        })();
	</script>

  <style type="text/css" media="screen">
    @media screen {
       /* Thanks Outlook 2013! http://goo.gl/XLxpyl*/
      td, h1, h2, h3 {
        font-family: 'Lato', 'Helvetica Neue', 'Arial', 'sans-serif' !important;
      }
    }
  </style>

  <style type="text/css" media="only screen and (max-width: 480px)">
    /* Mobile styles */
    @media only screen and (max-width: 480px) {

      table[class="w320"] {
        width: 320px !important;
      }

      table[class="w300"] {
        width: 300px !important;
      }

      table[class="w290"] {
        width: 290px !important;
      }

      td[class="w320"] {
        width: 320px !important;
      }

      td[class="mobile-center"] {
        text-align: center !important;
      }

      td[class="mobile-padding"] {
        padding-left: 20px !important;
        padding-right: 20px !important;
        padding-bottom: 20px !important;
      }
    }
  </style>
</head>
<body class="body" style="padding:0; margin:0; display:block; background:#ffffff; -webkit-text-size-adjust:none" bgcolor="#ffffff">
<table align="center" cellpadding="0" cellspacing="0" width="100%" height="100%" >
  <tr>
    <td align="center" valign="top" bgcolor="#ffffff"  width="100%">

    <table cellspacing="0" cellpadding="0" width="100%">
      <tr>
        <td style="border-bottom: 3px solid #3bcdc3;" width="100%">
          <center>
            <table cellspacing="0" cellpadding="0" width="500" class="w320">
              <tr>
                <td valign="top" style="padding:10px 0; text-align:left;" class="mobile-center">
                  <img width="250" height="62" src="img/logo.svg">
                </td>
              </tr>
            </table>
          </center>
        </td>
      </tr>
      <tr>
        <td background="img/T0810COVER3.jpg" bgcolor="#64594b" valign="top" style="background: url(img/T0810COVER3.jpg) no-repeat center; background-color: #64594b; background-position: center;">
          <!--[if gte mso 9]>
          <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="mso-width-percent:1000;height:303px;">
            <v:fill type="tile" src="https://www.filepicker.io/api/file/ewEXNrLlTneFGtlB5ryy" color="#64594b" />
            <v:textbox inset="0,0,0,0">
          <![endif]-->
          <div>
            <center>
              <table cellspacing="0" cellpadding="0" width="530" height="200" class="w320">
                <tr>
                  <td valign="middle" style="vertical-align:middle; padding-right: 15px; padding-left: 15px; text-align:left;" class="mobile-center" height="200">

                    <!--<h1 style="color: #3bcdc3">BIENVENIDO!</h1><br>-->
                    <h4>En este año, gracias por venir a disfrutar de nuestro lujoso miembro de la familia Iberostar en Cancún. Con servicio todo incluido, y alojamiento de cinco estrellas.</h4>
                  </td>
                </tr>
              </table>
            </center>
          </div>
          <!--[if gte mso 9]>
            </v:textbox>
          </v:rect>
          <![endif]-->
        </td>
      </tr>
      <tr>
        <td valign="top">

          <center>
            <table cellspacing="0" cellpadding="30" width="500" class="w290">
              <tr>
                <td valign="top" style="border-bottom:1px solid #a1a1a1;">

                  <table cellspacing="0" cellpadding="0" width="100%">
                    <tr>
                      <td style="text-align: center;">
                        <!--<h3>Descarga Nuestra App en!</h3>-->
                        <h3>DESCARGA NUESTRA APP!</h3>
                        <br>
                      </td>
                    </tr>
                  </table>

                  <center>
                    <table cellspacing="0" cellpadding="0" width="500" class="w320">
		              <tr>
		                <td valign="top" style="padding:0px 0; text-align:center;" class="mobile-center">
		                  <img width="150" height="62" src="img/app-android.svg">
		                  <img width="150" height="62" src="img/app-ios.svg">
		                </td>
		              </tr>
		            </table>
                  </center>
                </td>
              </tr>
            </table>
            <table cellspacing="0" cellpadding="0" width="500" class="w320">
              <tr>
                <td>
                  <br>
                  <table style="margin: 0 auto;" cellspacing="0" cellpadding="8" width="250">
                    <tr>
                      <td style="border: 1px solid #a1a1a1; text-align:center;">
                        Tiempo de espera: <span style="font-family: Courier;" id="segundos"></span>
                      </td>
                    </tr>
                  </table>


                  <table id="mostrarbtn" style="display:none" cellspacing="0" cellpadding="0" width="100%">
                    <tr>
                      <td class="mobile-padding" style="text-align:left;">
                        En dado caso que no lo redireccione de manera automatica.
                        <br>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr>
                <td class="mobile-padding" id="mostrarbtn2" style="display:none">
                  <table cellspacing="0" cellpadding="0" width="100%">
                    <tr>
                      <td style="width:150px; background-color: #3bcdc3;">
                        <div><!--[if mso]>
                            <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="#" style="height:33px;v-text-anchor:middle;width:150px;" arcsize="8%" stroke="f" fillcolor="#3bcdc3">
                              <w:anchorlock/>
                              <center style="color:#ffffff;font-family:sans-serif;font-size:13px;">Come back!</center>
                            </v:roundrect>
                          <![endif]-->
                          <!--[if !mso]><!-- --><a href="#"><table cellspacing="0" cellpadding="0" width="100%"><tr><td style="background-color:#3bcdc3;border-radius:0px;color:#ffffff;display:inline-block;font-family:'Lato', Helvetica, Arial, sans-serif;font-weight:bold;font-size:13px;line-height:33px;text-align:center;text-decoration:none;width:150px;-webkit-text-size-adjust:none;mso-hide:all;"><span style="color:#ffffff">Click Continuar!</span></td></tr></table></a>
                          <!--<![endif]-->
                        </div>
                      </td>
                      <td>
                        &nbsp;
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr>
                <td>
                  <table cellspacing="0" cellpadding="25" width="100%">
                    <tr>
                      <td>
                        &nbsp;
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </center>
        </td>
      </tr>

    </table>
    </td>
  </tr>
</table>
<form method="POST" action="http://172.200.5.55:9997/login" id="formpr" role="login">
      <input type="hidden" id="username" name="username" value="TESTX" class="form-control" />
      <input type="hidden" id="password" name="password" value="123" class="form-control" />
      <input type="hidden" name="sip" value="<?php echo $_GET['sip']; ?>" class="form-control" />
      <input type="hidden" name="mac" value="<?php echo $_GET['mac']; ?>" class="form-control" />
      <input type="hidden" name="client_mac" value="<?php echo $_GET['client_mac']; ?>" class="form-control" />
      <input type="hidden" name="uip" value="<?php echo $_GET['uip']; ?>" class="form-control" />
      <input type="hidden" name="ssid" value="<?php echo $_GET['ssid']; ?>" class="form-control" />
      <input type="hidden" name="vlan" value="<?php echo $_GET['vlan']; ?>" class="form-control" />
      <input type="hidden" id="res" name="res" value="<?php echo $_GET['res']; ?>" class="form-control" />
      <input type="hidden" id="auth" name="auth" value="<?php echo $_GET['auth']; ?>" class="form-control" />
</form>
</body>
</html>
