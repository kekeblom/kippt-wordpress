<div class="list-widget">
    <div class="list-head">
        <h3><a href="http://kippt.com/<?php echo $username; ?>"><?php echo $title; ?></a></h3>
    </div>
    <ul>    
        <?php
        if ($mode == '0'){
            display_clips($clips, $window);
            ?><a href='http://kippt.com/<?php echo $username; ?>'<?php if($window == '1'){ echo " target='_blank'";} ?> ><div id='link-more'><li> View all >></a></li></div><?php
        } elseif ($mode == '1') {
            display_lists($data, $window);
        } else {
            display_clips_list($clips_by_list, $window);
            ?>
            <a href='http://kippt.com/<?php echo $username . '/' . $slug; ?>'<?php if($window == '1'){ echo " target='_blank'";} ?> ><div id='link-more'><li> View all >></a></li></div>
            <?php
        }
        ?>
        <?php if ($credit == '1'){ echo "<a href='http://helsinkipromo.com' target='_blank' ><small id='credit'>Widget by Helsinki Promo</small></a>"; } ?>
    </ul>
</div>