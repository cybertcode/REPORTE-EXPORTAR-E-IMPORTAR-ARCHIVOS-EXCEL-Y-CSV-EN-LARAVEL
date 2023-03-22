## REPORTE | IMPORTAR E IMPORTAR ARCHIVOS EXCEL Y CSV CON LARAVEL 10

<p align="center">
  <a href="" rel="noopener">
 <img width=900px  src="/filtros.png" alt="Project logo"></a>
</p>
<h3 align="center">Filtros avanzados</h3>
<p align="center">
  <a href="" rel="noopener">
 <img width=900px  src="/importar.png" alt="Project logo"></a>
</p>
<h3 align="center">Importar y Exportar</h3>

<div align="center">

[![Status](https://img.shields.io/badge/status-active-success.svg)]()
[![GitHub Issues](https://img.shields.io/github/issues/kylelobo/The-Documentation-Compendium.svg)](https://github.com/kylelobo/The-Documentation-Compendium/issues)
[![GitHub Pull Requests](https://img.shields.io/github/issues-pr/kylelobo/The-Documentation-Compendium.svg)](https://github.com/kylelobo/The-Documentation-Compendium/pulls)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](/LICENSE)

</div>

---

<p align="center"> Exportar e Importar archivos excel con laravel 10.
    <br>
</p>

## 📝 Tabla de contenido

-   [Primeros pasos](#getting_started)
-   [Uso](#usage)
-   [Contribución](../CONTRIBUTING.md)
-   [Autor](#authors)

## 🏁 Primeros pasos <a name = "getting_started"></a>

-   Seguir los siguientes pasos para levantar el proyecto

### Prerequisitos

-   es necesario conocer del stack TALL en nivel básico

```
laravel new reportes-excel
```

### Instalar

-   Seguir los siquientes pasos consecutivos

```
git clone https://gitlab.com/backend-laravel2/reportes-excel
```

## 🎈 Uso <a name="usage"></a>

-   Crear tu base de datos
-   Cambiar el driver de local a public

```
# FILESYSTEM_DISK=public
```

-   En el terminal

```
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan serve
npm run dev
```

## ✍️ Autor <a name = "authors"></a>

-   [@cybert22](https://gitlab.com/cybert22) - Programando o debbugeando

See also the list of [contributors](https://github.com/kylelobo/The-Documentation-Compendium/contributors) who participated in this project.

-   Hat tip to anyone whose code was used
-   Inspiration
-   References
