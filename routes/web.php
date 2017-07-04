<?php









/*
-----------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return redirect('/login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');





Route::post('/ajouterFormateur', 'FormateurController@ajoutFormateur')->name('ajouterFormateur');

Route::get('/formCivil', 'FormCivilController@index');

Route::group(['middleware'=>'admin'], function () {
  Route::get('/admin', 'AdminController@index')->name('admin');
  Route::get('/admin/listFormateurs', 'FormateurController@listFormateurs')->name('listFormateurs');
  Route::get('/admin/addFormateur', 'FormateurController@addFormateur')->name('addFormateur');
  Route::get('/admin/formateurDetails', 'FormateurController@formateurDetails')->name('formateurDetails');
  Route::get('/admin/formateurUpdate', 'FormateurController@formateurUpdate')->name('formateurUpdate');
  Route::get('/admin/formateurDelete', 'FormateurController@formateurDelete')->name('formateurDelete');
}
);

Route::group(['middleware'=>'candidat'], function () {
  Route::get('/candidat', 'CandidateController@index')->name('candidat');
  Route::get('/formEc', 'FormCivilController@index');
  Route::post('/post/formEc', 'FormCivilController@createformCivil')->name('formEc');
  Route::get('/formcandidature', 'FormCivilController@formcandidat')->name('formCandidatureCandidat');
  Route::post('/post/formCandid', 'FormCivilController@createformCandid')->name('formCandid');
  Route::get('/confirm', 'HomeController@confirmpage')->name('GG');
}
);

Route::group(['middleware'=>'formateur'], function () {
  Route::get('/listeCandidats', 'listeCandidatsController@getCandidats');
}
);
