<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/* API Routes for all models */

$GLOBALS['dir'] = 'App\Http\Controllers\\';

function addControllerRoute($method, $param1, $param2, $param3)
{
    global $dir;
    return Route::$method($param1, $dir . $param2 . 'Controller@' . $param3);
}

$controllerBaseNames = [
    'AchatFournisseur', 'Categorie', 'ClientCarte', 'Commande', 'Expedition',
    'Facture', 'Fournisseur', 'Gestionnaire', 'GestionStock', 'Influenceur',
    'LigneCarte', 'LigneCommande', 'LigneFacture', 'Messagerie', 'PaieInfluenceur',
    'Photo', 'Produit', 'Tontine', 'Ville'
];

foreach ($controllerBaseNames as $index => $name) {
    $routeName = strtolower($name);

    addControllerRoute('get', '/' . $routeName, $name, 'index');
    addControllerRoute('post', '/' . $routeName, $name, 'store');
    addControllerRoute('get', '/' . $routeName . '/{id}', $name, 'show');
    addControllerRoute('put', '/' . $routeName . '/{id}', $name, 'update');
    addControllerRoute('delete', '/' . $routeName . '/{id}', $name, 'destroy');
}
