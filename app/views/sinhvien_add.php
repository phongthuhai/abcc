<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sinh Viên</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h2>Thêm Sinh Viên mới</h2>
        <form action="index.php?action=store" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="MaSV">Mã SinhVien:</label>
                <input type="text" name="MaSV" required>
            </div>

            <div class="form-group">
                <label for="HoTen">Họ và Tên:</label>
                <input type="text" name="HoTen" required>
            </div>

            <div class="form-group">
                <label for="GioiTinh">Giới Tính:</label>
                <select name="GioiTinh" id="GioiTinh" required>
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                </select>
            </div>

            <div class="form-group">
                <label for="NgaySinh">Ngày Sinh:</label>
                <input type="date" name="NgaySinh" required>
            </div>

            <div class="form-group">
                <label for="MaNganh">Ngành Học:</label>
                <select name="MaNganh" id="MaNganh" required>
                <?php foreach ($nganhs as $nganh): ?>
        <option value="<?= $nganh['MaNganh'] ?>"><?= htmlspecialchars($nganh['TenNganh']) ?></option>
    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="Hinh">Chọn Hình Ảnh:</label>
                <input type="file" name="Hinh" accept="image/*">
            </div>

            <button type="submit">Lưu</button>
        </form>
    </div>
</body>

</html>