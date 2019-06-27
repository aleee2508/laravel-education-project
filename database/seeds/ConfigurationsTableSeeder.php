<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\Configuration;

class ConfigurationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $cfg = array(
                array('name' => 'pagina principal titulo','content' => '¿DÓNDE QUIERES TRABAJAR?','is_active' => 1),
                array('name' => 'pagina principal seccion oferta titulo','content' => 'Oferta Académica','is_active' => 1),
                array('name' => 'pagina principal seccion oferta texto1','content' => 'Llevamos más de 25 años formando a los mejores profesionales del sector, en el Centro de Formación San Juan lo tenemos todo preparado para que solo tengas que decidir la carrera de tu vida profesional.
Tú decides.','is_active' => 1),
                array('name' => 'pagina principal seccion oferta texto2','content' => 'Impartimos cursos de formación con preferencia a desempleados de la Comunidad de Madrid orientados a la obtención de la certificación de los principales fabricantes del sector TIC, además de certificados de profesionalidad y cursos de idiomas.','is_active' => 1),
                array('name' => 'pagina principal seccion oferta texto3','content' => 'a calidad se mide en confianza. Por ello nos sentimos más que orgullosos de contar con más de 731 empresas en nuestra bolsa de trabajo, profesionales que confían en la preparación con que nuestros alumnos comienzan sus carreras.','is_active' => 1),
                array('name' => 'pagina principal seccion informacion titulo','content' => 'Información del Centro Académico','is_active' => 1),
                array('name' => 'pagina principal seccion informacion texto','content' => 'Desde que en 1950 ocuparon sus aulas el primer centenar de alumnos, ha ido creciendo hasta su configuración actual, con el paso del tiempo se ha ido reconstruyendo y ampliando sus instalaciones, reabriendo sus puertas a la actividad docente. Desde entonces ha sido un centro educativo que ha pretendido dar respuesta a las diversas necesidades de los jovenes que buscan obtener una formación, la cual será base y clave para poder labrarse un camino en un futuro laboral.','is_active' => 1),
                array('name' => 'pagina principal seccion noticias titulo','content' => 'Ultimas Noticias','is_active' => 1),
                array('name' => 'pagina principal seccion colaboradores titulo','content' => 'Colaboradores','is_active' => 1),
                array('name' => 'footer texto','content' => 'Pide mas información a través del formulario','is_active' => 1),
                array('name' => 'footer boton','content' => 'Contacta','is_active' => 1),
                array('name' => 'footer direccion','content' => 'ContactaDirección: C/San Juan de la Cruz S/N, 28223 Pozuelo de Alarcón, Madrid ','is_active' => 1),
                array('name' => 'footer telefono','content' => 'Tfno: +(34)91 342 23 89 Fax: +(34)91 322 11 23 ','is_active' => 1),
                array('name' => 'rrss email','content' => 'mailto:centrodeformacion.com','is_active' => 1),
                array('name' => 'rrss twitter','content' => 'http://www.twitter.com','is_active' => 1),
                array('name' => 'rrss facebook','content' => 'http://www.facebook.com','is_active' => 1),
                array('name' => 'pagina nuestro centro titulo','content' => 'Nuestro Centro','is_active' => 1),
                array('name' => 'pagina nuestro centro texto1','content' => 'Desde que en 1950 ocuparon sus aulas el primer centenar de alumnos, ha ido creciendo hasta su configuración actual, con el paso del tiempo se ha ido reconstruyendo y ampliando sus instalaciones, reabriendo sus puertas a la actividad docente.','is_active' => 1),
                array('name' => 'pagina nuestro centro texto2','content' => 'Desde entonces ha sido un centro educativo que ha pretendido dar respuesta a las diversas necesidades de los jovenes que buscan obtener una formación, la cual será base y clave para poder labrarse un camino en un futuro laboral.','is_active' => 1),
                array('name' => 'pagina nuestro centro texto3','content' => 'Contamos con diversas instalaciones las cuales cubren las diferentes necesidades de la formación correspondiente, renovadas año tras año para poder ofrecer el mayor servicio junto al personal cuailificado.','is_active' => 1),
                array('name' => 'pagina secretaria titulo','content' => 'Secretaría','is_active' => 1),
                array('name' => 'pagina secretaria subtitulo','content' => 'Información General','is_active' => 1),
                array('name' => 'pagina secretaria texto1','content' => 'Horario de Secretaría: de octubre a junio en días lectivos. Únicamente en horario de mañana','is_active' => 1),
                array('name' => 'pagina secretaria texto2','content' => 'de Lunes a Viernes de 10:00 a 13:00','is_active' => 1),
                array('name' => 'pagina secretaria texto3','content' => 'Los certificados de estudios se solicitarán en Secretaría y se entregarán en un plazo de 72 horas lectivas.','is_active' => 1),
                array('name' => 'pagina noticias titulo','content' => 'Noticias','is_active' => 1),
                array('name' => 'pagina contacto titulo','content' => 'Contacto','is_active' => 1),
                array('name' => 'pagina formacion informatica titulo','content' => 'Formación en Informática','is_active' => 1),
                array('name' => 'pagina formacion sanidad titulo','content' => 'Formación en Sanidad','is_active' => 1),
                array('name' => 'pagina formacion administracion titulo','content' => 'Formación en Administración','is_active' => 1),
                array('name' => 'pagina grado medio informatica titulo','content' => 'Grado Medio de Informática','is_active' => 1),
                array('name' => 'pagina grado medio informatica texto1','content' => 'En esta formación aprenderás a instalar, configurar y mantener sistemas microinformáticos, aislados o en red, así como redes locales en pequeños entornos. Además, estos estudios incluyen los conocimientos necesarios para llevar a cabo las actividades de nivel básico de prevención de riesgos laborales.','is_active' => 1),
                array('name' => 'pagina grado medio informatica texto2','content' => 'Por eso, al finalizar estos estudios, se puede trabajar en empresas del sector servicios que se dediquen a la comercialización, montaje y reparación de equipos, redes y servicios microinformáticos en general, como parte del soporte informático de la organización o en entidades de cualquier tamaño y sector productivo que utilizan sistemas microinformáticos y redes de datos para su gestión o seguir estudiando','is_active' => 1),
                array('name' => 'pagina grado medio informatica texto3','content' => 'Cabe señalar que este Ciclo Formativo Grado Medio en Sistemas Microinformáticos y Redes es uno de los perfiles profesionales más demandados por las empresas: según los datos del Observatorio de las Ocupaciones del Servicio Público de Empleo Estatal (SEPE), esta rama de FP fue una de las tres que registró un mayor número de contrataciones en el 2014, con un total de 25.955 contratos.','is_active' => 1),
                array('name' => 'galeria titulo general','content' => 'Galería de imágenes','is_active' => 1),
                array('name' => 'pagina grado superior informatica titulo','content' => 'Grado Superior de Informática','is_active' => 1),
                array('name' => 'pagina grado superior informatica texto1','content' => 'El mundo del desarrollo web está viviendo su mejor momento. Con una inserción laboral como ningún otro sector profesional, con una oferta de empleo incesante, cada vez son más quienes deciden formarse en esta materia. Por eso, en nuestro centro de formación hemos preparado los programas académicos más avanzados en desarrollo web, para que comiences tu carrera nada más acabar tu formación.','is_active' => 1),
                array('name' => 'pagina grado superior informatica texto2','content' => 'Vas a una entrevista de trabajo, te preguntan qué sabes dominar del diseño web y les dices que tanto el Back como el Front-End. Se quedan boquiabiertos. Y, por supuesto, te fichan. Porque ese es nuestro objetivo: formarte en el perfil más demandado actualmente por las empresas, agencias y estudios, el de Web Developer Full Stack.','is_active' => 1),
                array('name' => 'pagina grado superior informatica texto3','content' => 'En nuestro centro de formación te formarás con un programa especialmente orientado a tu preparación como experto en los lenguajes front-end HTML5 y CSS3, así como en el dominio del lenguaje de programación Javascript y sus dos principales frameworks: jQuery y Angular.','is_active' => 1),
                array('name' => 'pagina grado superior informatica texto4','content' => 'Además, completarás tu preparación con un conocimiento profesional de los lenguajes de programación Back-End PHP y XML, así como de gestores de bases de datos profesionales como MySQL, adentrándote en técnicas de desarrollo web imprescindibles en tu currículum, tales como Ajax.','is_active' => 1),
                array('name' => 'pagina grado medio administracion titulo','content' => 'Grado Medio de Administración','is_active' => 1),
                array('name' => 'pagina grado medio administracion texto1','content' => 'Con esta titulación oficial y homologada podrás trabajar como auxiliar administrativo en cualquier empresa o institución pública.','is_active' => 1),
                array('name' => 'pagina grado medio administracion texto2','content' => 'En el Grado Medio de Gestión Administrativa adquirirás los conocimientos básicos de gestión empresarial, de contabilidad y de confección de los principales modelos oficiales. Fórmate como auxiliar administrativo y elabora, gestiona y tramita documentos y comunicaciones. Y trabajarás también la atención al cliente y el apoyo a distintas áreas de la empresa.','is_active' => 1),
                array('name' => 'pagina grado medio administracion texto3','content' => 'Realizar actividades de apoyo administrativo en el ámbito laboral, contable, comercial, financiero y fiscal, así como de atención al cliente/usuario, tanto en empresas públicas como privadas, aplicando la normativa vigente y protocolos de calidad, asegurando la satisfacción del cliente y actuando según normas de prevención de riesgos laborales y protección ambiental.','is_active' => 1),
                array('name' => 'pagina grado superior administracion titulo','content' => 'Grado Superior de Administración','is_active' => 1),
                array('name' => 'pagina grado superior administracion texto1','content' => 'Obtén directamente y sin pruebas libres la titulación oficial y homologada de Administración y Finanzas y prepárate para trabajar como administrativo en cualquier empresa.','is_active' => 1),
                array('name' => 'pagina grado superior administracion texto2','content' => 'Este Grado Superior te preparará incluso para emprender y trabajar por tu cuenta. Aprende a crear y desarrollar un “business plan” y a interpretar sus proyecciones financieras y todo lo que se necesita para empezar a levantar cualquier negocio.','is_active' => 1),
                array('name' => 'pagina grado superior administracion texto3','content' => 'Este profesional ejerce su actividad tanto en grandes como en medianas y pequeñas empresas, en cualquier sector de actividad, y particularmente en el sector servicios, así como en las administraciones públicas, desempeñando las tareas administrativas en la gestión y el asesoramiento en las áreas laboral, comercial, contable y fiscal de dichas empresas e instituciones, ofreciendo un servicio y atención a los clientes y ciudadanos, realizando trámites administrativos con las administraciones públicas y gestionando el archivo y las comunicaciones de la empresa.','is_active' => 1),
                array('name' => 'pagina grado superior administracion texto4','content' => 'Podría ser trabajador por cuenta propia, efectuando la gestión de su propia empresa, o a través del ejercicio libre de una actividad económica, como en una asesoría financiera, laboral, estudio de proyectos, entre otros.','is_active' => 1),
                array('name' => 'pagina grado medio sanidad titulo','content' => 'Grado Medio de Sanidad','is_active' => 1),
                array('name' => 'pagina grado medio sanidad texto1','content' => 'El principal objetivo de esta formación es que nuestros alumnos puedan prestar atención básica sanitaria y psicológica en el entorno pre-hospitalario, trasladar al paciente al centro sanitario, llevar a cabo actividades de tele-operación y tele-asistencia sanitaria, colaborar en la organización y desarrollo de los planes de emergencia de los dispositivos de riesgo previsibles y de la logística sanitaria ante una emergencia individual, colectiva o catástrofe.','is_active' => 1),
                array('name' => 'pagina grado medio sanidad texto2','content' => 'Con esta profesión serás capaz de evacuar al paciente o víctima utilizando las técnicas de movilización e inmovilización y adecuando la conducción a las condiciones del mismo, para realizar un traslado seguro al centro sanitario de referencia. Aplicar técnicas de soporte vital básico ventilatorio y circulatorio en situación de compromiso y de atención básica inicial en otras situaciones de emergencia, entre otras cosas.','is_active' => 1),
                array('name' => 'pagina grado medio sanidad texto3','content' => 'Podrás trabajar en el sector sanitario relacionado con el traslado de pacientes o víctimas y la prestación de atención sanitaria y psicológica inicial, colaborando en la preparación y desarrollo de la logística sanitaria ante emergencias colectivas o catástrofes, así como participando en la preparación de planes de emergencia y dispositivos de riesgo previsible del ámbito de la protección civil.','is_active' => 1),
                array('name' => 'pagina grado superior sanidad titulo','content' => 'Grado Superior de Sanidad','is_active' => 1),
                array('name' => 'pagina grado superior sanidad texto1','content' => 'El objetivo principal de esta formación superior es la de poder elaborar y tramitar documentos y comunicaciones propias de los servicios sanitarios a partir de las necesidades detectadas y en el ámbito de su responsabilidad, respetando los criterios deontológicos de la profesión.','is_active' => 1),
                array('name' => 'pagina grado superior sanidad texto2','content' => 'El plan de estudio se basará en Realizar la gestión de ingresos, altas, asignación de camas y prestación de otros servicios sanitarios a pacientes/usuarios, asegurando el cumplimiento de los procesos y los niveles de calidad. Reconocer la terminología clínica de los documentos sanitarios en relación con los procesos patológicos y su atención en los servicios sanitarios, entre otras cosas.','is_active' => 1),
                array('name' => 'pagina grado superior sanidad texto3','content' => 'Con este formación se podrá trabajar de Trabajar en el sector sanitario, en organismos e instituciones del ámbito público y en empresas privadas, tanto en atención primaria como en especializada, así como en centros hospitalarios y de investigación. Realizan su trabajo bajo la supervisión del facultativo correspondiente o gerente administrativo en su caso.','is_active' => 1),
                array('name' => 'titulo del centro','content' => 'Centro de Formación San Juan','is_active' => 1),
      );

      foreach($cfg as $cf){ Configuration::create($cf); }

    }
}
