<div class="container-fluid">

    <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
            <div class="panel panel-primary" style="box-shadow: 3px 3px 2px lightgray;">
                <div class="panel-heading">
                    <h3 class="panel-title">#<?= $id_patient;?></h3>
                </div>
                <div class="panel-body">
                   <div class="text-center" style="font-size: 2rem">Name : <strong><?= strtoupper($patient_name);?></strong>  Surname : <strong><?= $patient_surname; ?></strong></div>
                </div>
            </div>
        </div>

        <!-- INFORMATION -->
        <div class="col-xs-12" id="inforamations">
                <div class="panel panel-info" style="box-shadow: 3px 3px 2px lightgray;">
                    <div class="panel-heading">
                        Information
                        <?php if($old_patient==0): ?>
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-fw fa-cog"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="<?= site_url('/Staff_c/editPatient/'.$id_patient);?>">Edit</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        <?php endif;?>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <div class="col-sm-4">
                                <li style="list-style-type: none">Gender : </li>
                                <li style="list-style-type: none"><strong><?= $gender; ?></strong></li>
                                <br>
                                <li style="list-style-type: none">Date of Birth : </li>
                                <li style="list-style-type: none"><strong><?= date("d-m-Y",strtotime($patient_DofB)); ?></strong></li>
                            </div>
                            <div class="col-sm-4">
                                <li style="list-style-type: none">Phone : </li>
                                <li style="list-style-type: none"><strong><?= $patient_phone; ?></strong></li>
                                <br>
                                <li style="list-style-type: none">Email : </li>
                                <li style="list-style-type: none"><strong><?= $patient_email; ?></strong></li>
                            </div>

                            <div class="col-sm-4">
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
        <div class="col-xs-5" id="login">
            <div class="panel panel-info" style="box-shadow: 3px 3px 2px lightgray;">
                <div class="panel-heading">
                    Login
                    <?php if($old_patient==0): ?>
                        <div class="pull-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-fw fa-cog"></i>
                                </button>
                                <ul class="dropdown-menu pull-right" role="menu">
                                    <li><a href="<?= site_url('/Staff_c/editLogPatient/'.$id_patient);?>" >Change Username</a></li>
                                    <li><a href="<?= site_url('/Staff_c/editPasswordPatient/'.$id_patient);?>">Change Password</a></li>
                                </ul>
                            </div>
                        </div>
                    <?php endif;?>
                </div>
                <div class="panel-body">
                    <ul>
                            <li style="list-style-type: none">Username : </li>
                            <li style="list-style-type: none"><strong><?= $patient_login; ?></strong></li>
                            <br><br>
                            <li style="list-style-type: none">Password : </li>
                            <li style="list-style-type: none; padding-bottom: 1.3px;"><strong>•••••</strong></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- ALLERGIES -->
        <div class="col-xs-7" id="allergies" >
            <div class="panel panel-danger" style="box-shadow: 3px 3px 2px lightgray;">
                <div class="panel-heading">
                    Allergies
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

        <!-- NEXT APPOINTMENT -->
        <div class="col-xs-7" id="next_appointment">
            <div class="panel panel-info" style="box-shadow: 3px 3px 2px lightgray;">
                <div class="panel-heading">
                    Next appointment
                    <?php if($old_patient==0): ?>
                        <div class="pull-right">
                            <div class="btn-group tooltip_action">
                                <a href="<?= site_url('/Staff_c/newAppointmentByPatient/'.$id_patient)?>"><button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="left" title="Add a new appointment">
                                        <i class="fa fa-fw fa-plus-circle"></i>
                                    </button></a>
                            </div>
                        </div>
                    <?php endif;?>
                </div>
                <div class="panel-body" style="padding-left: 4em;">
                    <?php if($appointment!=null):?>
                        <?php foreach($appointment as $r):?>
                            <strong><?= date("l d F Y",strtotime($r->appointment_date)) ?> at <?= date("H:i",strtotime($r->appointment_hour)) ?></strong>
                        <?php endforeach;?>
                    <?php else :?>
                        There is no next appointment.
                    <?php endif;?>
                </div>
            </div>
        </div>

        <!-- JOB -->
        <div class="col-xs-12" id="job">
            <div class="panel panel-info" style="box-shadow: 3px 3px 2px lightgray;">
                <div class="panel-heading">
                    Teeth
                    <?php if($old_patient==0): ?>
                        <div class="pull-right">
                            <div class="btn-group tooltip_action">
                                <a href="<?= site_url('/Staff_c/newTreatment/'.$id_patient);?>"><button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="left" title="Add a new treatment">
                                    <i class="fa fa-fw fa-plus-circle"></i>
                                </button></a>
                            </div>
                        </div>
                    <?php endif;?>

                </div>
                <div class="panel-body">
                    <div class="col-xs-4">
                        <img class="jaw" src="<?= base_url();?>assets/images/permanent_number_chart.jpg" usemap="#jaw" >
                        <map id="jaw" name="jaw">
                            <?php foreach($tooth_file as $r):?>
                                <area <?php if($r->tooth_extracted==1):?>data-maphilight='{"stroke":false,"fillColor":"0000000","alwaysOn":true ,"fillOpacity":0.6}'<?php endif; ?> shape="poly"  title="Tooth <?= $r->id_tooth?>" coords="<?= $r->tooth_coordinates?>" onclick="load_job_done(<?= $id_patient?>,<?= $r->id_tooth ?>)"/>
                            <?php endforeach;?>
                        </map>
                    </div>

                    <div class="col-xs-8">
                        <div class="btn-group-xs">
                            <button class="btn btn-default btn-xs" onclick="load_unfinished_job('<?= $id_patient;?>');">Unfinished job</button>
                            <button class="btn btn-default btn-xs" onclick="load_all_jobs('<?= $id_patient;?>');">All Jobs</button>
                        </div>
                        <br>
                        <div id="table_job_done"></div>
                    </div>

                </div>
            </div>
        </div>

        <!-- RADIO -->
        <div class="col-xs-12" id="radio" >
            <div class="panel panel-info" style="box-shadow: 3px 3px 2px lightgray;">
                <div class="panel-heading">
                    Radios
                    <?php if($old_patient==0): ?>
                        <div class="pull-right">
                            <div class="btn-group tooltip_action">
                                <a href="<?= site_url('/Staff_c/addRadio/'.$id_patient);?>"><button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="left" title="Add a new radio">
                                        <i class="fa fa-fw fa-plus-circle"></i>
                                    </button></a>
                            </div>
                        </div>
                    <?php endif;?>
                </div>
                <div class="panel-body">
                    <?php if($radios==null) :?>
                        There are no radio.
                    <?php else :?>
                        <div class="col-xs-offset-1">
                            <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 810px; height: 300px; background: #000; overflow: hidden; ">
                                <!-- Slides Container -->
                                <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px;overflow: hidden;">
                                    <?php foreach($radios as $r): ?>
                                        <div>
                                            <img u="image" src="<?= base_url();?>radio/<?= $r->patient_surname;?>_<?= $r->patient_name;?>/<?= $r->radio_img;?>" data-toggle="modal" data-target="#myModal_<?= $r->id_radio ;?>"/>
                                            <div u="thumb">
                                                <img class="i" src="<?= base_url();?>radio/<?= $r->patient_surname;?>_<?= $r->patient_name;?>/<?= $r->radio_img;?>" /><div class="t"><?= $r->radio_name ;?></div>
                                                <div class="c"><?= $r->radio_caption;?></div>
                                            </div>
                                        </div>
                                    <?php endforeach;?>
                                </div>

                                <div u="thumbnavigator" class="jssort11" style="left: 605px; top:0px;">
                                    <!-- Thumbnail Item Skin Begin -->
                                    <div u="slides" style="cursor: default;">
                                        <div u="prototype" class="p" style="top: 0; left: 0;">
                                            <div u="thumbnailtemplate" class="tp"></div>
                                        </div>
                                    </div>
                                    <!-- Thumbnail Item Skin End -->
                                </div>
                                <!--#endregion ThumbnailNavigator Skin End -->
                            </div>
                        </div>

                        <?php foreach($radios as $r): ?>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal_<?= $r->id_radio; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"><?= $r->radio_name;?></h4>
                                        </div>
                                        <div class="modal-body text-center">
                                            <img src="<?= base_url();?>radio/<?= $r->patient_surname;?>_<?= $r->patient_name;?>/<?= $r->radio_img;?>" style="max-width: 750px;"> <br>
                                            <?php if($r->radio_caption!="") :?>
                                                <br><strong>Comment :</strong><br>
                                                <?= $r->radio_caption;?>
                                            <?php endif;?>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="col-xs-1">
                                                <a  href="<?= site_url('/Staff_c/deleteRadio/'.$r->id_radio.'/'.$r->id_patient);?>" onclick="return confirm('Do you really delete this radio ?')"><button type="button" class="btn btn-danger left-align">Delete</button></a>
                                            </div>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->

                        <?php endforeach;?>
                    <?php endif;?>
                </div>
            </div>
        </div>

        <!-- INVOICE -->
        <div class="col-xs-12" id="invoice">
            <div class="panel panel-info" style="box-shadow: 3px 3px 2px lightgray;">
                <div class="panel-heading">
                    Invoices
                    <?php if($old_patient==0): ?>
                        <div class="pull-right">
                            <div class="btn-group tooltip_action">
                                <a href="<?= site_url('/Staff_c/generateNewInvoice/'.$id_patient);?>"><button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="left" title="Generate a new invoice">
                                        <i class="fa fa-fw fa-plus-circle"></i>
                                    </button></a>
                            </div>
                        </div>
                    <?php endif;?>
                </div>
                <div class="panel-body">
                    <?php if($invoices==null) :?>
                        There are no invoice.
                    <?php else :?>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Amount (<i class="fa-fw fa fa-gbp"></i>)</th>
                                    <th class="text-center">Print</th>
                                    <th class="text-center">Edit</th>
                                    <th class="text-center">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($invoices as $r): ?>
                                    <tr>
                                        <td><?= $r->id_invoice; ?></td>
                                        <td><?= date("d-m-Y",strtotime($r->invoice_date)); ?></td>
                                        <td><?= $r->invoice_amount; ?></td>
                                        <td class="text-center"><a href="#" onclick="window.open('<?=site_url('/Staff_c/PDFInvoice/'.$r->id_invoice.'/'.$r->id_patient);?>')" ><i class="fa fa-print fa-2x"></i></a></td>
                                        <td class="text-center"><a href="<?=site_url('/Staff_c/editInvoice/'.$r->id_invoice.'/'.$r->id_patient);?>" ><i class="fa fa-pencil fa-2x"></i></a></td>
                                        <td class="text-center"><a href="<?=site_url('/Staff_c/deleteInvoice/'.$r->id_invoice.'/'.$r->id_patient);?>" onclick="return confirm('Do you want delete this invoice ?')"><i class="fa fa-trash fa-2x"></i></a></td>

                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    <?php endif;?>
                </div>
            </div>
        </div>

        <!-- REMOVE -->
        <?php if($old_patient==0 && $this->session->userdata('post_right')==1 || $this->session->userdata('post_right')==2 || $this->session->userdata('post_right')==3) :?>
            <div class="col-xs-10 col-xs-offset-1">
                <div class="panel text-center" style="background-color: background-color: #d9534f;background-color: #d9534f;">
                    <a href="<?= site_url('/Staff_c/removePatient/'.$id_patient);?>" style="color: #ffffff;">
                    <div class="panel-heading">
                        <h3 class="panel-title">REMOVE</h3>
                    </div></a>
                </div>
            </div>
        <?php endif;?>
    </div>
