
 # Aplicación agenda de citas psicologicas con CodeIgniter: implementandando librerias HMVC y ion_auth 
     
   El siguiente documento explica como implementar el patron HMVC en el framework CodeIgniter junto con la libreria para autenticacion ion_auth adicionalemte se implementó la libreria de autenticacion ion_auth junto el paron HMVC. 
     
   ## HMVC
   HMVC es una version mejorada del classico MVC de toda la vida el cual le da mucha mas flexibilidad y orde a nuestro codigo el cual nos ofrece las siguientes caracteriticas.
     
   * **Modularización:** Reducción de dependencias entre las partes dispares de la aplicación.
   * **Organización:** Tener una carpeta para cada una de las triadas relevantes hace que la carga de trabajo sea más ligera.
   * **Reutilización:** Por la naturaleza del diseño, es fácil reutilizar casi cada pieza de código.
   * **Extenibilidad:** Hace que la aplicación sea más extensible sin sacrificar la facilidad de mantenimiento.
   
  ## Ion_auth
  Ion Auth es una libreria de autenticación simple y liviana para el framework CodeIgniter
     
   ## Requisitos.
   * Version PHP minima version 5 
   * Instalación limpia de [Codeigniter](https://codeigniter.com/)
   * [HMVC modules](https://github.com/anburocky3/Latest-Codeigniter-3-HMVC-Modules) (este es el repositorio usado en este trabajo).
   * libreria [ion_auth](http://benedmunds.com/ion_auth/)
   ## Instalación.
   ### Codeigniter:
   La instalación de [Codeigniter](https://codeigniter.com/) seria la misma que se aplica en la pagina oficial, simplemente se cambiaria el nombre del carpeta por el nombre de nuestro poryecto, en nuestro caso psicology_app y guardarlo en nuestro la carpeta htdoc de xamp o lo que proceda.
  ### HMVC-Modules:
  Al descarga la libreria [HMVC-Modules](https://github.com/anburocky3/Latest-Codeigniter-3-HMVC-Modules) veremos una escrutura de carpetas identica a la usada por Codeigniter donde lo que debemos hacer es pegar cada uno de los archivos presentes en su respetetiva carpeta en Codeigniter.
  
  En el siguietne link explican mas detalladamente el proceso de intalacion [HMVC: Una introducción y aplicación](https://code.tutsplus.com/es/tutorials/hmvc-an-introduction-and-application--net-11850)
     
   ### ion_auth:
   La intalación de ion_auth estan sencilla como se muestra en [la pagina oficial](http://benedmunds.com/ion_auth/). Para que ion_auth funcione de vemos tener un nuestra base de datos las tablas con los usuarios que nos facilita la misma liberia lo cual podemos correr facilmente desde la consola mysql con el comando: ``` source /ubicacionproyecto/sql/ion_auth.sql ```
   
   ## HMVC-Modules y ion_auth.
   
 La implementación de HMVC en la libreria ion_auth es realmente sencilla, basta con crear en la carpeta modules una carpeta con el nombre Auth, en el caso de este proyecto la direccion quedaria algo así: ``` psicology_app/application/modules/Auth ``` en la carpeta Auth crearemos la triada del modulo con las carpetas controller, models y view. En estas carpetas moveremos tanto el controlador de la libreria ion_auth, el modelos y las vistas. la estructura debe quedar de la siguiente manera: 
 
 ```
 modules
       └ Auth
            └ controllers
                        └ Auth.php
            └ modules
                    └ Ion_auth_model.php
            └ view
                 └ auth
                      └ todo los archivos .php que hayan en esa carpeta de vistas

 ```
Para terminar implemantar el patron HMVC y poder usar sus caractirticas debemos cambiar en el controlador de donde extidende. ya no seria del ``` IC_Controller ``` (controlador de codeignider) sino que extenderia de ```MX_Controller```. lo mismo seria aplicable para todos los demas controladores que creemos.
 
