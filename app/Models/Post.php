<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
//class 子クラス名 extends 親クラス名 でクラスを継承することができる。
//ModelクラスはLaravelがデフォルトでデータベース操作で使えるメソッドが入っている。
//そのためModelクラスを継承しておけば色々なメソッドを自分で定義することなく使えて便利。
{
    use HasFactory;

    
    public function getPaginateByLimit(int $limit_count = 5)
    //intは整数型という意味。
    {
        return $this->orderBy('updated_at','DESC')->paginate($limit_count);
        //ordeByメソッドや、paginateメソッドはLaravelのEloquentの機能の一部
        //orderByは第一引数に並び替えるカラム名、第二引数には昇順か降順かを渡す。
    }


}

