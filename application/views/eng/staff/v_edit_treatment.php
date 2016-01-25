<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->

        <!-- .row -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    New Treatment
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
                <a href="<?= site_url('/Staff_c/settingStaff');?>">
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
        <?php echo form_open('Staff_c/confirmEditTreatment') ?>

        <div class="col-lg-6 col-lg-offset-3">
            <h2 class="page-header">Treatment</h2>

            <input type="hidden" name="id_treatment" value="<?= $id_treatment;?>">

            <div class="form-group">
                <select name="treatment_type" class="form-control">
                    <?php foreach ($type as $key=>$value) : ?>
                        <option value="<?php echo $key; ?>" <?php if($key==$id_type) echo 'selected' ;?>>
                            <?= $value ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <?php echo form_error('treatment_type','<small style="color: red;"><i>',"</i></small>");?>


            <div class="form-group">
                <label for="treatment_name">Name</label>
                <input type="text" class="form-control" name="treatment_name" id="login" value="<?= set_value('treatment_name',$treatment_name);?>">
            </div>
            <?php echo form_error('treatment_name','<small style="color: red;"><i>',"</i></small>");?>



        </div>


        <div class="col-lg-5 col-lg-offset-5">
            <input type="submit" class="btn btn-lg btn-success" style="padding: 10px 55px;" value="Update">
        </div>

        <?php echo form_close() ?>
        <!-- FORM -->
