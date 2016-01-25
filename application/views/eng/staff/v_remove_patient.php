
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
        <?php echo form_open('Staff_c/confirmRemovePatient') ?>
        <div class="col-xs-6 col-xs-offset-3">
            <h2 class="page-header">Remove</h2>

            <input type="hidden" name="id_patient" value="<?= $id_patient;?>">
            <input type="hidden" name="dateRemove_patient" value="<?= date('Y-m-d'); ?>">



            <div class="form-group">
                <label>Reason</label>
                <select class="form-control" name="reason_remove">
                        <option value="">-----</option>
                        <option value="Dead">Dead</option>
                        <option value="Move">Move</option>
                        <option value="Change of Firm">Change of Firm</option>
                        <option value="Other">Other</option>
                </select>
            </div>
            <?php echo form_error('reason_remove','<small style="color: red;"><i>',"</i></small>");?><br>
        </div>

        <div class="col-xs-4 col-xs-offset-3">
            <input type="submit" class="btn btn-xs btn-success" style="padding: 10px 55px;" name="sub_edit" value="Confirm">
        </div>
        <div class="col-xs-3">
            <a href="<?= site_url('/Staff_c/patientFile/'.$id_patient);?>" class="btn btn-xs btn-danger" style="padding: 10px 55px;" name="sub_new">Cancel</a>
        </div>
