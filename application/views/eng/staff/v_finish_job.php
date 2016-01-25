
<div class="container-fluid">

    <!-- Page Heading -->

    <!-- .row -->
    <div class="row">
        <div class="col-xs-12">
            <h1 class="page-header">
                <?= $patient_surname ?> <?= strtoupper($patient_name); $id_patient?>
            </h1>

        </div>
    </div>
    <!-- /.row -->

    <!-- FORM -->

    <form method="post" action="<?= site_url('Staff_c/confirmFinishJob')?>" oninput="job_price_excl_tax.value=((100/(100+vat.valueAsNumber))*price.valueAsNumber).toFixed(2)">
        <div class="col-xs-6 col-xs-offset-3">

            <h2 class="page-header">Tooth <?= $job_done['id_tooth']." - ".$job_done['type_name']." - ".$job_done['treatment_name']; ?></h2>

                <input type="hidden" name="id_job" value="<?= $job_done['id_job_done'] ?>">
                <input type="hidden" name="id_patient" value="<?= $id_patient; ?>">



                    <input type="number" name="vat" id="vat" value="<?= $vat->rate ?>" style="display: none">

                    <div class="form-group col-xs-6">
                        <label>Price (incl. taxes)</label>
                        <input type="number" min="0" class="form-control" id="price"  name="job_price_incl_tax" value="<?= set_value('job_price_incl_tax',$job_done['job_price_incl_tax']) ?>" >
                        <?php echo form_error('job_price_incl_tax','<small style="color: red;"><i>',"</i></small>");?>
                        <br>
                    </div>
                    <div class="form-group col-xs-6">
                        <label>Price (excl. taxes)</label>
                        <output name="job_price_excl_tax" for="vat price" value="0"></output>
                    <div>
        </div>
    </form>
</div>


<div class="col-xs-12">
    <input type="submit" class="btn btn-xs btn-success" style="padding: 10px 55px;margin-right:9.7em; " name="sub_new" value="Confirm">
    <a href="<?= site_url('/Staff_c/patientFile/'.$id_patient);?>" class="btn btn-xs btn-danger" style="padding: 10px 55px;" name="sub_new">Cancel</a>
</div>

</form>


    <!-- FORM -->