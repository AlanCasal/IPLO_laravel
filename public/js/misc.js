(() => {
    $(document).ready(() => {

        /////////////////////////// Botón Ir Al Inicio ///////////////////////////
        $('#top').click(() => {
            $('html, body').animate({scrollTop: 0}, 700);
        });

        /////////////////////////// Parallax ///////////////////////////

        $(window).scroll(() => { //when the window is scrolling, do stuff

            let windowTop = $(window).scrollTop(); // capture the current position of the window

            // $("header h1, header p, header h5").css({
            //     "opacity": 1 - (windowTop / 700)
            // });

            $("header").css("background-position-y", windowTop / 3); //shift the header background slowly. try a negative windowTop or multiply instead of divide
            // console.log(windowTop);
        });

    })
})();