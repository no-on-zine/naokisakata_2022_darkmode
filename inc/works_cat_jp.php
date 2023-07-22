								<ul>
									<li>
										<a href="<?php echo home_url() ?>/works_jp/">All</a>
									</li>
								<?php
								  $terms = get_terms('works_tax_jp');
								  foreach ( $terms as $term ) {
								    echo '<li><a href="'.get_term_link($term).'">'.$term->name.'</a></li>';
								  }
								?>
								</ul>