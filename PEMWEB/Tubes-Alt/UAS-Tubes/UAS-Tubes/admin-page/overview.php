<?php

include './connection.php';

// Ambil data views dari tabel guide dan news untuk 10 hari terakhir
$viewsData = [];
$dates = [];
for ($i = 9; $i >= 0; $i--) {
    $date = date('Y-m-d', strtotime("-$i days"));
    $dates[] = $date;

    // Hitung total views untuk tanggal ini di tabel news
    $query_news = "SELECT SUM(views) as total_views FROM news WHERE DATE(date) = '$date'";
    $result_news = mysqli_query($connect, $query_news);
    $row_news = mysqli_fetch_assoc($result_news);
    $news_views = (int)($row_news['total_views'] ?? 0);

    // Hitung total views untuk tanggal ini di tabel guide
    $query_guide = "SELECT SUM(views) as total_views FROM guide WHERE DATE(date) = '$date'";
    $result_guide = mysqli_query($connect, $query_guide);
    $row_guide = mysqli_fetch_assoc($result_guide);
    $guide_views = (int)($row_guide['total_views'] ?? 0);

    $viewsData[] = [
        'date' => $date,
        'news' => $news_views,
        'guide' => $guide_views
    ];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Admin</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />

    <style>
        body {
            margin: 0;
            padding: 0;
            transition: all 0.3s ease;
        }

        .navbar {
            height: 60px;
            padding-top: 0;
            padding-bottom: 0;
        }

        .navbar .container-fluid {
            height: 100%;
            align-items: center;
            display: flex;
        }

        #sidebar {
            position: fixed;
            top: 60px;
            /* Sesuaikan dengan tinggi navbar */
            left: 0;
            width: 250px;
            height: calc(100% - 60px);
            background-color: #f8f9fa;
            border-right: 1px solid #dee2e6;
            transform: translateX(-100%);
            transition: transform 0.3s ease;
            z-index: 1040;
        }

        body.sidebar-open #sidebar {
            transform: translateX(0);
        }

        #content {
            margin-left: 0;
            padding: 1rem;
            transition: margin-left 0.3s ease;
        }

        body.sidebar-open #content {
            margin-left: 250px;
        }

        @media (max-width: 768px) {
            #sidebar {
                width: 200px;
            }

            body.sidebar-open #content {
                margin-left: 200px;
            }
        }

        .sidebar-toggle-btn {
            font-size: 1.75rem;
            display: flex;
            align-items: center;
        }

        .search-form {
            width: 100%;
            max-width: 600px;
        }

        .search-form input {
            height: 42px;
            font-size: 1rem;
        }

        .search-form button {
            height: 42px;
        }

        .navbar {
            height: 60px;
            position: relative;
        }

        .navbar .search-wrapper {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            max-width: 600px;
        }

        .search-form input,
        .search-form button {
            height: 40px;
            font-size: 1rem;
        }
    </style>

    <!-- Navbar -->
    <nav class="navbar navbar-expand bg-body-tertiary fixed-top shadow">
        <div class="container-fluid px-3 d-flex align-items-center">
            <!-- Tombol Sidebar -->
            <button class="btn sidebar-toggle-btn me-3" onclick="toggleSidebar()">
                <i class="bi bi-list fs-3"></i>
            </button>

            <!-- Search Bar (Tengah) -->
            <div class="search-wrapper">
                <form class="d-flex search-form" role="search">
                    <input class="form-control me-2 flex-grow-1" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


    <!-- Sidebar -->
    <div id="sidebar" class="p-3">
        <h4 class="mb-4">Admin Menu</h4>
        <ul class="nav nav-underline flex-column">
            <li class="nav-item mb-2">
                <a href="dashboard.php" class="nav-link">
                    <i class="bi bi-file-earmark-text me-2"></i> Post
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="overview.php" class="nav-link active">
                    <i class="bi bi-bar-chart me-2"></i> Overview
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="logout.php" class="nav-link text-danger" onclick="return confirm('Apakah kamu yakin ingin Logout?');">
                    <i class="bi bi-box-arrow-right me-2"></i> Logout
                </a>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div id="content" class="pt-5 mt-4">
        <div class="container">
            <h2 class="mb-4">Statistik Views 10 Hari Terakhir</h2>
            <canvas id="viewsChart" height="100"></canvas>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
                // Data PHP ke JS
                const chartLabels = <?php echo json_encode(array_column($viewsData, 'date')); ?>;
                const newsViews = <?php echo json_encode(array_column($viewsData, 'news')); ?>;
                const guideViews = <?php echo json_encode(array_column($viewsData, 'guide')); ?>;

                const ctx = document.getElementById('viewsChart').getContext('2d');
                const viewsChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: chartLabels,
                        datasets: [{
                                label: 'News Views',
                                data: newsViews,
                                borderColor: 'rgba(54, 162, 235, 1)',
                                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                                fill: false,
                                tension: 0.3
                            },
                            {
                                label: 'Guide Views',
                                data: guideViews,
                                borderColor: 'rgba(255, 99, 132, 1)',
                                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                fill: false,
                                tension: 0.3
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                display: true
                            },
                            title: {
                                display: false
                            }
                        },
                        scales: {
                            x: {
                                title: {
                                    display: true,
                                    text: 'Tanggal'
                                }
                            },
                            y: {
                                title: {
                                    display: true,
                                    text: 'Jumlah Views'
                                },
                                beginAtZero: true
                            }
                        }
                    }
                });
            </script>
        </div>
    </div>

    <!-- Sidebar Toggle Script -->
    <script>
        function toggleSidebar() {
            document.body.classList.toggle('sidebar-open');
        }
    </script>

    </body>

</html>