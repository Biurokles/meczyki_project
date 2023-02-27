<?php

namespace App\Http\Controllers\Api;
use App\Models\Author;
use App\Models\News;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AuthorsController extends Controller
{
    public function showAuthors($author_id)
    {
        $author = Author::find($author_id);
        $return = [];
        foreach($author->news()->get() as $news){
            $single_record = [];
            $single_record["id"] = $news->id;
            $single_record["title"] = $news->title;
            $single_record["text"] = $news->text;
            $single_record["created_at"] = $news->created_at;

            $return[] = $single_record;
        }

        return $return;
    }
    public function top3()
    {
        $authors = DB::select("SELECT authors.name FROM authors,author_news,news
                                        where authors.id=author_news.author_id
                                        and news.id=author_news.news_id
                                        and news.created_at between date_sub(now(),INTERVAL 1 WEEK) and now()
                                        group by authors.name
                                        order by count(news.title)
                                        limit 3 ");
        return $authors;
    }

}
