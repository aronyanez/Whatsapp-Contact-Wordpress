<?php







add_action( 'get_footer', 'Whats_code', 1);







add_action( 'wp_enqueue_scripts', 'Whats_styles' );









function Whats_styles() {

	wp_enqueue_style( 'style-custom', plugins_url( 'mark_whatsapp/public/css/style-f.css' ) );

}



function Whats_code() {

	//if (is_home()){

		?>



   



      <a class="whats whatapp-movil" href="whatsapp://send/?phone=52<?php echo get_option('Whats_number'); ?>&amp;text=Hola Necesito informes" target="_blank">

	 <img src="<?php echo plugins_url( 'mark_whatsapp/public/img/icon.png' ) ?>">

      Whatsapp</a>

         <a class="whats whatsapp-web" href="https://web.whatsapp.com/send?phone=+52<?php echo get_option('Whats_number'); ?>&amp;text=<?php echo get_option('Whats_Message'); ?>" target="_blank">

	 <img src="<?php echo plugins_url( 'mark_whatsapp/public/img/icon.png' ) ?>">

      Whatsapp</a>


      <?php

	//}

}


