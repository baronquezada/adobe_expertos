<?php
/*
 * Funciones del Theme
 */

function crear_tablas(){
	/*echo '<script type="text/javascript">console.log("Se activo el theme");</script>';*/
	global $wpdb;
	$charset_collate = $wpdb->get_charset_collate();
   	$mi_tabla = $wpdb->prefix."dominios";
   	$sql_create_table = "CREATE TABLE IF NOT EXISTS $mi_tabla(
   		id int(11) NOT NULL AUTO_INCREMENT,
      	usuario_id int(11) NOT NULL,
      	tipo_cuenta varchar(255) DEFAULT NULL,
      	fecha_inicio datetime NOT NULL default '0000-00-00 00:00:00',
      	fecha_vencimiento datetime NOT NULL default '0000-00-00 00:00:00',
      	costo float DEFAULT NULL,
      	empresa_cliente varchar(255) DEFAULT NULL,
      	empresa_hosting varchar(255) DEFAULT NULL,
      	nombre_cuenta varchar(255) DEFAULT NULL,
      	correo_notificacion varchar(255) DEFAULT NULL,
      	notificar tinyint(1) DEFAULT NULL,
      	fecha_notificar datetime NOT NULL default '0000-00-00 00:00:00',
      	tipo_notificar varchar(255) DEFAULT NULL,
      	metodo_pago varchar(255) DEFAULT NULL,
      	ultimos_digitos int(4) DEFAULT NULL,
      	banco tinyint(1) DEFAULT NULL,
      	paypal tinyint(1) DEFAULT NULL,
      	deposito tinyint(1) DEFAULT NULL,
      	nombre_banco varchar(255) DEFAULT NULL,
      	usuario_paypal varchar(255) DEFAULT NULL,
      	UNIQUE KEY id (id)
   	) $charset_collate; ";

	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql_create_table );
}

function db_dominios_result(){
    global $wpdb;
    $table_name = $wpdb->prefix."dominios";

    $tablaP = $wpdb->get_results(
        'SELECT
            id,
            usuario_id,
            tipo_cuenta,
            fecha_inicio,
            fecha_vencimiento,
            costo,
            empresa_cliente,
            empresa_hosting,
            nombre_cuenta,
            correo_notificacion,
            notificar,
            fecha_notificar,
            tipo_notificar,
            metodo_pago
        FROM '.$table_name
    );
    return $tablaP;
}
function db_dominio_por_id($id){

    if(isset($_POST['idlist'])){
        $id = $_POST['idlist'];
    }

    global $wpdb;
    $table_name = $wpdb->prefix."dominios";

    $tablaP = $wpdb->get_results(
        'SELECT
            *
        FROM 
            '.$table_name.'
        WHERE
            id ='.$id
    );

    if(isset($_POST['idlist'])){
        echo json_encode($tablaP);
        die();
    }
    else{
        return $tablaP;
    }
}

function db_dominios_insert($form){

    global $wpdb;
    $table_name = $wpdb->prefix.'dominios';
    $wpdb->insert(
        $table_name,
        array(
            'usuario_id' 		     => $form["usuario_id"],
            'tipo_cuenta' 		   => $form["tipo_cuenta"],
            'fecha_inicio' 		   => $form["fecha_inicio"],
            'fecha_vencimiento'  => $form["fecha_vencimiento"],
            'costo' 			       => $form["costo"],
            'empresa_cliente' 	 => $form["empresa_cliente"],
            'empresa_hosting' 	 => $form["empresa_hosting"],
            'nombre_cuenta' 	   => $form["nombre_cuenta"],
            'correo_notificacion'=> $form["correo_notificacion"],
            'notificar' 		     => $form["notificar"],
            'fecha_notificar' 	 => $form["fecha_notificar"],
            'tipo_notificar' 	   => $form["tipo_notificar"],
            'metodo_pago' 		   => $form["metodo_pago"],
            'ultimos_digitos' 	 => $form["ultimos_digitos"],
            'banco' 			       => $form["banco"],
            'paypal' 			       => $form["paypal"],
            'deposito' 			     => $form["deposito"],
            'nombre_banco' 		   => $form["nombre_banco"],
            'usuario_paypal' 	   => $form["usuario_paypal"],
        )
    );
    $wpdb->show_errors();
    $wpdb->print_error();
}

function db_dominios_eliminar_registro($idregistro){
    if(isset($_POST['idregistro'])){
        $idregistro = $_POST['idregistro'];
    }
    global $wpdb;
    $wpdb->show_errors = true;

    $table_name = $wpdb->prefix . 'dominios';
    $where = array( 'id' => $idregistro );
    $where_format = array( '%d' );

    $wpdb->delete( $table_name, $where, $where_format );

    if(isset($_POST['idregistro'])){
        echo "Eliminado";
        die();
    }
    else{
        return "Eliminado";
    }
}
/*
function pxe_aweber_actualiza_registro($idregistro){
    global $wpdb;
    $wpdb->show_errors = true;

    $table_name = $wpdb->prefix . 'pxe_aweber';
    $data = array( 'estatus' => '1' );
    $where = array( 'id' => $idregistro );
    $format = array( '%d');
    $where_format = array( '%d' );

    $wpdb->update( $table_name, $data, $where, $format, $where_format );
}
*/

function my_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url("<?= get_stylesheet_directory_uri(); ?>/imagenes/logofinal.png");
            padding-bottom: 90px;
            width: 100%;
            background-size: 100%;
            background-repeat: no-repeat;
            pointer-events: none;
        }
        .login .button-primary {
            border-color: #AC091B !important;
            background-color: #850C16 !important;
        }
        .login .button-primary:hover {
            background-color: #B4081C !important;
        }
    </style>
<?php }


function registrar_menu() {
    register_nav_menu( 'primary', __( 'Menu-malware', 'theme-malware' ) );
}

register_sidebar(array(
    'name' => __('Widget Area Sidebar', 'malware'),
    'description' => __('Widget para el sidebar', 'malware'),
    'id' => 'widget-area-malware',
    'before_widget' => '<div id="%1$s" class="%2$s widgets_area">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
));

add_action( 'after_setup_theme', 'registrar_menu' );

wp_enqueue_script('jquery');
add_action( 'login_enqueue_scripts', 'my_login_logo' );
// add_action( 'after_setup_theme', 'crear_tablas' );
add_action('wp_ajax_dominio_por_id', 'db_dominio_por_id');
add_action('wp_ajax_nopriv_dominio_por_id', 'db_dominio_por_id');
add_action('wp_ajax_eliminar_por_id', 'db_dominios_eliminar_registro');
add_action('wp_ajax_nopriv_eliminar_por_id', 'db_dominios_eliminar_registro');
?>