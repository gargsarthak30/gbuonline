 
<div class="row">
    <div class = "container-fluid">
        <div class="col-md-4" >
            <h2 align="center"><font face="Times New Roman"><b>News and Updates</b></font></h2>
            <hr>
            <div class="list-group ">
                <a href="<?php echo site_url('feat/events') ?>" class="list-group-item">
                    <h4 class="list-group-item-heading"><b>Code-In-GBU</b></h4>
                    <p class="list-group-item-text">An online coding competition being organised by the ICT department next Wednesday.So get ready to show your coding skills.Exciting prizes to be won.</p>
                </a>
            </div>
            <div class="list-group">
                <a href="<?php echo site_url('feat/vnb') ?>" class="list-group-item ">
                    <h4 class="list-group-item-heading"><b>Change in Grading System</b></h4>
                    <p class="list-group-item-text">Grading System for students of session 2014-2015 and onwards has been changed.</p>
                </a>
            </div>
            <div class="list-group">
                <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading"><b>Imagine Cup</b></h4>
                    <p class="list-group-item-text">Microsoft's Imagine Cup is the world's most prestigious student technology competition, bringing together student innovators from all over the world. If you have a ...</p>
                </a>
            </div>
            <div class="list-group">
                <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading"><b>Notification for Odd semester 2015-2016 session</b></h4>
                    <p class="list-group-item-text">ede rf wf wf wfd   qdwqdqdasd rfr fw  cwefq dd qdwrrfwfcdax wdqdqddasef wefwef ewfew.</p>
                </a>
            </div>

            <ul class="pager">
                <li><a href="<?php echo site_url('News/index') ?>"><font color="black">More</font></a></li>

            </ul>
        </div>
        <div class="col-md-5" >
            <h2 align="center"><font face="Times New Roman"><b>Technological Updates</b></font></h2>
            <hr>

                <?php
                $xml = ("https://gbuonline.wordpress.com/feed");
                $xmlDoc = new DOMDocument();
                $xmlDoc->load($xml);

                $x = $xmlDoc->getElementsByTagName('item');
                for ($i = 0; $i <= 2; $i++) {
                    $item_title = $x->item($i)->getElementsByTagName('title')
                                    ->item(0)->childNodes->item(0)->nodeValue;
                    $item_link = $x->item($i)->getElementsByTagName('link')
                                    ->item(0)->childNodes->item(0)->nodeValue;
                    $item_desc = $x->item($i)->getElementsByTagName('description')
                                    ->item(0)->childNodes->item(0)->nodeValue;
                    //   echo ("<p><a href='" . $item_link
                    //  . "'>" . $item_title . "</a>");
                    //   echo ("<br>");
                    //   echo ($item_desc . "</p>");
                    ?>
                    <div class="list-group">
                        <a href="<?php echo $item_link ?>" class="list-group-item ">
                            <h4 class="list-group-item-heading"><b><?= $item_title ?></b></h4>
                            <p class="list-group-item-text"><?= $item_desc ?></p>
                        </a>
                    </div>
                    <?php
                }
                ?>
        </div>

        <!--code for extras begins-->

        <div class="col-md-3">
            <h2 align="center"><font face="Times New Roman"><b>Extras</b></font></h2>
            <hr>

            <?php require 'master_extras.php'; ?>

            <!--code for extras ends-->

        </div>
    </div>
