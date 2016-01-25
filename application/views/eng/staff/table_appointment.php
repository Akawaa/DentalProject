<?php if($appointment==null): ?>
    <div class="alert alert-info alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        You do not have appointment.
    </div>

<?php else: ?>

    <?php foreach($appointment as $r): ?>
            <div <?php if($r->appointment_emergency==0){echo 'class="panel panel-default"';}else { echo 'class="panel panel-danger"';} ?>>
                <div class="panel-heading">
                    <?= date("H:i", strtotime($r->appointment_hour)); ?>
                    <div class="pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-fw fa-cog"></i>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li><a href="<?= site_url('/Staff_c/editAppointment/'.$r->id_appointment);?>"><i class="fa fa-pencil"></i> Edit</a>
                                </li>
                                <li>
                                    <a href="<?=site_url('/Staff_c/cancelAppointment/'.$r->id_appointment);?>" onclick=" return confirm('Do you want really cancel this appointment ?');" ><i class="fa fa-times" style="color: #c70000;"> Cancel</i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <p><strong><?= $r->patient_surname; ?> <?= strtoupper($r->patient_name); ?> <a href="#" onclick="openWindow('<?=site_url('/Staff_c/patientFile/'.$r->id_patient);?>','<?php echo $r->patient_name;?>','width=1000,height=700');return false"><i class="fa fa-file-text-o"></i></a></strong></p>
                    <p><i class="fa fa-phone"></i> <?= $r->patient_phone; ?></p>
                </div>
            </div>
    <?php endforeach;?>
<?php endif; ?>