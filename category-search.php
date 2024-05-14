function nanaobiriyeboah_product_search() {
	$terms = get_terms( array(
		'taxonomy' => 'product_cat',
		'hide_empty' => true,
	) );

	$form = '';
	$form .= '<form action="' . esc_url( home_url( '/'  ) ) . '" class="search-form expanding-search-form"" role="search" method="get" id="searchform">';
	$form .= '<div class="courses_category_search_inner">';
	$form .= '<div class="input-search-addon search-dropdown">';
	$form .= '<select class="form-select custom-width button dropdown-toggle" name="product_cat" id="categories">';
	$form .= '<option class="select-value" value="" selected="selected">'.esc_html__('All Courses','nanaobiriyeboah-companion').'</option>';
	foreach ( $terms as $term ) {
		if($term->count >= 1){
			$form .= '<option value="'.esc_attr($term->slug).'">'.esc_html($term->name).'</option>';
		}
	}
	$form .= '</select>';
	$form .= '</div><!-- input-search-addon -->';
	$form .= '<div class="input-search-field">';
	$form .= '<input type="search" value="' . get_search_query() . '" class="form-control search-input" name="s" placeholder="'.esc_attr__('What do you want to learn?','nanaobiriyeboah-companion').'" autocomplete="off" >';
	$form .= '</div><!-- input-search-field -->';
	$form .= '<div class="input-search-button">';
	$form .= '<button class="btn btn-primary button search-button" type="submit"><span class="icon ion-search">
	<i class="fas fa-search"></i>
</span></button>';
	$form .= '</div><!-- input-search-button -->';
	$form .= '</div><!-- input-group -->';
	$form .= '<input type="hidden" name="post_type" value="product" />';
	$form .= '</form>';

	return $form;
}
