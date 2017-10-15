# Editor

Ve a 

```
cd /var/www/html/latino-editor-en-linea/gestion
```

alli haces un clone del plugin, nol olvides de renombrar el plugin

```
git clone https://github.com/magiaphp/plugin-editor.git editor
```

Ahora agregalo como submodulo 

```
git submodule add git://github.com/magiaphp/plugin-editor.git editor
```

Listo, ahora a cada vez que desde la raiz del sitio hagas un 

```
git submodule update --init --recursive
```

Se actualizara con la versión más reciente del editor




## Actualizar la base de datos 


```
INSERT INTO `_paginas` (`id`, `pagina`) VALUES (NULL, 'editor'); 

INSERT INTO `_permisos` (`id`, `grupo`, `pagina`, `permiso`) VALUES (NULL, 'root', 'editor', '1111'); 


INSERT INTO `_menu` (`id`, `ubicacion`, `padre`, `label`, `url`, `icono`, `orden`) VALUES (NULL, 'top', 'gestion', 'editor', '?p=editor', '', '0'); 
```
