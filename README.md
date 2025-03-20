## How to run:

1. Clone the repository
```bash
git https://github.com/Obada-Fa/TLE-2-T11.git
```

2. Navigate to the created directory
```bash
cd TLE2-2-T11
```

3. Install dependencies
```bash
npm install
php artisan install
```

4. Run migrations
```bash
php artisan migrate
```

5. Run project with artisan serve for development
```bash
php artisan serve
```

## Database migrations:
Create a new migration
```bash
php artisan make:migration create_name_table --create=name
```

Run Migrations
```bash
php artisan migrate
```

Migrate fresh
```bash
php artisan migrate:fresh
```

## Endpoints V2
| HTTP Method  | Endpoint                           | Controller & Action                                | Required Headers | Content-Type       | Accept            | GET Parameters | Body            | Response            |
|-------------|-----------------------------------|---------------------------------------------------|------------------|--------------------|------------------|---------------|----------------|----------------------|
| GET | HEAD  | api/api-keys                      | ApiKeyController@list                            | -                | -                  | -                | -              | API keys list       |
| DELETE      | api/api-keys/{id}                 | ApiKeyController@revoke                          | -                | -                  | -                | -              | API key revoked     |
| POST        | api/generate-api-key             | ApiKeyController@generate                        | -                | application/json   | application/json  | -              | -                | API key created      |
| POST        | api/login                        | Api\V1\LoginController@apiLogin                 | -                | application/json   | application/json  | -              | email, password   | Token               |
| GET | HEAD  | api/protected-resource           | -                                               | Authorization    | application/json   | application/json  | -              | -                | Protected data       |
| GET | HEAD  | api/v1/assignments               | Api\V1\AssignmentController@index               | Authorization    | application/json   | application/json  | -              | -                | Assignments list     |
| POST        | api/v1/assignments               | Api\V1\AssignmentController@store               | Authorization    | application/json   | application/json  | -              | Assignment data   | Created assignment   |
| GET | HEAD  | api/v1/assignments/{assignment}  | Api\V1\AssignmentController@show                | Authorization    | application/json   | application/json  | assignment ID  | -                | Assignment details   |
| PUT | PATCH | api/v1/assignments/{assignment}  | Api\V1\AssignmentController@update              | Authorization    | application/json   | application/json  | assignment ID  | Updated data    | Updated assignment   |
| DELETE      | api/v1/assignments/{assignment}  | Api\V1\AssignmentController@destroy             | Authorization    | -                  | application/json  | assignment ID  | -                | Deleted assignment   |
| GET | HEAD  | api/v1/categories               | Api\V1\CategoriesController@index               | Authorization    | application/json   | application/json  | -              | -                | Categories list      |
| POST        | api/v1/categories               | Api\V1\CategoriesController@store               | Authorization    | application/json   | application/json  | -              | Category data    | Created category     |
| GET | HEAD  | api/v1/categories/{category}    | Api\V1\CategoriesController@show                | Authorization    | application/json   | application/json  | category ID    | -                | Category details     |
| PUT | PATCH | api/v1/categories/{category}    | Api\V1\CategoriesController@update              | Authorization    | application/json   | application/json  | category ID    | Updated data    | Updated category     |
| DELETE      | api/v1/categories/{category}    | Api\V1\CategoriesController@destroy             | Authorization    | -                  | application/json  | category ID    | -                | Deleted category     |
| GET | HEAD  | api/v1/favorites                | Api\V1\FavoritesController@index                | Authorization    | application/json   | application/json  | -              | -                | Favorites list       |
| POST        | api/v1/favorites                | Api\V1\FavoritesController@store                | Authorization    | application/json   | application/json  | -              | Favorite data   | Created favorite     |
| GET | HEAD  | api/v1/favorites/{favorite}     | Api\V1\FavoritesController@show                 | Authorization    | application/json   | application/json  | favorite ID    | -                | Favorite details     |
| PUT | PATCH | api/v1/favorites/{favorite}     | Api\V1\FavoritesController@update               | Authorization    | application/json   | application/json  | favorite ID    | Updated data    | Updated favorite     |
| DELETE      | api/v1/favorites/{favorite}     | Api\V1\FavoritesController@destroy              | Authorization    | -                  | application/json  | favorite ID    | -                | Deleted favorite     |
| GET | HEAD  | api/v1/lessons                  | Api\V1\LessonsController@index                  | Authorization    | application/json   | application/json  | -              | -                | Lessons list        |
| POST        | api/v1/lessons                  | Api\V1\LessonsController@store                  | Authorization    | application/json   | application/json  | -              | Lesson data    | Created lesson      |
| GET | HEAD  | api/v1/lessons/{lesson}         | Api\V1\LessonsController@show                   | Authorization    | application/json   | application/json  | lesson ID      | -                | Lesson details      |
| PUT | PATCH | api/v1/lessons/{lesson}         | Api\V1\LessonsController@update                 | Authorization    | application/json   | application/json  | lesson ID      | Updated data    | Updated lesson      |
| DELETE      | api/v1/lessons/{lesson}         | Api\V1\LessonsController@destroy                | Authorization    | -                  | application/json  | lesson ID      | -                | Deleted lesson      |


## Load tests

1. Load Testing with Artillery
Install Artillery:
npm install -g artillery

Run the next command:
artillery run load-test.yml
