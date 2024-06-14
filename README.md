## Sistema Web de Citas Médicas - Consultorio Salud y Vida Yantzaza

**Descripción:**

- Este proyecto es un sistema web de citas médicas diseñado para el consultorio Salud y Vida Yantzaza. El sistema permite la gestión eficiente de citas médicas, pacientes, médicos y áreas médicas.

**Características:**
- Login con roles: Acceso al sistema con roles de administrador, médico y paciente.
- Registro de Citas: Gestión de citas médicas con opción de creación, modificación y eliminación.
- Registro de Pacientes: Almacenamiento de información detallada de los pacientes.
- Registro de Médicos: Gestión de información de los médicos que forman parte del consultorio.
- Registro de Áreas Médicas: Administración de las diferentes áreas médicas disponibles en el consultorio.
- Consulta de Citas: Visualización y búsqueda de citas médicas programadas.

**Requisitos de Instalación:**

Antes de comenzar, asegúrese de tener los siguientes requisitos previos instalados:
- XAMPP: Incluye Apache, MySQL y PHP.

**Instrucciones de Instalación**
1. Descargar e instalar XAMPP:

- Descargue e instale XAMPP desde [aquí.](https://www.apachefriends.org/download.html)
- Siga las instrucciones de instalación y asegúrese de que Apache y MySQL estén activados desde el panel de control de XAMPP.

2. Configurar el Proyecto:

- Descargue los archivos del proyecto y colóquelos en la carpeta htdocs dentro del directorio de instalación de XAMPP (por ejemplo, C:\xampp\htdocs en Windows o /opt/lampp/htdocs en Linux).
  
3. Configurar la Base de Datos:

- Abra el panel de control de XAMPP y inicie el servidor MySQL.
- Acceda a phpMyAdmin en su navegador web visitando http://localhost/phpmyadmin.
- Cree una nueva base de datos llamada proyecto_final.
- Importe el archivo de base de datos proyecto_final.sql (incluido en los archivos del proyecto) en la base de datos que acaba de crear. Puede hacer esto seleccionando la base de datos proyecto_final, y luego utilizando la opción "Importar" en phpMyAdmin para cargar el archivo SQL.

4. Configuración Adicional:

- Edite el archivo de configuración del proyecto (por ejemplo, config.php o database.php, dependiendo de la estructura del proyecto) para asegurarse de que las credenciales de la base de datos coincidan con las de su entorno de XAMPP.

## Uso del Sistema

1. Acceso al Sistema:

- Abra su navegador web y vaya a http://localhost/nombre_del_proyecto, donde nombre_del_proyecto es el nombre de la carpeta que contiene su proyecto dentro de htdocs.
  
- Inicie sesión con las credenciales proporcionadas. Dependiendo de su rol (administrador, médico o paciente), tendrá acceso a diferentes funcionalidades.

2. Funciones Principales:

- Administradores: Pueden gestionar usuarios (médicos, pacientes), áreas médicas y citas.
- Médicos: Pueden ver y gestionar sus citas y pacientes.
- Pacientes: Pueden ver y gestionar sus citas médicas.

## Previews

**- Movil**

![iPhone-13-(iOS-15)-localhost](https://github.com/Isracraxcker/RegistrodeCitas/assets/133439166/9b9cede6-c4f9-4bc8-a81f-ace2333cb9f4)



**- Web**
![Macbook-Air-localhost (1)](https://github.com/Isracraxcker/RegistrodeCitas/assets/133439166/a9aab5d3-25d2-4507-ac52-39dd7f6c7109)


## Contacto
Para preguntas o soporte, puede contactarnos en [andyisraeljaramillo@gmail.com].
