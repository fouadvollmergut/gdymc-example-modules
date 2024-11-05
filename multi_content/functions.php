<?php
  add_action ('gdymc_module_options_settings', function ( $module ) {
    if ($module->type == gdymc_module_name( __FILE__ )):
      optionInput( 'alignment', array(
        'type' => 'select',
        'default' => 'normal',
        'label' => __( 'Alignment', 'Theme' ),
        'options' => array(
          'normal' => __( 'Text right', 'Theme' ),
          'reverse' => __( 'Text left', 'Theme' )
        )
      ), $module->id );

      optionInput( 'vertical', array(
        'type' => 'select',
        'default' => 'center',
        'label' => __( 'Vertical alignment', 'Theme' ),
        'options' => array(
          'start' => __( 'Top', 'Theme' ),
          'center' => __( 'Center', 'Theme' ),
          'end' => __( 'Bottom', 'Theme' )
        )
      ), $module->id );
    endif;
  });
?>