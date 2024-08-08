<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;


class SortByControllerUi extends Controller
{
  public function index(Request $request)
  {
    // Lấy giá trị cột để sắp xếp, mặc định là 'account_id'
    $sortBy = $request->get('sort_by', 'account_id');

    // Lấy giá trị thứ tự sắp xếp, mặc định là 'asc'
    $sortOrder = $request->get('sort_order', 'asc');

    // Lấy danh sách người dùng, sắp xếp theo yêu cầu và phân trang
    $users = User::orderBy($sortBy, $sortOrder)->paginate(10);

    // Trả về view với dữ liệu người dùng và các tham số sắp xếp
    return view('content.tables.TableShowSortById', compact('users', 'sortBy', 'sortOrder'));
  }

}
