# symfony-with-bundle-stg-theme-bundle
Aplicación web simple creada con Symfony 3.4 con urls para la publicación de markup de los temas materialize y bootstrap incluidos en bundle-stg-theme-bundle.

Demo tema bootstrap: symfony-with-bundle-stg-theme-bundle/src/web/bootstrap-theme.

Demo tema materialize: symfony-with-bundle-stg-theme-bundle/src/web/materialize-theme.

Documentación del bundle: https://github.com/deimsantafe/bundle-stg-theme-bundle/blob/master/README.md

Instructivo de instalacion y configuración
==========================================

Repositorio de código fuente
----------------------------------------------------------

    git clone https://github.com/deimsantafe/symfony-with-bundle-stg-theme-bundle


Ejecutar composer install
----------------------------------

```bash
    php composer.phar install
```

Seteo de Parameters
----------------------------------

    - Configurar los parametros en el archivo app/config/parameters.yml con los datos correspondientes:

```yaml
        parameters:
            database_host: 127.0.0.1
            database_port: ~
            database_name: symfony
            database_user: root
            database_password: ~
            # You should uncomment this if you want to use pdo_sqlite
            #database_path: '%kernel.project_dir%/var/data/data.sqlite'
        
            mailer_transport: smtp
            mailer_host: 127.0.0.1
            mailer_user: ~
            mailer_password: ~
        
            # A secret key that's used to generate certain security-related tokens
            secret: ThisTokenIsNotSoSecretChangeIt
```

Comandos de publicacion de assets
----------------------------------

```bash
    - bin/console assets:install
```    


Limpiar la cache de la aplicación
-----------------------------------------------

```bash
    - bin/console ca:cl --env=dev
    - bin/console ca:cl --env=prod
```

Referencia para setear permisos en symfony
-----------------------------------------------

```bash
    http://symfony.com/doc/3.4/setup/file_permissions.html
```    