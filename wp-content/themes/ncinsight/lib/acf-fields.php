<?php
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_author-field',
		'title' => 'Author field',
		'fields' => array (
			array (
				'key' => 'field_552bedfd652d5',
				'label' => 'Author',
				'name' => 'author',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));

	register_field_group(array (
		'key' => 'group_54b81a88ad87a',
		'title' => 'Weekly Update Articles',
		'fields' => array (
			array (
				'key' => 'field_54b81a9977461',
				'label' => 'Posts to include',
				'name' => 'posts_to_include',
				'prefix' => '',
				'type' => 'relationship',
				'instructions' => 'Select articles to include in Weekly Update email. Sends Fridays at 3pm.',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'post_type' => '',
				'taxonomy' => '',
				'filters' => array (
					0 => 'search',
					1 => 'post_type',
					2 => 'taxonomy',
				),
				'elements' => '',
				'max' => '',
				'return_format' => 'object',
				'min' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'weekly-update',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
	));
}
