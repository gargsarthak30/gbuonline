
<div class="container-fluid" style=" margin-right: 10px; margin-left: 10px;" >
    <div class="row">
        <div class="col-md-9" style="padding-right:30px; border-right: 2px solid #ccc;">

<div class="alert alert-info" role="alert">
  We are trying our best to provide you the maximum books that are available with us.
    
   If you have books other than these, please mail them to us at (gbu.code@gmail.com).
</div>
		
        <ul class="list-group">
                <li class="list-group-item">
                    <span class="badge"><?php
                    $q=$this->db->query("select count(*) as row_count from ebooks where sc_name='soict'");
                    $results=$q->result();
                    foreach($results as $rows)
                    {
                        
                        echo $rows->row_count;    
                        
                    }
                    ?>
                    </span>
                        <a href="<?php echo site_url('ebooks/soict_books')?>">SOICT </a>  
                </li>
                <li class="list-group-item">
                        <span class="badge"><?php
                    $q=$this->db->query("select count(*) as row_count from ebooks where sc_name='som'");
                    $results=$q->result();
                    foreach($results as $rows)
                    {
                        
                        echo $rows->row_count;    
                        
                    }
                    ?></span>
                        <a href="<?php echo site_url('ebooks/som_books')?>">SOM </a>  
                </li>
                <li class="list-group-item">
                        <span class="badge"><?php
                    $q=$this->db->query("select count(*) as row_count from ebooks where sc_name='sobt'");
                    $results=$q->result();
                    foreach($results as $rows)
                    {
                        
                        echo $rows->row_count;    
                        
                    }
                    ?></span>
                        <a href="<?php echo site_url('ebooks/sobt_books')?>">SOBT </a>  
                </li>
                <li class="list-group-item">
                        <span class="badge"><?php
                    $q=$this->db->query("select count(*) as row_count from ebooks where sc_name='sovsas'");
                    $results=$q->result();
                    foreach($results as $rows)
                    {
                        
                        echo $rows->row_count;    
                        
                    }
                    ?></span>
                        <a href="<?php echo site_url('ebooks/sovsas_books')?>"> SOVSAS</a>
                </li>
                <li class="list-group-item">
                        <span class="badge"><?php
                    $q=$this->db->query("select count(*) as row_count from ebooks where sc_name='soe'");
                    $results=$q->result();
                    foreach($results as $rows)
                    {
                        
                        echo $rows->row_count;    
                        
                    }
                    ?></span>
                        <a href="<?php echo site_url('ebooks/soe_books')?>"> SOE </a>  
                </li>
                <li class="list-group-item">
                        <span class="badge"><?php
                    $q=$this->db->query("select count(*) as row_count from ebooks where sc_name='sobsc'");
                    $results=$q->result();
                    foreach($results as $rows)
                    {
                        
                        echo $rows->row_count;    
                        
                    }
                    ?></span>
                        <a href="<?php echo site_url('ebooks/sobsc_books')?>"> SOBSC </a>  
                </li>
                <li class="list-group-item">
                        <span class="badge"><?php
                    $q=$this->db->query("select count(*) as row_count from ebooks where sc_name='sohss'");
                    $results=$q->result();
                    foreach($results as $rows)
                    {
                        
                        echo $rows->row_count;    
                        
                    }
                    ?></span>
                        <a href="<?php echo site_url('ebooks/sohss_books')?>">SOHSS </a>  
                </li>
                <li class="list-group-item">
                        <span class="badge"><?php
                    $q=$this->db->query("select count(*) as row_count from ebooks where sc_name='soljg'");
                    $results=$q->result();
                    foreach($results as $rows)
                    {
                        
                        echo $rows->row_count;    
                        
                    }
                    ?></span>
                        <a href="<?php echo site_url('ebooks/soljg_books')?>">SOLJG </a>  
                </li>
</ul>

<br>
<br>
<br>
        </div>