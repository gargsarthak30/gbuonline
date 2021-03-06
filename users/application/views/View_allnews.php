<?php
/*
 *  Created on :Jul 20, 2015, 4:13:32 PM
 *  Author        :Varun Garg <varun.10@live.com>
 
	This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>. 

 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script>
    function del_ask(str, id)
    {
        var x = confirm("Do you want to delete " + str + "?\n");
        if (x == true)
                location.href = <?= base_url() ?>."/News/Delete?news_id=" + id;
    }
    var count = 1;
</script>
<div class ="col-sm-10">
    <?php
    $current_user_type = $this->session->userdata('type');

    $query = $this->db->query('select * from news');
    echo '<ul class="nav nav-list col-sm-12">';
    foreach ($query->result() as $row) {
        ?>
        <li class="list-group-item">
            <div class="row">
                <div class="col-sm-7">
                    <script>
                        document.write(count + ". ");
                        count++;
                    </script>
                    <?php
                    echo $row->title;
                    ?>
                </div>
                <div class="col-sm-2">

                    <?php
                    if ($this->permissions->get_level() >= 2 || $row->user_id == $this->session->userdata('user_id'))
                        echo '<a class="btn btn-xs btn-default " href="' . base_url() . "News/CreateOrUpdate?news_id=$row->id" . '"><i class="fa fa-pencil fa-fw"></i>Edit</a>';
                    else
                        echo "<font color='gray'>You cant edit this</font>";
                    ?>

                </div>
                <div class="col-sm-3">
                    <?php
                    if ($this->permissions->get_level() >= 2 || $row->user_id == $this->session->userdata('user_id')) {
                        ?>
                        <a onclick="del_ask('<?php echo $row->title ?>', <?= $row->id ?>)" class="pull-right btn btn-xs btn-danger"><i class="fa fa-trash-o fa-lg"></i> Delete</a>  
                        <?php
                    } else
                        echo "<font color='gray'>You cant delete this</font>";
                    ?>

                </div>
            </div>
        </li>
        <?php
    }
    ?>
</div>

