<header class="header">
    <div class="container">
        <div class="logo">
            <a href="/">
                <img src="{{ asset('images/logo_ai_bijoux.png') }}" 
                     alt="A💎I Bijoux" 
                     class="logo-img"
                     style="height:100px; border-radius:50%; border: 3px solid #f8f9f8;">
            </a>
        </div>

        <div class="menu-toggle" id="mobile-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>

        <nav class="nav stcky-top">
            <a class="nav-link" href="/" class="">Accueil</a>
            <a class="nav-link" href="/produits">Produits</a>
      <div class="nav-dropdown">
    <span class="nav-link">Catégories ▾</span>
    <ul class="dropdown-menu">
        <li><a href="/produits/bague">Bague</a></li>
        <li><a href="/produits/collier">Collier</a></li>
        <li><a href="/produits/montre">Montre</a></li>
        <li><a href="/produits/bracelet">Bracelet</a></li>
    </ul>
</div>


             <a class="nav-link" href="{{ route('produits.create') }}">➕Ajouter un produit</a>
            <a class="nav-link"  href="/contact">Contact</a>
            {{-- <a href="/about">A propos</a> --}}
        </nav>
    </div>

    <script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenu = document.getElementById('mobile-menu');
    const nav = document.querySelector('.nav');

    // hamburger menu
    mobileMenu.addEventListener('click', () => {
        nav.classList.toggle('active');
    });

    // dropdown categories (mobile)
    const dropdown = document.querySelector('.nav-dropdown');
    const dropdownTitle = dropdown.querySelector('.nav-link');

    dropdownTitle.addEventListener('click', function (e) {
        // باش ما يتسكرش nav فالموبايل
        e.stopPropagation();
        dropdown.classList.toggle('active');
    });
});
</script>

</header>
