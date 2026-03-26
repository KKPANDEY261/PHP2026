<?php
$title = "Popover Title";
$content = "This popover text is generated from PHP.";
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Popover Example</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="padding:50px;">

<button 
    type="button"
    class="btn btn-primary"
    data-bs-toggle="popover"
    data-bs-title="<?php echo $title; ?>"
    data-bs-content="<?php echo $content; ?>">
    Click Me
</button>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
var popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
popoverTriggerList.forEach(function (popoverTriggerEl) {
    new bootstrap.Popover(popoverTriggerEl)
})
</script>

</body>
</html>