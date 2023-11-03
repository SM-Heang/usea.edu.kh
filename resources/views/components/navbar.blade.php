<nav class="container navbar">
    <div class="nav__logo">
        <img src={{ asset("assets/logo/usea-title-1.png") }} alt="USEA LOGO">
    </div>
    <ul class="menu__links">
        <li><a href="#">Home</a></li>
        <li id="about">
            <a href="#">About <img src={{ asset("assets/nav-icon/arrow-down.svg") }} alt=""></a>
            <div class="drop__box">
                <div class="content">
                    <div class="row">
                        <ul class="mega__links">
                            <li><a href="#"><img src={{ asset("assets/nav-icon/history.png") }} alt="history"> History & Logo Meaning</a></li>
                            <li><a href="#"><img src={{ asset("assets/nav-icon/president.png") }} alt="president"> President Message</a></li>
                            <li><a href="#"><img src={{ asset("assets/nav-icon/core-value.png") }} alt="core-value"> Vision Mission & Core Value</a></li>
                            <li><a href="#"><img src={{ asset("assets/nav-icon/location.png") }} alt="location"> Location</a></li>
                        </ul>
                    </div>
                    <div class="row">
                        <ul class="mega__links">
                            <li><a href="#"><img src={{ asset("assets/nav-icon/structure.png") }} alt="structure"> University Structure</a></li>
                            <li><a href="#"><img src={{ asset("assets/nav-icon/recognition.png") }} alt="recognition"> Recognition</a></li>
                            <li><a href="#"><img src={{ asset("assets/nav-icon/event.png") }} alt="event"> Events</a></li>
                            <li><a href="#"><img src={{ asset("assets/nav-icon/faq.svg") }} alt="faq"> FAQ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </li>
        <li><a href="#">Academics <img src={{ asset("assets/nav-icon/arrow-down.svg") }} alt=""></a></li>
        <li><a href="#">Partnership</a></li>
        <li><a href="#">Research <img src={{ asset("assets/nav-icon/arrow-down.svg") }} alt=""></a></li>
    </ul>
    <span class="toggle d-none"><i class="fa-sharp fa-solid fa-bars"></i></span>
    <div class="container mobile__menu d-none">
        <ul class="hamburger__menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Academics</a></li>
            <li><a href="#">Partnership</a></li>
            <li><a href="#">Research</a></li>
        </ul>
    </div>
</nav>
