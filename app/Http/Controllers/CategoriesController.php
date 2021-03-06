<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function show(Category $category,Topic $topic, Request $request)
    {
        //读取分类ID关联的话题，并按每20条分布
        $topics = $topic->withOrder($request->order)
        ->where('category_id', $category->id)
        ->with('user', 'category')   // 预加载防止 N+1 问题
        ->paginate(20);
        //传参变量话题和分类到模板中
        return view('topics.index', compact('topics', 'category'));
    }
}
