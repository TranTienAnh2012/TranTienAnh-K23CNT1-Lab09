<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ttaSinhVien;

class ttasinhviencontroller extends Controller
{
    //list , edit, insert, delete
 public function ttalist()
 { 
    //lấy toàn bộ dữ liệu trong bảng sinh viên 

    $ttasinhViens = ttaSinhVien::all();
    foreach ($ttasinhViens as $sinhVien) {
        $sinhVien->ttangaysinh = \Carbon\Carbon::parse($sinhVien->ttangaysinh)->format('Y-m-d');  // Định dạng ngày
    }
    return view('ttasinhvien.ttalist',['ttasinhViens'=>$ttasinhViens]);
 } 
 #insert
 public function ttainsert()
    {
        return view('ttasinhvien.ttainsert');
    }

    // Xử lý thêm sinh viên
    public function ttainsertsubmit(Request $request)
    {
        $request->validate([
            'ttamasv' => 'required|string|max:10|unique:ttasinhvien,ttamasv',
            'ttahosv' => 'required|string|max:50',
            'ttatensv' => 'required|string|max:50',
            'ttaphai' => 'required|in:0,1',  // Validation này giữ nguyên
            'ttangaysinh' => 'required|date',
            'ttanoisinh' => 'required|string|max:100',
            'ttamakh' => 'required|string|max:10',
            'ttahocbong' => 'nullable|numeric',
            'ttadiemtb' => 'nullable|numeric|min:0|max:10',
        ]);
    
        // Tạo sinh viên mới và lưu vào cơ sở dữ liệu
        $sinhVien = new ttaSinhVien;
        $sinhVien->ttamasv = $request->ttamasv;
        $sinhVien->ttahosv = $request->ttahosv;
        $sinhVien->ttatensv = $request->ttatensv;
        // Chuyển ttaphai sang kiểu int trước khi lưu
        $sinhVien->ttaphai = (int)$request->ttaphai;  
        $sinhVien->ttangaysinh = $request->ttangaysinh;
        $sinhVien->ttanoisinh = $request->ttanoisinh;
        $sinhVien->ttamakh = $request->ttamakh;
        $sinhVien->ttahocbong = $request->ttahocbong;
        $sinhVien->ttadiemtb = $request->ttadiemtb;
    
        // Lưu vào cơ sở dữ liệu
        $sinhVien->save();
    
        // Quay lại trang danh sách với thông báo thành công
        return redirect('/tta-list')->with('sinhVien_created', 'Đã thêm mới một sinh viên thành công!');
    }
    

}
