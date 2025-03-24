<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách Sinh Viên</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #e9ecef;
            font-family: 'Arial', sans-serif;
        }
        .table-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        h2 {
            color: #007bff;
            margin-bottom: 20px;
        }
        .btn-custom {
            background-color: #28a745;
            border-color: #28a745;
        }
        .btn-custom:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }
        .img-thumbnail {
            border-radius: 10px;
        }
    </style>
</head>

<body class="container mt-4">
    <h2 class="text-center">Danh sách Sinh Viên ngành </h2>
    <div class="d-flex justify-content-end mb-3">
        <a href="index.php?action=create" class="btn btn-custom">Thêm Sinh Viên mới </a>
    </div>
    <div class="table-container">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <caption>Danh sách sinh viên hiện có</caption>
                <thead class="table-dark">
                    <tr>
                        <th>Mã SV</th>
                        <th>Họ  và Tên</th>
                        <th>Giới Tính</th>
                        <th>Ngày Sinh</th>
                        <th>Ngành học </th>
                        <th>Hình ảnh </th>
                        <th>Thao Tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $sinhViens->fetch_assoc()): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['MaSV']) ?></td>
                            <td><?= htmlspecialchars($row['HoTen']) ?></td>
                            <td><?= htmlspecialchars($row['GioiTinh']) ?></td>
                            <td><?= date('d/m/Y', strtotime($row['NgaySinh'])) ?></td>
                            <td><?= htmlspecialchars($row['TenNganh']) ?></td>
                            <td>
                                <img src="public/uploads/<?= htmlspecialchars($row['Hinh']) ?>" class="img-thumbnail" width="50" alt="Hình của <?= htmlspecialchars($row['HoTen']) ?>">
                            </td>
                            <td>
                                <a href="index.php?action=edit&id=<?= urlencode($row['MaSV']) ?>" class="btn btn-warning btn-sm">Sửa</a>
                                <a href="index.php?action=delete&id=<?= urlencode($row['MaSV']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a>
                                <a href="index.php?action=detail&id=<?= urlencode($row['MaSV']) ?>" class="btn btn-info btn-sm">Chi tiết</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>