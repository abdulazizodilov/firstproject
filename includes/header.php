<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tahliliyat</title>
    <script src="/js/script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/style2.css">
</head>

<body>

    <?php require('./includes/theme.php') ?>
    <header data-bs-theme="dark">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid"> <a class="navbar-brand" href="index.php">TAHLILIYAT</a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item"> <a class="nav-link" href="/index.php">Bosh Sahifa</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="/blog.php">Postlar</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="/aboutme.php">Biz haqimizda</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="/adminpanel.php">Admin Panel</a> </li>
                    </ul>

                    <form class="d-flex" role="search"> 
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> 
                        <button class="btn btn-outline-danger" type="submit">Search</button> 
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main>