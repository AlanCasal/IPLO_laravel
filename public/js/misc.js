(() => {
    $(document).ready(() => {

        /////////////////////////// Botón Ir Al Inicio ///////////////////////////
        $('#top').click(() => {
            $('html, body').animate({scrollTop: 0}, 400);
        });

        /////////////////////////// Parallax ///////////////////////////
        // $(window).scroll(() => { //when the window is scrolling, do stuff
        //
        //     let windowTop = $(window).scrollTop(); //capture the current position of the window
        //
        //     $("#header h1").css({ //make the H1 get more transparent
        //         "opacity": 1 - (windowTop / 600)
        //     });
        //
        //     $("#header h5").css({ //make the H2 get more transparent
        //         "opacity": 1 - (windowTop / 600)
        //     });
        //
        //     $("#header").css("background-position-y", windowTop / -5); //shift the header background slowly. try a negative windowTop or multiply instead of divide
        //     // console.log(windowTop);
        // });

    })
})();