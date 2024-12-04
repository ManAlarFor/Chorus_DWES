# Chorus Project

## Descripción

El proyecto **Chorus** es una aplicación web que facilita la conexión entre músicos y artistas. Los usuarios pueden registrarse, gestionar su perfil, agregar funciones musicales, crear proyectos y explorar perfiles de otros usuarios. Es una plataforma social orientada al mundo de la música.

## Páginas Principales

La aplicación web está compuesta por varias páginas clave que facilitan la interacción del usuario con la plataforma. A continuación, se describen las páginas principales, su funcionalidad y cómo cada una de ellas contribuye a la experiencia general.

---

### 1. **Página de Inicio (index.php)**

La página de inicio es la puerta de entrada a la plataforma y permite a los usuarios interactuar de manera sencilla con las opciones más importantes.

#### Funcionalidad:
- **Bienvenida al Usuario (si está logueado)**: Si el usuario ya ha iniciado sesión, verá la nav bar personalizada, incluyendo su imagen de perfil si está disponible.
- **Acceso a Registro/Inicio de Sesión**: Los usuarios que no han iniciado sesión tienen un formulario de acceso para registrarse o ingresar a la plataforma.
- **Explorar Perfiles de Otros Usuarios**: Los usuarios tienen acceso a una lista de perfiles públicos. En esta vista, pueden ver información básica sobre otros usuarios como su nombre, edad y foto de perfil.

#### Qué puede hacer el usuario:
- Si ya está logueado, puede acceder directamente a su perfil y al de otros usuarios.
- Si no está logueado, puede registrarse o ingresar con sus credenciales.

---

### 2. **Página de Perfil del Usuario(profile.php)**

Una vez que el usuario ha iniciado sesión, puede acceder a su perfil personal. Esta página permite al usuario gestionar su información personal y su presencia en la plataforma.

#### Funcionalidad:
- **Visualización de Datos Personales**: El usuario puede ver su nombre, correo electrónico, edad y foto de perfil, asi como una lista de las funciones musicales que desempeña y su descripción. Estos datos se pueden actualizar en cualquier momento.
- **Gestión de Proyectos**: El usuario puede agregar, editar o eliminar proyectos dentro de su portfolio musical. Estos proyectos pueden ser canciones, colaboraciones, o cualquier otro tipo de trabajo musical.

#### Qué puede hacer el usuario:
- Ver y actualizar su información personal.
- Gestionar su portfolio de proyectos, añadiendo o eliminando trabajos musicales que haya creado o en los que haya colaborado.

---

### 3. **Página de Búsqueda (search.php)**

La página de búsqueda permite a los usuarios explorar la plataforma y encontrar perfiles de otros músicos o proyectos relacionados con sus intereses musicales. Es una herramienta clave para la interacción dentro de la comunidad.

#### Funcionalidad:
- **Búsqueda por Nombre de Usuario**: Los usuarios pueden buscar otros músicos por su nombre. Este campo de búsqueda devuelve resultados relevantes con los perfiles de los usuarios que coincidan con el término de búsqueda.
- **Resultados Filtrados**: Los resultados de búsqueda se muestran de manera organizada, presentando el nombre de usuario, su foto de perfil, y la descripción.
- **Paginación**: Si hay demasiados resultados de búsqueda, la página cuenta con paginación para que el usuario pueda navegar cómodamente por los resultados sin sobrecargar la vista.

#### Qué puede hacer el usuario:
- Buscar otros usuarios por su nombre.
- Filtrar los resultados de la búsqueda para encontrar perfiles específicos de músicos o proyectos.
- Ver una lista organizada de perfiles de usuarios, con su nombre, imagen de perfil y descripción.
- Navegar a través de múltiples páginas de resultados si la búsqueda devuelve muchos resultados.

---

### 4. **Perfil Externo (foreignProfile.php)**

La página **foreignProfile.php** permite a los usuarios visualizar el perfil de otro usuario dentro de la plataforma. Esta página está diseñada para mostrar la información de un perfil completo, pero se presenta como un perfil "externo", es decir, el usuario está viendo el perfil de otra persona, no el suyo propio.

#### Funcionalidad:
- **Visualización del Perfil**: Al acceder a un perfil externo, el usuario puede ver la información básica del otro usuario, como su nombre, foto de perfil, edad, correo electrónico (enmascarado para protección de la privacidad), y las funciones musicales que desempeña.
- **Funciones Musicales**: Además de los datos personales, se muestran las funciones musicales que el usuario realiza. Esto es importante para entender el papel que el otro usuario desempeña dentro del ámbito musical (por ejemplo, bajista, guitarrista, tecladista, etc.).
- **Historial de Proyectos**: Si el usuario ha tenido algún tipo de colaboración o participación en proyectos musicales, estos también pueden ser visualizados desde su perfil. Esto ayuda a entender el tipo de colaboraciones que la persona ha realizado en el pasado.

#### Qué puede hacer el usuario:
- Ver el perfil completo de otro usuario, incluyendo sus datos personales y sus funciones musicales.
- Explorar el historial de colaboraciones o proyectos en los que el usuario ha participado.
- Ver las imágenes de perfil del usuario y las funciones asociadas, lo que facilita el entendimiento de su participación dentro del mundo musical.

