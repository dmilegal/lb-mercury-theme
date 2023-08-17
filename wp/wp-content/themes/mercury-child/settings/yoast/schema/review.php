<?php
use Yoast\WP\SEO\Config\Schema_IDs;
use Yoast\WP\SEO\Surfaces\Helpers_Surface;

/**
 * Returns schema Review data.
 */
class Review {

  /**
   * A value object with context variables.
   *
   * @var WPSEO_Schema_Context
   */
  public $context;

  /**
   * Review constructor.
   *
   * @param WPSEO_Schema_Context $context Value object with context variables.
   */
  public function __construct( WPSEO_Schema_Context $context ) {
      
    $this->context = $context;
    $this->helpers = YoastSEO()->classes->get( Helpers_Surface::class );
  }

  /**
   * Determines whether or not a piece should be added to the graph.
   *
   * @return bool Whether or not a piece should be added.
   */
  public function is_needed() {
    if ( is_singular( 'casino' ) ) {
        return true;
    }

    return false;
  }

	/**
	 * Returns Review data.
	 *
	 * @return array Review data.
	 */
	public function generate() {
    $post_id = $this->get_post_id();

    if ( get_option( 'aces_rating_stars_number' ) ) {
      $casino_rating_stars_number_value = get_option( 'aces_rating_stars_number' );
    } else {
      $casino_rating_stars_number_value = '5';
    }
  
    $casino_overall_rating = esc_html( get_post_meta( $post_id, 'casino_overall_rating', true ) );


    $data = [
      "@type" => "Review",
      'isPartOf' => [ '@id' => $this->context->main_schema_id ],
      '@id'   => $this->context->canonical . '#/review/' . $post_id,
      "datePublished" => get_the_date(DateTime::ATOM, $post_id),
      "reviewBody" => esc_html(get_the_excerpt($post_id))
    ];


    $data = $this->add_reviewed($data);
    $data = $this->add_rating($data);
    $data = $this->add_author($data);
    $data = $this->add_image($data);


		return $data;
	}


  private function add_rating($data) {
    $post_id = $this->get_post_id();

    if ( get_option( 'aces_rating_stars_number' ) ) {
      $casino_rating_stars_number_value = get_option( 'aces_rating_stars_number' );
    } else {
      $casino_rating_stars_number_value = '5';
    }
  
    $casino_overall_rating = esc_html( get_post_meta( $post_id, 'casino_overall_rating', true ) );

    $data["reviewRating"] = [
      "@type" => "Rating",
      "ratingValue" => $casino_overall_rating,
      "bestRating" => $casino_rating_stars_number_value,
      "worstRating" => "1"
    ];

    return $data;
  }

  private function add_author($data) {
    $author = get_userdata($this->get_post_author());

    $data["author"] = [
      'name' => ( $author instanceof WP_User ) ? $this->helpers->schema->html->smart_strip_tags( $author->display_name ) : '',
      '@id'  => $this->helpers->schema->id->get_user_schema_id( $this->context->indexable->author_id, $this->context ),
    ];

    return $data;
  }

  private function add_reviewed($data) {
    $post_id = $this->get_post_id();

    $data["itemReviewed"] = [
      "@type" => "Organization",
      "@id" =>  $this->context->canonical . Schema_IDs::ORGANIZATION_HASH,
      "name" => esc_html(get_the_title($post_id)),
    ];

    $data["itemReviewed"] = $this->add_image($data["itemReviewed"]);

    return $data;
  }

	private function add_image( $data ) {
		if ( $this->context->main_image_url !== null ) {
			$data['image'] = [
				'@id' => $this->context->canonical . Schema_IDs::PRIMARY_IMAGE_HASH,

			];
		}

		return $data;
	}

  private function get_post_id() {
    return $this->context->post->ID;
  }
  private function get_post_author() {
    return $this->context->post->post_author;
  }

}
