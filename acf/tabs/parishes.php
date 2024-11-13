<?php

function acf_parishes()
{
    return array(
  		array(
  			'key' => 'field_626c37b2602a3',
  			'label' => 'Parish Buttons',
  			'name' => '',
  			'type' => 'tab',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array(
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'placement' => 'top',
  			'endpoint' => 0,
  		),
  		array(
  			'key' => 'field_626c37cd602a4',
  			'label' => 'Buttons or Scroll?',
  			'name' => 'buttons_or_scroll',
  			'type' => 'true_false',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array(
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'message' => '',
  			'default_value' => 1,
  			'ui' => 1,
  			'ui_on_text' => 'Buttons',
  			'ui_off_text' => 'Scroll',
  		),
  		array(
  			'key' => 'field_626c3734abd52',
  			'label' => 'Parish Buttons',
  			'name' => 'parish_buttons',
  			'type' => 'repeater',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => array(
  				array(
  					array(
  						'field' => 'field_626c37cd602a4',
  						'operator' => '==',
  						'value' => '1',
  					),
  				),
  			),
  			'wrapper' => array(
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'collapsed' => '',
  			'min' => 0,
  			'max' => 0,
  			'layout' => 'table',
  			'button_label' => '',
  			'sub_fields' => array(
  				array(
  					'key' => 'field_626c3747abd53',
  					'label' => 'Image',
  					'name' => 'image',
  					'type' => 'image',
  					'instructions' => 'Recommended aspect ratio 370 / 305.',
  					'required' => 0,
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
  					'key' => 'field_626c3773abd54',
  					'label' => 'Mass Times',
  					'name' => 'text',
  					'type' => 'textarea',
  					'instructions' => 'Character limit 500.',
  					'required' => 0,
  					'conditional_logic' => 0,
  					'wrapper' => array(
  						'width' => '',
  						'class' => '',
  						'id' => '',
  					),
  					'default_value' => '',
  					'placeholder' => '',
  					'maxlength' => 500,
  					'rows' => '',
  					'new_lines' => '',
  				),
  				array(
  					'key' => 'field_626c379dabd55',
  					'label' => 'Link',
  					'name' => 'link',
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
  			),
  		),
  		array(
  			'key' => 'field_6270a5d99e494',
  			'label' => 'Parish Scroll Title',
  			'name' => 'parish_scroll_title',
  			'type' => 'text',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => array(
  				array(
  					array(
  						'field' => 'field_626c37cd602a4',
  						'operator' => '!=',
  						'value' => '1',
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
  		array(
  			'key' => 'field_626c380e602a5',
  			'label' => 'Parish Scroll',
  			'name' => 'parish_scroll',
  			'type' => 'repeater',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => array(
  				array(
  					array(
  						'field' => 'field_626c37cd602a4',
  						'operator' => '!=',
  						'value' => '1',
  					),
  				),
  			),
  			'wrapper' => array(
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'collapsed' => '',
  			'min' => 0,
  			'max' => 0,
  			'layout' => 'table',
  			'button_label' => '',
  			'sub_fields' => array(
  				array(
  					'key' => 'field_626c3822602a6',
  					'label' => 'Parish',
  					'name' => 'parish',
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
  			),
  		),
  );
}