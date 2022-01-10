<header>
    <title>Formulário</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/form.css')?>">
</header>
<body>
    <div id='content'>
        
        <?php
            // Abrir um formulário e inserir sua action
            echo form_open('otherpage/receiver');

            echo form_label('Seu Nome', 'name');
            echo form_input('name');

            echo form_label('Seu Email', 'email');
            echo form_input('email');

            echo form_label('Assunto', 'about');
            echo form_input('about');

            echo form_label('Mensagem', 'message');
            echo form_textarea('message');

            echo form_submit('enviar', 'Enviar Mensagem', array('class' => 'submit-button'));

            echo form_close();
        ?>

        <form action="">

        </form>
    </div>
</body>