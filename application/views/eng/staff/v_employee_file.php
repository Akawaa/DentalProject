<div id="page-wrapper">

    <div class="container-fluid">

    <div class="row">


        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <?= $staff_surname.' '.strtoupper($staff_name);?>
                </h1>

            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-clock-o fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <?php date_default_timezone_set('Europe/London');?>
                                <div class="huge hour" id="hour"></div>
                                <div class="day" id="day"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-lg-offset-6">
                <a href="<?= site_url('/Staff_c/settingStaff');?>">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-reply fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Back</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- /.row -->

        <!-- INFORMATION -->
        <div class="col-xs-12" id="inforamations">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Information
                        <div class="pull-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-fw fa-cog"></i>
                                </button>
                                <ul class="dropdown-menu pull-right" role="menu">
                                    <li><a href="<?= site_url('/Staff_c/editStaff/'.$id_staff);?>">Edit</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                </div>
                <div class="panel-body">
                    <ul>
                        <div class="col-sm-4">
                            <li style="list-style-type: none">Post : </li>
                            <li style="list-style-type: none"><strong><?= $post_name; ?></strong></li>
                        </div>
                        <div class="col-sm-4">
                            <li style="list-style-type: none">Phone : </li>
                            <li style="list-style-type: none"><strong><?= $staff_phone; ?></strong></li>
                            <br>
                            <li style="list-style-type: none">Email : </li>
                            <li style="list-style-type: none"><strong><?= $staff_email; ?></strong></li>
                        </div>
                    </ul>
                </div>
            </div>
        </div>

        <!-- LOGIN -->
        <div class="col-xs-5" id="login">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Login
                        <div class="pull-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-fw fa-cog"></i>
                                </button>
                                <ul class="dropdown-menu pull-right" role="menu">
                                    <li><a href="<?= site_url('/Staff_c/editLogStaff/'.$id_staff);?>" >Change Username</a></li>
                                    <li><a href="<?= site_url('/Staff_c/editPasswordStaff/'.$id_staff);?>">Change Password</a></li>
                                </ul>
                            </div>
                        </div>
                </div>
                <div class="panel-body">
                    <ul>
                        <li style="list-style-type: none">Username : </li>
                        <li style="list-style-type: none"><strong><?= $staff_login; ?></strong></li>
                        <br><br>
                        <li style="list-style-type: none">Password : </li>
                        <li style="list-style-type: none; padding-bottom: 1.3px;"><strong>•••••</strong></li>
                    </ul>
                </div>
            </div>
        </div>


        <!-- FIRE -->
            <?php if($staff_name!='Brahimi' && $staff_surname!='Hakim' && $this->session->userdata('id_staff')==1): ?>
                <div class="col-xs-10 col-xs-offset-1">
                    <div class="panel text-center" style="background-color: background-color: #d9534f;background-color: #d9534f;">
                        <a href="<?= site_url('/Staff_c/fireEmployee/'.$id_staff);?>" style="color: #ffffff;" onclick="return confirm('Do you want delete this employee ?');">
                            <div class="panel-heading">
                                <h3 class="panel-title">DELETE</h3>
                            </div></a>
                    </div>
                </div>
            <?php endif;?>

    </div>
</div>
    </div>
