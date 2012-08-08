<div class="list-widget">
    <div class="list-head">
        <h3><a href="http://kippt.com/<?php echo $username; ?>"><?php echo $title; ?></a></h3>
        <div class="list-meta">powered by <a href="http://kippt.com/">Kippt</a></div>
    </div>
    <ul>    
        <?php
        if ($mode == '0'){
            display_clips($clips);
            ?><a href='http://kippt.com/<?php echo $username; ?>' ><div id='link-more'><li> View all >></a></li></div><?php
        } else {
            display_lists($data);
        }
        ?>
        <a href="http://helsinkipromo.com"><small id="credit">Widget developed by Helsinki Promo</small></a> <!-- Remove this to get rid of the credit link -->
    </ul>
</div>