<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
	public function index(){
		return view('admin.category.index');
	}

	public function add(){
		return view('admin.category.index');
	}

	 public function edit(){
		return view('admin.category.index');
	}
}