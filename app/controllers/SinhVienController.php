<?php
require_once 'app/models/SinhVienModel.php';

class SinhVienController
{
    private $model;

    public function __construct()
    {
        $this->model = new SinhVienModel();
    }

    public function index()
    {
        $sinhViens = $this->model->getAll();
        include 'app/views/sinhvien_list.php';
    }

    public function create()
    {
        $nganhs = $this->model->getAllNganh();
        include 'app/views/sinhvien_add.php';
    }

    public function store()
    {
        $maSV = $_POST['MaSV'];
        $hoTen = $_POST['HoTen'];
        $gioiTinh = $_POST['GioiTinh'];
        $ngaySinh = $_POST['NgaySinh'];
        $maNganh = $_POST['MaNganh'];

        $hinh = $_FILES['Hinh']['name'];
        move_uploaded_file($_FILES['Hinh']['tmp_name'], "public/uploads/$hinh");

        $this->model->add($maSV, $hoTen, $gioiTinh, $ngaySinh, $hinh, $maNganh);
        header("Location: index.php");
    }

    public function edit($id)
    {
        $sinhVien = $this->model->getById($id);
        $nganhs = $this->model->getAllNganh();
        include 'app/views/sinhvien_edit.php';
    }

    public function update($id)
    {
        $hoTen = $_POST['HoTen'];
        $gioiTinh = $_POST['GioiTinh'];
        $ngaySinh = $_POST['NgaySinh'];
        $maNganh = $_POST['MaNganh'];

        $hinh = $_FILES['Hinh']['name'];
        move_uploaded_file($_FILES['Hinh']['tmp_name'], "public/uploads/$hinh");

        $this->model->update($id, $hoTen, $gioiTinh, $ngaySinh, $hinh, $maNganh);
        header("Location: index.php");
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header("Location: index.php");
    }
    public function detail($id)
    {
        $student = $this->model->getById($id);
        if (!$student) {
            die("Sinh viên không tồn tại.");
        }
        include 'app/views/sinhvien_detail.php';
    }
}
