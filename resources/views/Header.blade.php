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
            <a class="nav-link" href="/produits/bague">Bague</a>
            <a class="nav-link" href="/produits/collier">Collier</a>
             <a class="nav-link" href="/produits/montre">Montre</a>
             <a class="nav-link" href="/produits/bracelet">Bracelet</a>
           
             <a class="nav-link" href="{{ route('produits.create') }}">➕Ajouter un produit</a>
            <a class="nav-link"  href="/contact">Contact</a>
            {{-- <a href="/about">A propos</a> --}}
        </nav>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            const nav = document.querySelector('.nav');

            mobileMenu.addEventListener('click', () => {
                nav.classList.toggle('active');
            });
        });
    </script>
</header>
