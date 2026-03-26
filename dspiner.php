        <div class="dot"></div>
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
            background-color: #f7f7f7;
        }

        /* Dots */
        .dot {
            width: 12px;
            height: 12px;
            margin: 0 4px;
            background-color: #3498db; /* Blue color */
            border-radius: 50%;
            animation: bounce 1.4s infinite ease-in-out;
        }

        /* Delay each dot animation */
        .dot:nth-child(1) {
            animation-delay: -0.32s;
        }
        .dot:nth-child(2) {
            animation-delay: -0.16s;
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
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
       
    </div>
</body>
</html>
';
?>