<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
//以下でAPP内のModels内のPost.phpのPostクラスを使いたいから書いてる。

class PostController extends Controller
//PostControllerクラスはControllクラスを継承している。ControllクラスはLaravelの便利な機能を提供してくれる。
{
    public function index(Post $post)
    {
        //indexという名前の関数で処理をする(名前は自分でつけた),その際Post.phpのPostというクラスをインスタンス化して、$postと名前をつけた。

        return view('posts.index')->with(['posts' => $post->getPaginateByLimit(1)]);
        //この行ではviewにデータを埋め込んでいるイメージ。
        //retrun()のかっこの中には'Bladeファイル名の「.blade.php」より前の部分'を書く。postsファイル内のindex.blade.phpという意味
        //withはviewファイルのindex.blade.php(のposts)に情報を渡してる。
        //with以降はgetPagimentByLimitの情報を$postに渡してそれをindex.blade.phpのクラスpostsに渡してる。with(['キー' => 値])
        //Postクラスのインスタンスである$postからgetPaginateByLimit関数を呼び出してる。
    }
    
    public function show(Post $post)
    //web.phpの{post}の値が引数として$postに引き渡される。
    {
        return view('posts/show')->with(['post'=>$post]);
    }
    
}

