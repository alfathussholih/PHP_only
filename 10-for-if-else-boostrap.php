<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <ul class='list-group'>
                    <?php
                        for($i = 1; $i <= 8; $i++){
                            if ($i % 2 == 0){
                                echo "<li class = 'list-group-item list-group-item-primary'>Item $i is Even</li>";
                            } else{
                                echo "<li class = 'list-group-item list-group-item-secondary'>Item $i is Odd</li>";
                            }
                        }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>