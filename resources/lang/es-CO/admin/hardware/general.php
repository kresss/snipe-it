<?php

return [
    'about_assets_title'           => 'Acerca de los Equipos',
    'about_assets_text'            => 'Los activos son elementos con número de serie o etiqueta de activos. Tienden a ser artículos de alto valor donde es importante identificar un elemento específico.',
    'archived'  				=> 'Archivado',
    'asset'  					=> 'Equipo',
    'bulk_checkout'             => 'Asignar Equipos',
    'bulk_checkin'              => 'Checkin Assets',
    'checkin'  					=> 'Devolver Equipo',
    'checkout'  				=> 'Asignar Equipo',
    'clone'  					=> 'Clonar Equipo',
    'deployable'  				=> 'Utilizable',
    'deleted'  					=> 'Este activo ha sido borrado.',
    'delete_confirm'            => '¿Está seguro de que desea eliminar este recurso?',
    'edit'  					=> 'Editar Equipo',
    'model_deleted'  			=> 'El modelo de este activo ha sido borrado. Debe restaurar el modelo antes de restaurar o crear el activo.',
    'model_invalid'             => 'Este modelo para este activo es inválido.',
    'model_invalid_fix'         => 'The asset must be updated use a valid asset model before attempting to check it in or out, or to audit it.',
    'requestable'               => 'Puede solicitarse',
    'requested'				    => 'Solicitado',
    'not_requestable'           => 'No puede solicitarse',
    'requestable_status_warning' => 'No cambiar el estado solicitable',
    'restore'  					=> 'Restaurar equipo',
    'pending'  					=> 'Pendiente',
    'undeployable'  			=> 'No utilizable',
    'undeployable_tooltip'  	=> 'Este activo tiene una etiqueta de estado que no es desplegable y no puede ser revisado en este momento.',
    'view'  					=> 'Ver Equipo',
    'csv_error' => 'Tiene un error en su archivo CSV:',
    'import_text' => '<p>Sube un archivo CSV que contenga el historial de activos. Los activos y los usuarios DEBEN existir ya en el sistema, o serán omitidos. La importación del historial busca activos que coincidan con la etiqueta de activo.  Intentaremos encontrar un usuario usando el nombre del usuario que proporciones y los criterios que selecciones a continuación. Si no seleccionas ningún criterio a continuación, el sistema simplemente intentará usar el formato de nombre de usuario que configuraste en <code>Admin &gt;  Opciones Generales</code>.</p><p>Los campos incluidos en el CSV deben coincidir con los encabezados: <strong>Asset Tag, Name, Checkout Date, Checkin Date</strong>. Cualquier campo adicional será ignorado.</p><p>Checkin Date(Fecha de Devolución): dejar en blanco o usar fechas futuras asignará los ítems al usuario asociado. Excluir la columna Checkin Date creará una fecha de devolución con la fecha de hoy.</p>    ',
    'csv_import_match_f-l' => 'Intenta emparejar usuarios con formato <strong>nombre.lastname</strong> (<code>jane.smith</code>)',
    'csv_import_match_initial_last' => 'Intentar emparejar a los usuarios con un formato <strong>primer apellido inicial</strong> (<code>jsmith</code>)',
    'csv_import_match_first' => 'Intentar emparejar a los usuarios con formato <strong>primer nombre</strong> (<code>jane</code>)',
    'csv_import_match_email' => 'Intenta emparejar a los usuarios por <strong>email</strong> como nombre de usuario',
    'csv_import_match_username' => 'Intentar emparejar los usuarios usando la propiedad <strong>Usuario</strong>',
    'error_messages' => 'Mensajes de error:',
    'success_messages' => 'Mensajes de éxito:',
    'alert_details' => 'Por favor vea abajo para más detalles.',
    'custom_export' => 'Exportación personalizada',
    'mfg_warranty_lookup' => ':fabricante Garantía Estado Búsqueda',
    'user_department' => 'Departamento de Usuario',
];
