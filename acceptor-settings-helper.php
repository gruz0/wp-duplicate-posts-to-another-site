<?php
/**
 * Acceptor Settings Helper
 *
 * @category AcceptorSettingsHelper
 * @package  WP_Donor
 * @author   Alexander Gruzov
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/gruz0/wp-donor
 */

/**
 * Helper to access to Acceptor's settings
 *
 * @since 0.1
 */
class AcceptorSettingsHelper {
	/**
	 * Settings
	 *
	 * @since 0.1
	 *
	 * @var array $_settings
	 */
	private $_settings = array();

	/**
	 * Saved settings to allow lazy loading
	 *
	 * @since 0.1
	 *
	 * @var array $_saved_settings
	 */
	private $_saved_settings = array();

	/**
	 * Contructor
	 *
	 * @since 0.1
	 *
	 * @param array $acceptor_settings Acceptor settings.
	 *
	 * @return void
	 */
	function __construct( $acceptor_settings ) {
		$this->_settings = $acceptor_settings;
	}

	/**
	 * Returns 'allow_duplicate_post_title' or predefined value if it's not present
	 *
	 * @since 0.1
	 * @return integer
	 */
	function allow_duplicate_post_title() {
		if ( ! isset( $this->_saved_settings['allow_duplicate_post_title'] ) ) {
			if ( isset( $this->_settings['allow_duplicate_post_title'] ) ) {
				$value = absint( $this->_settings['allow_duplicate_post_title'] ) === 1;
			} else {
				$value = ALLOW_DUPLICATE_POST_TITLE;
			}

			$this->_saved_settings['allow_duplicate_post_title'] = $value;
		}

		return $this->_saved_settings['allow_duplicate_post_title'];
	}

	/**
	 * Returns 'save_duplicate_post_title_to_draft' or predefined value if it's not present
	 *
	 * @since 0.1
	 * @return integer
	 */
	function save_duplicate_post_title_to_draft() {
		if ( ! isset( $this->_saved_settings['save_duplicate_post_title_to_draft'] ) ) {
			if ( isset( $this->_settings['save_duplicate_post_title_to_draft'] ) ) {
				$value = absint( $this->_settings['save_duplicate_post_title_to_draft'] ) === 1;
			} else {
				$value = SAVE_DUPLICATE_POST_TITLE_TO_DRAFT;
			}

			$this->_saved_settings['save_duplicate_post_title_to_draft'] = $value;
		}

		return $this->_saved_settings['save_duplicate_post_title_to_draft'];
	}

	/**
	 * Returns 'author_id' or predefined value if it's not present
	 *
	 * @since 0.1
	 * @return integer
	 */
	function author_id() {
		if ( ! isset( $this->_saved_settings['author_id'] ) ) {
			if ( isset( $this->_settings['author_id'] ) ) {
				$value = absint( $this->_settings['author_id'] );
			} else {
				$value = DEFAULT_AUTHOR_ID;
			}

			$this->_saved_settings['author_id'] = $value;
		}

		return $this->_saved_settings['author_id'];
	}

	/**
	 * Returns 'create_missing_categories' or predefined value if it's not present
	 *
	 * @since 0.1
	 * @return integer
	 */
	function create_missing_categories() {
		if ( ! isset( $this->_saved_settings['create_missing_categories'] ) ) {
			if ( isset( $this->_settings['create_missing_categories'] ) ) {
				$value = absint( $this->_settings['create_missing_categories'] ) === 1;
			} else {
				$value = CREATE_MISSING_CATEGORIES;
			}

			$this->_saved_settings['create_missing_categories'] = $value;
		}

		return $this->_saved_settings['create_missing_categories'];
	}

	/**
	 * Returns 'default_category_id' or predefined value if it's not present
	 *
	 * @since 0.1
	 * @return integer
	 */
	function default_category_id() {
		if ( ! isset( $this->_saved_settings['default_category_id'] ) ) {
			if ( isset( $this->_settings['default_category_id'] ) ) {
				$value = absint( $this->_settings['default_category_id'] );
			} else {
				$value = DEFAULT_CATEGORY_ID;
			}

			$this->_saved_settings['default_category_id'] = $value;
		}

		return $this->_saved_settings['default_category_id'];
	}

	/**
	 * Returns 'compare_category_by' or predefined value if it's not present
	 *
	 * @since 0.1
	 * @return string
	 */
	function compare_category_by() {
		if ( ! isset( $this->_saved_settings['compare_category_by'] ) ) {
			if ( isset( $this->_settings['compare_category_by'] ) ) {
				if ( in_array( esc_attr( $this->_settings['compare_category_by'] ), array( 'slug', 'name' ), true ) ) {
					$value = esc_attr( $this->_settings['compare_category_by'] );
				} else {
					$value = 'slug';
				}
			} else {
				$value = COMPARE_CATEGORY_BY;
			}

			$this->_saved_settings['compare_category_by'] = $value;
		}

		return $this->_saved_settings['compare_category_by'];
	}

	/**
	 * Returns 'start_from' or predefined value if it's not present
	 *
	 * @since 0.1
	 * @return string
	 */
	function start_from() {
		if ( ! isset( $this->_saved_settings['start_from'] ) ) {
			$this->_saved_settings['start_from'] = $this->_settings['start_from'];
		}

		return $this->_saved_settings['start_from'];
	}

	/**
	 * Returns 'use_featured_images' or predefined value if it's not present
	 *
	 * @since 0.1
	 * @return integer
	 */
	function use_featured_images() {
		if ( ! isset( $this->_saved_settings['use_featured_images'] ) ) {
			if ( isset( $this->_settings['use_featured_images'] ) ) {
				$value = absint( $this->_settings['use_featured_images'] );
			} else {
				$value = USE_FEATURED_IMAGES;
			}

			$this->_saved_settings['use_featured_images'] = $value;
		}

		return $this->_saved_settings['use_featured_images'];
	}

	/**
	 * Returns 'skip_featured_image_if_empty' or predefined value if it's not present
	 *
	 * @since 0.1
	 * @return integer
	 */
	function skip_featured_image_if_empty() {
		if ( ! isset( $this->_saved_settings['skip_featured_image_if_empty'] ) ) {
			if ( isset( $this->_settings['skip_featured_image_if_empty'] ) ) {
				$value = absint( $this->_settings['skip_featured_image_if_empty'] );
			} else {
				$value = SKIP_FEATURED_IMAGE_IF_EMPTY;
			}

			$this->_saved_settings['skip_featured_image_if_empty'] = $value;
		}

		return $this->_saved_settings['skip_featured_image_if_empty'];
	}
}

