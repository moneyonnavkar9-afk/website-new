<?php
require_once 'partner/includs/config.php';

if (!isset($_GET['url'])) {
    header('Location: blogs.php');
    exit;
}

$permalink = trim($_GET['url']);

// Fetch the blog details based on permalink
$stmt = $conn->prepare("SELECT * FROM blogs WHERE permalink = ? AND status = 'published'");
$stmt->bind_param("s", $permalink);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    header('HTTP/1.0 404 Not Found');
    echo "<h1>404 Not Found</h1><p>The blog post you are looking for does not exist.</p>";
    exit;
}

$blog = $result->fetch_assoc();
$stmt->close();

$seo_title = !empty($blog['seo_title']) ? htmlspecialchars($blog['seo_title']) : htmlspecialchars($blog['title']);
$seo_description = !empty($blog['seo_description']) ? htmlspecialchars($blog['seo_description']) : htmlspecialchars(substr(strip_tags($blog['content']), 0, 160));
$seo_keywords = htmlspecialchars($blog['seo_keywords']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $seo_title; ?> - Vardhman Financial Services</title>
    <meta name="description" content="<?php echo $seo_description; ?>">
    <?php if (!empty($seo_keywords)): ?>
    <meta name="keywords" content="<?php echo $seo_keywords; ?>">
    <?php endif; ?>

    <!-- Open Graph for Social Media Sharing -->
    <meta property="og:title" content="<?php echo $seo_title; ?>">
    <meta property="og:description" content="<?php echo $seo_description; ?>">
    <meta property="og:type" content="article">
    <meta property="og:url" content="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
    <?php if (!empty($blog['featured_image'])): ?>
    <meta property="og:image" content="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/partner/includs/images/blogs/" . $blog['featured_image']; ?>">
    <?php endif; ?>

    <!-- Standard app fonts and styles -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Assuming bootstrap 5 is standard for the frontend -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            color: #333;
            line-height: 1.8;
        }
        :root {
            --primary-dark: #0A192F;
            --accent-gold: #D4AF37;
            --primary-blue: #1A365D;
            --light-bg: #F5F7FA;
        }

        .blog-header {
            background: linear-gradient(to right, rgba(10, 25, 47, 0.95), rgba(26, 54, 93, 0.95)), url('assets/images/pattern-bg.png');
            color: white;
            padding: 100px 0 60px;
            margin-bottom: 50px;
        }
        .blog-title-main {
            font-weight: 700;
            font-size: clamp(2rem, 4vw, 3.5rem);
            margin-bottom: 20px;
            line-height: 1.2;
        }
        .blog-meta {
            font-size: 0.95rem;
            opacity: 0.8;
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .blog-meta span {
            display: inline-flex;
            align-items: center;
        }
        .blog-meta i {
            margin-right: 8px;
            color: var(--accent-gold);
        }

        .blog-container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            padding: 50px;
            border-radius: 12px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.05);
            margin-top: -80px; /* Overlap header slightly */
            position: relative;
            z-index: 10;
        }

        .featured-image-container {
            width: 100%;
            height: auto;
            max-height: 500px;
            overflow: hidden;
            border-radius: 8px;
            margin-bottom: 40px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }
        .featured-image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .blog-content-body {
            font-size: 1.1rem;
            color: #444;
        }
        .blog-content-body h2, .blog-content-body h3, .blog-content-body h4 {
            color: var(--primary-dark);
            margin-top: 40px;
            margin-bottom: 20px;
            font-weight: 600;
        }
        .blog-content-body p {
            margin-bottom: 20px;
        }
        .blog-content-body img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin: 30px 0;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }
        .blog-content-body blockquote {
            border-left: 4px solid var(--accent-gold);
            padding-left: 20px;
            font-style: italic;
            font-size: 1.25rem;
            color: #555;
            background: var(--light-bg);
            padding: 20px;
            border-radius: 0 8px 8px 0;
            margin: 30px 0;
        }

        .back-link {
            display: inline-block;
            margin-top: 40px;
            font-weight: 600;
            color: var(--primary-blue);
            text-decoration: none;
            transition: color 0.3s;
        }
        .back-link:hover {
            color: var(--accent-gold);
        }

        @media (max-width: 768px) {
            .blog-container {
                padding: 30px 20px;
                margin-top: -40px;
            }
            .blog-header {
                padding: 80px 0 40px;
            }
        }
    </style>
</head>
<body>

    <?php include 'header.php'; ?>

    <section class="blog-header">
        <div class="container text-center">
            <h1 class="blog-title-main"><?php echo htmlspecialchars($blog['title']); ?></h1>
            <div class="blog-meta justify-content-center">
                <span><i class="far fa-calendar-alt"></i> <?php echo date('F j, Y', strtotime($blog['created_at'])); ?></span>
                <span><i class="far fa-folder-open"></i> Insight</span>
            </div>
        </div>
    </section>

    <div class="container mb-5 pb-5">
        <article class="blog-container">
            <?php if (!empty($blog['featured_image'])): ?>
                <?php $imgPath = 'partner/includs/images/blogs/' . $blog['featured_image']; ?>
                <?php if (file_exists($imgPath)): ?>
                    <div class="featured-image-container">
                        <img src="<?php echo htmlspecialchars($imgPath); ?>" alt="<?php echo htmlspecialchars($blog['title']); ?>" onerror="this.style.display='none';">
                    </div>
                <?php endif; ?>
            <?php endif; ?>

            <div class="blog-content-body">
                <?php
                // Outputting the raw HTML from TinyMCE safely enough
                echo $blog['content'];
                ?>
            </div>

            <hr class="mt-5 mb-4">

            <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                <a href="blogs.php" class="back-link mt-0"><i class="fas fa-arrow-left me-2"></i> Back to All Articles</a>

                <!-- Simple Share Buttons -->
                <div class="share-buttons">
                    <span class="fw-bold me-3">Share:</span>
                    <?php $shareUrl = urlencode((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"); ?>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $shareUrl; ?>" target="_blank" class="btn btn-sm btn-outline-primary rounded-circle px-2 py-1"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/intent/tweet?url=<?php echo $shareUrl; ?>&text=<?php echo urlencode($blog['title']); ?>" target="_blank" class="btn btn-sm btn-outline-info rounded-circle px-2 py-1 mx-2"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $shareUrl; ?>&title=<?php echo urlencode($blog['title']); ?>" target="_blank" class="btn btn-sm btn-outline-primary rounded-circle px-2 py-1"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </article>
    </div>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
