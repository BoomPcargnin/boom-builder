<?php 
class BoomBuilder{
  // controller : CoursesProductTypologiessController
  function __construct(){
    $this->generateFields();

		add_action( 'admin_init', array($this, 'prefix_reset_metabox_positions') );

  }
	function prefix_reset_metabox_positions(){
	  delete_user_meta( wp_get_current_user()->ID, 'meta-box-order_page' );
	}

  private function generateFields(){
		if( function_exists('acf_add_local_field_group') ):
			acf_add_local_field_group(array(
				'key' => 'group_5a71c8c6c338b',
				'title' => 'Custom page builder',
				'fields' => array(
					array(
						'key' => 'field_5a71c8cf5afe7',
						'label' => 'Layout',
						'name' => 'layout',
						'type' => 'flexible_content',
						'instructions' => 'Crea della righe dinamiche per il contenuto della pagina, seleziona per ogni riga il layout e riampi i campi per comporre la pagina.<!-- <br>
						<b>Se selezioni la tipologia di layout "Container"</b> potrai anche costruire un layout complesso con colonne a tua scelta.-->',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'layouts' => array(
							'5a71ca06a8e9c' => array(
								'key' => '5a71ca06a8e9c',
								'name' => 'imageRow',
								'label' => 'Image row',
								'display' => 'block',
								'sub_fields' => array(
									array(
										'key' => 'field_5a71cabf6d4be',
										'label' => 'Image',
										'name' => 'image',
										'type' => 'image',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array(
											'width' => '25',
											'class' => '',
											'id' => '',
										),
										'return_format' => 'array',
										'preview_size' => 'thumbnail',
										'library' => 'all',
										'min_width' => '',
										'min_height' => '',
										'min_size' => '',
										'max_width' => '',
										'max_height' => '',
										'max_size' => '',
										'mime_types' => '',
									),
									array(
										'key' => 'field_5a7sdlkfjsd90',
										'label' => 'Testo in overlay anche da mobile',
										'name' => 'overlay_text_on_mobile',
										'type' => 'true_false',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array(
											'width' => '25',
											'class' => '',
											'id' => '',
										),
										'message' => 'Seleziona se il testo da mobile sarà sopra l\'immagine o al di sotto di essa',
										'default_value' => 1,
										'ui' => 1,
										'ui_on_text' => '',
										'ui_off_text' => '',
									),
									array(
										'key' => 'field_5a71cae76d4bf',
										'label' => 'Full width',
										'name' => 'full_width',
										'type' => 'true_false',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array(
											'width' => '25',
											'class' => '',
											'id' => '',
										),
										'message' => 'Seleziona se l\'immagine sarà larga il 100% dello schermo o rimarrà all\'interno del container',
										'default_value' => 1,
										'ui' => 1,
										'ui_on_text' => '',
										'ui_off_text' => '',
									),
									array(
										'key' => 'field_5a71cb406d4c0',
										'label' => 'Overlay',
										'name' => 'overlay',
										'type' => 'true_false',
										'instructions' => 'Seleziona se l\'immagine dovrà avere o meno un overlay superiore',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array(
											'width' => '25',
											'class' => '',
											'id' => '',
										),
										'message' => '',
										'default_value' => 0,
										'ui' => 1,
										'ui_on_text' => '',
										'ui_off_text' => '',
									),
									array(
										'key' => 'field_5a71cb4sf98sd7fc0',
										'label' => 'Posizione testo da mobile',
										'name' => 'overlay_text_on_mobile',
										'type' => 'true_false',
										'instructions' => 'Seleziona se da mobile il testo dovrà essere sopra l\'immagine, altrimenti si visualizzarà subito dopo',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array(
											'width' => '25',
											'class' => '',
											'id' => '',
										),
										'message' => '',
										'default_value' => 0,
										'ui' => 1,
										'ui_on_text' => 'Sotto l\'immagine',
										'ui_off_text' => 'Sopra l\'immagine',
									),
									array(
										'key' => 'field_5a71cb9f6d4c1',
										'label' => 'Opacità overlay',
										'name' => 'overlay_opacity',
										'type' => 'number',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => array(
											array(
												array(
													'field' => 'field_5a71cb406d4c0',
													'operator' => '==',
													'value' => '1',
												),
											),
										),
										'wrapper' => array(
											'width' => '25',
											'class' => '',
											'id' => '',
										),
										'default_value' => 20,
										'placeholder' => '',
										'prepend' => '',
										'append' => '',
										'min' => 0,
										'max' => 100,
										'step' => 1,
									),
									array(
										'key' => 'field_5a71cbc46d4c2',
										'label' => 'Colore overlay',
										'name' => 'overlay_color',
										'type' => 'color_picker',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => array(
											array(
												array(
													'field' => 'field_5a71cb406d4c0',
													'operator' => '==',
													'value' => '1',
												),
											),
										),
										'wrapper' => array(
											'width' => '25',
											'class' => '',
											'id' => '',
										),
										'default_value' => '#000000',
									),
									array(
										'key' => 'field_5a71cc246d4c3',
										'label' => 'Contenuto riga',
										'name' => 'contenuto_riga',
										'type' => 'wysiwyg',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array(
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'default_value' => '',
										'tabs' => 'all',
										'toolbar' => 'full',
										'media_upload' => 1,
										'delay' => 0,
									),
									array(
										'key' => 'field_5a71e35b4d048',
										'label' => 'Call to actions',
										'name' => 'call_to_actions',
										'type' => 'repeater',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array(
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'collapsed' => '',
										'min' => 0,
										'max' => 0,
										'layout' => 'table',
										'button_label' => 'Aggiungi call to action',
										'sub_fields' => array(
											array(
												'key' => 'field_5a71e36a4d049',
												'label' => 'Testo e link',
												'name' => 'testo',
												'type' => 'link',
												'instructions' => '',
												'required' => 0,
												'conditional_logic' => 0,
												'wrapper' => array(
													'width' => '',
													'class' => '',
													'id' => '',
												),
												'return_format' => 'array',
											),
											array(
												'key' => 'field_5a71e3704d04a',
												'label' => 'Stile',
												'name' => 'stile',
												'type' => 'select',
												'instructions' => '',
												'required' => 0,
												'conditional_logic' => 0,
												'wrapper' => array(
													'width' => '',
													'class' => '',
													'id' => '',
												),
												'choices' => array(
													"primary" => "Primario ( rosso)",
													"light" => "Secondario (bianco)"
												),
												'default_value' => array(
													"primary" => "Primario ( rosso)",
												),
												'allow_null' => 0,
												'multiple' => 0,
												'ui' => 0,
												'ajax' => 0,
												'return_format' => 'value',
												'placeholder' => '',
											),
										),
									),
								),
								'min' => '',
								'max' => '',
							),
							'5a71dd31cc5b5' => array(
								'key' => '5a71dd31cc5b5',
								'name' => 'layout',
								'label' => 'Layout',
								'display' => 'block',
								'sub_fields' => array(
									array(
										'key' => 'field_5a71dd48cc5b6',
										'label' => 'Colonne',
										'name' => 'colonne',
										'type' => 'repeater',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array(
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'collapsed' => 'field_5a71de9ccc5ba',
										'min' => 0,
										'max' => 0,
										'layout' => 'block',
										'button_label' => 'Aggiungi colonna',
										'sub_fields' => array(
											array(
												'key' => 'field_5a71dd6fcc5b7',
												'label' => 'Larghezza colonna(mobile)',
												'name' => 'col_',
												'type' => 'select',
												'instructions' => 'Dimensioni della colonna per smartphone',
												'required' => 0,
												'conditional_logic' => 0,
												'wrapper' => array(
													'width' => '25',
													'class' => '',
													'id' => '',
												),
												'choices' => array(
													4 => '33%',
													6 => '50%',
													8 => '66%',
													12 => '100%',
												),
												'default_value' => 12,
												'allow_null' => 0,
												'multiple' => 0,
												'ui' => 0,
												'ajax' => 0,
												'return_format' => 'value',
												'placeholder' => '',
											),
											array(
												'key' => 'field_5a71ddaacc5b8',
												'label' => 'Larghezza colonna(Mobile & tablet)',
												'name' => 'col_xs',
												'type' => 'select',
												'instructions' => 'Dimensioni della colonna per smartphone di dimensioni grandi e piccoli tablet',
												'required' => 0,
												'conditional_logic' => 0,
												'wrapper' => array(
													'width' => '25',
													'class' => '',
													'id' => '',
												),
												'choices' => array(
													3 => '25%',
													4 => '33%',
													6 => '50%',
													8 => '66%',
													9 => '75%',
													12 => '100%',
												),
												'default_value' => array(
												),
												'allow_null' => 1,
												'multiple' => 0,
												'ui' => 0,
												'ajax' => 0,
												'return_format' => 'value',
												'placeholder' => '',
											),
											array(
												'key' => 'field_5a71dde9cc5b9',
												'label' => 'Larghezza colonna(tablet)',
												'name' => 'col_md',
												'type' => 'select',
												'instructions' => 'Dimensioni della colonna per tablet (990px - 1200px)',
												'required' => 0,
												'conditional_logic' => 0,
												'wrapper' => array(
													'width' => '25',
													'class' => '',
													'id' => '',
												),
												'choices' => array(
													3 => '25%',
													4 => '33%',
													6 => '50%',
													8 => '66%',
													9 => '75%',
													12 => '100%',
												),
												'default_value' => array(
												),
												'allow_null' => 1,
												'multiple' => 0,
												'ui' => 0,
												'ajax' => 0,
												'return_format' => 'value',
												'placeholder' => '',
											),
											array(
												'key' => 'field_5a71de9ccc5ba',
												'label' => 'Larghezza colonna(desktop)',
												'name' => 'col_md_copia',
												'type' => 'select',
												'instructions' => 'Dimensioni della colonna per desktop e portatili (1200px +)',
												'required' => 0,
												'conditional_logic' => 0,
												'wrapper' => array(
													'width' => '25',
													'class' => '',
													'id' => '',
												),
												'choices' => array(
													3 => '25%',
													4 => '33%',
													6 => '50%',
													8 => '66%',
													9 => '75%',
													12 => '100%',
												),
												'default_value' => array(
												),
												'allow_null' => 1,
												'multiple' => 0,
												'ui' => 0,
												'ajax' => 0,
												'return_format' => 'value',
												'placeholder' => '',
											),
											array(
												'key' => 'field_5a71dee9cc5bb',
												'label' => 'Layout',
												'name' => 'layout',
												'type' => 'clone',
												'instructions' => '',
												'required' => 0,
												'conditional_logic' => 0,
												'wrapper' => array(
													'width' => '',
													'class' => '',
													'id' => '',
												),
												'clone' => array(
													0 => 'field_5a71c8cf5afe7',
												),
												'display' => 'seamless',
												'layout' => 'block',
												'prefix_label' => 0,
												'prefix_name' => 0,
											),
										),
									),
								),
								'min' => '',
								'max' => '',
							),
							'5a71f611e8e73' => array(
								'key' => '5a71f611e8e73',
								'name' => 'textarea',
								'label' => 'Campo di testo semplice',
								'display' => 'block',
								'sub_fields' => array(
									array(
										'key' => 'field_5a71f62be8e76',
										'label' => 'contenuto',
										'name' => 'contenuto',
										'type' => 'wysiwyg',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array(
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'default_value' => '',
										'tabs' => 'all',
										'toolbar' => 'full',
										'media_upload' => 1,
										'delay' => 0,
									),
								),
								'min' => '',
								'max' => '',
							),
						),
						'button_label' => 'Aggiungi Riga',
						'min' => '',
						'max' => '',
					),
				),
				'location' => array(
					array(
						array(
							'param' => 'page_template',
							'operator' => '==',
							'value' => 'views/template-custom.blade.php',
						),
					),
				),
		    'options' => array (
		      'position' => 'acf_after_title',
		      'layout' => 'seamless',
		      'menu_order' => 1,
		    ),
		    'position' => 'acf_after_title',
				'menu_order' => 1,
				'position' => 'after_title',
				'style' => 'seamless',
				'label_placement' => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen' => array(
					0 => 'the_content',
				),
				'active' => 1,
				'description' => '',
			));

		endif;
  }
} ?>