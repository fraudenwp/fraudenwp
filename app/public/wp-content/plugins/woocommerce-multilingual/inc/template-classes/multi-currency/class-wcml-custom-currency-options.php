<?php

use WPML\Core\Twig_SimpleFunction;

class WCML_Custom_Currency_Options extends WCML_Templates_Factory {

	/** @var woocommerce_wpml $woocommerce_wpml */
	private $woocommerce_wpml;

	/** @var array $args */
	private $args;

	/** @var string $current_currency_for_preview */
	private $current_currency_for_preview;

	/**
	 * WCML_Custom_Currency_Options constructor.
	 *
	 * @param array            $args
	 * @param woocommerce_wpml $woocommerce_wpml
	 */
	public function __construct( $args, $woocommerce_wpml ) {
		// @todo Cover by tests, required for wcml-3037.
		$functions = [
			new Twig_SimpleFunction( 'get_currency_symbol', [ $this, 'get_currency_symbol' ] ),
		];

		parent::__construct( $functions );
		$this->woocommerce_wpml = $woocommerce_wpml;
		$this->args             = $args;

		add_action( 'wcml_before_multi_currency_ui', [ $this, 'render' ] );
	}

	public function get_model() {

		$currencies_not_used = array_diff(
			array_keys( $this->args['wc_currencies'] ),
			array_keys( $this->args['currencies'] ),
			[ $this->args['default_currency'] ]
		);
		$current_currency    = empty( $this->args['currency_code'] ) ? current( $currencies_not_used ) : $this->args['currency_code'];

		$exchange_rate_services   = $this->woocommerce_wpml->multi_currency->exchange_rate_services;
		$exchange_rates_automatic = $exchange_rate_services->get_setting( 'automatic' );

		if ( $exchange_rates_automatic ) {
			$service_id             = $exchange_rate_services->get_setting( 'service' );
			$services               = $exchange_rate_services->get_services();
			$exchange_rates_service = isset( $services[ $service_id ] ) ? $services[ $service_id ]->get_name() : '';
		} else {
			$exchange_rates_service = '';
		}

		$tracking_link = new WCML_Tracking_Link();

		$model = [

			'args'                     => $this->args,
			'form'                     => [
				'select'           => __( 'Select currency', 'woocommerce-multilingual' ),
				'rate'             => [
					'label'        => __( 'Exchange Rate', 'woocommerce-multilingual' ),
					'only_numeric' => __( 'Only numeric', 'woocommerce-multilingual' ),
					'min'          => '0.01',
					'step'         => '0.01',
					'set_on'       => empty( $this->args['currency']['updated'] ) ? '' :
										sprintf(
											/* translators: %s is a date and time of currency update */
											__( 'Set on %s', 'woocommerce-multilingual' ),
											date( 'F j, Y g:i a', strtotime( $this->args['currency']['updated'] ) )
										),
					'previous'     => empty( $this->args['currency']['previous_rate'] ) ? '' :
										' ' . sprintf(
											/* translators: %s is a currency previous rate */
											__( '(previous value: %s)', 'woocommerce-multilingual' ),
											$this->args['currency']['previous_rate']
										),
				],
				'preview'          => [
					'label' => __( 'Currency Preview', 'woocommerce-multilingual' ),
					'value' => $this->get_price_preview( $current_currency ),
				],
				'position'         => [
					'label'       => __( 'Currency Position', 'woocommerce-multilingual' ),
					'left'        => __( 'Left', 'woocommerce-multilingual' ),
					'right'       => __( 'Right', 'woocommerce-multilingual' ),
					'left_space'  => __( 'Left with space', 'woocommerce-multilingual' ),
					'right_space' => __( 'Right with space', 'woocommerce-multilingual' ),
				],
				'thousand_sep'     => [
					'label' => __( 'Thousand Separator', 'woocommerce-multilingual' ),
				],
				'decimal_sep'      => [
					'label' => __( 'Decimal Separator', 'woocommerce-multilingual' ),
				],
				'num_decimals'     => [
					'label'        => __( 'Number of Decimals', 'woocommerce-multilingual' ),
					'only_numeric' => __( 'Only numeric', 'woocommerce-multilingual' ),
				],
				'rounding'         => [
					'label'                => __( 'Rounding to the nearest integer', 'woocommerce-multilingual' ),
					'disabled'             => __( 'Disabled', 'woocommerce-multilingual' ),
					'up'                   => __( 'Up', 'woocommerce-multilingual' ),
					'down'                 => __( 'Down', 'woocommerce-multilingual' ),
					'nearest'              => __( 'Nearest', 'woocommerce-multilingual' ),
					'increment'            => __( 'Increment for nearest integer', 'woocommerce-multilingual' ),
					'rounding_tooltip'     => sprintf(
						/* translators: %s is HTML tag <br> (new line) */
						__( 'Round the converted price to the closest integer. %se.g. 15.78 becomes 16.00', 'woocommerce-multilingual' ), '<br />'
					),

					'increment_tooltip'    => sprintf(
												/* translators: %s is HTML tag <br> (new line) */
												__( 'The resulting price will be an increment of this value after initial rounding.%se.g.:', 'woocommerce-multilingual' ),
												'<br>'
					                          ) . '<br />' .
											 __( '1454.07 &raquo; 1454 when set to 1', 'woocommerce-multilingual' ) . '<br />' .
											 __( '1454.07 &raquo; 1450 when set to 10', 'woocommerce-multilingual' ) . '<br />' .
											 __( '1454.07 &raquo; 1500 when set to 100', 'woocommerce-multilingual' ) . '<br />',
					'autosubtract_tooltip' => __( 'The value to be subtracted from the amount obtained previously.', 'woocommerce-multilingual' ) . '<br /><br />' .
											 __( 'For 1454.07, when the increment for the nearest integer is 100 and the auto-subtract amount is 1, the resulting amount is 1499.', 'woocommerce-multilingual' ),
				],
				'autosubtract'     => [
					'label'        => __( 'Autosubtract amount', 'woocommerce-multilingual' ),
					'only_numeric' => __( 'Only numeric', 'woocommerce-multilingual' ),
				],
				'payment_gateways' => [
					'label'          => __( 'Payment Gateways', 'woocommerce-multilingual' ),
					'settings_label' => sprintf(
						/* translators: %s is current currency */
						__( 'Custom settings for %s', 'woocommerce-multilingual' ),
						$current_currency
					),
					'learn_url'      => $tracking_link->getWcmlMultiCurrencyDoc( '#payment-gateways-settings' ),
					'learn_txt'      => __( 'Learn more', 'woocommerce-multilingual' ),
				],
				'number_error'     => __( 'Please enter a valid number', 'woocommerce-multilingual' ),
				'cancel'           => __( 'Cancel', 'woocommerce-multilingual' ),
				'save'             => __( 'Save', 'woocommerce-multilingual' ),
			],

			'automatic_rates'          => $exchange_rates_automatic,
			'automatic_rates_tip'      => sprintf(
				/* translators: %s is an exchange rates service */
				__( 'Exchange rate updated automatically from %s', 'woocommerce-multilingual' ),
				$exchange_rates_service
			),
			'current_currency'         => $current_currency,
			'active_currencies'        => $this->woocommerce_wpml->multi_currency->get_currencies( true ),
			'payment_gateways_enabled' => $this->woocommerce_wpml->multi_currency->currencies_payment_gateways->is_enabled( $current_currency ),
			'payment_gateways'         => $this->woocommerce_wpml->multi_currency->currencies_payment_gateways->get_gateways(),
		];

		return $model;
	}

