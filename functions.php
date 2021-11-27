<?php
// DEFINA UMA PASTA DE DESTINO ESPECÍFICA PARA OS PACOTES CSS COMPILADOS
function picostrap_get_css_optional_subfolder_name() { return "css-output/"; }

// DEFINIR UM NOME PERSONALIZADO PARA O ARQUIVO DE PACOTE CSS
function picostrap_get_base_css_filename() { return "bundle.css"; }

//DESATIVAR SENHAS DE APLICATIVO para segurança
add_filter( 'wp_is_application_passwords_available', '__return_false' );

// CARREGAR o diretório tema filho
//add_action( 'after_setup_theme', function() { load_child_theme_textdomain( 'picostrap-child', get_stylesheet_directory() . '/languages' ); } );

// ARQUIVO CSS ADICIONAL OPCIONAL - [NÃO RECOMENDADO]: USE a pasta / sass, adicione seu código css a /sass/_custom.sass
//add_action( 'wp_enqueue_scripts',  function  () {	wp_enqueue_style( 'custom', get_stylesheet_directory_uri().'/custom.css' ); });

// ARQUIVO JS ADICIONAL OPCIONAL - apenas descomente a linha abaixo
//add_action( 'wp_enqueue_scripts', function() {	wp_enqueue_script('custom', get_stylesheet_directory_uri() . '/js/custom.js', array(/* 'jquery' */), null, true); });
 
// OPCIONAL: ADICIONE FONTAWESOME DE CDN ​​NO FOOTER 
/* 
add_action("wp_footer",function(){ ?> <link rel='stylesheet' id='fontawesome-css'  href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' media='all' /> <?php }); 
*/

// OPCIONAL: ADICIONE OUTRA FONTE PERSONALIZADA DO GOOGLE, EXEMPLO: Hanalei Fill
// Depois de remover o comentário do código a seguir, você também precisará definir a fonte na variável BS. Veja como:
// Abra o WordPress Customizer
// No campo / s: "Font Family Base" ou "Headings Font Family" insira o nome da fonte, neste caso "Hanalei Fill"

/*
add_action("wp_head",function(){ ?> 
 <link rel="dns-prefetch" href="//fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
 <link href="https://fonts.googleapis.com/css?family=Hanalei+Fill" rel="stylesheet">
<?php }); 
*/

// OPCIONAL: ADICIONE MAIS OPÇÕES DE MENUS
//register_nav_menus( array( 'third' => __( 'Third Menu', 'picostrap' ), 'fourth' => __( 'Fourth Menu', 'picostrap' ), 'fifth' => __( 'Fifth Menu', 'picostrap' ), ) );
// ENTÃO USE O SHORTCODE:  [lc_nav_menu theme_location="third" container_class="" container_id="" menu_class="navbar-nav"]

