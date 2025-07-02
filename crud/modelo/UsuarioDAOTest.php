<?php
include_once __DIR__.'./Conexao.php';
include_once __DIR__.'./Usuario.php';
include_once __DIR__.'./UsuarioDAO.php';


$daoUsuario = new UsuarioDAO();

$daoUsuario -> insere(new Usuario("joao", "joao@gmail.com", "joao"));
echo var_dump($daoUsuario -> busca_usr_email("joao@gmail.com"));

echo "<pre>";
print_r  (var_dump($daoUsuario -> lista_todos()));
echo "</pre>";

echo "teste autenticação";
echo var_dump($daoUsuario -> autenticar("joao@gmail.com", "joao" ));
echo var_dump($daoUsuario -> autenticar("joao@gmail.com", "joaaedsfsdo" ));

?>