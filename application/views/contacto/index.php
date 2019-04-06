<html>
<head>
    <title>Formulario de contacto</title>
     
</head>
<body>
    <div class="container">
        <h1 class="text-center">Formulario de contacto</h1><hr />

        <?php
        if($this->session->flashdata("success"))
        {
            ?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata("success") ?>
            </div>
            <?php
        }
        ?>

        <?php echo form_open(base_url("contacto/send")) ?>

            <div class="col-md-6 col-md-offset-3">

                <div class="form-group col-sm-12">
                    <?php echo form_label("Nombre", "name") ?>
                    <?php echo form_input($name) ?>

                    <?php echo form_error("name", "<p class='alert alert-danger'>", "</p>") ?>
                </div>

                <div class="form-group col-sm-12">
                    <?php echo form_label("Email", "email") ?>
                    <?php echo form_input($email) ?>

                    <?php echo form_error("email", "<p class='alert alert-danger'>", "</p>") ?>
                </div>

                <div class="form-group col-sm-12">
                    <?php echo form_label("Message", "message") ?>
                    <?php echo form_textarea($message) ?>

                    <?php echo form_error("message", "<p class='alert alert-danger'>", "</p>") ?>
                </div>

                <div class="form-group col-sm-12">
                    <?php echo form_submit("send", "Enviar", array("class" => "btn btn-success btn-lg pull-right")) ?>
                </div>

            </div>

        <?php echo form_close() ?>
    </div>
</body>
</html>