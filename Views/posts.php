<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Posts</title>
</head>

<body>
    <?php if ($mensaje): ?>
        <div class="alert alert-success"><?= htmlspecialchars($mensaje) ?></div>
    <?php endif; ?>
    <?php if ($error): ?>
        <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <ul>
        <?php foreach ($posts as $post): ?>
            <li><?= htmlspecialchars($post['titulo']) ?>: <?= htmlspecialchars($post['contenido']) ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>