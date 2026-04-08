-Elias Ernesto Orellana Vasquez

-Cesia Madai Avalos Diaz
Preguntas

1. ¿De qué forma manejaste el login de usuarios?  
El login se implementó a través de un formulario en index.php donde el usuario ingresa sus credenciales. Esos datos se envían al servidor y se validan utilizando la conexión definida en conexion.php, que permite acceder a la base de datos. Las contraseñas no se guardan en texto plano, sino encriptadas mediante funciones en hash.php, lo que asegura que al momento de iniciar sesión se compare la contraseña ingresada con el hash almacenado. Si la verificación es correcta, el sistema redirige al usuario hacia dashboard.php, que funciona como el panel principal. En caso contrario, se muestra un mensaje de error. En resumen, el login funciona porque se valida contra la base de datos y se utilizan contraseñas encriptadas para garantizar seguridad.

2. ¿Por qué es necesario para las aplicaciones web utilizar bases de datos en lugar de variables?  
Las variables en PHP solo existen mientras se ejecuta el script y se pierden al recargar la página, lo que impide mantener información de manera permanente. En cambio, las bases de datos permiten almacenar datos de forma persistente, organizada y segura. Esto es fundamental en aplicaciones web porque se necesita manejar múltiples usuarios al mismo tiempo, conservar información sensible como contraseñas y garantizar que los datos estén disponibles en cualquier momento. Además, las bases de datos están diseñadas para trabajar con grandes volúmenes de información y soportar accesos concurrentes, algo que sería imposible de lograr únicamente con variables.


-Ariel Adolfo Diaz Sosa


Preguntas  

3. ¿Cuándo usar bases de datos vs. datos temporales?

Bases de Datos: Se utilizan para información permanente y masiva que debe persistir a largo plazo, como registros de usuarios e inventarios.


Datos Temporales (Sesiones/Cookies): Se usan para datos volátiles y de acceso rápido, como mantener el estado de un login activo durante la navegación o guardar preferencias visuales del usuario.

4. Descripción de tablas y tipos de datos
Tabla usuarios:


id (INT): Identificador único numérico para búsquedas rápidas.


usuario (VARCHAR): Texto de longitud variable para nombres de usuario.


password (VARCHAR): Espacio amplio para almacenar contraseñas de forma segura (encriptadas).

Tabla registros:


nombre_item (VARCHAR): Para descripciones de texto de los productos.


cantidad (INT): Para asegurar que solo se ingresen valores numéricos enteros, facilitando el control de inventario.
