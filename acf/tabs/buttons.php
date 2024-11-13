<?php

function acf_buttons()
{

    return array(
  		array(
  			'key' => 'field_6182f613311cz',
  			'label' => 'Buttons',
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
  			'key' => 'field_6182f61f311dz',
  			'label' => 'Buttons',
  			'name' => 'hero_buttons',
  			'type' => 'repeater',
  			'instructions' => 'Add up to 4 buttons.',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array(
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'collapsed' => 'field_6182f642311dz',
  			'min' => 0,
  			'max' => 4,
  			'layout' => 'block',
  			'button_label' => 'Add Button',
  			'sub_fields' => array(
  				array(
  					'key' => 'field_6196abe21f65f',
  					'label' => 'Link',
  					'name' => 'link',
  					'type' => 'link',
  					'instructions' => '',
  					'required' => 0,
  					'conditional_logic' => 0,
  					'wrapper' => array(
  						'width' => '25',
  						'class' => '',
  						'id' => '',
  					),
  					'return_format' => 'array',
  					'parent_repeater' => 'field_6182f61f311dz',
  				),
  			),
  			'rows_per_page' => 20,
  		),
    );
}
