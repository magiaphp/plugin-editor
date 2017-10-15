# Editor

Actualizar la base de datos 


```
INSERT INTO `_paginas` (`id`, `pagina`) VALUES (NULL, 'editor'); 

INSERT INTO `_permisos` (`id`, `grupo`, `pagina`, `permiso`) VALUES (NULL, 'root', 'editor', '1111'); 


INSERT INTO `_menu` (`id`, `ubicacion`, `padre`, `label`, `url`, `icono`, `orden`) VALUES (NULL, 'top', 'gestion', 'editor', '?p=editor', '', '0'); 
```
