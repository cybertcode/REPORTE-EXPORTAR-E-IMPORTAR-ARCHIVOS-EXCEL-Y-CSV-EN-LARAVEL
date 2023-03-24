<div align="center">

<h1> REPORTE - FILTROS DINÁMICOS, IMPORTAR E IMPORTAR ARCHIVOS EXCEL Y CSV CON LARAVEL 10</h1>

## :point_right: Descripción del proyecto <a name = "descripcion_proyecto"></a>

<p>El proyecto consiste en listar, fitros dinámicos, importar e exportar archivos Excel y CSV. Está desarrollado con el STACK TALL(Tailwindcss - Alpine.js - Livewire - Laravel )
</p>
</div>
<div align="center">
<p align="center">
  <a href="" rel="noopener">
 <img width=900px  src="./filtros.png" alt="Project logo"></a>
</p>

## 🥇 DEMO 🥇 <a name = "demo"></a>

</br>

[![Status](https://img.shields.io/badge/status-active-success.svg)]()
[![GitHub Issues](https://img.shields.io/github/issues/kylelobo/The-Documentation-Compendium.svg)](https://github.com/kylelobo/The-Documentation-Compendium/issues)
[![GitHub Pull Requests](https://img.shields.io/github/issues-pr/kylelobo/The-Documentation-Compendium.svg)](https://github.com/kylelobo/The-Documentation-Compendium/pulls)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](/LICENSE)

</div>

---

## 📝 Tabla de contenido

-   [:point_right: Descripción del proyecto ](#point_right-descripción-del-proyecto-)
-   [🥇 DEMO 🥇 ](#-demo--)
-   [📝 Tabla de contenido](#-tabla-de-contenido)
-   [🏁 Primeros pasos ](#-primeros-pasos-)
    -   [:dart: Prerrequisitos ](#dart-prerrequisitos-)
    -   [🚀 Instalar ](#-instalar-)
    -   [🎈 Uso ](#-uso-)
-   [✍️ Autor ](#️-autor-)

## 🏁 Primeros pasos <a name = "primeros_pasos"></a>

Seguir los sucesivamente para levantar el proyecto en su servidor local.

### :dart: Prerrequisitos <a name = "prerrequisitos"></a>

-   Es necesario conocer del stack TALL en nivel básico
-   Editor de código
-   Muchas ganas de seguir aprendiendo 👍

### 🚀 Instalar <a name = "instalar"></a>

Seguir los siquientes pasos consecutivos

```
git clone https://gitlab.com/backend-laravel2/reportes-excel.git
```

### 🎈 Uso <a name="uso"></a>

-   En el terminal

    ```
    composer install
    cp .env.example .env
    php artisan key:generate
    ```

-   Crear tu base de datos
-   Cambiar los datos de usuario

    ```
    DB_DATABASE=reportes-excel
    DB_USERNAME=root
    DB_PASSWORD=
    ```

-   Cambiar el driver de local a public

    ```
    # FILESYSTEM_DISK=public
    ```

-   En el terminal
    ```
    php artisan migrate
    php artisan db:seed
    php artisan serve
    npm run dev
    ```
-   Opcional en el terminal
    ```
      php artisan storage:link
    ```
-   Para practicar
    -   Dentro de la carpeta pública/img existe los archivos Excel y CSV

## ✍️ Autor <a name = "autor"></a>

<div  align="center">

[![MKevyn](https://readme-typing-svg.demolab.com?font=Fira+Code&weight=500&size=18&pause=1&multiline=true&width=435&lines=Ing.+MKevyn+%7C+BackEnd+developer;+%7B%7B+Codeo+y+luego+existo+%7D%7D)](https://github.com/cybertcode)

[![cuenta](https://github-widgetbox.vercel.app/api/profile?username=cybertcode&data=followers,repositories,stars,commits&theme=nautilus)](https://github.com/cybertcode)

<p align="center">
  <img src="https://raw.githubusercontent.com/MartinHeinz/MartinHeinz/master/wave.gif" width="20px"> Mis redes sociales :<br/><br/>
    <a href="https://www.linkedin.com/in/marvyn-kevyn-huanca-hilario-a12699b7/"><img src="https://img.shields.io/badge/linkedin-0077B5.svg?style=for-the-badge&logo=linkedin&logoColor=white"/></a>
    <a href="https://www.instagram.com/mkevynhh"><img src="https://img.shields.io/badge/facebook-1D4292.svg?style=for-the-badge&logo=facebook&logoColor=white"/></a>
    <a href="https://gitlab.com/cybert22"><img src="https://img.shields.io/badge/gitlab-1D4292.svg?style=for-the-badge&logo=gitlab"/></a>
    <a href="https://www.instagram.com/mkevynhh"><img src="https://img.shields.io/badge/instagram-E4405F.svg?style=for-the-badge&logo=instagram&logoColor=white"/></a>
    <a href="https://www.twitch.tv/cybert22"><img src="https://img.shields.io/badge/twitch-9146FF.svg?style=for-the-badge&logo=twitch&logoColor=white"/></a>
    <a href="https://twitter.com/Kevyn94"><img src="https://img.shields.io/badge/twitter-1DA1F2.svg?style=for-the-badge&logo=twitter&logoColor=white"/></a>
</p>

</div>

---

</br>
<p align="center"> © 2022 Cybertcode, todos los derechos Reservados. Hecho con ❤️ para una web mejor. </p>
<p align="center">
https://www.cybertcode.com
</p>
