<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include BASE_PATH . '/includes/header.php'; ?>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1>Blog Posts</h1>
                
                <?php if (isset($posts) && !empty($posts)): ?>
                    <?php foreach ($posts as $post): ?>
                        <div class="card mb-4">
                            <div class="card-body">
                                <h2 class="card-title">
                                    <a href="/post/<?php echo htmlspecialchars($post['slug']); ?>" class="text-decoration-none">
                                        <?php echo htmlspecialchars($post['title']); ?>
                                    </a>
                                </h2>
                                
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
                                
                                <?php if (!empty($post['meta_description'])): ?>
                                    <p class="card-text"><?php echo htmlspecialchars($post['meta_description']); ?></p>
                                <?php endif; ?>
                                
                                <p class="text-muted">
                                    Published on <?php echo date('F j, Y', strtotime($post['created_at'])); ?>
                                </p>
                                
                                <a href="/post/<?php echo htmlspecialchars($post['slug']); ?>" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No posts found.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    
    <?php include BASE_PATH . '/includes/footer.php'; ?>
</body>
</html>