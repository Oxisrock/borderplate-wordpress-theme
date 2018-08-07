# WordPress con Gulp
## Tema de Wordpress apoyando con Gulp

JavaScript es un robusto lenguaje de programación que puede ser aplicado a un documento HTML y usado para crear interactividad dinámica en los sitios web. Fue inventado por Brendan Eich, co-fundador del proyecto Mozilla, Mozilla Foundation y la Corporación Mozilla .

### Herramientas utilizadas
* HTML5
* CSS3
* JS
* Bootstrap 3
* Font Awesome
* **Gulp** (Automatización de tareas)
	- css-mqpacker: para unificar las media-queries de nuestro proyecto, lo cual es muy útil para no tener código repetido en nuestro fichero css final.
	- rucksack-css: crea una tipografía fluida automática con una nueva propiedad responsive en font-size.

* **Postcss** (gulp-postcss para procesamiento de CSS)
	- postcss-mixins: para reutilizar estilos de CSS.
	- postcss-import: para importar archivos CSS dentro de otros archivos CSS. Debemos tener cuidado de no hacer “require” usando la palabra reservada “import” (la cual es usada por JS), para este caso usamos: atImport.
	- postcss-nested: extienden la sintaxis de CSS; similar a SASS y Stylus, cómo por ejemplo, la posibilidad de anidar clases.
	- postcss-cssnext: es un complemento que ayuda a utilizar la última sintaxis de CSS en la actualidad. Transforma las nuevas especificaciones de CSS en CSS más compatibles para que no tenga que esperar al soporte del navegador. 
	- csswring: Es un minificador de CSS para PostCSS. Es importante que vaya al último para que no tenga conflictos. 

### Equipo
* [Enrique J. Valerio G. (Diseñador Frontend)](https://github.com/Caballero73 "Enrique Valerio - Diseñador Frontend")