    <div class="col-lg-12 foot">
        <div class="col-lg-4 col-xs-12">

            <h2 style="font-family: Open">Address</h2>
            <ul>
                <li><?= $info['info_address']; ?></li>
                <li><?= $info['info_city']; ?></li>
                <li><?= $info['info_code']; ?></li>
                <li><?= $info['info_country']; ?></li>
            </ul>
        </div>
        <div class="col-lg-4 col-xs-12">

            <h2 style="font-family: Open">Secretariat</h2>
            <ul>
                <li><strong>Phone</strong></li>
                <li><?= $info['info_phone']; ?></li>
                <li><strong>Email</strong></li>
                <li><?= $info['info_email']; ?></li>
            </ul>
        </div>
        <div class="col-lg-4 col-xs-12">

            <h2 style="font-family: Open">Emergency</h2>
            <ul>
                <li><strong>Phone</strong></li>
                <li><?= $info['info_phone_emergency']; ?></li>
                <li><strong>Email</strong></li>
                <li><?= $info['info_email_emergency']; ?></li>
            </ul>
        </div>
    </div>
</div>
<div class=" col-lg-5 col-md-5 col-xs-10 col-lg-offset-5 col-md-offset-5 col-xs-offset-2">Copyright &copy; 2015 - All Rights Reserved</div>
</div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.maphilight.js"></script>


    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        function greenCo(){
            element = document.getElementById("connection");
            element.src= "<?php echo base_url();?>assets/images/connexionOn.png" ;
        }

        function normalCo(){
            element = document.getElementById("connection");
            element.src= "<?php echo base_url();?>assets/images/connexion.png" ;
        }

    </script>


</body>
</html>
