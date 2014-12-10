<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="ui devided padded grid">
<?php if (sizeof($pages) == 1) {?>
<div class="sixteen wide column">
        <div class="ui one column relaxed grid">
                <div class="column">
                    <div class="ui segment">
                        <?php echo $page->content; ?>
                    </div>
                </div>
            </div>
    </div>
<?php } else {
?>
    <div class="three wide column">
        <div class="ui teal vertical pointing menu">
        <?php
            foreach($pages as $pg) {
                if ($page->id == $pg->id) {
                    link_to(url_add_html('/pages/show/' . $pg->id, true), $pg->title, array('class' => 'active item'), false);
                } else {
                    link_to(url_add_html('/pages/show/' . $pg->id, true), $pg->title, array('class' => 'item'), false);
                }
            }
        ?>
        </div>
    </div>
    <div class="thirteen wide column">
        <div class="ui one column relaxed grid">
                <div class="column">
                    <div class="ui segment">
                        <?php echo $page->content; ?>
                    </div>
                </div>
            </div>
    </div>
</div>
<?php
}
?>