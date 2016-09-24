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
 1- agregar el cambio
```

 2- realizar el commit
% git commit -a -m 'Un mensaje de commit'
```
 3- en el caso de que quieran ir a una commit particular 

'''
 % git log    (APARECEN TODOS LOS COMMIT CON UN CODIGO) LUEGO VEN EL CODIGO DEL COMMIT AL CUAL QUIUEREN IR Y PONEN
'''


'''
 % git checkout numemeroDelCommit  
'''

eliminar una modificacion de algo que no quieren modificar

'''
% git checkout nombreDelArchivoQModificaron     (esto es la con consola github) 
'''


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
