<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');  // Para Home
$routes->get('/add', 'Home::add');  // exibir pagina de pessoas
$routes->post('/add', 'Home::addUser');         //metodo para cadastrar
$routes->get('/edit(:num)', 'Home::edit/$1'); // exibe o formulário de edição com base no ID do usuário
$routes->post('/edituser(:num)', 'Home::edituser/$1'); // exibe o formulário de edição com base no ID do usuário
$routes->get('/delete(:num)', 'Home::deletar/$1');




