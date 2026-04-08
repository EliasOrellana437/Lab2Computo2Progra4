-Elias Ernesto Orellana Vasquez

-Cesia Madai Avalos Diaz

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
