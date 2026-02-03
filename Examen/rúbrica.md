RÚBRICA DE CORRECCIÓN – EJERCICIO 1 (3 puntos)
    Creación del formulario y recepción de datos (0,5 puntos)
        0,25 puntos: El formulario HTML contiene los campos nombre, apellidos, DNI, email y teléfono.
        0,25 puntos: El formulario envía los datos correctamente a un script PHP mediante POST.

    Comprobación de campos no vacíos (0,5 puntos)
        0,5 puntos: En el servidor se valida que ningún campo esté vacío y se muestran mensajes de error adecuados.
        0,25 puntos: La validación existe pero es incompleta.

    Validación del DNI español (1 punto)
        a) Formato del DNI (0,4 puntos)
            0,4 puntos: Se comprueba que sean 8 dígitos más una letra mayúscula.
            0,2 puntos: Se valida el formato pero de manera incompleta.
            0 puntos: No se valida el formato.

        b) Cálculo de la letra del DNI (0,6 puntos)
            0,6 puntos: Se calcula el resto al dividir entre 23 y se compara la letra con la cadena TRWAGMYFPDXBNJZSQVHLCKE.
            0,3 puntos: La validación existe pero contiene errores.
            0 puntos: No se valida la letra.

    Validación del correo electrónico (0,5 puntos)
        0,5 puntos: Se valida correctamente usando filter_var o una expresión regular válida.
        0,25 puntos: La validación es incompleta o poco fiable.
        0 puntos: No se valida el correo.

    Validación del teléfono (0,5 puntos)
        0,5 puntos: Se comprueba que contiene solo dígitos y tiene una longitud válida (9 cifras en España).
        0,25 puntos: La validación es parcial.
        0 puntos: No se valida el teléfono.
    
    Mensajes de error o éxito (0,5 puntos)
        0,5 puntos: Se muestran mensajes específicos para los campos incorrectos o un mensaje de éxito si todo es válido.
        0,25 puntos: Se muestra solo un mensaje genérico.
        0 puntos: No se informan errores.

Total: 3 puntos.


RÚBRICA DE CORRECCIÓN – EJERCICIO 2 (3 puntos)
    Página de inicio de sesión (login.php) – 1,2 puntos
        0,2 puntos: El formulario permite introducir nombre de usuario y contraseña.
        0,2 puntos: La contraseña está hasheada (uso de password_hash, password_verify o similar).
        0,2 puntos: Los usuarios están predefinidos en un array en el servidor, incluyendo nombre, hash y rol.
        0,3 puntos: Validación de credenciales correcta y creación de una sesión guardando nombre y rol.
        0,3 puntos: Implementación de “Recordarme”, creando una cookie que almacene el nombre si la casilla está marcada.

    Control de errores en login – 0,4 puntos
        0,2 puntos: Si faltan campos, se muestra un mensaje adecuado.
        0,2 puntos: Si las credenciales son incorrectas, se muestra el mensaje de error correspondiente.

    Página privada (privado.php) – 0,8 puntos
        0,3 puntos: Solo accesible con sesión activa; si no existe, redirige a login.php.
        0,3 puntos: Muestra nombre del usuario logueado, su rol y un enlace para cerrar sesión.
        0,2 puntos: Gestiona permisos mostrando un bloque adicional solo si el rol es admin (zona administrativa).

    Cierre de sesión (logout.php) – 0,6 puntos
        0,3 puntos: Se destruye correctamente la sesión.
        0,2 puntos: Se elimina la cookie de “Recordarme” si existe.
        0,1 puntos: Redirige al formulario de login.

Total: 3 puntos.


RÚBRICA DE CORRECCIÓN – EJERCICIO 3 (4 puntos)
    Formulario y validación de entrada (0,8 puntos)
        0,3 puntos: El formulario incluye los campos título, descripción y fecha límite.
        0,3 puntos: Valida campos obligatorios (título y fecha límite).
        0,2 puntos: Valida que la fecha límite no sea anterior a la fecha actual.

    Guardado de tareas en fichero (0,8 puntos)
        0,3 puntos: Abre correctamente el fichero tareas.txt y añade la tarea.
        0,3 puntos: Cada tarea se guarda con id único, título, descripción, fecha límite y estado ("pendiente").
        0,2 puntos: Maneja errores al abrir o escribir en el fichero.

    Listado de tareas (0,8 puntos)
        0,3 puntos: Muestra todas las tareas con id, título, descripción, fecha límite y estado.
        0,3 puntos: Ordena las tareas por fecha límite de forma ascendente.
        0,2 puntos: Permite filtrar tareas por palabra clave en el título.

    Marcar tareas como completadas (0,6 puntos)
        0,3 puntos: Opción para marcar una tarea como completada.
        0,3 puntos: Actualiza correctamente el fichero manteniendo coherencia.

    Eliminación de tareas (0,6 puntos)
        0,3 puntos: Permite eliminar una tarea por id.
        0,3 puntos: Elimina correctamente del fichero y mantiene consistencia.

    Persistencia y coherencia del fichero (0,4 puntos)
        0,4 puntos: Cada modificación (añadir, eliminar, completar) se refleja correctamente en tareas.txt sin duplicados ni pérdidas de datos.

    Control de errores y mensajes al usuario (0,4 puntos)
        0,2 puntos: Manejo de errores: fichero inaccesible, fecha inválida, campos vacíos, id inexistente.
        0,2 puntos: Mensajes claros: tarea añadida, eliminada, completada o error.

Total: 4 puntos.