## TutoriasYa

## Instalar

```
% git clone https://github.com/enlanebulosa/tutoriasya.git
% cd tutoriasya
% composer install
%
# Se debe generar un .env nuevo o haber copiado este desde los proyectos anteriores.
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
