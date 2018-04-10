RESTful API in Lumen

cp .env.example .env

composer install

php artisan migrate


| Method | URL | Controler@method | Info | 
| --- | --- | --- | --- |
| `GET` | http://site.name/api/v1/book | BookController@index | All Books |
| `GET` | http://site.name/api/v1/book{id} | BookController@getbook | Fetch Book By id |
| `POST` | http://site.name/api/v1/book | BookController@createBook | Create a book record |
| `PUT` | http://site.name/api/v1/book{id} | BookController@updateBook | Update Book By id |
| `DELETE` | http://site.name/api/v1/book{id} | BookController@deleteBook | Delete Book By id |
