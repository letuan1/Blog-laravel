<?php

namespace App\Http\Controllers;

use App\Model\BlogModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = BlogModel::orderBy('id', 'DESC')->paginate(5, ['*'], 'blog');
        return view('view', compact('blogs'));
    }

    public function readMore(Request $request)
    {
        $id = $request->id;
        $more = BlogModel::where('id', $id)->get();
        return view('blog',
            [
                'mores' => $more,
                'id' => $id
            ]
        );
    }

    public function viewinsertBlog()
    {
        return view('insertBlog');
    }

    public function addNewBlog(Request $request)
    {
        $date = date('Y-m-d H:i:s');
        $blogs = new BlogModel();
        $blogs->title = $request->input('title');
        $blogs->content = $request->input('content');
        $blogs->Created = $date;
        $blogs->noidung = $request->input('noidung');
        $blogs->save();

        $request->session()->flash('blog', 'Tạo mới blog thành công ');
        return redirect(route('blog'));
    }

    public function viewUpdateBlog($id)
    {
        $blogs = BlogModel::find($id);
        return view('update', compact('blogs'));
    }

    public function updateBlog(Request $request, $id)
    {
        $update = BlogModel::where('id', $id)
            ->update([
                'title' => $request->input('title'),
                'content' => $request->input('content'),
                'noidung' => $request->input('noidung')
            ]);
        $request->session()->flash('blog', 'Cập nhật blog thành công ');
        return redirect(route('blog'));
    }

    public function delete($id)
    {
        $delete = BlogModel::find($id)->delete();
        Session::flash('blog', 'Xóa blog thành công ');

        return redirect(route('blog'));
    }
}
