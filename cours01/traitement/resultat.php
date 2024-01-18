<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $metadescription; ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/cours01/pages/globalStyle.css">
    <title>
        <?php echo $metatitle; ?>
    </title>
</head>

<body>
<?php include '../pages/header.php'; ?>
    <main class="">
        <?php 
        $files = scandir('../contact', SCANDIR_SORT_DESCENDING);
        $newest_file = $files[0];
        include "../contact/$newest_file";
        ?>
    </main>
    <?php include '../pages/footer.php'; ?>
</body>

</html>