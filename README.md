# SGFisio
Sistema de Gerenciamento de Clínica de Fisioterapia

## Descrição
Protótipo de sistema de gerenciamento de agendas de atendimento de clínica de fisioterapia. 

## Configuração

Configurar base de dados no .env.
```
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```
## Instalação

```bash
composer install
php artisan vendor:publish --provider="JeroenNoten\LaravelAdminLte\ServiceProvider" --tag=assets
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

## Ferramentas

* [Laravel 5.8](https://laravel.com/docs/5.8)
* [Laravel-AdminLTE](https://github.com/jeroennoten/Laravel-AdminLTE)
* [Laravel 5 form builder](https://github.com/kristijanhusak/laravel-form-builder)
