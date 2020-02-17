let clock = document.querySelector( "#clock" );
let page = document.querySelector( "body" );
let slides = document.getElementsByClassName( "slide" );
let slide = 0;

slides[ slide ].style.opacity = "1";

function formatTime( time ) {

    let hours = time.getHours() < 10 ? "0" + time.getHours() : time.getHours();
    let minutes = time.getMinutes() < 10 ? "0" + time.getMinutes() : time.getMinutes();
    let seconds = time.getSeconds() < 10 ? "0" + time.getSeconds() : time.getSeconds();

    clock.innerHTML = hours + ":" + minutes + ":" + seconds;

}

formatTime( new Date() );

window.setInterval( function() {

    formatTime( new Date() );

}, 1000 );

function switchTheme( theme ) {

    if( !page.classList.contains( theme ) ) {

        page.classList.remove( page.classList[ 0 ] );
        page.classList.add( theme );

    }

}

window.setInterval( function() {

    slides[ slide ].style.opacity = "0";
    slide++;

    if ( slide >= slides.length ) {

        slide = 0;

    }

    slides[ slide ].style.opacity = "1";

}, 9000 );