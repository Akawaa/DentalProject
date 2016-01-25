<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->

        <!-- .row -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Invoices
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

        <!-- TABLE INVOICE -->
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-list fa-money"></i> Your invoices
                    <div class="pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-xs" onclick="location.reload();">
                                <i class="fa fa-fw fa-refresh"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-hover table-striped" id="dataTables-invoices">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Date</th>
                                <th>Amount (£)</th>
                                <th class="text-center">Print</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($invoices as $r): ?>
                                <tr>
                                    <td><?= $r->id_invoice; ?></td>
                                    <td><?= date("d-m-Y",strtotime($r->invoice_date)); ?></td>
                                    <td><?= $r->invoice_amount; ?></td>
                                        <td class="text-center"><a href="#" onclick="window.open('<?=site_url('/Staff_c/PDFInvoice/'.$r->id_invoice.'/'.$this->session->userdata('id_patient'));?>')" ><i class="fa fa-print fa-2x"></i></a></td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
        </div>
