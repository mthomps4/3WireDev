<?php
 $title = "DIRT ROAD";

#
# call the API and decode the response
#
//$url = "https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=fcda26e6eea2ecfe0681b095ded09bba&user_id=mthomps4&tags=uploaded%3Aby%3Dinstagram&extras=title%2C+url_o&format=php_serial&auth_token=72157673651313243-4a714debb0be5c40&api_sig=a755623e9fee523cf5bcfc7d9ea5606a";
  $url = "https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=f7bfaa247e9200c8b370e8e424d4556f&user_id=mthomps4&tags=uploaded%3Aby%3Dinstagram&extras=title%2C+url_o%2Cdate_upload&format=php_serial";
  $rsp = file_get_contents($url);
  $rsp_obj = unserialize($rsp);
?>

<div class="wrapper">
  <div id=Blog>
  <h2 class="PageTitle">Blog</h2>

  <a href="https://www.instagram.com/3wirebuild/" target="_blank" class="blogInstaFlex">
    <img class="contactIcon blogInsta" src="../styles/Social/instagram.png">
    <p class="blogInstaTag">@3WireBuild</p>
  </a>

  <div id="BlogContainer">
    <div id="WireBlog">

      <?php

      $posts = array();
        foreach($rsp_obj['photos']['photo'] as $post){
          array_push($posts, $post);
        }

        for($i=0; $i<20; $i++){
          echo "<div class='postContainer'>";
            echo "<img class='postImage' src='" . $posts[$i]['url_o'] . "' alt='Image Post' />";
            echo "<p class='postTitle'>" . $posts[$i]['title'] . "</p>";
            echo "<p class='postDate'>" . Date("m/d/y", $posts[$i]['dateupload']) . "</p>";
          echo "</div>";
        }

       ?>

    </div>
  </div>

</div>
</div>
