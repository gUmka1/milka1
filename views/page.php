<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page['meta_title']) && !empty($page['meta_title']) ? htmlspecialchars($page['meta_title']) : htmlspecialchars($page['title']); ?></title>
    <?php if (isset($page['meta_description']) && !empty($page['meta_description'])): ?>
        <meta name="description" content="<?php echo htmlspecialchars($page['meta_description']); ?>">
    <?php endif; ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include BASE_PATH . '/includes/header.php'; ?>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1><?php echo htmlspecialchars($page['title']); ?></h1>
                <div>
                    <?php echo $page['content']; ?>
                </div>
            </div>
        </div>
    </div>
    
    <?php include BASE_PATH . '/includes/footer.php'; ?>
</body>
</html>