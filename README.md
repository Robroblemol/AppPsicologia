
 # Aplicación agenda de citas psicologicas con CodeIgniter: implementandando librerias HMVC y ion_auth 
     
   El siguiente documento explica como implementar el patron HMVC en el framework CodeIgniter junto con la libreria para autenticacion ion_auth adicionalemte se implementó la libreria de autenticacion ion_auth junto el paron HMVC. 
     
   ### HMVC
   HMVC es una version mejorada del classico MVC de toda la vida el cual le da mucha mas flexibilidad y orde a nuestro codigo el cual nos ofrece las siguientes caracteriticas.
     
   * **Modularización:** Reducción de dependencias entre las partes dispares de la aplicación.
   * **Organización:** Tener una carpeta para cada una de las triadas relevantes hace que la carga de trabajo sea más ligera.
   * **Reutilización:** Por la naturaleza del diseño, es fácil reutilizar casi cada pieza de código.
   * **Extenibilidad:** Hace que la aplicación sea más extensible sin sacrificar la facilidad de mantenimiento.
     
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
     
   ### oin_auth:
   La intalación de ion_auth estan sencilla como se muestra en [la pagina oficial](http://benedmunds.com/ion_auth/) para que ion_auth funcione de vemos tener un nuestra base de datos las tablas con los usuarios que nos facilita la misma liberia lo cual podemos correr facilmente desde la consola mysql con el comando: ``` source /ubicacionproyecto/sql/ion_auth.sql ```
   
