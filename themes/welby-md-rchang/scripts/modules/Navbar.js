class Navbar {
    constructor($) {
        this.menuIcon = $(".navbar__menu-icon");
        this.menu = $(".menu");
        this.menuItems = $(".menu-item");
        this.container = $(".navbar__container");
        this.events();
    }

    events() {
        this.menuIcon.on("click", this.toggleMenu.bind(this));
    }

    toggleMenu() {
        this.menuIcon.toggleClass("navbar__menu-icon--close-x");
        this.menu.toggleClass("menu--visible");
        this.container.toggleClass("navbar__container--visible")
    }


}

export default Navbar;
