
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
        <?php echo form_open('Staff_c/confirmEditPasswordPatient') ?>
        <div class="col-xs-6 col-xs-offset-3">
            <h2 class="page-header">Change Password</h2>

            <input type="hidden" name="id_patient" value="<?= $id_patient?>">

            <div class="form-group">
                <label for="pass1_patient" >Password</label>
                <input type="text" class="form-control" name="pass1_patient" value="">
            </div>
            <?php echo form_error('pass_patient','<small style="color: red;"><i>',"</i></small>");?>

            <div class="form-group">
                <label for="pass2_patient" >Confirm Password</label>
                <input type="text" class="form-control" name="pass2_patient" value="">
            </div>
            <?php echo form_error('pass2_patient','<small style="color: red;"><i>',"</i></small>");?><br>
        </div>

    </div>

    <div class="col-xs-4 col-xs-offset-3">
        <input type="submit" class="btn btn-xs btn-success" style="padding: 10px 55px;" name="sub_edit" value="Update">
    </div>
    <div class="col-xs-3">
        <a href="<?= site_url('/Staff_c/patientFile/'.$id_patient);?>" class="btn btn-xs btn-danger" style="padding: 10px 55px;" name="sub_new">Cancel</a>
    </div>

    <?php echo form_close() ?>
    <!-- FORM -->
