<header class="navbar-header">

    <section class="navbar-header-section-up">

        <span class="material-icons">
            email
        </span>
        <label>frceragon@gmail.com</label>
        <a class="navbar-up-responsive-willberemoved" href="#" style="margin-left: 20px;">Instagram</a>
        <a class="navbar-up-responsive-willberemoved" href="#">YouTube</a>
        <a class="navbar-up-responsive-willberemoved" href="#">Twitter</a>
        <a class="navbar-up-responsive-willberemoved" href="#" style="margin-right: 0px;">LinkedIn</a>

    </section>

    <section id="navbar-header-section-down" class="navbar-header-section-down">

        <div class="navbar-header-section-down-img">
            <img src="images/eragon_transparent.png" alt="Eragon Logo">
        </div>

        <div class="navbar-header-section-down-nav">

            <button id="navbarResponsiveOpen" style="text-decoration: none;" class="navbar-dropdown-button navbar-content-extra-margin navbar-responsive-open">
                <span class="material-icons">
                    menu
                </span>
            </button>

            <a href="index.php" style="text-decoration: none;" class="navbar-dropdown-button navbar-content-extra-margin navbar-up-responsive-willberemoved">
                <span class="material-icons">
                    home
                </span>
            </a>

            <div id="navbar-dropdown" class="navbar-dropdown navbar-content-extra-margin">
                <button class="navbar-dropdown-button">FRC</button>
                <div class="navbar-dropdown-content">
                    <a href="#">FRC Nedir</a>
                    <a href="#">Takımımız</a>
                    <a href="#">Çalışmalar</a>
                    <a href="#">Sponsorluk Dosyası</a>
                </div>
            </div>

            <div id="navbar-dropdown" class="navbar-dropdown navbar-content-extra-margin">
                <button class="navbar-dropdown-button">TÜBİTAK</button>
                <div class="navbar-dropdown-content">
                    <a href="#">A</a>
                    <a href="#">A</a>
                    <a href="#">A</a>
                    <a href="#">A</a>
                </div>
            </div>

            <div id="navbar-dropdown" class="navbar-dropdown navbar-content-extra-margin">
                <button class="navbar-dropdown-button">TEKNOFEST</button>
                <div class="navbar-dropdown-content">
                    <a href="#">A</a>
                    <a href="#">A</a>
                    <a href="#">A</a>
                    <a href="#">A</a>
                </div>
            </div>

            <div id="navbar-dropdown" class="navbar-dropdown navbar-content-extra-margin">
                <button class="navbar-dropdown-button">İNOVASYON</button>
                <div class="navbar-dropdown-content">
                    <a href="#">A</a>
                    <a href="#">A</a>
                    <a href="#">A</a>
                    <a href="#">A</a>
                </div>
            </div>

            <div id="navbar-dropdown" class="navbar-dropdown navbar-content-extra-margin">
                <button class="navbar-dropdown-button">SPONSORLUK</button>
                <div class="navbar-dropdown-content">
                    <a href="#">A</a>
                    <a href="#">A</a>
                    <a href="#">A</a>
                    <a href="#">A</a>
                </div>
            </div>

            <div id="navbar-dropdown" class="navbar-dropdown navbar-content-extra-margin">
                <button class="navbar-dropdown-button">MEDYA</button>
                <div class="navbar-dropdown-content">
                    <a href="#">Resimler</a>
                    <a href="#">Videolar</a>
                </div>
            </div>

        </div>


    </section>

</header>

<script>

    document.getElementById('navbarResponsiveOpen').addEventListener("click", () => {
        if (document.getElementById('navbar-header-section-down').style.bottom != "0px") {
            document.getElementById('navbar-header-section-down').style.bottom = "0px";
            document.querySelectorAll('.navbar-dropdown').forEach(function(element) {
                element.style.display = "block";
            });
        } else if (document.getElementById('navbar-header-section-down').style.bottom == "0px") {
            document.querySelectorAll('.navbar-dropdown').forEach(function(element) {
                element.style.display = "none";
            });
            document.getElementById('navbar-header-section-down').style.bottom = "auto";
        }
    });

</script>