	public function enqueue_resources() {
		wp_enqueue_style( 'otgsSwitcher' );
	}

	public function render() {
		$this->enqueue_resources();
		echo $this->get_view();
	}

	protected function init_template_base_dir() {
		$this->template_paths = [
			WCML_PLUGIN_PATH . '/templates/multi-currency/',
		];
	}

	public function get_template() {
		return 'custom-currency-options.twig';
	}

	public function get_currency_symbol( $code ) {
		return get_woocommerce_currency_symbol( $code );
	}

	public function get_price_preview( $currency ) {

		if ( isset( $this->args['currencies'][ $currency ] ) ) {

			$this->current_currency_for_preview = $currency;

			add_filter( 'option_woocommerce_currency_pos', [ $this, 'filter_currency_pos' ] );

			$args  = [
				'currency'           => $currency,
				'decimal_separator'  => $this->args['currencies'][ $currency ]['decimal_sep'],
				'thousand_separator' => $this->args['currencies'][ $currency ]['thousand_sep'],
				'decimals'           => $this->args['currencies'][ $currency ]['num_decimals'],
				'price_format'       => get_woocommerce_price_format(),
			];
			$price = wc_price( '1234.00', $args );

			remove_filter( 'option_woocommerce_currency_pos', [ $this, 'filter_currency_pos' ] );

			unset( $this->current_currency_for_preview );

		} else {
			$args  = [
				'currency'     => $currency,
				'price_format' => get_woocommerce_price_format(),
			];
			$price = wc_price( '1234.00', $args );
		}

		return $price;
	}

	public function filter_currency_pos( $value ) {

		if ( isset( $this->args['currencies'][ $this->current_currency_for_preview ]['position'] ) ) {
			$value = $this->args['currencies'][ $this->current_currency_for_preview ]['position'];
		}

		return $value;

	}


}
