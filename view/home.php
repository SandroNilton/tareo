<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['page_tag'] ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Asset/dist/management/management.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Asset/dist/component/prismjs/prism.css">
</head>

<body>
    <h1>Welcome</h1>
    <section id="<?php echo $data['page_id'] ?>"></section>
    <section><?php echo $data['page_title'] ?></section>
    <section><?php echo $data['page_content'] ?></section>

    <?php echo base_url(); ?>

    <?php dep($data);

    echo SMONEY.formatmoney(50.20);?>


    <script src="<?php echo base_url(); ?>Asset/dist/component/prismjs/prism.js"></script>
</body>
</html>
