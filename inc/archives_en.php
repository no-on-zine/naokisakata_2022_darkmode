					<?php // 年別アーカイブリストを表示
					  $year=NULL; // 年の初期化
					  $args = array( // クエリの作成
					    'post_type' => 'post', // 投稿タイプの指定
					    'orderby' => 'date', // 日付順で表示
					    'posts_per_page' => -1 // すべての投稿を表示
					  );
					  $the_query = new WP_Query($args); if($the_query->have_posts()){ // 投稿があれば表示
					    echo '<ul>';
					    while ($the_query->have_posts()): $the_query->the_post(); // ループの開始
					      if ($year != get_the_date('Y')){ // 同じ年でなければ表示
					        $year = get_the_date('Y'); // 年の取得
					        echo '<li><a href="'.home_url( '/', 'http' ).'date/'.$year.'?cat=17">'.$year.'</a></li>'; // 年別アーカイブリストの表示
					      }
					    endwhile; // ループの終了
					    echo '</ul>';
					    wp_reset_postdata(); // クエリのリセット
					  }
					?>