<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->

        <!-- .row -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    New Patient
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
                <a href="<?= site_url('/Staff_c/patientAdmin');?>">
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
        <?php echo form_open('Staff_c/confirmAddPatient') ?>
            <div class="col-lg-4">
                <h2 class="page-header">Information</h2>

                <div class="form-group">
                    <label>Gender</label>
                    <select class="form-control" name="gender_patient">
                        <?php foreach ($gender as $key=>$value) : ?>
                            <option value="<?php echo $key; ?>" <?php if($key==set_value('gender_patient')) echo 'selected' ;?>>
                                <?= $value ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <?php echo form_error('gender_patient','<small style="color: red;"><i>',"</i></small>");?>
                </div>

                <div class="form-group">
                    <label for="name_patient" >Name</label>
                    <input type="text" class="form-control" name="name_patient" value="<?= set_value('name_patient');?>">
                </div>
                <?php echo form_error('name_patient','<small style="color: red;"><i>',"</i></small>");?>

                <div class="form-group">
                    <label for="surname_patient">Surname</label>
                    <input type="text" class="form-control" name="surname_patient" value="<?= set_value('surname_patient');?>">
                </div>
                <?php echo form_error('surname_patient','<small style="color: red;"><i>',"</i></small>");?>


                <div class="form-group">
                    <label for="DofB_patient">Date of Birth</label>
                    <input type="date" class="form-control" name="DofB_patient" value="<?= set_value('DofB_patient');?>">
                </div>
                <?php echo form_error('DofB_patient','<small style="color: red;"><i>',"</i></small>");?>

                <div class="form-group">
                    <label for="allergies_patient">Allergies (<small>if none, leave blank</small>) </label>
                    <input type="text" class="form-control" name="allergies_patient" value="<?= set_value('allergies_patient');?>">
                </div>
                <?php echo form_error('allergies_patient','<small style="color: red;"><i>',"</i></small>");?>
            </div>

            <div class="col-lg-4">
                <h2 class="page-header">Contact</h2>
                <div class="form-group">
                    <label for="phone_patient">Phone</label>
                    <input type="text" class="form-control" name="phone_patient" value="<?= set_value('phone_patient');?>">
                </div>
                <?php echo form_error('phone_patient','<small style="color: red;"><i>',"</i></small>");?>

                <div class="form-group">
                    <label for="email_patient">Email</label>
                    <input type="text" class="form-control" name="email_patient" value="<?= set_value('email_patient');?>">
                <?php echo form_error('email_patient','<small style="color: red;"><i>',"</i></small>");?>
                </div>

                <div class="form-group">
                    <label for="address_patient">Address</label>
                    <input type="text" class="form-control" name="address_patient" value="<?= set_value('address_patient');?>">
                </div>
                <?php echo form_error('address_patient','<small style="color: red;"><i>',"</i></small>");?>

                <div class="form-group">
                    <label for="code_patient">Postcode</label>
                    <input type="text" class="form-control" name="code_patient" value="<?= set_value('code_patient');?>">
                </div>
                <?php echo form_error('code_patient','<small style="color: red;"><i>',"</i></small>");?>

                <div class="form-group">
                    <label for="city_patient">City</label>
                    <input type="text" class="form-control" name="city_patient" value="<?= set_value('city_patient');?>">
                </div>
                <?php echo form_error('city_patient','<small style="color: red;"><i>',"</i></small>");?>


                <div class="form-group">
                    <label for="country_patient">Country</label>
                    <input type="text" class="form-control" name="country_patient" value="<?= set_value('country_patient');?>">
                </div>
                <?php echo form_error('country_patient','<small style="color: red;"><i>',"</i></small>");?>
            </div>

            <div class="col-lg-4">
                <h2 class="page-header">Log</h2>
                <div class="form-group">
                    <label for="login_patient">Login</label>
                    <input type="text" class="form-control" name="login_patient" value="<?= set_value('login_patient');?>">
                </div>
                <?php echo form_error('login_patient','<small style="color: red;"><i>',"</i></small>");?>


                <div class="form-group">
                    <label for="pass1_patient">Password</label>
                    <input type="password" class="form-control" name="pass1_patient" value="">
                </div>
                <?php echo form_error('pass1_patient','<small style="color: red;"><i>',"</i></small>");?>


                <div class="form-group">
                    <label for="pass2_patient">Confirm password</label>
                    <input type="password" class="form-control" name="pass2_patient" value="">
                </div>
                <?php echo form_error('pass2_patient','<small style="color: red;"><i>',"</i></small>");?>

            </div>


        <div class="col-lg-5 col-lg-offset-5">

            <input type="submit" class="btn btn-lg btn-success" style="padding: 10px 55px;" name="sub_new" value="Confirm">
            <br><br>
        </div>
        <?php echo form_close() ?>
         <!-- FORM -->
