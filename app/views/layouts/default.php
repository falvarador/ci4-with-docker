<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Application' ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $description ?? 'My application' ?>">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
</head>

<body>
    <main>
        <?= $this->renderSection('content') ?>
    </main>
    <?= $this->include('components/footer') ?>
</body>

</html>