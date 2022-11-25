<?php 

    use SimpleWork\Framework\Routes\Rotas;
    
    // Rota da Página Principal
    Rotas::set("home/index", "GET");
    Rotas::set("home/post", "POST");

    // Rota de Login & Registro
    Rotas::set("login/index", "GET");
