<?php 

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$vc_is_wp_version_3_6_more = version_compare(preg_replace('/^([\d\.]+)(\-.*$)/', '$1', get_bloginfo('version')), '3.6') >= 0;

return array(
	"name" => esc_html__("Tab", "salient-core"),
	"base" => "tab",
	"allowed_container_element" => 'vc_row',
	"is_container" => true,
	"content_element" => false,
	"params" => array(
		array(
			"type" => "textfield",
			"heading" => esc_html__("Title", "salient-core"),
			"param_name" => "title",
			"description" => esc_html__("Tab title.", "salient-core")
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Icon library', 'salient-core' ),
			'value' => array(
				esc_html__( 'None', 'salient-core' ) => 'none',
				esc_html__( 'Font Awesome', 'salient-core' ) => 'fontawesome',
				esc_html__( 'Iconsmind', 'salient-core' ) => 'iconsmind',
				esc_html__( 'Steadysets', 'salient-core' ) => 'steadysets',
				esc_html__( 'Linecons', 'salient-core' ) => 'linecons',
			),
			'save_always' => true,
			'param_name' => 'icon_family',
			'description' => __( 'Select icon library.', 'salient-core' ),
		),
		array(
			"type" => "iconpicker",
			"heading" => esc_html__("Icon", "salient-core"),
			"param_name" => "icon_fontawesome",
			"settings" => array( "iconsPerPage" => 4000),
			"dependency" => array('element' => "icon_family", 'emptyIcon' => true, 'value' => 'fontawesome'),
			"description" => esc_html__("Select icon from library.", "salient-core")
		),
		array(
			"type" => "iconpicker",
			"heading" => esc_html__("Icon", "salient-core"),
			"param_name" => "icon_iconsmind",
			"settings" => array( 'type' => 'iconsmind', 'emptyIcon' => true, "iconsPerPage" => 4000),
			"dependency" => array('element' => "icon_family", 'value' => 'iconsmind'),
			"description" => esc_html__("Select icon from library.", "salient-core")
		),
		array(
			"type" => "iconpicker",
			"heading" => esc_html__("Icon", "salient-core"),
			"param_name" => "icon_linecons",
			"settings" => array( 'type' => 'linecons', 'emptyIcon' => true, "iconsPerPage" => 4000),
			"dependency" => array('element' => "icon_family", 'value' => 'linecons'),
			"description" => esc_html__("Select icon from library.", "salient-core")
		),
		array(
			"type" => "iconpicker",
			"heading" => esc_html__("Icon", "salient-core"),
			"param_name" => "icon_steadysets",
			"settings" => array( 'type' => 'steadysets', 'emptyIcon' => true, "iconsPerPage" => 4000),
			"dependency" => array('element' => "icon_family", 'value' => 'steadysets'),
			"description" => esc_html__("Select icon from library.", "salient-core")
		),
		array(
			"type" => "tab_id",
			"heading" => esc_html__("Tab ID", "salient-core"),
			"param_name" => "id"
		)
	),
	'js_view' => ($vc_is_wp_version_3_6_more ? 'VcTabView' : 'VcTabView35')
);

?>