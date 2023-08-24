<?/* Template Name: Test1 TPL 
Template Post Type: post */ 

#Set right template for casino single
if(isset($_GET['cas_tpl']) && $_GET['cas_tpl'] == 777):
	// the query.
	$the_query = new WP_Query([
		'post_type'=>'casino',
		'posts_per_page'=>-1
	]); 
	$i=1;
	while ( $the_query->have_posts() ) :
		$the_query->the_post();
		// the_title( '<p>', '</>' );
		echo $i .' ' . get_the_ID() . ') ' .get_the_title(). '<hr/>';
		
		$pm =	get_post_meta(get_the_ID());
		echo '<pre>';
		print_r($pm);
		echo '</pre>';

		$i++;
		if ($i > 6)
			break;
	endwhile; 	
	wp_reset_postdata();
	// echo 'Bananza';
endif;