CREATE TABLE KhachHang(
    ID INT NOT NULL AUTO_INCREMENT,
    HoTen NVARCHAR(255) NOT NULL,
    DiaChi NVARCHAR(255) NOT NULL,
    SDT VARCHAR(11) NOT NULL,
    email NVARCHAR(255) NOT NULL,
    MatKhau VARCHAR(255) NOT NULL,
    Khoa TINYINT(1) DEFAULT 1 NOT NULL,
    PRIMARY KEY (ID)
);
CREATE TABLE NhanVien(
    ID INT NOT NULL AUTO_INCREMENT,
    HoTen NVARCHAR(255) NOT NULL,
    DiaChi NVARCHAR(255) NOT NULL,
    SDT VARCHAR(11) NOT NULL,
    NgaySinh DATE NOT NULL,
    email NVARCHAR(255) NOT NULL,
    MatKhau VARCHAR(255) NOT NULL,
    ChucVu TINYINT(1) DEFAULT 1 NOT NULL,
    khoa TINYINT(1) DEFAULT 1 NOT NULL,
    PRIMARY KEY (ID)
);
CREATE TABLE TheLoai(
    ID INT NOT NULL AUTO_INCREMENT,
    TenLoai NVARCHAR(255) NOT NULL, 
    PRIMARY KEY (ID)
);
CREATE TABLE NhaSanXuat(
    ID INT NOT NULL AUTO_INCREMENT,
    TenNhaSanXuat NVARCHAR(255) NOT NULL, 
    PRIMARY KEY (ID)
);
CREATE TABLE NoiXuatXu(
    ID INT NOT NULL AUTO_INCREMENT,
    TenNoiXuatXu NVARCHAR(255) NOT NULL, 
    PRIMARY KEY (ID)
);
CREATE TABLE NamSanXuat(
    ID INT NOT NULL AUTO_INCREMENT,
    NamSanXuat INT NOT NULL, 
    PRIMARY KEY (ID)
);
CREATE TABLE BaoHanh(
    ID INT NOT NULL AUTO_INCREMENT,
    BaoHanh INT NOT NULL, 
    PRIMARY KEY (ID)
);
CREATE TABLE GiamGia(
    ID INT NOT NULL AUTO_INCREMENT,
    GiamGia INT NOT NULL, 
    PRIMARY KEY (ID)
);

CREATE TABLE SanPham(
    ID INT NOT NULL AUTO_INCREMENT, 
    NhanVien_ID INT NOT NULL,
    TheLoai_ID INT NOT NULL, 
    NhaSanXuat_ID INT NOT NULL,
    NoiXuatXu_ID INT NOT NULL,
    NamSanXuat_ID INT NOT NULL,
    BaoHanh_ID INT NOT NULL,
    GiamGia_ID INT NOT NULL,
    TenSanPham NVARCHAR(255) NOT NULL,
    TenSanPham_slug NVARCHAR(255) NOT NULL,
    GiaTien INT NOT NULL,
    SoLuong INT NOT NULL,
    NgayNhap DATE NOT NULL,
    ThongSoSanPham TEXT NOT NULL,
    ChiTietSanPham TEXT NOT NULL,
    HinhAnh NVARCHAR(255) NOT NULL,
    HinhAnhLienQuan NVARCHAR(255) NOT NULL,
    Khoa TINYINT(1) NOT NULl,
    PRIMARY KEY (ID),
    FOREIGN KEY (NhanVien_ID) REFERENCES NhanVien(ID) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (TheLoai_ID) REFERENCES TheLoai(ID) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (NhaSanXuat_ID) REFERENCES NhaSanXuat(ID) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (NoiXuatXu_ID) REFERENCES NoiXuatXu(ID) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (NamSanXuat_ID) REFERENCES NamSanXuat(ID) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (BaoHanh_ID) REFERENCES BaoHanh(ID) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (GiamGia_ID) REFERENCES GiamGia(ID) ON UPDATE CASCADE ON DELETE CASCADE
);
CREATE TABLE BinhLuan(
    ID INT NOT NULL AUTO_INCREMENT,
    NoiDung TEXT NOT NULL,
    SanPham_ID INT NOT NULL,
    NgayBinhLuan DATE NOT NULL,
    PRIMARY KEY (ID),
    FOREIGN KEY (SanPham_ID) REFERENCES SanPham(ID) ON UPDATE CASCADE ON DELETE CASCADE
);
CREATE TABLE BinhLuan_KhachHang(
    ID INT NOT NULL AUTO_INCREMENT,
    BinhLuan_ID INT NOT NULL,
    KhachHang_ID INT NOT NULL,
    NhanVien_ID INT NOT NULL,
    PRIMARY KEY (ID),
    FOREIGN KEY (BinhLuan_ID) REFERENCES BinhLuan(ID) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (NhanVien_ID) REFERENCES NhanVien(ID) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (KhachHang_ID) REFERENCES KhachHang(ID) ON UPDATE CASCADE ON DELETE CASCADE
);
CREATE TABLE DatHang(
    ID INT NOT NULL AUTO_INCREMENT,
    KhachHang_ID INT NOT NULL,
    DiaChiGiaoHang NVARCHAR(255) NOT NULL,
    DienThoai NVARCHAR(11) NOT NULL,
    NgayDatHang DATE NOT NULL,
    TinhTrang TINYINT NOT NULL,
    PRIMARY KEY (ID),
    FOREIGN KEY (KhachHang_ID) REFERENCES KhachHang(ID) ON UPDATE CASCADE ON DELETE CASCADE 
);
CREATE TABLE DatHangChiTiet(
    ID INT NOT NULL AUTO_INCREMENT,
    DatHang_ID INT NOT NULL,
    Sanpham_ID INT NOT NULL,
    GiamGia_ID INT NOT NULL,
    SoLuongMua INT NOT NULL,
    DonGiaBan INT NOT NULL,
    PRIMARY KEY (ID),
    FOREIGN KEY (Sanpham_ID) REFERENCES SanPham(ID) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (GiamGia_ID) REFERENCES GiamGia(ID) ON UPDATE CASCADE ON DELETE CASCADE ,
    FOREIGN KEY (DatHang_ID) REFERENCES DatHang(ID) ON UPDATE CASCADE ON DELETE CASCADE 
);
CREATE TABLE QuanCao(
    ID INT NOT NULL,
    HinhAnh NVARCHAR(255) NOT NULL,
    PRIMARY KEY (ID)
);