
   
<div class="page-header" style = "background-color: darkred; padding-top: 10px; padding-left: 50px; margin-top: 15px;">
            <font color="white"  face="Monotype Corsiva">

            <h1> Blog Space </br><small>Keep Calm and Write.....</small></h1>
</font>      
  </div>             
 
<div class="container-fluid" style=" margin-right: 25px; margin-left: 25px;" >
     <div class="row">
    
	<div class="col-md-9" style="padding-right:30px; border-right: 2px solid #ccc;">        
 
            
   
             <div class="well well-sm">
            
            
            <ul class="nav nav-pills nav-justified">
  <li role="presentation" class="active"><a href="<?php echo site_url('blogs/write_blogs')?>">Write Blogs</a></li>
                
  <li role="presentation" ><a href="<?php echo site_url('blogs/recent_blogs')?>">Recent Blogs</a></li>
  
  <li role="presentation" ><a href="<?php echo site_url('blogs/best_blogs')?>">Best Blogs</a></li>
  
</ul>
            
             </div>
            
   <br>
    
  
<li class="list-group-item list-group-item-warning">
                <span class="glyphicon glyphicon-info-sign" aria-hidden="true">  </span>
                <b> &nbsp;&nbsp;Please provide your Name and Roll Number to get the blog published.</b></li>

<br>
            <div class="row">
<div class="col-md-8">  
    <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Enter</span>
  <form action="<?php echo base_url();?>Blogs/write_blogs" method="post">
  <input type="text" class="form-control" placeholder="Full Name" aria-describedby="basic-addon3">
    </div>
</div>
<div class="col-md-4">  
    <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Enter</span>
  <input type="text" name="roll" class="form-control" placeholder="Roll Number" aria-describedby="basic-addon3">
    </div>
</div>
</div>
<br>
<div class="row">
<div class="col-md-12">
    
        
        <label for="Blog">Start Your Blog :&nbsp;&nbsp;</label><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
            <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Title</span>
  <input type="text" name="title" class="form-control" placeholder="Title of your Blog" aria-describedby="basic-addon3">
    </div>
        <br>
        <textarea name="description" class="form-control" rows="10" id="comment"></textarea>
                <br>
                
   <center>
         <button type="submit" class="btn btn-success" onclick="window.alert('Your Blog has been submitted succesfully. It will be displayed on website once it is reviewed by the admin.')">Submit</button>
   </center>
                         </form>

                <br>
      
</div>
</div>    
    


        </div>


 
             





