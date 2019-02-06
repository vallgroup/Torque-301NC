<?php

require_once( get_template_directory() . '/includes/acf/torque-acf-search-class.php' );

class NC_ACF {

  public function __construct() {
    add_action('admin_init', array( $this, 'acf_admin_init'), 99);
    add_action('acf/init', array( $this, 'acf_init' ) );

    // hide acf in admin - client doesnt need to see this
    // add_filter('acf/settings/show_admin', '__return_false');

    // add acf fields to wp search
    if ( class_exists( 'Torque_ACF_Search' ) ) {
      add_filter( Torque_ACF_Search::$ACF_SEARCHABLE_FIELDS_FILTER_HANDLE, array( $this, 'add_fields_to_search' ) );
    }
  }

  public function acf_admin_init() {
    // hide options page
    // remove_menu_page('acf-options');
  }

  public function add_fields_to_search( $fields ) {
    // $fields[] = 'custom_field_name';
    return $fields;
  }

  public function acf_init() {
    // add content sections here

    if( function_exists('acf_add_local_field_group') ):

      acf_add_local_field_group(array(
      	'key' => 'group_5c5b0a4b6a0ba',
      	'title' => 'Layout',
      	'fields' => array(
      		array(
      			'key' => 'field_5c5b0a516a805',
      			'label' => 'Sections',
      			'name' => 'sections',
      			'type' => 'flexible_content',
      			'instructions' => '',
      			'required' => 0,
      			'conditional_logic' => 0,
      			'wrapper' => array(
      				'width' => '',
      				'class' => '',
      				'id' => '',
      			),
      			'layouts' => array(
      				'5c5b0acc6fe0d' => array(
      					'key' => '5c5b0acc6fe0d',
      					'name' => 'text_and_image',
      					'label' => 'Text and Image',
      					'display' => 'block',
      					'sub_fields' => array(
      						array(
      							'key' => 'field_5c5b0b116a806',
      							'label' => 'Anchor',
      							'name' => 'anchor',
      							'type' => 'text',
      							'instructions' => '',
      							'required' => 0,
      							'conditional_logic' => 0,
      							'wrapper' => array(
      								'width' => '',
      								'class' => '',
      								'id' => '',
      							),
      							'default_value' => '',
      							'placeholder' => '',
      							'prepend' => '',
      							'append' => '',
      							'maxlength' => '',
      						),
      						array(
      							'key' => 'field_5c5b0c8f6a80a',
      							'label' => 'Content Align',
      							'name' => 'align',
      							'type' => 'radio',
      							'instructions' => '',
      							'required' => 0,
      							'conditional_logic' => 0,
      							'wrapper' => array(
      								'width' => '',
      								'class' => '',
      								'id' => '',
      							),
      							'choices' => array(
      								'left' => 'Left',
      								'right' => 'Right',
      								'top' => 'Top',
      							),
      							'allow_null' => 0,
      							'other_choice' => 0,
      							'default_value' => 'top',
      							'layout' => 'horizontal',
      							'return_format' => 'value',
      							'save_other_choice' => 0,
      						),
      						array(
      							'key' => 'field_5c5b0b666a807',
      							'label' => 'Content',
      							'name' => 'content',
      							'type' => 'wysiwyg',
      							'instructions' => '',
      							'required' => 1,
      							'conditional_logic' => 0,
      							'wrapper' => array(
      								'width' => '',
      								'class' => '',
      								'id' => '',
      							),
      							'default_value' => '',
      							'tabs' => 'all',
      							'toolbar' => 'full',
      							'media_upload' => 0,
      							'delay' => 1,
      						),
      						array(
      							'key' => 'field_5c5b0bbd6a809',
      							'label' => 'Image',
      							'name' => 'image',
      							'type' => 'image',
      							'instructions' => '',
      							'required' => 1,
      							'conditional_logic' => 0,
      							'wrapper' => array(
      								'width' => '',
      								'class' => '',
      								'id' => '',
      							),
      							'return_format' => 'url',
      							'preview_size' => 'medium',
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
      							'key' => 'field_5c5b0ef508d85',
      							'label' => 'Call To Action',
      							'name' => 'call_to_action_type',
      							'type' => 'radio',
      							'instructions' => '',
      							'required' => 0,
      							'conditional_logic' => 0,
      							'wrapper' => array(
      								'width' => '',
      								'class' => '',
      								'id' => '',
      							),
      							'choices' => array(
      								'none' => 'None',
      								'download' => 'Download',
      								'link' => 'Link',
      							),
      							'allow_null' => 0,
      							'other_choice' => 0,
      							'default_value' => 'none',
      							'layout' => 'horizontal',
      							'return_format' => 'value',
      							'save_other_choice' => 0,
      						),
      						array(
      							'key' => 'field_5c5b0b8c6a808',
      							'label' => 'Link',
      							'name' => 'link',
      							'type' => 'link',
      							'instructions' => '',
      							'required' => 0,
      							'conditional_logic' => array(
      								array(
      									array(
      										'field' => 'field_5c5b0ef508d85',
      										'operator' => '==',
      										'value' => 'link',
      									),
      								),
      							),
      							'wrapper' => array(
      								'width' => '',
      								'class' => '',
      								'id' => '',
      							),
      							'return_format' => 'array',
      						),
      						array(
      							'key' => 'field_5c5b0f4208d86',
      							'label' => 'Download',
      							'name' => 'download',
      							'type' => 'file',
      							'instructions' => '',
      							'required' => 0,
      							'conditional_logic' => array(
      								array(
      									array(
      										'field' => 'field_5c5b0ef508d85',
      										'operator' => '==',
      										'value' => 'download',
      									),
      								),
      							),
      							'wrapper' => array(
      								'width' => '',
      								'class' => '',
      								'id' => '',
      							),
      							'return_format' => 'url',
      							'library' => 'all',
      							'min_size' => '',
      							'max_size' => '',
      							'mime_types' => '',
      						),
      						array(
      							'key' => 'field_5c5b11212540e',
      							'label' => 'Button Text',
      							'name' => 'button_text',
      							'type' => 'text',
      							'instructions' => '',
      							'required' => 0,
      							'conditional_logic' => array(
      								array(
      									array(
      										'field' => 'field_5c5b0ef508d85',
      										'operator' => '==',
      										'value' => 'download',
      									),
      								),
      							),
      							'wrapper' => array(
      								'width' => '',
      								'class' => '',
      								'id' => '',
      							),
      							'default_value' => '',
      							'placeholder' => '',
      							'prepend' => '',
      							'append' => '',
      							'maxlength' => '',
      						),
      					),
      					'min' => '',
      					'max' => '',
      				),
      			),
      			'button_label' => 'Add Section',
      			'min' => '',
      			'max' => '',
      		),
      	),
      	'location' => array(
      		array(
      			array(
      				'param' => 'post_type',
      				'operator' => '==',
      				'value' => 'page',
      			),
      		),
      	),
      	'menu_order' => 0,
      	'position' => 'normal',
      	'style' => 'default',
      	'label_placement' => 'top',
      	'instruction_placement' => 'label',
      	'hide_on_screen' => '',
      	'active' => 1,
      	'description' => '',
      ));

      endif;
  }
}

?>
