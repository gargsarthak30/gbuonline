<?php
/*
 *  Created on :Jul 15, 2015, 4:38:16 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            GBU Online
        </title>
        <link rel="stylesheet" href="<?php echo base_url() . 'application/views/common/' . 'css/bootstrap.min.css' ?>">

        <script type="text/javascript" src="<?php echo base_url() . 'application/views/common/' . 'js/jquery-2.1.3.min.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'application/views/common/' . 'js/bootstrap.min.js' ?>"></script>
        <style>
            body{
                background-color: #525252;
            }
            .centered-form{
                margin-top: 60px;
            }

            .centered-form .panel{
                background: rgba(255, 255, 255, 0.8);
                box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
            }
        </style>

    </head>
    <body>
        <div class="container">
            <div class="row centered-form">
                <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Sign up for GBU Online <small>It's free!</small></h3>
                        </div>
                        <div class="panel-body">
                            <?php
                            echo form_open('Register/index/');
                            ?>
                            <div class="form-group">
                                <input type="text" name="username" class="form-control input-sm" placeholder="username" required="true">
                            </div>

                            <div class="form-group">
                                <input type="text" name="full_name" class="form-control input-sm" placeholder="Full Name" required="true">
                            </div>

                            <div class="form-group">
                                <input type="email" name="email"class="form-control input-sm" placeholder="Email Address" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" name="roll_number"class="form-control input-sm" placeholder="Roll Number (Not Necessary)">
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone_number"class="form-control input-sm" placeholder="Phone Number (Not Necessary)">
                            </div>


                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="password"  class="form-control input-sm" placeholder="Password" required="required">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="passconf" class="form-control input-sm" placeholder="Confirm Password" required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <?php
                                echo '<label><font color="red">' . validation_errors() . '</font></label>';
                                ?>
                            </div>
                            <input type="submit" value="Register" class="btn btn-info btn-block">

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>