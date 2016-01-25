
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

<form method="post" action="<?= site_url('Staff_c/confirmAddNewJobDone')?>" oninput="job_price_excl_tax.value=((100/(100+vat.valueAsNumber))*price.valueAsNumber).toFixed(2)">
    <div class="col-xs-6 col-xs-offset-3">

        <?php if($appointment==null && $today==null):?>
            <div class="alert alert-warning">There is no appointment eligible to add a job.</div>

            <div class="col-xs-4 col-xs-offset-4">
                <br>
                <a href="<?= site_url('/Staff_c/patientFile/'.$id_patient);?>" class="btn btn-xs btn-danger" style="padding: 10px 55px;" name="sub_new">Cancel</a>
            </div>
        <?php else: ?>
            <h2 class="page-header">Tooth <?= $id_tooth." - <br>".$tooth_area." ".$tooth_name; ?></h2>

            <input type="hidden" name="id_tooth" value="<?= $id_tooth; ?>">
            <input type="hidden" name="id_patient" value="<?= $id_patient; ?>">


            <div class="form-group">
                <label>Appointment</label>
                <select class="form-control" name="appointment_job">
                    <?php if($today !== null) : ?>
                        <?php foreach ($today as $key=>$value) : ?>
                        <optgroup label="Today">
                            <option value="<?php echo $key; ?>" <?php if($key==set_value('appointment_job')) echo 'selected'; ?>>
                                <?= $value ?>
                            </option>
                        </optgroup>
                        <?php endforeach; ?>
                    <?php endif;?>

                    <?php if($appointment!== null):?>
                        <optgroup label="Old appointments">
                            <?php foreach ($appointment as $key=>$value) : ?>
                                <option value="<?php echo $key; ?>" <?php if($key==set_value('appointment_job')) echo 'selected'; ?>>
                                    <?= $value ?>

                                </option>
                            <?php endforeach; ?>
                        </optgroup>
                    <?php endif;?>

                </select>
                <?php echo form_error('appointment_job','<small style="color: red;"><i>',"</i></small>");?>

                <br>
            <div class="form-group">
                <label>Treatment</label>
                <select class="form-control" name="treatment_job">
                    <optgroup label="Classic">
                        <?php foreach ($classic as $key=>$value) : ?>
                            <option value="<?php echo $key; ?>" <?php if($key==set_value('treatment_job')) echo 'selected'; ?>>
                                <?= $value ?>
                            </option>
                        <?php endforeach; ?>
                    </optgroup>
                    <optgroup label="Filling">
                        <?php foreach ($filling as $key=>$value) : ?>
                            <option value="<?php echo $key; ?>" <?php if($key==set_value('treatment_job')) echo 'selected'; ?>>
                                <?= $value ?>
                            </option>
                        <?php endforeach; ?>
                    </optgroup>
                    <optgroup label="Crown">
                        <?php foreach ($crown as $key=>$value) : ?>
                            <option value="<?php echo $key; ?>" <?php if($key==set_value('treatment_job')) echo 'selected'; ?>>
                                <?= $value ?>
                            </option>
                        <?php endforeach; ?>
                    </optgroup>
                    <optgroup label="Brace">
                        <?php foreach ($brace as $key=>$value) : ?>
                            <option value="<?php echo $key; ?>" <?php if($key==set_value('treatment_job')) echo 'selected'; ?>>
                                <?= $value ?>
                            </option>
                        <?php endforeach; ?>
                    </optgroup>

                </select>
                <?php echo form_error('treatment_job','<small style="color: red;"><i>',"</i></small>");?>

                <br>
                <div class="form-group">
                    <label>Information</label>
                    <textarea class="form-control" name="job_info" rows="3"></textarea>
                </div>

                <br>
                <input type="checkbox" name="job_completed" id="job_completed" value="1" <?php if(set_value('job_completed')==1) echo 'checked' ;?> onchange="priceTreatment();"> Completed<br>
                <br>


                    <input type="number" name="vat" id="vat" value="<?= $vat->rate ?>" style="display: none;">

                    <div class="form-group col-xs-6">
                        <label>Price (incl. taxes)</label>
                        <input type="number" min="0" class="form-control" id="price"  name="job_price_incl_tax" <?php if(set_value('job_completed')!=1) echo 'disabled' ;?> value="<?php set_value('job_price_incl_tax') ?>" >
                        <?php echo form_error('job_price_incl_tax','<small style="color: red;"><i>',"</i></small>");?>
                        <br>
                    </div>
                    <div class="form-group col-xs-6">
                        <label>Price (excl. taxes)</label>
                        <output name="job_price_excl_tax" for="vat price"></output>
                    <div>
</div>
</div>
</div>


        <div class="col-xs-12">
            <input type="submit" class="btn btn-xs btn-success" style="padding: 10px 55px;margin-right: 9.7em" name="sub_new" value="Confirm">

            <a href="<?= site_url('/Staff_c/newTreatment/'.$id_patient);?>" class="btn btn-xs btn-info" style="padding: 10px 55px;" name="sub_new">Back</a>
        </div>
</form>

        <!-- FORM -->
    <?php endif;?>