<?php
 $title = "DIRT ROAD";

#
# call the API and decode the response
#
//$url = "https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=fcda26e6eea2ecfe0681b095ded09bba&user_id=mthomps4&tags=uploaded%3Aby%3Dinstagram&extras=title%2C+url_o&format=php_serial&auth_token=72157673651313243-4a714debb0be5c40&api_sig=a755623e9fee523cf5bcfc7d9ea5606a";
  $url = "https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=fcda26e6eea2ecfe0681b095ded09bba&user_id=mthomps4&tags=uploaded%3Aby%3Dinstagram&extras=title%2C+url_o%2Cdate_upload&format=php_serial&auth_token=72157673651313243-4a714debb0be5c40&api_sig=fbd6c4f39c4cc9f11895fb337beba21b";
  $rsp = file_get_contents($url);
  $rsp_obj = unserialize($rsp);
?>

<div class="wrapper">
  <div id=Blog>
  <h2 class="PageTitle">Blog</h2>

  <div id="BlogContainer">
    <div id="WireBlog">
      <?php
        foreach($rsp_obj['photos']['photo'] as $post){
          echo "<div class='postContainer'>";
            echo "<img class='postImage' src='" . $post['url_o'] . "' alt='Image Post' />";
            echo "<p class='postTitle'>" . $post['title'] . "</p>";
            echo "<p class='postDate'>" . Date("m/d/y", $post['dateupload']) . "</p>";
          echo "</div>";
        }
       ?>
    </div>
  </div>

</div>
</div>
