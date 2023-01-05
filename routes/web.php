<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{InfoController};
// use App\Http\Controllers\Auth\{LoginController, RegisterController};

Route::get('/',  [InfoController::class, "PreHome"])->name('Web.PreHomeInfo');
Route::get('/home',  [InfoController::class, "Home"])->name('Web.HomeInfo');
Route::get('/business',  [InfoController::class, "Business"])->name('Web.BusinessInfo');
Route::get('/users',  [InfoController::class, "Users"])->name('Web.UsersInfo');
Route::get('/memberships',  [InfoController::class, "Memberships"])->name('Web.MembershipsInfo');
Route::get('/contact',  [InfoController::class, "Contact"])->name('Web.ContactInfo');
// Route::get('/team',  [InfoController::class, "Team"])->name('Web.TeamInfo');
// Route::get('/frequentQuestions',  [InfoController::class, "FrequentQuestions"])->name('Web.FrequentQuestionsInfo');
// Route::get('/blog',  [InfoController::class, "Blog"])->name('Web.BlogInfo');
// Route::get('/influToken',  [InfoController::class, "InfluToken"])->name('Web.InfluTokenInfo');
// Route::get('/ambassador',  [InfoController::class, "Ambassador"])->name('Web.AmbassadorInfo');

// Route::get('login', [LoginController::class, "showLoginForm"])->name('login');
// Route::post('login',[LoginController::class, "login"]);
// Route::post('logout',[LoginController::class, "logout"])->name('logout');

// Route::group(['middleware' => ['permission:AdminRoutes']], function () {
//     Route::get('/admin', [AdminController::class, 'Home'])->name('Web.HomeAdmins');

//     Route::get('/usersAdmin', [AdminController::class, 'UsuariosIndex'])->name('Web.UsersAdmins');
//     Route::get('/vergueriasAdmin', [AdminController::class, 'VergueriasIndex'])->name('Web.VergueriasAdmins');
//     Route::get('/register', [RegisterController::class, "showRegistrationForm"])->name('register');
//     Route::post('/register', [RegisterController::class, "register"]);

//     Route::get('/contenidoAdmin', [AdminController::class, 'ContenidoIndex'])->name('Web.ContenidoAdmins');
//     Route::get('/pedidosAdmin', [AdminController::class, 'PedidosIndex'])->name('Web.PedidosAdmins');
// });

