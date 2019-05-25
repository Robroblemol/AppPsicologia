
 # Aplicación agenda de citas psicologicas con CodeIgniter: implementandando librerias HMVC y ion_auth 
     
   El siguiente documento explica como implementar el patron HMVC en el framework CodeIgniter junto con la libreria para autenticacion ion_auth adicionalemte se implementó la libreria de autenticacion ion_auth junto el paron HMVC. 
     
   ## HMVC
   HMVC es una version mejorada del classico MVC de toda la vida, el cual le da mucha mas flexibilidad y orde a nuestro codigo, nos ofrece las siguientes caracteriticas.
     
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

## Uso de HMVC en el proyecto.

El patron HMVC nos da acceso a caracteristicas que nos ayudan a reutilizar nuestro codigo, veamos la siguietnes lineas de codigo del modulo home de nuestro proyecto psicology_app:

```
public function index()
    {
       $datos ["title"]= "Inicio";
       $datos ["app"] = "Seguimiento psicologico";
       $this->load->view('/home/head',$datos);
       $this->load->view('/home/nav',$datos);
       $this->load->view('/home/header',$datos);
       $this->load->view('/home/content');
       $this->load->view('/home/footer');
    }
```
La función index del modulo home simplemente nos devuelve la vista principal de la aplicación. Donde lo que tenemos son porciones de HTML que vamos construyendo utilizando la clase load. Si bien podriamos hacer esto mismo con un solo archivo de vista, gracias a HMVC podemos reutilizar todos estos archivos en otros modulo,hacemos esto de la siguiente manera:

###  Creado funciones para reutilizar.
En nuestro controlador Home hemos creado las siguientes funciones
 ```
  public function get_head(){
    $this->load->view('/home/head');
   }
  public function get_nav(){     
   $this->load->view('/home/nav',$datos);  
  }
  public function get_header(){
     $this->load->view('/home/header',$datos);
  }
  public function get_footer(){
    $this->load->view('/home/footer');
  }

 ```
 Estas funciones lo que hacen es cargar individualmente las porciones de HTML correspondientes al head, nav, header y footer los cuales se pueden utilizar en todos los demas modulos como se muestra a continuacion en la vista del modulo appintments.
 
 ```
 <?php 
    
    echo modules::run("Home/get_head");
    echo modules::run("Home/get_nav");
    echo modules::run("Home/get_header");
    echo modules::run("Appointments/get_table");
    echo modules::run("Home/get_footer");

?>
 ```
 Lo anterio corresponde a todo el codigo de la vista principal del modulo appointments ([Appointment_view.php](https://github.com/Robroblemol/AppPsicologia/blob/master/application/modules/Appointments/views/Appointments_view.php)). para aceder al modulo se hace atraves de ``` modules::run() ``` que recibe como parámetro el nombre del controlador y separado por un slash el nombre de la función a la que queremos acceder, esto se puede hacer incluso al mismo controlador a la que pertenece la vista! 

### Llamando controladores desde otros controladores.

 Bueno, para ser mas precisos lo que en verdad se está haciendo es llamando modulos desde otros modulos, pero controladores desde otros controladores, recuerda el patron MVC y a su ves muestra lo poderoso el patron HMVC. En el ejemplo anterior se hace el llamado de los modulos desde una vista, ahora haremos lo mismo desde el controlador Home.
 
 En el nav se encuentran el icono de notificacion el cual se utilizará para notificar las citas que se han creado. Pensemos un momento en como hariamos esto en patron MVC, se tendria que instanciar el modelo de citas y crear en el controlador Home la función ``` get_appointments ``` la cual ya existe (o deberia existir) en el controlador appointments, se está repitiendo codigo! no solo se está repitiendo código sino que se esta asignando otra dependencia al controlador Home, una dependencia que no es la principal del controlador. por suerte utilizando HMVC podemos evitar esto.
 
 ```
 public function get_nav(){
    $datos['citas']=count(
        modules::run("Appointments/get")['get']
        );
    $this->load->view('/home/nav',$datos);
    
    }
public function get_header(){
    $datos['citas']=count(
        modules::run("Appointments/get")['get']
        );
    $this->load->view('/home/header',$datos);
}
 
 ```
 Tanto para la función get_nav() y get_header() se ha agregado el codigo ``` $datos['citas']=count(modules::run("Appointments/get")['get']) ``` donde el modulo appointment nos de vuelve un arreglo de objetos llave valor con la informacion de las citas y lo que hacemos es contar cuantos items hay con la funcion count() y luego le pasamos estos datos a la vista, esto grarantiza la funcionalidad de las notificacion de las citas sin importar desde donde sea llamada.
 
 ### Restringiendo acceso módulos.
 El acceso a la aplicación se debe realizar con un login previo, para verificar esto en el constructor de Home se verificar si el usuario ya realizó el login, para esto se creo la funcion ``` logged_in() ``` en el controlador Auth el cual devolvera true o false. asi quedaria el constructor: 
 
 ```
 function __construct()
    {
        parent::__construct();
 
        $this->load->database();
        $this->load->helper('url');//este objeto permite cargar las url
        $this->load->library('session');
        //verificamos si el usuario esta registrado
        modules::run("Auth/logged_in");
        
    }
 
 ```
   
Donde en la funcion ```logged_in()``` hace lo siguiente:
```
public function logged_in(){
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('Auth/login', 'refresh');
		}
	}
```
Como se ve esta funcion evalua si el usauario actual esta logeado si no es el caso lo redirige al login. Al estar este llamado de funcion en el constructur del Home es extencible a todos los modulos los cuales utilizan las vistas de home (get_head, get_nav, get_header y get_footer) lo que nos ahorra tener agregar mas lineas a los demas modulos.

## Referencias

* [Documantación codeigniter](https://www.codeigniter.com/user_guide/).
* [HMVC: Una introducción y aplicación](https://code.tutsplus.com/es/tutorials/hmvc-an-introduction-and-application--net-11850).
* [Ion_auth](http://benedmunds.com/ion_auth/).
* [Manual php](https://www.php.net/manual/es/intro-whatis.php).
* [Tutorial codeigniter #8 Plantillas de Bootstrap](https://www.youtube.com/watch?v=lDWo5pgcnZk&t)
* [Una plantilla para hacer un buen README.md. Inspirado en el gist de @PurpleBooth](https://gist.github.com/Villanuevand/6386899f70346d4580c723232524d35a)
