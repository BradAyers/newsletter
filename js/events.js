// A $( document ).ready() block.
$( document ).ready(function() {
    console.log( "index js working!" );

    $( "#submit" ).click(function() {
        console.log ( "Handler for .click() called." );
        var user = $("#userName").val();
        var pw = $("#passWord").val();
        console.log(user);
        console.log(pw);
    });
});