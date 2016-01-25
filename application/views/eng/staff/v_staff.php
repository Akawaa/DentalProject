<!-- #page-wrapper -->
<div id="page-wrapper">

    <!-- .row -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
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
        <div class="col-lg-6">
            <!-- .panel -->
            <div class="panel panel-default">
                <!-- .panel-heading -->
                <div class="panel-heading">
                    <i class="fa fa-calendar fa-fw"></i> Appointments of the day
                    <div class="pull-right">
                        <div class="btn-group tooltip_action">
                            <a href="<?= site_url('/Staff_c//newAppointment')?>"><button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="left" title="Add a new appointment">
                                    <i class="fa fa-fw fa-plus-circle"></i>
                                </button></a>
                        </div>
                    </div>
                </div>
                <!-- /.panel-heading -->

                <!-- .panel-body -->
                <div class="panel-body">
                    <div class="list-group">
                        <?php if($appointments==null): ?>
                            You do not have any appointments today.
                        <?php else : ?>
                            <?php foreach($appointments as $r): ?>
                                <?php $hourAppointment= new DateTime($r->appointment_hour);
                                $hourCurrent= new DateTime(); ?>
                                    <a href="#" onclick="openWindow('<?=site_url('/Staff_c/patientFile/'.$r->id_patient);?>','','width=1000,height=700');return false"  class="list-group-item">
                                        <?=$r->patient_surname; ?> <?= strtoupper($r->patient_name); ?> at <?= date("H:i",strtotime($r->appointment_hour));?>
                                        <span class="badge"><em>
                                                <?php $interval = $hourCurrent->diff($hourAppointment);
                                                        echo $interval->format('%h h %i m');?>
                                            </em></span>
                                    </a>
                        <?php endforeach;?>
                        <?php endif;?>
                    </div>

                    <div class="text-right">
                        <a href="<?= site_url('/Staff_c/appointment');?>">View All Appointments <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>

        <div class="col-lg-6">
            <!-- .panel -->
            <div class="panel panel-default">
                <!-- .panel-heading -->
                <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Invoices</h3>
                </div>
                <!-- /.panel-heading -->

                <!-- .panel-body -->
                <div class="panel-body">
                    <?php if($invoices==null): ?>
                        You do not have any invoices.
                    <?php else : ?>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Name</th>
                                        <th>Amount (<i class="fa-fw fa fa-gbp"></i>)</th>
                                        <th>Print</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($invoices as $r): ?>
                                    <tr>
                                        <td><?= $r->id_invoice; ?></td>
                                        <td><?= date("d-m-Y",strtotime($r->invoice_date)); ?></td>
                                        <td><?= $r->patient_surname.' '.strtoupper($r->patient_name); ?></td>
                                        <td><?= $r->invoice_amount; ?></td>
                                        <td class="text-center"><a href="#" onclick="window.open('<?=site_url('/Staff_c/PDFInvoice/'.$r->id_invoice.'/'.$r->id_patient);?>')"><i class="fa fa-2x fa-print"></i></a></td>
                                    </tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    <?php endif;?>
                    <div class="text-right">
                        <a href="<?= site_url('/Staff_c/invoiceStaff');?>">View All Invoices <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- /.panel -->
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /#page-wrapper -->