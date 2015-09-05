<?php
/*
 *  Created on :Jul 10, 2015, 12:18:54 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */
?>
<?php

$id = $this->input->get('id');
$query = $this->db->query("select * from events where id = '$id'");
$row = $query->row();
$aname = $row->article_name;
$article = $row->article;
$adate = $row->publishing_date;
$short_desc = $row->short_desc;
$school = $row->school;
$image_path = $row->image_path;
$club = $row->club;
$type = $row->type;
?>
<link type="text/css" rel="stylesheet" href="<?= base_url() . 'views/common/' . 'input/jquery-te-1.4.0.css' ?>">
<script type="text/javascript" src="<?= base_url() . 'views/common/' . 'input/jquery-te-1.4.0.min.js' ?>" charset="utf-8"></script>
<div class="col-sm-10">
    <?php echo form_open('edit_post/index?id=' . $id); ?>

    <label>Title</label>
    <input type="text" name="article_name" value="<?= $aname ?>" class="form-control">
    <br />
    <label>Description</label>
    <input type="textarea" value="<?= $article ?>" name="article" class="jqte-test"  ></textarea>

    <br />
    <label>Short description</label>
    <input type="textarea" value="<?= $short_desc ?>" name="short_desc" class="jqte-test"  ></textarea>
    <br />
    <label>School</label>
    <select name="school_name" class="selectpicker" data-width="100%">

        <?php
        $query = $this->db->query("select *  from schools");
        foreach ($query->result() as $row) {
            echo '<option value="' . $row->sc_name . '" ';
            if ($row->sc_name === $school)
                echo 'selected="selected"';
            echo ' >' . $row->sc_full_name . '</option>';
        }
        ?>
    </select>
    <br /><br />
    <label>Featured Image</label>
    <select name="image_path" class="selectpicker" data-width="100%">
        <?php
        $this->load->helper('file');
        $files = get_filenames("../resources/user_uploads");
        foreach ($files as $name) {
            echo '<option value = "resources/user_uploads/' . $name . '" ';
            if ('resources/user_uploads/' . $name == $image_path)
                echo 'selected="selected" ';
            echo ' > resources/user_uploads/' . $name;
            echo '</option>';
        }
        ?>
    </select>
    <br /><br />

    <label>Club</label>
    <select name="club" class="selectpicker" data-width="100%">
        <option value="%" >ALL</option>
        <?php
        $query = $this->db->query("select *  from clubs");
        foreach ($query->result() as $row) {
            echo '<option value="' . $row->c_name . '" ';
            if ($row->c_name === $club)
                echo 'selected="selected"';

            echo ' >' . $row->c_full_name . '</option>';
        }
        ?>
    </select>
    <br /><br />

    <label>Type</label>
    <select name="type" class="selectpicker" data-width="100%">
        <option value="%" >ALL</option>
        <?php
        $options = array("competition", "workshop", "conference", "lecture");
        foreach ($options as $option) {
            echo '<option value="' . $option . '" ';
            if (isset($type) && $type == $option)
                echo 'selected="selected" ';
            echo '>' . ucfirst($option) . '</option>';
        }
        ?>
    </select>
    <br /><br />

    <label>Event date</label>
    <input type="text" value="<?= $adate ?>" name="publishing_date"class="form-control">

    <br>
    <?php
    echo '<label><font color="red">' . validation_errors() . '</font></label>';
    ?>
    <div><input type="submit" value="Update" class="btn btn-default"/></div>
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