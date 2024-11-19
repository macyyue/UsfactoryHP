<?php
get_header();

?>
テーマはじまる！
<main class="container">
    <div class="main-box">
        <div id="lists">
            <?php
            while (have_posts()) {
                the_post();
                // echo '<h2>'.get_the_title().'</h2>';
                echo ' <div id="list">';
                the_title('<h1><a href="' . get_permalink() . '">', '</a></h1>');
                the_excerpt();
                echo '<div class="date-line"> 
                <span>
                ' . get_the_date('T-m-d') . ' ' . get_the_author() . '
                </span>
                <a href="' . get_permalink() . '"><span>詳細を見る</span></a>  
                </div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>


</main>


<?php
get_footer();
?>