						<ul>
							<li>
								<a href="<?php echo home_url() ?>/oeuvres_fr/">Tout</a>
							</li>
						<?php
						  $terms = get_terms('oeuvres_tax_fr');
						  foreach ( $terms as $term ) {
						    echo '<li><a href="'.get_term_link($term).'">'.$term->name.'</a></li>';
						  }
						?>
						</ul>