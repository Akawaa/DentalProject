<div id="page-wrapper">
    <div class="container-fluid">

        <!-- .row -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Your profil
                </h1>

            </div>
        </div>
        <!-- /.row -->

        <!-- .row -->
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

        </div>
        <!-- /.row -->

        <div class="row">
            <div class="alert alert-info alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <p style="font-size: 1em">You can consult your personal information but safety reasons you can not edit them. To edit them, please to call your secretariat.</p>
            </div>
            <!-- INFORMATION -->
            <div class="col-lg-6">
                <div class="panel panel-info" style="box-shadow: 3px 3px 2px lightgray;">
                    <div class="panel-heading">
                        <i class="fa fa-info-circle"></i> Information
                    </div>
                    <div class="panel-body">
                        <ul>
                            <div class="col-xs-6">
                                <li style="list-style-type: none">Gender : </li>
                                <li style="list-style-type: none"><strong><?= $gender; ?></strong></li>
                                <br>
                                <li style="list-style-type: none">Name : </li>
                                <li style="list-style-type: none"><strong><?= $patient_name; ?></strong></li>
                            </div>
                            <div class="col-xs-6">
                                <li style="list-style-type: none">Surname : </li>
                                <li style="list-style-type: none"><strong><?= $patient_surname; ?></strong></li>
                                <br>
                                <li style="list-style-type: none">Date of Birth : </li>
                                <li style="list-style-type: none"><strong><?= date("d-m-Y",strtotime($patient_DofB)); ?></strong></li>
                            </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="panel panel-info" style="box-shadow: 3px 3px 2px lightgray;">
                        <div class="panel-heading">
                            <i class="fa fa-phone"></i> Contact
                        </div>
                        <div class="panel-body">
                            <ul>
                            <div class="col-xs-6">
                                <li style="list-style-type: none">Phone : </li>
                                <li style="list-style-type: none"><strong><?= $patient_phone; ?></strong></li>
                                <br>
                                <li style="list-style-type: none">Email : </li>
                                <li style="list-style-type: none"><strong><?= $patient_email; ?></strong></li>
                            </div>
                            <div class="col-xs-6">
                                <li style="list-style-type: none">Address : </li>
                                <li style="list-style-type: none"><strong><?= $patient_address; ?></strong></li>
                                <li style="list-style-type: none"><strong><?= $patient_code; ?></strong></li>
                                <li style="list-style-type: none"><strong><?= $patient_city; ?></strong></li>
                                <li style="list-style-type: none"><strong><?= $patient_country; ?></strong></li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- LOGIN -->
            <div class="col-lg-6">
                <div class="panel panel-info" style="box-shadow: 3px 3px 2px lightgray;">
                    <div class="panel-heading">
                        <i class="fa fa-globe"></i> Login
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li style="list-style-type: none">Username : </li>
                            <li style="list-style-type: none"><strong><?= $patient_login; ?></strong></li>
                            <br>
                            <li style="list-style-type: none">Password : </li>
                            <li style="list-style-type: none; padding-bottom: 1.3px;"><strong>•••••</strong></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- ALLERGIES -->
            <div class="col-lg-6" >
                <div class="panel panel-danger" style="box-shadow: 3px 3px 2px lightgray;">
                    <div class="panel-heading">
                        <i class="fa fa-medkit"></i> Allergies
                    </div>
                    <div class="panel-body" style="padding-left: 4em;">
                        <?php if($patient_allergies!=null):?>
                            <strong><?=$patient_allergies; ?></strong>
                        <?php else :?>
                            Nothing to report.
                        <?php endif;?>


                    </div>
                </div>
            </div>
        </div>
