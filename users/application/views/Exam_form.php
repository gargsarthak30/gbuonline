<?php
/*
 *  Created on :Sep 10, 2015, 7:24:49 AM
 *  Author     :Varun Garg <varun.10@live.com>
 */
?>
<div class="col-sm-8" >
    <?php
    echo form_open(current_url() . "?" . $_SERVER['QUERY_STRING']);
    $schools_q = $this->db->query("select sc_name, sc_full_name from schools");
    $schools_r = $schools_q->result();
    foreach ($schools_r as $row) {
        $schools[$row->sc_name] = $row->sc_full_name;
    }
    ?>
    
    <label>Paper Name (Example Maths 4)</label>
    <input type="text" class="form-control" name="paper_name" value="<?php echo set_value('paper_name', @$paper_name); ?>"/>
    <br>

    <label>School</label><br />
    <?php
    echo form_dropdown('sc_name', $schools, set_value('sc_name', @$sc_name), 'class="selectpicker"');
    ?>
    <br /><br />

    <!--<label>Select File</label>
    <select name="image_path" class="selectpicker" data-width="100%">
        <?php /*
        $this->load->helper('file');
        $files = get_filenames("../resources/exams");
        foreach ($files as $name) {
            echo '<option value = "resources/exams/' . $name . '">';
            echo 'resources/exams/' . $name;
            echo '</option>';
        }
        */?>
    </select>-->
	<label>Paper Link</label>
    <input type="text" class="form-control" name="image_path" value="<?php echo set_value('image_path', @$image_path); ?>"/>
	
    <br />
	
    <label>Year (Example 2015)</label>
    <input type="text" class="form-control" name="year" value="<?php echo set_value('year', @$year); ?>"/>
    <br>
    <label>Semester</label>
    <input type="text" class="form-control" name="semester" value="<?php echo set_value('semester', @$semester); ?>"/>
    <br>

    <?php
    echo '<label><font color="red">' . validation_errors() . '</font></label>';
    ?>
    <br><br>
    <div><input type="submit" value="Save Changes" class="btn btn-default"/></div>
</form>

</div>