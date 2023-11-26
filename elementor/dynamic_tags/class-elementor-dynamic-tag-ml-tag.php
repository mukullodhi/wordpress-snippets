<?php
/**
 * Elementor dynamic tags -- ML Tag.
 *
 * @package elementor-dynamic-tags.
 */

/**
 * The Elementor_Dynamic_Tag_Ml_Tag class is a subclass of the Tag class in the Elementor plugin for
 * WordPress, used for creating dynamic tags.
 */
class Elementor_Dynamic_Tag_Ml_Tag extends \Elementor\Core\DynamicTags\Tag {

	/**
	 * The function returns the string 'ml_tag'.
	 *
	 * @return The string 'ml_tag' is being returned.
	 */
	public function get_name() {
		return 'ml_tag';}

	/**
	 * The function returns the title "ML Tag" with the text domain "elementor" after escaping HTML
	 * characters.
	 *
	 * @return the translated string "ML Tag" using the `esc_html__()` function with the text domain
	 * "elementor".
	 */
	public function get_title() {
		return esc_html__( 'ML Tag', 'elementor' );}

	/**
	 * The function "get_group" returns an array containing the string "custom_tag_group".
	 *
	 * @return an array with the value 'custom_tag_group'.
	 */
	public function get_group() {
		return array( 'custom_tag_group' );
	}

	/**
	 * The function "get_categories" returns an array containing the text category of the Elementor
	 * dynamic tags module.
	 *
	 * @return An array containing the constant value
	 * \Elementor\Modules\DynamicTags\Module::TEXT_CATEGORY.
	 */
	public function get_categories() {
		return array( \Elementor\Modules\DynamicTags\Module::TEXT_CATEGORY );
	}

	/**
	 * The function "register_controls" is a protected method in PHP.
	 */
	protected function register_controls() {}

	/**
	 * The render function in PHP outputs the string "Ml tag".
	 */
	public function render() {
		echo 'Ml tag';
	}

}
