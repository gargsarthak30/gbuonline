<div class="container-fluid" style=" margin-right: 10px; margin-left: 10px;" >    


    <div class="row">

        <div class="col-md-9" style="padding-right:30px; border-right: 2px solid #ccc;">        

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">About</h3>
                </div>
                <div class="panel-body">
                    <?php
                    foreach ($result as $row) {
                        echo $row->about_us;
                    }
                    ?>
                </div>
            </div>


            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Courses</h3>
                </div>
                <div class="panel-body">
                    		<?php
        foreach($result as $row)
        {
           echo $row->course_structure;
            
            
        }?>
                </div>
            </div>


            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Faculty</h3>
                </div>
                <div class="panel-body">
                    <?php
                    foreach($result as $row)
        {
           echo $row->faculty;
            
            
        }?>
                </div>
            </div>


            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Events</h3>
                </div>
                <div class="panel-body">
                    <div class="col-md-4" >
                        <div class="thumbnail">
                            <img src="<?php echo base_url('resources/images/poster.png') ?>" alt="code-in-gbu" style="height:200px">
                            <div class="caption">
                                <h3><center><b>Code-In-GBU</b></center></h3>
                                <h5><b>Date:</b> 28 - 01 - 2015</h5>
                                <h5><b>Time:</b> 18:30 - 20:00</h5>
                                <h5><b>Venue:</b> SOICT</h5>
                                <p></p>
                                <!--<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>-->
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4" >
                        <div class="thumbnail">
                            <img src="<?php echo base_url('resources/images/ic.jpg') ?>" alt="code-in-gbu" style="height:200px">
                            <div class="caption">
                                <h3><center><b>Imagine Cup</b></center></h3>
                                <h5><b>Date:</b> 28 - 01 - 2015</h5>
                                <h5><b>Time:</b> 18:30 - 20:00</h5>
                                <h5><b>Venue:</b> SOICT</h5>
                                <p></p>
                                <!--<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>-->
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4" >
                        <div class="thumbnail">
                            <img src="<?php echo base_url('resources/images/b1.png') ?>" alt="code-in-gbu" style="height:200px">
                            <div class="caption">
                                <h3><center><b>IT Summit 2014</b></center></h3>
                                <h5><b>Date:</b> 28 - 01 - 2015</h5>
                                <h5><b>Time:</b> 18:30 - 20:00</h5>
                                <h5><b>Venue:</b> SOICT</h5>
                                <p></p>
                                <!--<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>-->
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Placements</h3>
                </div>
                <div class="panel-body">
                   <?php
        foreach($result as $row)
        {
           echo $row->placements;
            
            
        }?>
                </div>
            </div>

            <br>


        </div> 
