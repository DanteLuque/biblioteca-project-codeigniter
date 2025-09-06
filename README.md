# 📚 Biblioteca – CodeIgniter 4

Aplicación para la gestión de recursos bibliográficos (libros físicos y digitales), construida con **PHP 8.1+**, **CodeIgniter 4**, **MySQL** y **Bootstrap 5**.

## 🔄 Características

-   CRUD completo de recursos bibliográficos.
-   Registro de **categorías**, **subcategorías** y **editoriales**.
-   Carga de **portada (imagen)** y **recurso digital (PDF)**.
-   Manejo de estados del recurso (BUENO, REGULAR, MALO).
-   Interfaz responsiva con Bootstrap 5.

## 📅 Requisitos previos
-   🐘 PHP **8.1 o superior** (con extensiones **intl** y **mbstring** habilitadas).
-   🛠️ Composer 2.x
-   🐬 MySQL 5.7+ / MariaDB
-   📦 Servidor local (Laragon/XAMPP) o vhost apuntando a `public/`.

## 📚 Instalación
1.  Clona el repositorio y crea una rama local copiando la rama remota task4:
```bash
git clone https://github.com/DanteLuque/biblioteca-project-codeigniter.git
cd biblioteca-project-codeigniter
git checkout --track origin/task4
```

2. Instala dependencias con Composer:
```bash
composer install
```

3. Copia el archivo de entorno:
```bash
cp .env.example .env
```
4. Configura las variables de conexión en `.env`:
```bash
database.default.hostname = localhost
database.default.database = biblioteca
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.port = 3306
```
5. Crea la base de datos `biblioteca` e importa el script:
```bash
app/Database/scripts/base.sql
```
6.- Ejecuta las inserciones para las tablas de mantenimiento:
 ```bash
app/Database/scripts/inserts/categorias.sql
app/Database/scripts/inserts/subcategorias.sql
app/Database/scripts/inserts/editoriales.sql
```
## 🚀 Ejecución

Si usas Laragon, se configura un vhost automáticamente. Abre en tu navegador:
```bash
http://biblioteca-project-codeigniter.test
```
>⚠️ Si cambiaste el nombre de la carpeta después de clonar, actualiza la variable `baseURL` en `app/Config/App.php`.

## 🧭 Rutas principales
| Método | Ruta                          | Descripción                       |
|--------|-------------------------------|-----------------------------------|
| GET    | `/`                        	| Listado de recursos bibliográficos   |            
| GET    | `/crear`             		| Formulario de creación            |
| POST   | `/save_db`           		| Guardar nuevo producto            |
| GET| `/categorias`           			| Listado de categorías          |
| GET| `/subcategorias`           		| Listado de subcategorías          |

## 📁 Estructura del proyecto

danteluque-biblioteca-project-codeigniter/
```bash
danteluque-biblioteca-project-codeigniter/
├── .env.example
├── app/
│   ├── Controllers/             # Controladores (Recursos, Books, Categorías)
│   ├── Database/
│   │   ├── scripts/             # Scripts SQL
│   │   │   └── inserts/         # Datos iniciales de prueba
│   ├── Helpers/                 # Funciones helper personalizadas
│   ├── Models/                  # Modelos del proyecto
│   │   └── Mantenimiento/       # Modelos relacionados al mantenimiento
│   ├── Routes/                  # Definición de rutas adicionales
│   ├── Rules/                   # Reglas de validación personalizadas
│   ├── Validations/             # Validaciones extendidas
│   └── Views/                   # Vistas
│       ├── common/              # Componentes comunes (mensajes, etc.)
│       ├── Layouts/             # Layouts generales
│       │   └── partials/        # Header, footer, navbar
│       └── Recursos/            # Vistas CRUD de recursos
├── public/
│   ├── uploads/                 # Archivos subidos (portadas, PDFs)
└── composer.json                # Dependencias PHP
```

## 📝 Contribución

Si deseas contribuir a este proyecto:
1.  Haz un fork del repositorio
2.  Crea una rama (`git checkout -b feature/nueva-funcionalidad`)
3.  Realiza tus cambios
4.  Haz commit (`git commit -m 'Añadir nueva funcionalidad'`)
5.  Sube tus cambios (`git push origin feature/nueva-funcionalidad`)
6.  Abre un Pull Request