<?php

include 'connection.php';

$search = mysqli_real_escape_string($connect, $_GET['result'] ?? '');

if ($search) {
    // Samakan jumlah kolom dan alias pada setiap query
    $query_news = "SELECT id, title, content, NULL AS content2, date, image, NULL AS source_url, NULL AS label, 'news' AS source FROM news WHERE title LIKE '%$search%' OR content LIKE '%$search%'";
    $query_guide = "SELECT id, title, content, content2, date, image, source AS source_url, label, 'guide' AS source FROM guide WHERE title LIKE '%$search%' OR content LIKE '%$search%'";
    $query_number = "SELECT id, agency AS title, number AS content, NULL AS content2, NULL AS date, NULL AS image, NULL AS source_url, description AS label, 'number' AS source FROM number WHERE agency LIKE '%$search%' OR number LIKE '%$search%' OR description LIKE '%$search%'";
    // Gabungkan hasil pencarian dari ketiga tabel
    $query = "($query_news) UNION ALL ($query_guide) UNION ALL ($query_number) ORDER BY date DESC";
    $result = mysqli_query($connect, $query);
} else {
    echo "<script>alert('Masukkan kata kunci pencarian'); window.location.href='search.php';</script>";
    exit;
}

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Hasil Pencarian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container py-5">
    <h3>Hasil pencarian untuk: <em><?= htmlspecialchars($search) ?></em></h3>
    <hr>

    <?php if ($result->num_rows > 0): ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <?php if ($row['source'] === 'news'): ?>
                <a href="./page/article/post.php?id=<?= $row['id'] ?>" class="btn btn-lg">
                    <!-- Template for Article (News) -->
                    <div class="row align-items-center border p-3 shadow-sm rounded mb-3">
                        <!-- Gambar -->
                        <div class="col-2">
                            <img src="../Img-artikel/thumbnails/<?= htmlspecialchars('thumb_' . $row['image']) ?>" class="img-fluid rounded" alt="<?= htmlspecialchars($row['title']) ?>" />
                        </div>
                        <!-- Judul & Tanggal -->
                        <div class="col-8">
                            <h5 class="card-title"><?= htmlspecialchars($row['title']) ?></h5>
                            <p class="card-text">
                                <small class="text-muted">
                                    Tanggal Publikasi: <?= $row['date'] ? date("d F Y", strtotime($row['date'])) : '-' ?>
                                </small>
                            </p>
                        </div>
                    </div>
                </a>
            <?php elseif ($row['source'] === 'guide'): ?>
                <a href="./page/guide/guide.php?id=<?= $row['id'] ?>" class="btn btn-lg">
                    <!-- Template for Guide -->
                    <div class="row align-items-center border p-3 shadow-sm rounded mb-3">
                        <!-- Gambar -->
                        <div class="col-2">
                            <img src="../Img-panduan/thumbnails/<?= htmlspecialchars('thumb_' . $row['image']) ?>" class="img-fluid rounded" alt="<?= htmlspecialchars($row['title']) ?>" />
                        </div>
                        <!-- Judul & Tanggal -->
                        <div class="col-8">
                            <h5 class="card-title"><?= htmlspecialchars($row['title']) ?></h5>
                            <p class="card-text">
                                <small class="text-muted">
                                    Tanggal Publikasi: <?= $row['date'] ? date("d F Y", strtotime($row['date'])) : '-' ?>
                                </small>
                            </p>
                        </div>
                    </div>
                </a>
            <?php elseif ($row['source'] === 'number'): ?>
                <!-- Template for Number -->
                <div class="row align-items-center border p-3 shadow-sm rounded mb-3">
                    <div class="col-md-12">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title"><?= htmlspecialchars($row['title']) ?></h5>
                                <p class="card-text">Nomor: <?= htmlspecialchars($row['content']) ?></p>
                                <p class="card-text">Deskripsi: <?= htmlspecialchars($row['label']) ?></p>
                                <a href="tel:<?= htmlspecialchars($row['content']) ?>" class="btn btn-danger">Panggil</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php else: ?>
        <p class="text-danger">Tidak ditemukan hasil untuk "<strong><?= htmlspecialchars($search) ?></strong>"</p>
    <?php endif; ?>
</body>

</html>