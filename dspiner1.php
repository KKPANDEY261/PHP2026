<?php
// PHP code to generate the dotted spinner HTML and CSS
echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dotted Spinner</title>
    <style>
        /* Spinner Container */
        .dotted-spinner {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color:rgb(255, 255, 255);
        }


        
        #dot1{
         background-color:rgb(255, 208, 0); 
        }

        #dot2{
         background-color:rgb(0, 255, 140); 
        }

        #dot3{
         background-color:rgb(0, 183, 255); 
        }

        #dot4{
         background-color:rgb(174, 0, 255); 
        }

         #dot5{
         background-color:rgb(255, 0, 140); 
        }

        /* Dots */
        .dot {
            width: 12px;
            height: 12px;
            margin: 0 4px;
            border-radius: 50%;
            animation: bounce 1.3s infinite ease-in-out;
        }

       



        /* Delay each dot animation */
        .dot:nth-child(1) {
            animation-delay: -0.8s;
        }
        .dot:nth-child(2) {
            animation-delay: -0.6s;
        }
 
        .dot:nth-child(3) {
            animation-delay: -0.4s;
        }
        .dot:nth-child(4) {
            animation-delay: -0.2s;
        }
 

        /* Bounce Animation */
        @keyframes bounce {
            0%, 80%, 100% {
                transform: translateY(0); /* Dots at the bottom */
            }
            40% {
                transform: translateY(-20px); /* Dots bounce up */
            }
        }
    </style>
</head>
<body>
    <div class="dotted-spinner">
        <div id="dot1" class="dot"></div>
        <div id="dot2" class="dot"></div>
        <div id="dot3" class="dot"></div>
        <div id="dot4" class="dot"></div>
        <div id="dot5" class="dot"></div>
       
    </div>
</body>
</html>
';
?>