<div align="center">

<h1> REPORTE - FILTROS DINÁMICOS, IMPORTAR E IMPORTAR ARCHIVOS EXCEL Y CSV CON LARAVEL 10</h1>

[![Status](https://img.shields.io/badge/status-active-success.svg)]()
[![GitHub Issues](https://img.shields.io/github/issues/kylelobo/The-Documentation-Compendium.svg)](https://github.com/kylelobo/The-Documentation-Compendium/issues)
[![GitHub Pull Requests](https://img.shields.io/github/issues-pr/kylelobo/The-Documentation-Compendium.svg)](https://github.com/kylelobo/The-Documentation-Compendium/pulls)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](/LICENSE)

## 📖 Descripción del proyecto <a name="-descripción-del-proyecto-"></a>

<p>El proyecto consiste en: listar, fitros dinámicos, importar y exportar archivos Excel y CSV. Está desarrollado con el STACK TALL(Tailwindcss - Alpine.js - Livewire - Laravel )

## 🥇 DEMO 🥇 <a name="-demo--"></a>

</p>
</div>

<div align="center">
<p align="center">
  <a href="" rel="demo">
 <img width=900px  src="./demo.gif" alt="demo"></a>
</p>
</div>

---

<h2> 📝 <strong>Tabla de contenido</strong> </h2>

- [📖 Descripción del proyecto ](#-descripción-del-proyecto-)
- [🥇 DEMO 🥇 ](#-demo--)
- [🏁 **Requerimientos** ](#-requerimientos-)
- [🏅 **Tecnologías utilizados** ](#-tecnologías-utilizados-)
- [🚀 **Clonar** ](#-clonar-)
- [🖥️ **Uso** ](#️-uso-)
- [👨‍💻 **Desarrollador**](#-desarrollador)

## 🏁 **Requerimientos** <a name="-requerimientos-"></a>

-   Para correr la aplicación localmente, necesitarás tener instalado lo siguiente en tu máquina:

    -   PHP versión 8.1 o superior
    -   Composer
    -   MySQL
    -   Node
    -   Un servidor web (por ejemplo, Apache o Nginx

## 🏅 **Tecnologías utilizados** <a name="-tecnologías-utilizados-"></a>

-   `PHP` - Lenguaje de programación utilizado por Laravel.
-   `Laravel` - Framework PHP utilizado para desarrollar la aplicación.
-   `Livewire` - Biblioteca de Laravel para crear componentes de interfaces de usuario.
-   `Alpine.js` - Framework JavaScript para crear interactividad en el front-end.
-   `Tailwind CSS` - Framework CSS utilizado para el diseño de la interfaz.
-   `maatwebsite/excel` - Biblioteca de Laravel para gestionar archivos excel.

## 🚀 **Clonar** <a name="-clonar-"></a>

-   Clonar el repositorio

    ```
    https://github.com/cybertcode/REPORTE-EXPORTAR-E-IMPORTAR-ARCHIVOS-EXCEL-Y-CSV-EN-LARAVEL.git
    ```

## 🖥️ **Uso** <a name="-uso-"></a>

-   Ubicarse en el directorio del proyecto clonado
-   En el terminal

    ```
    composer install
    cp .env.example .env
    php artisan key:generate
    ```

-   **Crear tu base de datos**

    -   Configurar en el archivo .env

        ```
        DB_DATABASE=reportes-excel
        DB_USERNAME=root
        DB_PASSWORD=
        ```

    -   Cambiar el driver de local a public en el archivo .env

        ```
        # FILESYSTEM_DISK=public
        ```

    -   En el terminal

        ```
        php artisan migrate
        php artisan db:seed
        php artisan serve
        npm install
        npm run dev
        ```

    -   Opcional en el terminal
        ```
          php artisan storage:link
        ```

-   😎 **Para practicar**
    -   Dentro de la carpeta pública/img existe los archivos Excel y CSV
-   🔑 **Datos de acceso**
    -   Correo: **admin@admin.com**
    -   Contraseña: **admin123**

## 👨‍💻 **Desarrollador**<a name="-desarrollador"></a>

<div  align="center">

[![MKevyn](https://readme-typing-svg.demolab.com?font=Fira+Code&weight=500&size=18&pause=1&multiline=true&width=435&lines=Ing.+MKevyn+%7C+BackEnd+developer;+%7B%7B+Codeo+y+luego+existo+%7D%7D)](https://github.com/cybertcode)

[![cuenta](https://github-widgetbox.vercel.app/api/profile?username=cybertcode&data=followers,repositories,stars,commits&theme=nautilus)](https://github.com/cybertcode)

<p align="center">
  <img src="https://raw.githubusercontent.com/MartinHeinz/MartinHeinz/master/wave.gif" width="20px"> Mis redes sociales :<br/><br/>
    <a href="https://www.linkedin.com/in/marvyn-kevyn-huanca-hilario-a12699b7/"><img src="https://img.shields.io/badge/linkedin-0077B5.svg?style=for-the-badge&logo=linkedin&logoColor=white"/></a>
    <a href="https://www.facebook.com/profile.php?id=100047330599374"><img src="https://img.shields.io/badge/facebook-1D4292.svg?style=for-the-badge&logo=facebook&logoColor=white"/></a>
    <a href="https://gitlab.com/cybert22"><img src="https://img.shields.io/badge/gitlab-1D4292.svg?style=for-the-badge&logo=gitlab"/></a>
    <a href="https://www.instagram.com/mkevynhh"><img src="https://img.shields.io/badge/instagram-E4405F.svg?style=for-the-badge&logo=instagram&logoColor=white"/></a>
    <a href="https://www.twitch.tv/cybert22"><img src="https://img.shields.io/badge/twitch-9146FF.svg?style=for-the-badge&logo=twitch&logoColor=white"/></a>
    <a href="https://twitter.com/Kevyn94"><img src="https://img.shields.io/badge/twitter-1DA1F2.svg?style=for-the-badge&logo=twitter&logoColor=white"/></a>
</p>

</div>

---

</br>
<div align="center">
<p align="center"> © 2023 Cybertcode, todos los derechos Reservados. Hecho con mucho ❤️ . </p>
<p align="center">
https://www.cybertcode.com
</p>
</div>
