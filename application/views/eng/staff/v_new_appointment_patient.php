
    <div class="container-fluid">

        <!-- Page Heading -->

        <!-- .row -->
        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header">
                    <?= $patient_surname ?> <?= strtoupper($patient_name); ?>
                </h1>

            </div>
        </div>
        <!-- /.row -->

        <!-- FORM -->
        <?php echo form_open('Staff_c/confirmAddAppointmentPatient') ?>
        <div class="col-xs-6 col-xs-offset-3">
            <h2 class="page-header">New Appointment</h2>

            <input type="hidden" name="patient_appointment" value="<?= $id_patient; ?>">

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

            <br>
            <input type="checkbox" name="emergency" value="1"> Emergency<br>
            <br>

        </div>


    <div class="col-xs-4 col-xs-offset-3">
        <input type="submit" class="btn btn-xs btn-success" style="padding: 10px 55px;" name="sub_new" value="Confirm">
    </div>
    <div class="col-xs-3">
        <a href="<?= site_url('/Staff_c/patientFile/'.$id_patient);?>" class="btn btn-xs btn-danger" style="padding: 10px 55px;" name="sub_new">Cancel</a>
    </div>
        <?php echo form_close() ?>
        <!-- FORM -->
