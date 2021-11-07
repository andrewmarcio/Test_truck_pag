<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://truckpag.com.br/img/logo-fundo-escuro.png" width="400"></a></p>

<p align="center">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## - Passos para instalação
Após executar as migrations, para adicionar as cidades de seu estado a sua base de dados deverá ser usado o comando:
``` 
    php artisan cities:get {sigla de seu estado}
```

# - Rotas
#### Cidades
- GET - BASE_PACH/api/v1/cities
- GET - BASE_PACH/api/v1/cities/{id}

#### Endereço
- GET, POST - BASE_PATH/api/v1/addresses
- GET, PUT, DELETE - BASE_PATH/api/v1/addresses/{id}
#### Corpo da requisição para registro e atualização de endereço
```Json
    {
        "street_name", 
        "number",
        "neighborhood", 
        "city_id"
    }
```
