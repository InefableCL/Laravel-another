<?php


namespace App\Http\Services;

use App\Models\News;
use Orchestra\Parser\Xml\Facade as XmlParser;

class XMLParserService
{
    public function saveNews($link)
    {
        $xml = XmlParser::load($link);

        $data = $xml->parse([
            'title' => [
                'uses' => 'channel.title'
            ],
            'link' => [
                'uses' => 'channel.link'
            ],
            'description' => [
                'uses' => 'channel.description'
            ],
            'image' => [
                'uses' => 'channel.image.url'
            ],
            'news' => [
                'uses' => 'channel.item[title,link,guid,description,pubDate]'
            ]
        ]);

        $news = new News;

        foreach ($data['news'] as $newsOne) {
            $news->title = $newsOne['title'];
            $news->inform = $newsOne['description'];
            $news->is_private = false;
            $news->link = $newsOne['link'];
            $news->save();
        }
    }
}
