<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh Sach Sinh Vien </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <section class="container">
        <div class="card">
            <div class="card-header">
                <h1>Danh Sách Sinh Viên</h1>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Mã Sinh Viên</th>
                            <th>Họ Sinh Viên</th>
                            <th>Tên Sinh Viên</th>
                            <th>Giới Tính</th>
                            <th>Ngày Sinh </th>
                            <th>Nơi Sinh</th>
                            <th>Mã Khóa</th>
                            <th>Học Bổng </th>
                            <th>Chức Năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $stt=0;
                        @endphp
                        @foreach ($ttasinhViens as $item)
                        <tr>
                            <td class="text-center">{{ ++$stt }}</td>
                            <td>{{ $item->ttamasv }}</td>
                            <td>{{ $item->ttahosv }}</td>
                            <td>{{ $item->ttatensv }}</td>
                            <td>{{ $item->ttaphai }}</td>
                            <td>{{ $item->ttangaysinh }}</td>
                            <td>{{ $item->ttanoisinh }}</td>
                            <td>{{ $item->ttamakh }}</td>
                            <td class="text-right">{{ $item->ttahocbong }}</td>
                            <td class="text-center"> 
                                <a href="" class="btn btn-warning"><i class="fa-solid fa-eye"></i></a>
                                <a href="" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"  ></i></a>
                                <a href="" class="btn btn-danger"><i class="fa-solid fa-trash" ></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer mt-3">
            <h3 class="btn btn-primary btn-lg">Tổng Số SV: {{ $ttasinhViens->count() }}</h3>
            <a href="/tta-insert" class="btn btn-secondary" style="margin-left: 80%">Thêm mới</a>
        </div>
    </section>
</body>
</html>
