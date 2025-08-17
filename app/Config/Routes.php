<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home_controller::homepage');
$routes->get('/cadastrar', 'controller_Cad::cadastrar');
$routes->post('/cadastrar', 'controller_Cad::cadastrar');
$routes->get('/overwatch2', 'Home_controller::overwatch');
$routes->get('/colabora', 'Home_controller::sobrenos');
$routes->get('/lol',  'Home_controller::lol');
$routes->get('/fornite',  'Home_controller::fortnite');
$routes->get('/rocket',  'Home_controller::rocket');
$routes->get('/login', 'controller_login::login');
$routes->post('/login', 'controller_login::login');
$routes->match(['get', 'post'], 'logout', 'controller_login::logout');
$routes->get('perfil', 'controller_login::perfil');
$routes->get('perfil/editar', 'controller_login::atualizarPerfil');
$routes->post('perfil/atualizar', 'controller_login::atualizarPerfil');
$routes->get('perfil/excluir', 'controller_login::excluir');
$routes->get('equipes', 'controller_equipe::homeEquipe');
$routes->get('equipes/cadastrar', 'controller_equipe::cadastrarEquipe');
$routes->post('equipes/cadastrarEquipe', 'controller_equipe::cadastrarEquipe');
$routes->get('equipes/sucesso', 'controller_equipe::sucesso');
$routes->get('equipes/perfil', 'controller_equipe::perfil');
$routes->get('/equipe/pesquisar', 'controller_equipe::pesquisarEquipes');
$routes->get('equipe/solicitarEntrar/(:num)', 'controller_equipe::solicitarEntrarEquipe/$1');
$routes->get('equipe/gerenciar', 'controller_equipe::gerenciarEquipe');
$routes->post('/equipe/aprovar', 'controller_equipe::aprovar');
$routes->get('/partidas/listar', 'controller_partida::listarPartidas');
$routes->get('/partidas/criar', 'controller_partida::ver');
$routes->post('/partidas/criar', 'controller_partida::criarPartida');
$routes->get('partidas/entrar/(:num)', 'controller_partida::entrarPartida/$1');
$routes->get('/partidas/visualizar/(:num)', 'controller_partida::visualizarPartida/$1');
$routes->get('/partidas/finalizar/(:num)', 'controller_partida::finalizarPartida/$1');
$routes->get('equipe/excluir-participante/(:num)', 'controller_equipe::excluirParticipante/$1');
$routes->post('reset-password', 'controller_login::resetPassword', ['as' => 'reset-password']);
$routes->get('reset-password', 'controller_login::resetPassword');
$routes->get('partidas/minhas', 'controller_partida::minhasPartidas');
$routes->get('sobre-nos', 'Home_controller::sobrenos');

$routes->get('equipe/ver-perfil/(:num)', 'controller_equipe::verPerfil/$1');









/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
