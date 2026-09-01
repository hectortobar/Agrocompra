<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Café Aroma</title>

    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>

<body class="bg-light">

    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">

            <!-- Nombre de la página -->
            <a class="navbar-brand fw-bold" href="#">
                🍎 Agrocompra
            </a>

            <!-- Botón para dispositivos móviles -->
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menuPrincipal"
                aria-controls="menuPrincipal"
                aria-expanded="false"
                aria-label="Mostrar menú"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Opciones del menú -->
            <div
                class="collapse navbar-collapse"
                id="menuPrincipal"
            >
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link active" href="#inicio">
                            Inicio
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#productos">
                            Productos
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#nosotros">
                            Nosotros
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">
                            Contacto
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Sección de bienvenida -->
    <header
        id="inicio"
       class="bg-success text-white py-5"
    >
        <div class="container py-5">
            <div class="row align-items-center">

                <div class="col-lg-7">
                    <span class="badge bg-success text-white mb-3">
                        Productos del campo colombiano
                    </span>

                    <h1 class="display-3 fw-bold">
                        Del campo a tu meza 
                    </h1>

                    <p class="lead">
                        "Descubre una selección de productos del campo
                         con el origen, la frescura y el 
                         sabor tradicional de nuestra tierra."
                    </p>

                    <a
                        href="#productos"
                        class="btn btn-warning btn-lg mt-3"
                    >
                        Ver nuestros productos
                    </a>
                </div>

                <div class="col-lg-5 text-center mt-4 mt-lg-0">
                    <span class="display-1">
                        
                    </span>

                    <h2 class="mt-3">
                        del campo a tu meza
                    </h2>
                </div>

            </div>
        </div>
    </header>

    <!-- Sección de productos -->
    <section id="productos" class="py-5">
        <div class="container">

            <div class="text-center mb-5">
                <h2 class="fw-bold">
                    Nuestros productos
                </h2>

                <p class="text-secondary">
                    Selecciona tu producto.
                </p>
            </div>

            <div class="row g-4">

                <!-- Tarjeta 1 -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0">

                        <div class="ratio ratio-4x3">
                            <img
                                src="https://solofruver.com/wp-content/uploads/2025/09/papa-lavada.jpg"
                                class="card-img-top object-fit-cover"
                                alt="Taza de café espresso"
                            >
                        </div>

                        <div class="card-body d-flex flex-column">
                            <span class="badge bg-danger align-self-start mb-2">
                                papa
                            </span>

                            <h3 class="card-title h5">
                                capiro
                            </h3>

                            <p class="card-text text-secondary">
                                la mejor papa de Nariño.
                            </p>

                            <div class="mt-auto">
                                <p class="fs-5 fw-bold text-success">
                                    $50.000
                                </p>

                                <button class="btn btn-dark w-100">
                                    Seleccionar
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Tarjeta 2 -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0">

                        <div class="ratio ratio-4x3">
                            <img
                                src="https://bluxus.com/wp-content/uploads/2025/01/Descubre-el-Mejor-Precio-del-Frijol-Cargamanto-Rojo-en-Colombia.webp"
                                class="card-img-top object-fit-cover"
                                alt="Taza de café capuchino"
                            >
                        </div>

                        <div class="card-body d-flex flex-column">
                            <span class="badge bg-warning text-dark align-self-start mb-2">
                                Frijol 
                            </span>

                            <h3 class="card-title h5">
                                lima
                            </h3>

                            <p class="card-text text-secondary">
                               Cosechas seleccionadas con el sabor auténtico de nuestra tierra.
                            </p>

                            <div class="mt-auto">
                                <p class="fs-5 fw-bold text-success">
                                    $100.000
                                </p>

                                <button class="btn btn-dark w-100">
                                    Seleccionar
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Tarjeta 3 -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0">

                        <div class="ratio ratio-4x3">
                            <img
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQoapBh_kAHeudbFmeqyfft5HImXcwbd5HR6mkIo2EEyYVcnf7G6oHP8yE&s=10"
                                class="card-img-top object-fit-cover"
                                alt="Taza de café latte"
                            >
                        </div>

                        <div class="card-body d-flex flex-column">
                            <span class="badge bg-info text-dark align-self-start mb-2">
                                maiz 
                            </span>

                            <h3 class="card-title h5">
                                capio 
                            </h3>

                            <p class="card-text text-secondary">
                                Grano blanco y harinoso, cultivado con el orgullo de nuestra tierra.
                            </p>

                            <div class="mt-auto">
                                <p class="fs-5 fw-bold text-success">
                                    $70.000
                                </p>

                                <button class="btn btn-dark w-100">
                                    Seleccionar
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Tarjeta 4 -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0">

                        <div class="ratio ratio-4x3">
                            <img
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCeZPUQwD5QmPmQLDrXnvjcGgM2Z4v9xWpv3kGFv3ANXJMt3H14JA0E1M&s=10"
                                class="card-img-top object-fit-cover"
                                alt="Vaso de café frío"
                            >
                        </div>

                        <div class="card-body d-flex flex-column">
                            <span class="badge bg-primary align-self-start mb-2">
                                Naranja
                            </span>

                            <h3 class="card-title h5">
                                Tangelo
                            </h3>

                            <p class="card-text text-secondary">
                                El balance perfecto entre la dulzura de la mandarina y la jugosidad del campo.
                            </p>

                            <div class="mt-auto">
                                <p class="fs-5 fw-bold text-success">
                                    $40.000
                                </p>

                                <button class="btn btn-dark w-100">
                                    Seleccionar
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Sección nosotros -->
    <section id="nosotros" class="bg-white py-5">
        <div class="container">
            <div class="row align-items-center g-4">

                <div class="col-md-6">
                    <span class="display-1">
                        🌱
                    </span>

                    <h2 class="fw-bold mt-3">
                        Café cultivado con tradición
                    </h2>

                    <p class="text-secondary">
                        Trabajamos con granos seleccionados y productores
                        locales para ofrecer una experiencia auténtica,
                        fresca y llena de aroma.
                    </p>
                </div>

                <div class="col-md-6">
                    <div class="card border-0 bg-warning-subtle">
                        <div class="card-body p-4">

                            <h3 class="h5 fw-bold">
                                ¿Por qué elegirnos?
                            </h3>

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item bg-transparent">
                                    ✓ Granos de origen colombiano
                                </li>

                                <li class="list-group-item bg-transparent">
                                    ✓ Preparaciones artesanales
                                </li>

                                <li class="list-group-item bg-transparent">
                                    ✓ Productos frescos
                                </li>

                                <li class="list-group-item bg-transparent">
                                    ✓ Atención cercana y amable
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Sección de contacto -->
    <section id="contacto" class="py-5">
        <div class="container text-center">

            <h2 class="fw-bold">
                Visítanos
            </h2>

            <p class="text-secondary">
                Disfruta una buena conversación acompañada de una
                excelente taza de café.
            </p>

            <div class="row justify-content-center mt-4">

                <div class="col-md-4 mb-3">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <div class="fs-1">📍</div>
                            <h3 class="h5">Dirección</h3>
                            <p class="mb-0">San Juan de Pasto, Nariño</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <div class="fs-1">🕐</div>
                            <h3 class="h5">Horario</h3>
                            <p class="mb-0">Lunes a sábado, 8:00 a. m.–8:00 p. m.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <div class="fs-1">📞</div>
                            <h3 class="h5">Teléfono</h3>
                            <p class="mb-0">300 000 0000</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Pie de página -->
    <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <p class="mb-1 fw-bold">
                ☕ Café Aroma
            </p>

            <p class="mb-0 text-white-50">
                Plantilla educativa desarrollada con HTML y Bootstrap.
            </p>
        </div>
    </footer>

    <!-- Bootstrap JavaScript -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script>

</body>
</html>