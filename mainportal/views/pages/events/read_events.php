<?php
/*
 * Note by Varun...
 * I am connecting (Front End) events with db on my own
 * because of too much delay
 */

$id = $this->input->get('id');
$event = $this->db->query("select * from events where id = '$id'");
$row = $event->row();
$user_q = $this->db->query("select full_name from users where users.user_id = '$row->user_id'");
$user = $user_q->row();
$club_q = $this->db->query("select c_full_name from clubs where clubs.c_name = '$row->club'");
$club = $club_q->row();
$school_q = $this->db->query("select sc_full_name from schools where schools.sc_name = '$row->school'");
$school = $school_q->row();
?>
<div class="container" >
    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="padding-right:10px;" id="myDiv">

            <img src="<?php echo base_url($row->image_path) ?>" alt="code-in-gbu" width="100%">
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

            <center><h2><span class="label label-default"><?= $row->article_name ?></span></h2></center>

            <h3><span class="label label-primary">Organizing School </span></h3>
            <b><?php if($row->school == "%" || $row->school == NULL) echo 'ALL';
            else echo $school->sc_full_name ?>
            </b>
            <br />
            
            <h3><span class="label label-primary">Organizing Club </span></h3>
            <b><?php if($row->club == "%" || $row->club == NULL) echo 'ALL';
            else echo $club->c_full_name ?>
            </b>
            <br />
            
            <h3><span class="label label-primary">Posted By </span></h3>
            <b><?= $user->full_name ?></b>
            <br>
            
            <h3><span class="label label-primary">Date </span></h3>
            <b><?= $row->publishing_date ?></b>
            <br /><br />
            <hr> 

            <h3><span class="label label-primary">Description </span></h3>
            <?= $row->article ?>
            <br /><br /><br />
        </div>


    </div ><!--for colmd9-->
    <!--row ends in extras.php-->
    <!--container ends in extras.php-->

</div>
</div>
