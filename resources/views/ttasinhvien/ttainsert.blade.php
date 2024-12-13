<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm mới Sinh Viên</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container">
        <div class="card">
            <div class="card-header">
                <h3>Thêm mới Sinh Viên</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('ttaSinhVien.insertsubmit') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="ttamasv">Mã Sinh Viên</label>
                        <input type="text" name="ttamasv" id="ttamasv" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="ttahosv">Họ Sinh Viên</label>
                        <input type="text" name="ttahosv" id="ttahosv" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="ttatensv">Tên Sinh Viên</label>
                        <input type="text" name="ttatensv" id="ttatensv" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="ttaphai">Giới Tính</label>
                        <select name="ttaphai" id="ttaphai" class="form-control">
                            <option value="0">Nữ</option>
                            <option value="1">Nam</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ttangaysinh">Ngày Sinh</label>
                        <input type="date" name="ttangaysinh" id="ttangaysinh" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="ttanoisinh">Nơi Sinh</label>
                        <input type="text" name="ttanoisinh" id="ttanoisinh" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="ttamakh">Mã Khóa</label>
                        <select name="ttamakh" id="ttamakh" class="form-control">
                            <option value="C#">Form C#</option>
                            <option value="TKW">Thiết Kế wed</option>
                            <option value="KT">Project</option>
                            <option value="EL">English</option>
                            <option value="SL">SQL SERVER</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ttahocbong">Học Bổng</label>
                        <input type="number" step="0.01" name="ttahocbong" id="ttahocbong" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="ttadiemtb">Điểm TB</label>
                        <input type="number" step="0.1" name="ttadiemtb" id="ttadiemtb" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm Sinh Viên</button>
                    <a href="/tta-list"  class="btn btn-primary">back</a>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
