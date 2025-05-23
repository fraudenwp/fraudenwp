<?php

use function WCML\functions\isStandAlone;

/**
 * Created by OnTheGo Systems
 */
class WCML_Status_UI extends WCML_Templates_Factory {

	private $woocommerce_wpml;
	private $sitepress;
	private $sitepress_settings;


	/**
	 * WCML_Status_UI constructor.
	 *
	 * @param woocommerce_wpml $woocommerce_wpml
	 * @param SitePress        $sitepress
	 * @param array            $sitepress_settings
	 */
	public function __construct( $woocommerce_wpml, $sitepress, $sitepress_settings ) {
		parent::__construct();

		$this->woocommerce_wpml   = $woocommerce_wpml;
		$this->sitepress          = $sitepress;
		$this->sitepress_settings = $sitepress_settings;
	}

	public function get_model() {

		$WCML_Status_Status_UI           = new WCML_Status_Status_UI( $this->sitepress );
		$WCML_Status_Config_Warnings_UI  = new WCML_Status_Config_Warnings_UI( $this->sitepress, $this->woocommerce_wpml, $this->sitepress_settings );
		$WCML_Status_Store_Pages_UI      = new WCML_Status_Store_Pages_UI( $this->sitepress, $this->woocommerce_wpml );
		$WCML_Status_Taxonomies_UI       = new WCML_Status_Taxonomies_UI( $this->sitepress, $this->woocommerce_wpml );
		$WCML_Status_Multi_Currencies_UI = new WCML_Status_Multi_Currencies_UI( $this->woocommerce_wpml );
		$WCML_Status_Media_UI            = new WCML_Status_Media_UI( $this->sitepress );

		$model = [
			'plugins_status' => $WCML_Status_Status_UI->get_view(),
			'conf_warnings'  => $WCML_Status_Config_Warnings_UI->get_view(),
			'store_pages'    => $WCML_Status_Store_Pages_UI->get_view(),
			'taxonomies'     => $WCML_Status_Taxonomies_UI->get_view(),
			'multi_currency' => $WCML_Status_Multi_Currencies_UI->get_view(),
			'media'          => $WCML_Status_Media_UI->get_view(),
			'troubl_url'     => \WCML\Utilities\AdminUrl::getTroubleshootingTab(),
			'strings'        => [
				'troubl' => __( 'Troubleshooting', 'woocommerce-multilingual' ),
			],
		];

		if (
			! isStandAlone()
			&& ! $this->woocommerce_wpml->products->is_product_display_as_translated_post_type()
		) {
			$WCML_Status_Products_UI = new WCML_Status_Products_UI( $this->woocommerce_wpml, $this->sitepress );
			$model['products']       = $WCML_Status_Products_UI->get_view();
		}

		return $model;
	}

	public function init_template_base_dir() {
		$this->template_paths = [
			WCML_PLUGIN_PATH . '/templates/status/',
		];
	}

	public function get_template() {
		return 'status.twig';
	}
}
