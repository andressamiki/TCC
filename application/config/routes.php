<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|

| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';


$route['recortar'] = 'Admin/recortar';
$route['visualizacao'] = 'Admin/visualizacao';
$route['imagem'] = 'Admin/home';


$route['contato'] = 'Welcome/contato';
$route['artistas'] = 'Welcome/artistas';
$route['eventos'] = 'Welcome/eventos';
$route['index'] = 'Welcome/index';
$route['login'] = 'Welcome/login';
$route['sobre'] = 'Welcome/sobre';

$route['cadastro-artista'] = 'Admin/cad_artista';
$route['cadastro-artista-formulario'] = 'Admin/artista';
$route['cadastro-categoria'] = 'Admin/cad_categoria';
$route['cadastro-evento'] = 'Admin/cad_evento';
$route['cadastro-produtor'] = 'Admin/cad_produtor';
$route['logout'] = 'Admin/logout';
$route['aprovar-artista'] = 'Admin/aprovacao';
$route['deletar/(:num)'] = 'Admin/deletar/$1';
$route['aprovar/(:num)'] = 'Admin/aprovar/$1';
$route['gerenciar-artista'] = 'Admin/gerenciarArtista';
$route['deletar-evento/(:num)/(:num)'] = 'Admin/deletarEvent/$1/$2';
$route['gerenciar-evento-id1'] = 'Admin/gerenciarEventoId';
$route['gerenciar-evento-id/(:num)'] = 'Admin/gerenciarEventoId2/$1';
$route['gerenciar-evento'] = 'Admin/gerenciarEvento';
$route['evento-excluido'] = 'Admin/sucessoexcluirevento';
$route['evento-aprovado'] = 'Admin/sucessoaproevento';



$route['eventos'] = 'Welcome/eventos';
$route['danca'] = 'Welcome/danca';
$route['teatro'] = 'Welcome/teatro';
$route['artesedesign'] = 'Welcome/artesedesign';
$route['musica'] = 'Welcome/musica';
$route['querodivulgar'] = 'Welcome/querodivulgar';
$route['formulario-artista']= 'Welcome/formartista';
$route['formulario-produtor']= 'Welcome/formprodutor';

//Artistas
$route['cadastro-evento-artista']= 'Artistas/cad_evento';
$route['eventos-cadastrados-artista']= 'Artistas/lista_evento';


