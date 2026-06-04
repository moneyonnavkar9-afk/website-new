<?php
require_once 'partner/includs/config.php';

// Prepare query to get published blogs
$query = "SELECT * FROM blogs WHERE status = 'published' ORDER BY created_at DESC";
$result = $conn->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Vardhman Financial Services</title>
    <meta name="description" content="Read the latest news, updates, and financial insights from Vardhman Financial Services.">

    <!-- Use standard application fonts and styles, mimicking the main site template -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Assuming bootstrap 5 is standard for the frontend from memory -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }
        /* Match standard theme colors from the main site (Primary Dark #0A192F, Accent Gold #D4AF37) */
        :root {
            --primary-dark: #0A192F;
            --accent-gold: #D4AF37;
            --primary-blue: #1A365D;
            --light-bg: #F5F7FA;
        }

        /* Hero Section */
        .blog-hero {
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary-blue) 100%);
            color: white;
            padding: 80px 0 60px;
            text-align: center;
            margin-bottom: 50px;
        }
        .blog-hero h1 {
            font-weight: 700;
            margin-bottom: 20px;
            font-size: clamp(2.5rem, 5vw, 4rem);
        }
        .blog-hero p {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Blog Cards */
        .blog-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            border: 1px solid rgba(0,0,0,0.05);
        }
        .blog-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }
        .blog-img-container {
            width: 100%;
            height: 240px;
            overflow: hidden;
            background: #eee;
        }
        .blog-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        .blog-card:hover .blog-img {
            transform: scale(1.05);
        }
        .blog-content {
            padding: 30px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        .blog-date {
            font-size: 0.85rem;
            color: #888;
            margin-bottom: 15px;
            display: block;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 500;
        }
        .blog-title {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--primary-dark);
            line-height: 1.4;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .blog-title:hover {
            color: var(--accent-gold);
        }
        .blog-excerpt {
            color: #666;
            margin-bottom: 25px;
            line-height: 1.6;
            flex-grow: 1;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .read-more {
            display: inline-flex;
            align-items: center;
            font-weight: 600;
            color: var(--accent-gold);
            text-decoration: none;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
            transition: color 0.3s ease;
            margin-top: auto;
        }
        .read-more i {
            margin-left: 8px;
            transition: transform 0.3s ease;
        }
        .read-more:hover {
            color: var(--primary-dark);
        }
        .read-more:hover i {
            transform: translateX(5px);
        }

        /* Empty State */
        .no-blogs {
            text-align: center;
            padding: 80px 20px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }
        .no-blogs i {
            font-size: 4rem;
            color: #ccc;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <?php include 'header.php'; ?>

    <section class="blog-hero">
        <div class="container">
            <h1>Our Blog</h1>
            <p>Insights, updates, and expert financial advice from Vardhman Financial Services.</p>
        </div>
    </section>

    <div class="container mb-5 pb-5">
        <div class="row g-4">
            <?php
            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $permalink = htmlspecialchars($row['permalink']);
                    $title = htmlspecialchars($row['title']);
                    $date = date('F j, Y', strtotime($row['created_at']));

                    // Create a plain text excerpt from HTML content
                    $content = strip_tags($row['content']);
                    $excerpt = mb_substr($content, 0, 150) . (mb_strlen($content) > 150 ? '...' : '');

                    $imgSrc = 'assets/images/default-blog.jpg'; // Fallback
                    if (!empty($row['featured_image'])) {
                        $imgPath = 'partner/includs/images/blogs/' . $row['featured_image'];
                        if (file_exists($imgPath)) {
                            $imgSrc = $imgPath;
                        }
                    }
                    ?>
                    <div class="col-lg-4 col-md-6">
                        <article class="blog-card">
                            <a href="blog.php?url=<?php echo urlencode($permalink); ?>" class="blog-img-container">
                                <img src="<?php echo htmlspecialchars($imgSrc); ?>" alt="<?php echo $title; ?>" class="blog-img" onerror="this.src='assets/images/placeholder.jpg';">
                            </a>
                            <div class="blog-content">
                                <span class="blog-date"><i class="far fa-calendar-alt me-2"></i><?php echo $date; ?></span>
                                <a href="blog.php?url=<?php echo urlencode($permalink); ?>" class="blog-title">
                                    <?php echo $title; ?>
                                </a>
                                <p class="blog-excerpt">
                                    <?php echo $excerpt; ?>
                                </p>
                                <a href="blog.php?url=<?php echo urlencode($permalink); ?>" class="read-more">
                                    Read Article <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </article>
                    </div>
                    <?php
                }
            } else {
                echo '<div class="col-12">
                        <div class="no-blogs">
                            <i class="far fa-newspaper"></i>
                            <h3>No articles yet</h3>
                            <p class="text-muted">Check back later for exciting updates and insights.</p>
                        </div>
                      </div>';
            }
            ?>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
