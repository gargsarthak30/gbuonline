
            
<div class="container-fluid" style=" margin-right: 10px; margin-left: 10px;" >    
   
 <div class="row">
    
	<div class="col-md-9" style="padding-right:30px; border-right: 2px solid #ccc;">              
	<div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Mechanical</h3>
                </div>
                <div class="panel-body">
                    <?php
                    $results=$this->db->query("select * from ebooks where sc_name='soe' and dept_name='mechanical'");
                    $r=$results->result();
                    foreach ($r as $rows)
                    {?>
                    <div class="col-md-3" >
                        <div class="thumbnail">
                            <a href="#"> <img src="#" alt="paper1"></a>
                            <div class="caption">
                                <h3><center><b><?php echo $rows->book_name; ?></b></center></h3>
                            </div>
                        </div>
                    </div><?php
                    }
                    ?>
                    </div>
</div>
            
        
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Civil</h3>
                </div>
                <div class="panel-body">
                    <?php
                    $results=$this->db->query("select * from ebooks where sc_name='soe' and dept_name='civil'");
                    $r=$results->result();
                    foreach ($r as $rows)
                    {?>
                    <div class="col-md-3" >
                        <div class="thumbnail">
                            <a href="#"> <img src="#" alt="paper1"></a>
                            <div class="caption">
                                <h3><center><b><?php echo $rows->book_name; ?></b></center></h3>
                            </div>
                        </div>
                    </div><?php
                    }
                    ?>
                    </div>
</div>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Electrical</h3>
                </div>
                <div class="panel-body">
                    <?php
                    $results=$this->db->query("select * from ebooks where sc_name='soe' and dept_name='electrical'");
                    $r=$results->result();
                    foreach ($r as $rows)
                    {?>
                    <div class="col-md-3" >
                        <div class="thumbnail">
                            <a href="#"> <img src="#" alt="paper1"></a>
                            <div class="caption">
                                <h3><center><b><?php echo $rows->book_name; ?></b></center></h3>
                            </div>
                        </div>
                    </div><?php
                    }
                    ?>
                    </div>
</div>
</div>