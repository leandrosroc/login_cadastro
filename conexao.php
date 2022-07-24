//fazer conexão com o banco de dados
<?php
define('HOST', 'HOST_NAME');
define('USUARIO', 'USER_NAME');
define('SENHA', 'PASSWORD');
define('DB', 'DATABASE_NAME');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');