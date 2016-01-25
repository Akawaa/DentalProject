<?php if($job != null) : ?>
    <table class="table table-bordered table-striped table-condensed">
        <thead>
        <tr>
            <th>Tooth</th>
            <th>Treatment</th>
            <th>Date</th>
            <th>Complete</th>
            <th>Price (£)</th>
            <th>Invoiced</th>
        </tr>
        </thead>
        <tbody class="text-center">
        <?php foreach($job as $r) : ?>
            <tr>
                <td><?= $r->id_tooth; ?></td>
                <td><?= $r->treatment_name; ?></td>
                <td><?= date("d-m-Y",strtotime($r->appointment_date)); ?></td>
                <?php if($r->job_complete==1): ?>
                    <td>Yes</td>
                <?php else :?>
                    <td>
                        No
                    </td>
                <?php endif; ?>
                <td><?= $r->job_price_incl_tax; ?></td>
                <?php if($r->id_invoice==null): ?>
                    <td>No</td>
                <?php else :?>
                    <td>
                        Yes
                    </td>
                <?php endif; ?>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php else : ?>
    <h3 ="text-center">Neither treatment for this tooth.</h3>
<?php endif; ?>