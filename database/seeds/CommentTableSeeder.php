<?php

use Illuminate\Database\Seeder;
use App\Comments;
class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comment = new Comments();
        $comment->post_id = 1;
        $comment->fullname = 'Olasupo Kazeem';
        $comment->comment_body =  'This is a nice one';
        $comment->save();

        $comment = new Comments();
        $comment->post_id = 1;
        $comment->fullname = 'Olasupo Kazeem';
        $comment->comment_body =  'This is a one to no bad ';
        $comment->save();

        $comment = new Comments();
        $comment->post_id = 2;
        $comment->fullname = 'Olasupo Kazeem';
        $comment->comment_body =  'This is a one to no bad ';
        $comment->save();
    }
}

