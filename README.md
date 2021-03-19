**How it Work**
- rename .env-example to .env and you will find in it all the env variables needed and is set by me 
  

- Run in parent directory command (docker-compose up -d --build)


- you can test APIs by go to client app (such postman) and run
  * http://localhost:8060/api/v1/users
  * http://localhost:8060/api/v1/users?provider=DataProviderX
  * http://localhost:8060/api/v1/users?statusCode=authorised
  * http://localhost:8060/api/v1/users?balanceMin=10&balanceMax=100





**How if you need to add a new Provider**
- Add the json file to ("storage/JsonDataSource")
- Add model for this source in (src/Package/Infrastructure/Models/) for example:
  src/Package/Infrastructure/Models/DataProviderZ.php
- Then add to DataProviderZ.php the required params such as DataProviderX.php and DataProviderY.php
- Then you should Register DataProviderZ in (src/Package/Application/config/DataProviders.php)



**How Can I run tests with coverage**

Run (XDEBUG_MODE=coverage ./vendor/bin/phpunit --coverage-text)


**Important Note**

All the logic and tests directory in ./Package folder
