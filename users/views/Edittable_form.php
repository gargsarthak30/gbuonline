<?php
/*
 *  Created on :Jul 10, 2015, 12:18:54 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */
?>

<link type="text/css" rel="stylesheet" href="<?= base_url() . 'views/common/' . 'input/jquery-te-1.4.0.css' ?>">
<script type="text/javascript" src="<?= base_url() . 'views/common/' . 'input/jquery-te-1.4.0.min.js' ?>" charset="utf-8"></script>
<div class="col-sm-8" >
    <?php
    $q = $this->db->query("select * from schools where sc_name = '$tname'");
    $row = $q->row();


    echo form_open('edit_table/index/' . $tname);
    ?>

    <label>School Name</label>
    <input type="text" class="form-control" name="sc_name" value="<?= $row->sc_name ?>" readonly/>
    <br />
    <label>Shool's Full Name(example: School Of Vocational And Applied Sciences)</label>
    <input type="text" class="form-control" name="sc_full_name" value="<?= $row->sc_full_name ?>"/>
    <br>
    <label>Tagline(example: Discover Yourself...)</label>
    <input type="text" class="form-control" name="tagline" value="<?= $row->tagline ?>"/>
    <br>
    <label>About School</label>
    <textarea name="about_us" class="jqte-test" value=""><?= $row->about_us ?></textarea>
    <br>
    <label>Course Structure</label>
    <textarea name="course_structure" class="jqte-test"  value=""><?= $row->course_structure ?></textarea>
    <br>
    <label>Faculty</label>
    <textarea name="faculty" class="jqte-test"  value=""><?= $row->faculty ?></textarea>
    <br>
    <label>Placements</label>
    <textarea name="placements" class="jqte-test"  value=""><?= $row->placements ?></textarea>
    <br>
    <?php
    echo '<label><font color="red">' . validation_errors() . '</font></label>';
    ?>
    <br><br>
    <div><input type="submit" value="Save Changes" class="btn btn-default"/></div>
</form>

</div>
<script>
    $('.jqte-test').jqte();

    // settings of status
    var jqteStatus = true;
    $(".status").click(function ()
    {
        jqteStatus = jqteStatus ? false : true;
        $('.jqte-test').jqte({"status": jqteStatus})
    });
</script>