<form class=" search-form" method = "get" action = "<?php echo esc_url(site_url('/')); ?>"> <!-- esc-url() - for security(protect visitors if the site is already hacked) ; method ="post - whenever we type our field would not get added at the end of the URL. But get(often setting by default) will make sure that the content of the form ends up in the URL"-->
    <label class= "headline headline--medium" for ="s">Perform a New Search:</label>
    <div class ="search-form-row">
      <input placeholder="What are you looking for?" class="s" id ="s" type ="search" name ="s">
      <input class ="search-submit" type="submit" value = "Search">
    </div>
</form>