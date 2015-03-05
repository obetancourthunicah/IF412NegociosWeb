<h2>Desarrollo de Negocios Web</h2>
<p>
  Este es un simple ejemplo de como podemos utilizar php y los conceptos de un patrón MVC para estructurar un proyecto de negocio web usando un esquema funcional. El patrón "Modelo, Vista Controlador" es utilizando en muchos lenguages de programación por su forma lógica y versatil de organizar el código. Dentro de los beneficios que ofrece el implementarlo se encuentra:
  <ol>
   <li>
     Separación Lógica Módular del Código
   </li>
   <li>
     Adecuado para trabajo en equipo y con sistemas de versionamiento (git)
   </li>
   <li>
     Establecimiento de Responsabilidad de Código
   </li>
  </ol>
</p>
<h2>Componentes del MVC</h2>
<p>
  En este ejemplo se encuentra los siguientes componentes:
  <ol>
    <li>
      <b>index.php</b> Contiene Toda la lógica de enrutamiento, solo por este punto de entrada es que el sistema completo atiende peticiones.
    </li>
    <li>
      <b>controllers/archivo.control.php</b> Es el controlador llamado por el index.php para coordinar las acciones en el sistema.
    </li>
    <li>
      <b>models/archivo.model.php</b> Cuando se requiere de acceso a datos, se utilizan estos archivos para encapsular todo acceso a la capa de datos. El controlador es quien se encarga de incluir los modelos necesarios para realizar una acción.
    </li>
    <li>
      <b>views/archivo.view.tpl</b> Son las vistas o plantillas html con marcado especial que permite al controlador mediante un generador ligar los datos de un modelo con las vista que se muestra al usuario final.
    </li>
  </ol>
</p>
<img class="postimage" src="public/img/mvcDiagram.svg" />
