<?php

use Yoast\WP\SEO\Generators\Schema\Person;
use Yoast\WP\SEO\Config\Schema_IDs;

/**
 * Returns schema Person Static data.
 */
class PersonStatic extends Person
{

	/**
	 * Determine whether we should return Person Static schema.
	 *
	 * @return bool
	 */
	public function is_needed()
	{
		if ($this->context->indexable->object_type === 'user') {
			return false;
		}

		if (
			$this->context->indexable->object_type === 'post'
			&& $this->helpers->schema->article->is_author_supported($this->context->indexable->object_sub_type)
		) {
			return true;
		}

		return false;
	}

	/**
	 * Returns Person Schema data.
	 *
	 * @return bool|array Person data on success, false on failure.
	 */
	public function generate()
	{
		$user_id = $this->determine_user_id();

		if (!$user_id) {
			return false;
		}

		$data = $this->build_person_data($user_id);

		$user = \get_userdata($user_id);

		$data['@id'] = $this->context->site_url . Schema_IDs::PERSON_HASH . 'static/' . \wp_hash($user->user_login . $user_id);

		if ($this->site_represents_current_author() === false) {
			$data['@type'] = ['Person'];
			unset($data['logo']);
		}

		// If this is a post and the author archives are enabled, set the author archive url as the author url.
		if ($this->context->indexable->object_type === 'post') {
			if ($this->helpers->options->get('disable-author') !== true) {
				$data['url'] = $this->helpers->user->get_the_author_posts_url($user_id);
			}
		}

		return $data;
	}

	protected function determine_user_id()
	{
		$user_id = 0;

		if ($this->context->indexable->object_type === 'post') {
			$user_id = (int) $this->context->post->post_author;
		}

		if ($this->context->indexable->object_type === 'user') {
			$user_id = $this->context->indexable->object_id;
		}

		/**
		 * Filter: 'wpseo_schema_person_user_id' - Allows filtering of user ID used for person output.
		 *
		 * @api int|bool $user_id The user ID currently determined.
		 */
		$user_id = \apply_filters('wpseo_schema_person_user_id', $user_id);

		if (\is_int($user_id) && $user_id > 0) {
			return $user_id;
		}

		return false;
	}

	/**
	 * An author should not have an image from options, this only applies to persons.
	 *
	 * @param array   $data      The Person schema.
	 * @param string  $schema_id The string used in the `@id` for the schema.
	 * @param bool    $add_hash  Whether or not the person's image url hash should be added to the image id.
	 * @param WP_User $user_data User data.
	 *
	 * @return array The Person schema.
	 */
	protected function set_image_from_options($data, $schema_id, $add_hash = false, $user_data = null)
	{
		if ($this->site_represents_current_author($user_data)) {
			return parent::set_image_from_options($data, $schema_id, $add_hash, $user_data);
		}

		return $data;
	}
}
