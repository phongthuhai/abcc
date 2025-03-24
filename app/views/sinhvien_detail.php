<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Sinh Viên</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .img-thumbnail {
            max-height: 200px;
            object-fit: cover;
        }
    </style>
</head>

<body class="container mt-5">
    <h2 class="text-center mb-4">Chi Tiết Sinh Viên</h2>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 text-center">
                    <img src="public/uploads/<?= htmlspecialchars($student['Hinh']) ?>" class="img-thumbnail" alt="Hình SV">
                </div>
                <div class="col-md-8">
                    <h5 class="card-title"><?= htmlspecialchars($student['HoTen']) ?></h5>
                    <p><strong>Mã SV:</strong> <?= htmlspecialchars($student['MaSV']) ?></p>
                    <p><strong>Giới Tính:</strong> <?= htmlspecialchars($student['GioiTinh']) ?></p>
                    <p><strong>Ngày Sinh:</strong> <?= date('d/m/Y', strtotime($student['NgaySinh'])) ?></p>
                    <p><strong>Ngành Học:</strong> <?= htmlspecialchars($student['TenNganh']) ?></p>
                    <a href="index.php" class="btn btn-secondary mt-3">Quay lại</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>