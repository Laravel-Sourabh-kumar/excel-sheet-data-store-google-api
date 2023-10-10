1. developer.google.console //Open this url and setup creadential OAuth 2.0 Client IDs and   Service Accounts

2. enable a google drive api Enabled
3.  Google Sheets API  Enabled
4. By composer install package  laravel-google-sheets 
 
5. using a file project json file storage folder 
and useing a controller to load data in the database table

Route::get('/', [GoogleSheetController::class, 'view']);
Route::get('/sheet', [GoogleSheetController::class, 'index'])->name('sheet.index'); // in this route use a store a data in to database  table google excel sheet 
