<?php
/**
 * @package WPSEO\Admin\Configurator
 */

/**
 * Class WPSEO_Config_Field_Company_Name
 */
class WPSEO_Config_Field_Company_Name extends WPSEO_Config_Field {

	/**
	 * WPSEO_Config_Field_Company_Name constructor.
	 */
	public function __construct() {
		parent::__construct( 'publishingEntityCompanyName', 'Input' );

		// @todo add label

		$this->set_requires( 'publishingEntityType', 'company' );
	}

	/**
	 * @param WPSEO_Configuration_Options_Adapter $adapter Adapter to register lookup on.
	 */
	public function set_adapter( WPSEO_Configuration_Options_Adapter $adapter ) {
		$adapter->add_yoast_lookup( $this->get_identifier(), 'wpseo', 'company_name' );
	}
}