---

### 5. **Inicio de Sesión y Registro (login.php y signin.php)**

Las páginas **login.php** y **signin.php** están diseñadas para gestionar el acceso y la creación de cuentas de usuario en la plataforma. Ambas permiten la autenticación del usuario, aunque tienen finalidades diferentes: **login.php** para el inicio de sesión y **signin.php** para la creación de nuevas cuentas.

#### **login.php - Inicio de Sesión**
La página **login.php** es el punto de acceso para los usuarios registrados. Permite a los usuarios autenticar su identidad para acceder a sus cuentas y las funcionalidades disponibles en la plataforma.

##### Funcionalidad:
- **Formulario de Inicio de Sesión**: La página presenta un formulario donde los usuarios deben ingresar su nombre de usuario y contraseña.
- **Verificación de Credenciales**: Tras enviar el formulario, el sistema verifica las credenciales ingresadas. Si son correctas, el usuario es autenticado y redirigido a su página principal o al panel de usuario.
- **Manejo de Errores**: Si las credenciales no coinciden con las almacenadas en la base de datos, el sistema muestra un mensaje de error indicando que los datos ingresados no son válidos.
- **Autenticación Segura**: Las contraseñas se verifican de forma segura utilizando métodos de encriptación, asegurando que la información del usuario esté protegida.

##### Qué puede hacer el usuario:
- Iniciar sesión en su cuenta proporcionando nombre de usuario y contraseña.
- Recibir un mensaje de error si las credenciales no son correctas.
- Acceder a todas las funcionalidades de la plataforma tras una autenticación exitosa.

#### **signin.php - Registro de Nuevo Usuario**
La página **signin.php** es donde los nuevos usuarios pueden crear una cuenta en la plataforma. Permite el registro mediante un formulario que recoge la información personal necesaria para crear una cuenta.

##### Funcionalidad:
- **Formulario de Registro**: El formulario de **signin.php** solicita datos básicos como el nombre, apellido, correo electrónico, contraseña, y otras posibles opciones de personalización como un perfil de usuario.
- **Creación de Cuenta**: Cuando el usuario envía el formulario, el sistema verifica que los datos proporcionados sean válidos y crea una nueva cuenta para el usuario si la validación es exitosa.
- **Confirmación de Registro**: Una vez que el registro se completa con éxito, el usuario es redirigido a una página de confirmación o directamente al inicio de sesión para acceder con las credenciales recién creadas.

##### Qué puede hacer el usuario:
- Crear una cuenta nueva proporcionando datos como nombre, correo electrónico y una contraseña segura.
- Recibir mensajes de error si los datos ingresados no son válidos o si el correo electrónico ya está registrado.
- Acceder al sistema con la cuenta recién creada para disfrutar de las funcionalidades disponibles tras completar el proceso de registro.

Estas dos páginas trabajan juntas para garantizar que los usuarios puedan acceder a la plataforma de manera segura, ya sea a través del inicio de sesión o creando una nueva cuenta si aún no están registrados.

---

### 6. **Estilo y Diseño**

El estilo de la plataforma se centra en proporcionar una interfaz limpia, moderna y fácil de usar. El diseño utiliza un esquema de colores sencillo y agradable a la vista, con énfasis en la usabilidad y la accesibilidad. 

- **Tipografía y Colores**: Se utiliza una tipografía clara y legible, acompañada de una paleta de colores suaves para no distraer al usuario.

En resumen, el diseño busca ser intuitivo, funcional y estéticamente agradable, facilitando la navegación del usuario.

---

### 7. **Archivos SQL**

Los archivos SQL proporcionan la estructura y los datos necesarios para la base de datos que soporta la plataforma.

- **usuario.sql**: Contiene la creación de la tabla `Usuario`, que almacena la información de los usuarios registrados, como nombre, correo electrónico, edad, entre otros.
- **usuario_funcion.sql**: Define la tabla `usuario_funcion`, que asocia a cada usuario con uno o más roles musicales, como cantante, bajista, pianista, etc.
- **funcion.sql**: Establece la tabla `Funcion`, que lista los diferentes roles musicales disponibles en la plataforma.
- **portfolio.sql**: Incluye la creación de la tabla `portfolio`, que almacena proyectos y experiencias de los usuarios, como conciertos, composiciones y grabaciones.

Cada archivo SQL tiene como objetivo organizar y almacenar la información esencial de la plataforma, facilitando la interacción entre los usuarios y las funcionalidades del sistema.

---

### 8. **Créditos y Recursos Externos**

En este proyecto, se han utilizado recursos o código de trabajos ajenos para mejorar la funcionalidad y el diseño. A continuación, se presentan los créditos correspondientes:

#### **Recursos Utilizados**

- **[Bootstrap]**: Usado para agilizar el proceso.
  - **Fuente**: [https://getbootstrap.com](URL)

- **[Unsplashed]**: Usado para las imagenes sin copyright.
  - **Fuente**: [https://unsplash.com](URL)

- **[ChatGPT]**: Usado para los textos genéricos para descripciones y demás elementos.
  - **Fuente**: [https://chatgpt.com](URL)


