< !DOCTYPE html >
    <
    html >
    <
    head >

    <
    title > JavaScript alert Box by PHP < /title> <
    meta name = "viewport"
content = "width=device-width, initial-scale=1" >

    <
    meta charset = "utf-8" >

    <
    style >
    <
    body > {
        background - color: black; <
        /body>
    } < /style>  

<?php  
function  createConfirmationmbox() {  
    echo '<script type="text/javascript"> ';  
    echo 'var inputname = prompt("Please enter your name", "");';  
    echo 'alert(inputname);';  
    echo '</script>';  
}  
?>

<
!DOCTYPE html >
    <
    html >
    <
    head >
    <
    meta charset = "utf-8" >
    <
    title > JavaScript Prompt Box by PHP < /title>  
<?php  
    createConfirmationmbox();  
?> < /head>   < <
body >
    <
    /body>   </html >