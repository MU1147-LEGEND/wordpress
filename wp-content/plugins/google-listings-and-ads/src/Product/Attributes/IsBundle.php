<?php
declare( strict_types=1 );

namespace Automattic\WooCommerce\GoogleListingsAndAds\Product\Attributes;

use Automattic\WooCommerce\GoogleListingsAndAds\Admin\Product\Attributes\Input\IsBundleInput;
use Automattic\WooCommerce\GoogleListingsAndAds\Product\AttributeMapping\Traits\IsEnumTrait;

defined( 'ABSPATH' ) || exit;

/**
 * Class IsBundle
 *
 * @package Automattic\WooCommerce\GoogleListingsAndAds\Product\Attributes
 */
class IsBundle extends AbstractAttribute implements WithMappingInterface {

	use IsEnumTrait;

	/**
	 * Returns the attribute ID.
	 *
	 * Must be the same as a Google product's property name to be set automatically.
	 *
	 * @return string
	 *
	 * @see \Google\Service\ShoppingContent\Product for the list of properties.
	 */
	public static function get_id(): string {
		return 'isBundle';
	}

	/**
	 * Return an array of WooCommerce product types that this attribute can be applied to.
	 *
	 * @return array
	 */
	public static function get_applicable_product_types(): array {
		return [ 'simple', 'variation' ];
	}

	/**
	 * Return the attribute type. Must be a valid PHP type.
	 *
	 * @return string
	 *
	 * @link https://www.php.net/manual/en/function.settype.php
	 */
	public static function get_value_type(): string {
		return 'boolean';
	}

	/**
	 * Return the attribute's input class. Must be an instance of `AttributeInputInterface`.
	 *
	 * @return string
	 *
	 * @see AttributeInputInterface
	 *
	 * @since 1.5.0
	 */
	public static function get_input_type(): string {
		return IsBundleInput::class;
	}

	/**
	 * Returns the attribute name
	 *
	 * @return string
	 */
	public static function get_name(): string {
		return __( 'Is Bundle', 'google-listings-and-ads' );
	}


	/**
	 * Returns the attribute sources
	 *
	 * @return array
	 */
	public static function get_sources(): array {
		return [
			'yes' => __( 'Yes', 'google-listings-and-ads' ),
			'no'  => __( 'No', 'google-listings-and-ads' ),
		];
	}
}
