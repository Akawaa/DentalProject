<!-- #page-wrapper -->
<div id="page-wrapper">

    <!-- .row -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Your account</h1>
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

    <!-- .row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-info alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <p style="font-size: 1.5em"><strong>Welcome to your personal account.</strong></p>
                <p style="font-size: 1em">Here, you can visualize your next appointment, all your invoices as well as your dental file. And to reply
                to the questionnaire survey.</p>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-calendar fa-fw"></i> Your next appointment
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <?php if($appointment!=null):?>
                        <?php foreach($appointment as $r):?>
                            <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                We would remind you that an appointment must be cancel at least 48 hours before this, please to call our secretariat to cancel.
                            </div>
                            <p style="margin-left: 1.5em;"><strong><?= date("l d F Y",strtotime($r->appointment_date)) ?> at <?= date("H:i",strtotime($r->appointment_hour)) ?></strong></p>
                        <?php endforeach;?>
                    <?php else :?>
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            To make an appointment, please to call our secretariat <?= $info_phone; ?>.
                        </div>
                        You do not have a next appointment.
                    <?php endif;?>
                </div>
                <!-- /.panel-body -->
            </div>
        </div>

        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-calendar fa-fw"></i> Your last five invoices
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <?php if($invoice!=null):?>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Amount (<i class="fa-fw fa fa-gbp"></i>)</th>
                                    <th>Print</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($invoice as $r): ?>
                                    <tr>
                                        <td><?= $r->id_invoice; ?></td>
                                        <td><?= date("d-m-Y",strtotime($r->invoice_date)); ?></td>
                                        <td><?= $r->invoice_amount; ?></td>
                                        <td class="text-center"><a href="#" onclick="window.open('<?=site_url('/Staff_c/PDFInvoice/'.$r->id_invoice.'/'.$r->id_patient);?>')"><i class="fa fa-2x fa-print"></i></a></td>
                                    </tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    <?php else :?>
                        You do not have invoice.
                    <?php endif;?>
                    <div class="text-right">
                        <a href="<?= site_url('/Patient_c/invoice');?>">View All Invoices <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
        </div>

        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa-fw fa fa-map-marker"></i> Address
                </div>
                <div class="panel-body">
                    <ul style="list-style: none">
                        <li><?=$info_address; ?></li>
                        <li><?= $info_city; ?></li>
                        <li><?= $info_code; ?></li>
                        <li><?= $info_country; ?></li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa-fw fa fa-info-circle"></i> Secretariat
                </div>
                <div class="panel-body">
                    <ul style="list-style: none">
                        <li><strong>Phone</strong></li>
                        <li><?= $info_phone; ?></li>
                        <li><strong>Email</strong></li>
                        <li><?= $info_email; ?></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa-fw fa fa-ambulance"></i> Emergency
                </div>
                <div class="panel-body" >
                    <ul style="list-style: none">
                        <li><strong>Phone</strong></li>
                        <li><?= $info_phone_emergency; ?></li>
                        <li><strong>Email</strong></li>
                        <li><?= $info_email_emergency; ?></li>
                    </ul>
                </div>
            </div>
        </div>


    </div>
    <!-- /.row -->

</div>
<!-- /#page-wrapper -->