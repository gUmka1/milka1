<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($post['meta_title']) && !empty($post['meta_title']) ? htmlspecialchars($post['meta_title']) : htmlspecialchars($post['title']); ?></title>
    <?php if (isset($post['meta_description']) && !empty($post['meta_description'])): ?>
        <meta name="description" content="<?php echo htmlspecialchars($post['meta_description']); ?>">
    <?php endif; ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include BASE_PATH . '/includes/header.php'; ?>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1><?php echo htmlspecialchars($post['title']); ?></h1>
                
                <?php if (!empty($post['categories'])): ?>
                    <p>
                        <?php 
                        $categories = explode(',', $post['categories']);
                        foreach ($categories as $category) {
                            echo '<span class="badge bg-info me-1">' . htmlspecialchars($category) . '</span>';
                        }
                        ?>
                    </p>
                <?php endif; ?>
                
                <p class="text-muted">
                    Published on <?php echo date('F j, Y', strtotime($post['created_at'])); ?>
                </p>
                
                <div>
                    <?php echo $post['content']; ?>
                </div>
            </div>
        </div>
    </div>
    
    <?php include BASE_PATH . '/includes/footer.php'; ?>
</body>
</html>