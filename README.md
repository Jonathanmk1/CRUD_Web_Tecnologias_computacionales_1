# Proyecto para la materia de Tecnologias computacionales instruida por el docente Gonzalo V. Chacon 

Este crud tiene como proposito registrar, buscar, actualizar y eliminar alumnos, usando un contexto el salon de clases de tecnologias computacionales y usando como nombre el de la Unidad Academica Profesional Tinsguistenco. Mas que nada, permite gestionar estudiantes, materias y notas, utilizando PHP, MySQL y Docker para la ejecución.

├── backend/
│   ├── clases/                 → Clases PHP: Estudiante, Materia, Nota
│   ├── db/                     → conexión a la base de datos y archivo SQL
│   └── controllers/            → Archivos que gestionan CRUD de estudiantes, materias y notas
│
├── frontend/
│   ├── css/                    → Estilos: log.css y bootstrap.min.css
│   ├── components/             → Fragmentos reutilizables: encabezado.php
│   └── pages/                  → Páginas visibles: index.html
│
├── login/                      → Todo lo relacionado al sistema de login
│   ├── index.php               → Vista del login (en PHP)
│   ├── validar.php             → Validación de usuario/contraseña
│   └── limpiarb.php            → Probablemente cerrar sesión o limpiar datos
│
├── docker/                     → Configuración para ejecutar con Docker
│   ├── Dockerfile
│   └── Docker-compose.yaml
│
├── .git/                       → Carpeta de Git
└── README.md                   → Descripción del proyecto


## 🚀 Cómo ejecutar el proyecto con Docker

1. Clona el repositorio:
   git clone https://github.com/Jonathanmk1/CRUD_Web_Tecnologias_computacionales_1.git 
   cd Proyecto-docker-compose

2. Ejecuta los servicios con Docker:

    docker-compose up --build
3. Accede a la aplicación:

    http://localhost:8080/login/index.php
    
# 🧠 Tecnologías utilizadas
PHP

MySQL

Docker

Bootstrap

HTML/CSS

# 🔐 Login del sistema:
http://localhost:8080/login/index.php
Usuario: "usuario_creado_por_ti"
Contraseña: "creada_por_ti"

# 🛠 phpMyAdmin:
http://localhost:8000
Servidor: db
Usuario: root
Contraseña: pass

# ✏️ Créditos
Este proyecto fue creado, organizado, mantenible y presentable por Jonathan Sanchez, Isai Rojas y Sebastian Osornio.

 
