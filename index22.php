<!DOCTYPE html>
<html lang="es">
<head>
<title>Ejemplo</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="estilos.css" />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="alternate" title="Pozolería RSS" type="application/rss+xml" href="/feed.rss" />
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
            if (isMobile.apple.phone || isMobile.android.phone || isMobile.seven_inch) {
          
            	if (isMobile.apple.phone){
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

</head>
 
<body>
    <header>
       <h1>Mi sitio web</h1>
       <p>Mi sitio web creado en html5</p>
    </header>
    <section>
       <article>
           <h2>Titilo de contenido<h2>
           <p> Contenido (ademas de imagenes, citas, videos etc.) </p>
       </article>
    </section>
    <aside>
       <h3>Titulo de contenido</h3>
           <p>contenido</p>
    </aside>
    <footer>
        Footer
    </footer>
</body>
</html>