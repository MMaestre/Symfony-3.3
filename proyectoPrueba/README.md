proyectoPrueba
==============

**January 31, 2018, 12:31 pm.** <br/>
* Creación del proyecto.
* Creación de Bundle básico
  * Creación de Controller básico -> LuckyNumberController
  * Utilización de template en el Controller.
* Unión con Doctrine
  * Creación de BB.DD. -> test_project
  * Creación de Entidad -> Product
  * Creación de Repositorio -> ProductRepository.<br/>
  
**February 2, 2018, 15:12 pm.** <br/>
* Formularios
  * Creación de formulario con Repositorio de Symfony -> FormController
  * Unión con Entidad y BB.DD .
  * Listado de resultados al final de cada inserción -> ListController 
  * Utilización de template en ambos casos.
* Validación de los datos
  * Validación de los datos en las entidades @Assert 
  * Creación de validaciones propias -> IsInDBValidator
  
**February 5, 2018, 16:14 pm.** <br/>
* Formularios
  * Creación y uso de validaciones propias -> IsInDBValidator
  * Renderización personalizada de formulario y errores -> form/fields.html.twig && default/form.html.twig