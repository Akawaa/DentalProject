<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->

        <!-- .row -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    New Appointment
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

            <div class="col-lg-3 col-md-6 col-lg-offset-6">
                <a href="<?= site_url('/Staff_c/appointment');?>">
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

        <!-- FORM -->
        <?php echo form_open('Staff_c/confirmAddAppointment') ?>
        <div class="col-lg-6">
            <h2 class="page-header">Date</h2>

            <div class="form-group">
                <label for="date_appointment">Date</label>
                <input type="date" class="form-control" name="date_appointment" value="<?= set_value('date_appointment');?>">
            </div>
            <?php echo form_error('date_appointment','<small style="color: red;"><i>',"</i></small>");?>

            <div class="form-group">
                <label for="hour_appointment" >Hour</label>
                <input type="time" class="form-control" name="hour_appointment" value="<?= set_value('hour_appointment');?>">
            </div>
            <?php echo form_error('hour_appointment','<small style="color: red;"><i>',"</i></small>");?>
        </div>

        <div class="col-lg-6">
            <h2 class="page-header">Patient</h2>
            <label for="patient_appointment">Name</label>
            <select class="form-control" name="patient_appointment">
                <?php foreach ($patients as $key=>$value) : ?>
                    <option value="<?php echo $key; ?>">
                        <?= $value ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <?php echo form_error('patient_appointment','<small style="color: red;"><i>',"</i></small>");?>

            <br>
            <input type="checkbox" name="emergency" value="1"> Emergency<br>

        </div>


        <div class="col-lg-5 col-lg-offset-5">

            <input type="submit" class="btn btn-lg btn-success" style="padding: 10px 55px;" name="sub_new" value="Confirm">
        </div>
        <?php echo form_close() ?>
        <!-- FORM -->
