# TutoriasYa

## Instalar

```
% git clone https://github.com/enlanebulosa/tutoriasya.git
% cd tutoriasya
% composer install
```

Crear un .env nuevo o copiar alguno desde los proyectos anteriores. Y luego ejecutar:

```
% php artisan key:generate
```

Generar la base de datos

```
% php artisan migrate
% php artisan db:seed
```

## Iniciar Server

```
% php artisan serve
```

## Trabajar con git

Ver el estado de la rama de trabajo
```
% git status
```
Realizar un commit

```
% git commit -a -m 'Un mensaje de commit'
```

Para el caso de que quieran ir a un commit en particular 

```
 % git checkout <numeroDelCommit>
```

Mostrar los commits recientes, comenzando por los últimos

```
 % git log
```

Eliminar una modificacion

```
% git checkout <nombreDelArchivoQModificaron>
```

Subir commit al repositorio

```
% git push
```

Incorporar cambios desde el repositorio remoto

```
% git pull
```

## Testing

```
% vendor/phpunit/phpunit/phpunit --debug
```


## Problemas con los seeds

Se deben volver a generar mediante con la herramienta artisan.
```
% php artisan make:seeder UserSeeder
% php artisan make:seeder ZonasSeeder
% php artisan make:seeder MateriasSeeder
% php artisan make:seeder UserMateriaSeeder
```
