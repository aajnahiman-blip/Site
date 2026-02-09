<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">


<title>@yield('title', 'Bienvenue')</title>
    <style>

        /* A propos */

         body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #dae5f4;
            padding-top: 60px;
        }
        .card {
            border-radius: 20px;
            padding: 30px;
            max-width: 800px;
            margin: 30px auto;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            background-color: #fff;
        }
        h1 {
            color: #764ba2;
        }
        p {
            font-size: 1.1rem;
            color: #555;
        }

        /* ===== Reset ===== */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* ===== Container ===== */
.container {
    width: 90%;
    max-width: 1200px;
    margin: auto;
}

/* ===== Header ===== */
/* ===== Header ===== */
.header {
    background-color: #1e293b; /* لون داكن */
    padding: 15px 0;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
}

.header .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

/* ===== Logo ===== */
.logo-img {
    height: 100px;
    border-radius: 50%;
    border: 3px solid #f8f9f8;
    transition: transform 0.3s;
}

.logo-img:hover {
    transform: scale(1.1);
}

/* ===== Nav Links ===== */
.nav {
    display: flex;
    gap: 20px;
}

.nav a {
    color: #ffffff;
    text-decoration: none;
    font-size: 16px;
    transition: color 0.3s;
}

.nav a:hover,
.nav a.active {
    color: #cbd5e1; /* اللون الذهبي عند hover */
}

/* ===== Hamburger ===== */
.menu-toggle {
    display: none; /* يظهر فقط على الموبايل */
    flex-direction: column;
    cursor: pointer;
    gap: 5px;
}

.menu-toggle .bar {
    width: 25px;
    height: 3px;
    background-color: #ffffff;
    transition: all 0.3s;
}

/* Hamburger يتحول إلى X عند الفتح */
.menu-toggle.open .bar:nth-child(1) {
    transform: rotate(45deg) translate(5px, 5px);
}

.menu-toggle.open .bar:nth-child(2) {
    opacity: 0;
}

.menu-toggle.open .bar:nth-child(3) {
    transform: rotate(-45deg) translate(6px, -6px);
}

/* ===== Responsive ===== */
@media (max-width: 768px) {
    .nav {
        flex-direction: column;
        width: 100%;
        display: none; /* مخفية افتراضياً */
        background-color: #1e293b;
    }

    .nav.active {
        display: flex; /* تظهر عند الضغط على hamburger */
    }

    .nav a {
        margin: 10px 0;
        text-align: center;
    }

    .menu-toggle {
        display: flex; /* يظهر زر hamburger على الموبايل */
    }

    .header .container {
        flex-wrap: wrap;
    }
}
/* ===== Dropdown Categories ===== */
.nav-dropdown {
    position: relative;
}

.nav-dropdown .nav-link {
    cursor: pointer;
    color: #ffffff;
}

.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #1e293b;
    min-width: 160px;
    border-radius: 8px;
    padding: 8px 0;
    display: none;
    box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    z-index: 999;
}

.dropdown-menu li {
    list-style: none;
}

.dropdown-menu a {
    display: block;
    padding: 8px 15px;
    color: #ffffff;
    text-decoration: none;
    font-size: 15px;
}

.dropdown-menu a:hover {
    background-color: #7caeeb;
    color: #1e293b;
}

/* Desktop hover */
.nav-dropdown:hover .dropdown-menu {
    display: block;
}

/* Mobile */
@media (max-width: 768px) {
    .dropdown-menu {
        position: static;
        box-shadow: none;
        border-radius: 0;
    }

    .nav-dropdown.active .dropdown-menu {
        display: block;
    }
}


/* ===== Footer ===== */
.footer {
    background-color: #1e293b;
    color: #ffffff;
    padding: 25px 0;
    text-align: center;
}

.footer .social a {
    color: #1e293b;
    text-decoration: none;
    margin: 0 12px;
    transition: all 0.3s;
}

.footer .social a:hover {
    color: #ffffff;
}

/* ===== Welcome Section ===== */
.wil{
    background: linear-gradient(135deg, #d2dfef, #c3d6ed);
    color: #1e293b;
    border-radius: 4px;
    box-shadow: 0 12px 30px rgba(30, 41, 59, 0.25);
}

.welcome {
    background: linear-gradient(135deg, #d2dfef, #c3d6ed);
    color: #1e293b;
    padding: 100px 20px;
    border-radius: 15px;
    text-align: center;
    box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    margin-bottom: 40px;
    box-shadow: 0 12px 30px rgba(30, 41, 59, 0.25);
}

.welcome h1 {
    font-size: 48px;
    margin-bottom: 20px;
}

.welcome p {
    font-size: 20px;
    margin-bottom: 30px;
}

.welcome .btn {
    background-color: #1e293b;
    color: white;
    padding: 12px 25px;
    text-decoration: none;
    font-weight: bold;
    border-radius: 8px;
    transition: all 0.3s;
}

.welcome .btn:hover {
    background-color: #7caeeb;
    color: #1e293b;
}
.btn-custom {
    background-color: #7caeeb;
    color: #1e293b;
    
    padding: 12px 25px;
    text-decoration: none;
    font-weight: bold;
    border-radius: 8px;
    transition: all 0.3s;
    display: inline-block;
}

.btn-custom:hover {
    background-color: #1e293b;
    color: white;
    
}



    
</style>

    
</head>
<body>
    @include('Header')
    @yield('centinu')
    @include('Footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>