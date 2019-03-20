//Inicializacion de componentes de Materialize en JavaScript
document.addEventListener('DOMContentLoaded', function() {
    //sidenav
    var elemento1 = document.querySelectorAll('.sidenav');
    var instancia1 = M.Sidenav.init(elemento1);
    //parallax
    var elemento2 = document.querySelectorAll('.parallax');
    var instancia2 = M.Parallax.init(elemento2);
    //collapsible
    var elemento3 = document.querySelectorAll('.collapsible');
    var instancia3 = M.Collapsible.init(elemento3);
    //modal
    var elemento4 = document.querySelectorAll('.modal');
    var instancia4 = M.Modal.init(elemento4);
    //floating button
    var elemento5 = document.querySelectorAll('.fixed-action-btn');
    var instancia5 = M.FloatingActionButton.init(elemento5, {
        //options
        hoverEnabled: false
    });
    //galeria slider
    var elemento6 = document.querySelectorAll('.slider');
    var instancia6 = M.Slider.init(elemento6, {
        //options
        indicators: false,
        interval: 3000, //seconds
        height: 425
    });
    //dropdown
    var elemento7 = document.querySelectorAll('.dropdown-trigger');
    var instancia7 = M.Dropdown.init(elemento7);
    //scrollspy
    var elemento8 = document.querySelectorAll('.scrollspy');
    var instancia8 = M.ScrollSpy.init(elemento8);
    //tabs
    var elemento9 = document.querySelectorAll('.tabs');
    var instancia9 = M.Tabs.init(elemento9);
    //select
    var elemento10 = document.querySelectorAll('select');
    var instancia10 = M.FormSelect.init(elemento10);
});