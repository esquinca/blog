<!DOCTYPE html>
<html>
<head>
	<title>Iberostar</title>
	<link rel="stylesheet" href="estilos.css" />
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

		(function () {
            var MOBILE_SITE = '/mobile/index.html', // site to redirect to
                NO_REDIRECT = 'noredirect'; // cookie to prevent redirect
            // I only want to redirect iPhones, Android phones and a handful of 7" devices

            // Mover a página de redirección.
            if (isMobile.apple.device || isMobile.android.phone || isMobile.seven_inch) {

            	if (isMobile.apple.device){
            		console.log('hola ios');
            		var name_game= "iberostar-hotels-resorts";
            		var id_game = "922530529";
            		fallbackLink = getstoreios(name_game, id_game);
            	}
	            if (isMobile.android.phone) {
	            	console.log('hola android');
	            	var id_game= 'com.mo2o.iberostar';
	            	fallbackLink = getstoreandroid(id_game);
	            }

                // Only redirect if the user didn't previously choose
                // to explicitly view the full site. This is validated
                // by checking if a "noredirect" cookie exists
                if ( document.cookie.indexOf(NO_REDIRECT) === -1 ) {
                    document.location = fallbackLink;
                    //window.location.replace(fallbackLink);
                }
            }

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
                    <!-- <h4>Ya cuentas con acceso a internet.</h4> -->
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
												<h3>Ya cuentas con acceso a internet.</h3>
                        <h4>DESCARGA NUESTRA APP!</h4>
                        <br>
                      </td>
                    </tr>
                  </table>

                  <center>
                    <table cellspacing="0" cellpadding="0" width="500" class="w320">
		              <tr>
		                <td valign="top" style="padding:0px 0; text-align:center;" class="mobile-center">
		                  <a href="https://play.google.com/store/apps/details?id=com.mo2o.iberostar&hl=en"><img width="150" height="62" src="img/app-android.svg"></a>
		                  <a href="https://itunes.apple.com/mx/app/iberostar-hotels-resorts/id922530529?l=en&mt=8"><img width="150" height="62" src="img/app-ios.svg"></a>
		                </td>
		              </tr>
		            </table>
                  </center>
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

</body>
</html>
