<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\BookController;
use App\Http\Controllers\TestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/test', [TestController::class, 'showSecondMessage']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create', function () {
    return "<form method='post' action='create'>".csrf_field()."
    <input name='name' type='text' value='1234'/>
    <input type='submit' value='Submit'/>
    </form>";
});

Route::post('/create', function (Request $request) {
    dd($request->all());
});

/*
 * Books
 */
Route::get('/books/create', [BookController::class, 'create']);
Route::post('/books', [BookController::class, 'store']);

# Show the search form
Route::get('/books/search', [BookController::class, 'search']);

# Processing the search form
Route::get('/books/search-process', [BookController::class, 'searchProcess']);

Route::get('/books', [BookController::class, 'index']);
Route::get('/books/{id}', [BookController::class, 'show']);

# Update functionality
# Show the form to edit a specific book
Route::get('/books/{id}/edit', [BookController::class, 'edit']);

# Process the form to edit a specific book
Route::put('/books/{id}', [BookController::class, 'update']);

# DELETE
# Show the page to confirm deletion of a book
Route::get('/books/{id}/delete', [BookController::class, 'delete']);

# Process the deletion of a book
Route::delete('/books/{id}', [BookController::class, 'destroy']);
