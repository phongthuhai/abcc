<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Chỉnh Sửa Sinh Viên</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            background-color: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-bottom: 1.5rem;
        }
        img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Chỉnh Sửa Sinh Viên</h2>
        <form action="index.php?action=update" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="MaSV" value="<?= $sinhVien['MaSV'] ?>">

            <div class="mb-3">
                <label for="HoTen" class="form-label">Họ và Tên:</label>
                <input type="text" class="form-control" name="HoTen" value="<?= htmlspecialchars($sinhVien['HoTen']) ?>" required>
            </div>

            <div class="mb-3">
                <label for="GioiTinh" class="form-label">Giới Tính:</label>
                <select class="form-select" name="GioiTinh" required>
                    <option value="Nam" <?= ($sinhVien['GioiTinh'] == 'Nam') ? 'selected' : '' ?>>Nam</option>
                    <option value="Nữ" <?= ($sinhVien['GioiTinh'] == 'Nữ') ? 'selected' : '' ?>>Nữ</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="NgaySinh" class="form-label">Ngày Sinh:</label>
                <input type="date" class="form-control" name="NgaySinh" value="<?= htmlspecialchars($sinhVien['NgaySinh']) ?>" required>
            </div>

            <div class="mb-3">
                <label for="MaNganh" class="form-label">Ngành Học:</label>
                <select class="form-select" name="MaNganh" required>
                    <?php foreach ($nganhs as $nganh): ?>
                        <option value="<?= $nganh['MaNganh'] ?>" <?= ($sinhVien['MaNganh'] == $nganh['MaNganh']) ? 'selected' : '' ?>><?= htmlspecialchars($nganh['TenNganh']) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="Hinh" class="form-label">Chọn Hình Ảnh:</label>
                <input type="file" class="form-control" name="Hinh">
                <img src="public/uploads/<?= htmlspecialchars($sinhVien['Hinh']) ?>" class="mt-2" alt="Hình ảnh sinh viên">
            </div>

            <button type="submit" class="btn btn-primary w-100">Cập Nhật</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>