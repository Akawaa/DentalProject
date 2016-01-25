

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
        <?php echo form_open('Staff_c/confirmEditPatient') ?>
        <div class="col-xs-6">
            <h2 class="page-header">Information</h2>

            <input type="hidden" name="id_patient" value="<?= $id_patient?>">

            <div class="form-group">
                <label>Gender</label>
                <select class="form-control" name="gender_patient">
                    <?php foreach ($gender as $key=>$value) : ?>
                        <option value="<?php echo $key; ?>" <?php if($key == $id_gender) echo 'selected'; ?>>
                            <?= $value ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="name_patient" >Name</label>
                <input type="text" class="form-control" name="name_patient" value="<?= set_value('name_patient',$patient_name);?>">
            </div>
            <?php echo form_error('name_patient','<small style="color: red;"><i>',"</i></small>");?>

            <div class="form-group">
                <label for="surname_patient">Surname</label>
                <input type="text" class="form-control" name="surname_patient" value="<?= set_value('surname_patient',$patient_surname);?>">
            </div>
            <?php echo form_error('surname_patient','<small style="color: red;"><i>',"</i></small>");?>


            <div class="form-group">
                <label for="DofB_patient">Date of Birth</label>
                <input type="date" class="form-control" name="DofB_patient" value="<?= set_value('DofB_patient',$patient_DofB);?>">
            </div>
            <?php echo form_error('DofB_patient','<small style="color: red;"><i>',"</i></small>");?>

            <div class="form-group">
                <label for="allergies_patient">Allergies (<small>if none do not write</small>) </label>
                <input type="text" class="form-control" name="allergies_patient" value="<?= set_value('allergies_patient',$patient_allergies);?>">
            </div>
            <?php echo form_error('allergies_patient','<small style="color: red;"><i>',"</i></small>");?>
        </div>

        <div class="col-xs-6">
            <h2 class="page-header">Contact</h2>
            <div class="form-group">
                <label for="phone_patient">Phone</label>
                <input type="text" class="form-control" name="phone_patient" value="<?= set_value('phone_patient',$patient_phone);?>">
            </div>
            <?php echo form_error('phone_patient','<small style="color: red;"><i>',"</i></small>");?>

            <div class="form-group">
                <label for="email_patient">Email</label>
                <input type="text" class="form-control" name="email_patient" value="<?= set_value('email_patient',$patient_email);?>">
            </div>
            <?php echo form_error('email_patient','<small style="color: red;"><i>',"</i></small>");?>

            <div class="form-group">
                <label for="address_patient">Address</label>
                <input type="text" class="form-control" name="address_patient" value="<?= set_value('address_patient',$patient_address);?>">
            </div>
            <?php echo form_error('address_patient','<small style="color: red;"><i>',"</i></small>");?>

            <div class="form-group">
                <label for="city_patient">City</label>
                <input type="text" class="form-control" name="city_patient" value="<?= set_value('city_patient',$patient_city);?>">
            </div>
            <?php echo form_error('city_patient','<small style="color: red;"><i>',"</i></small>");?>


            <div class="form-group">
                <label for="country_patient">Country</label>
                <input type="text" class="form-control" name="country_patient" value="<?= set_value('country_patient',$patient_country);?>">
            </div>
            <?php echo form_error('country_patient','<small style="color: red;"><i>',"</i></small>");?>
        </div>

        <div class="col-xs-4 col-xs-offset-3">
            <input type="submit" class="btn btn-xs btn-success" style="padding: 10px 55px;" name="sub_edit" value="Update">
        </div>
        <div class="col-xs-3">
            <a href="<?= site_url('/Staff_c/patientFile/'.$id_patient);?>" class="btn btn-xs btn-danger" style="padding: 10px 55px;" name="sub_new">Cancel</a>
        </div>

        <?php echo form_close() ?>
        <!-- FORM -->
