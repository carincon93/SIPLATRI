# Sistema para la programación de grupos y ambientes del CPIC

# Configuración de extensiones mediante Sync vscode Settings

Ir a la opción de extensiones en vscode (Ctrl+Shift+X) e instalar la siguiente extensión:

```sh
Settings sync - Author Shan Khan
```

O ir al siguiente enlace: https://marketplace.visualstudio.com/items?itemName=Shan.code-settings-sync

Configurar la extensión con el siguiente comando:

```sh
Ctrl+Shift+P y buscar: Sync Advanced Options
```

Seleccionar la siguiente opción:

```sh
Sincronización: Abrir la configuración
```

Copiar y pegar el siguiente Gist ID:

```sh
a4d97ec6f136ba1504219dceb07005ec
```

Copia y pegar el siguiente Access token o Token de acceso:

```sh
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
```

Comprombar que las siguientes opciones esten seleccionadas:

```sh
Descarga Automática
Quitar Las Extensiones De...
Sincronización de extensiones
```

Descargar archivo de configuración de vscode con alguno de los siguientes comandos:

```sh
Ctrl+Shif+P y seleccionar Sync: Download settings or Shift+Alt+D
```

Comprobar que se han instalado las siguientes extensiones:

```sh
better-comments
code-settings-sync
debugger-for-chrome
EditorConfig
laravel-blade
LiveServer
material-theme
phpdoc-comment-vscode-plugin
prettier-vscode
sass-indented
svelte-vscode
vscode-blade-formatter
vscode-great-icons
vscode-yaml
vscodeintellicode
vsliveshare
```

# Configuración inicial del proyecto

Clonar el proyecto de SIPLATRI. Aplicar los siguientes comandos:

```sh
git clone https://github.com/carincon93/siplatri-2021.git
cd siplatri-2021
```

Instalar las dependencias de composer

```sh
composer install
```

Configuración del ambiente de trabajo. Duplicar el archivo .env.example y cambiar el nombre por .env

```sh
.env.example -> .env
```

Ahora en el archivo .env copiar y pegar las siguientes líneas de configuración (Pegar en su respectivo bloque)

```sh
APP_NAME=SIPLATRI
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost/
APP_TIMEZONE="America/Bogota"
MIX_ASSET_URL=
APP_LOCALE=es

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=siplatri
DB_USERNAME=root
DB_PASSWORD=
```

Generar la APP KEY

```sh
php artisan key:generate
```

Crear symlink de la carpeta de storage en public

```sh
php artisan storage:link
```

Debe crear una base de datos en MySQL llamada sennovalab. Luego solicitar a Cristian el backup de la bases de datos e importarla.

Instalar las dependencias de NodeJS

```sh
npm install
```

Abrir la línea de comandos y ejecutar el siguiente comando para compilar los assets (Este comando se debe ejecutar siempre que se va a desarrollar)

```sh
npm run watch
```

En otra línea de comandos, ejecutar el siguiente comando para subir el servidor (Este comando se debe ejecutar siempre que se va a desarrollar)

```sh
php artisan serve
```

Por último abrir el navegador e ingresar a localhost:8000
