<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-black">

    <!-- Header -->
    <?php include_once('./includes/header.php');?>

    <!-- Main Content -->
    <div class="container mx-auto mt-10 flex">
        <!-- Image Section -->
        <div class="w-1/2">
            <img src="./image/Dragon.jpg" alt="Image de présentation" class="w-full h-auto">
        </div>

        <!-- Portfolio Section -->
        <div class="w-1/2 bg-black text-white p-8 shadow-lg">
            <?php
                $page = isset($_GET['page']) ? $_GET['page'] : 'about';
                switch($page) {
                    case 'about':
                        include './template/about.php';
                        break;
                    case 'diplomas':
                        include './template/diplomas.php';
                        break;
                    case 'experience':
                        include './template/experience.php';
                        break;
                    case 'projects':
                        include './template/projects.php';
                        break;
                    default:
                        include './template/about.php';
                }
            ?>
        </div>
    </div>

</body>
</html>