0)
-Extraer todo el contenido en una carpeta llamada kron en el servidor
-Mover el contenido de /public al /public_html del servidor
-verificar en /public_html que las lineas 24 y 38 de index.php apunten a la ruta que deben dentro de la carpera kron (Yo ya edite esto pero mejor revisar por si acaso.)


1)
Cambiar las siguientes lineas:


linea 58 colocar -> app/config/app.php -> ip del host

linea 43, 49, 49 -> app/config/database.php ->  ip del host, el usuario y constrasena de la base de datos.



2) 
Cambiar la configuracion de php en el php.ini para poder subir videos:

linea 665 php.ini del servidor -> cambiar post_max_size = 23M    --> 20 DE VIDEO + 3 DE IMAGEN
linea 818 php.ini del servidor -> upload_max_filesize = 20M


3) 

Para entrar como administrador visitar /admin/login

entrar con root@gmail.com
password root123

para entrar como usuario usar comun 

usar user1@gmail.com
password user1

usar user2@gmail.com
password user2

usar user3@gmail.com
password user3

usar user4@gmail.com
password user4




Si no funciona por favor (https://styde.net/instalar-laravel-5-en-un-servidor-compartido/)