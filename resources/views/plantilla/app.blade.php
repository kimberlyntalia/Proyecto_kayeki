<!doctype html>
<html lang="es">
  <!--begin::Head-->
  <style>
/* ===============================
   TARJETA PERFIL - KAJEKI
   COLOR HOVER: #CCAF51
================================ */

/* CONTENEDOR DROPDOWN */
.dropdown-menu {
    border: none !important;
    border-radius: 16px !important;
    box-shadow: 0 12px 35px rgba(0,0,0,0.18) !important;
    padding: 0 !important;
    overflow: hidden !important;
    min-width: 240px !important;
}

/* CABECERA SUPERIOR */
.dropdown-menu .dropdown-header,
.dropdown-menu .user-header {
    background: linear-gradient(135deg, #e8dca8, #ccaf51) !important;
    color: #2f2f2f !important;
    padding: 22px !important;
    text-align: center;
    font-weight: 700;
    font-size: 17px;
}

/* ITEMS DEL MENÚ */
.dropdown-menu .dropdown-item {
    padding: 14px 20px !important;
    font-size: 15px;
    font-weight: 500;
    color: #333 !important;
    display: flex;
    align-items: center;
    gap: 10px;
    transition: all 0.25s ease-in-out;
}

/* ICONOS */
.dropdown-menu .dropdown-item i {
    font-size: 18px;
    color: #8a7a2f;
}

/* HOVER (COLOR PEDIDO) */
.dropdown-menu .dropdown-item:hover {
    background-color: #ccaf51 !important;
    color: #ffffff !important;
}

/* ICONOS EN HOVER */
.dropdown-menu .dropdown-item:hover i {
    color: #ffffff !important;
}

/* DIVISOR */
.dropdown-divider {
    margin: 0 !important;
}

/* CERRAR SESIÓN (PELIGRO) */
.dropdown-menu .dropdown-item.text-danger {
    color: #b42318 !important;
}

.dropdown-menu .dropdown-item.text-danger:hover {
    background-color: #ccaf51 !important;
    color: #ffffff !important;
}
</style>

<style>
/* ==============================
   COLORES PERSONALIZADOS KAJEKI
============================== */

/* ---------- DROPDOWN PERFIL ---------- */
.dropdown-menu .dropdown-item:hover {
    background-color: #f7d6e0 !important; /* ROSA SUAVE */
    color: #5a2d82 !important;
}

/* Texto de cerrar sesión */
.dropdown-menu .dropdown-item.text-danger {
    color: #c9184a !important;
}

.dropdown-menu .dropdown-item.text-danger:hover {
    background-color: #f7d6e0 !important;
    color: #a4133c !important;
}

/* ---------- BOTONES PERFIL / PEDIDOS ---------- */
a.btn:hover,
button.btn:hover {
    background-color: #CCAF51 !important; /* COLOR QUE PEDISTE */
    border-color: #CCAF51 !important;
    color: #fff !important;
}

/* ---------- BOTÓN ACTUALIZAR DATOS ---------- */
/* Este es el botón del perfil */
.btn-primary {
    background-color: #CCAF51 !important;
    border-color: #CCAF51 !important;
}

.btn-primary:hover {
    background-color: #b89a3e !important;
    border-color: #b89a3e !important;
}

/* ---------- TARJETAS DASHBOARD ---------- */
.card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 25px rgba(0,0,0,0.15);
}
</style>



  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Sistema</title>
    <!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="Sistema | Kajeki.com" />
    <meta name="author" content="kimberlyCode" />
    <meta
      name="description"
      content="Sistema."
    />
    <meta
      name="keywords"
      content="Sistema, KimberlyCode"
    />
    <!--end::Primary Meta Tags-->
    <!--begin::Fonts-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
      integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
      crossorigin="anonymous"
    />
    <!--end::Fonts-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css"
      integrity="sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg="
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(OverlayScrollbars)-->
    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
      integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI="
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(Bootstrap Icons)-->
    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="{{asset('css/adminlte.css')}}" />
    <!--end::Required Plugin(AdminLTE)-->
    @stack('estilos')
    <style>
/* =========================
   BOTÓN ACTUALIZAR DATOS
========================= */

/* Color normal */
.btn-primary {
    background-color: #ccaf51 !important; /* dorado/rosa */
    border-color: #ccaf51 !important;
    color: #ffffff !important;
    font-weight: 600;
    border-radius: 12px;
    padding: 10px 20px;
}

/* Hover (cuando pasas el mouse) */
.btn-primary:hover {
    background-color: #e8c86a !important; /* rosa/dorado claro */
    border-color: #e8c86a !important;
    color: #ffffff !important;
}

/* Focus (cuando haces click) */
.btn-primary:focus,
.btn-primary:active {
    background-color: #c3a63f !important;
    border-color: #c3a63f !important;
    box-shadow: 0 0 0 0.2rem rgba(204, 175, 81, 0.4) !important;
}
</style>

  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
      @include('plantilla.header')
      <!--end::Header-->
      <!--begin::Sidebar-->
      @include('plantilla.menu')
      <!--end::Sidebar-->
      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">

          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        @yield('contenido')
        <!--end::App Content-->
      </main>
      <!--end::App Main-->
      <!--begin::Footer-->
      <footer class="app-footer">
        <!--begin::To the end-->
        <div class="float-end d-none d-sm-inline">Anything you want</div>
        <!--end::To the end-->
        <!--begin::Copyright-->
        <strong>
          Copyright &copy; 2025&nbsp;
          <a href="#" class="text-decoration-none">KAJEKI</a>.
        </strong>
        All rights reserved.
        <!--end::Copyright-->
      </footer>
      <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script
      src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js"
      integrity="sha256-dghWARbRe2eLlIJ56wNB+b760ywulqK3DzZYEpsg2fQ="
      crossorigin="anonymous"
    ></script>
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
      crossorigin="anonymous"
    ></script>
    <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="{{asset('js/adminlte.js')}}"></script>
    <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script>
      const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
      const Default = {
        scrollbarTheme: 'os-theme-light',
        scrollbarAutoHide: 'leave',
        scrollbarClickScroll: true,
      };
      document.addEventListener('DOMContentLoaded', function () {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
        if (sidebarWrapper && typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== 'undefined') {
          OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
            scrollbars: {
              theme: Default.scrollbarTheme,
              autoHide: Default.scrollbarAutoHide,
              clickScroll: Default.scrollbarClickScroll,
            },
          });
        }
      });
    </script>
    <!--end::OverlayScrollbars Configure-->
    <!--end::Script-->
    @stack('scripts')
  </body>
  <!--end::Body-->
</html>
