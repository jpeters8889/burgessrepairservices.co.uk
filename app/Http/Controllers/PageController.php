<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use JPeters\PageViewBuilder\Page;

class PageController extends Controller
{
    public function handle(Page $page, $path = '')
    {
        $pages = [
            '' => 'index',
            'what-we-do' => 'what-we-do',
            'ata-accreditation' => 'ata',
            'hot-rods-and-bikes' => 'bikes',
            'contact-us' => 'contact',
            'useful-links' => 'links',
            'terms-and-conditions' => 'terms',
            'privacy-policy' => 'privacy',
        ];

        if (!array_key_exists($path, $pages)) {
            abort(404);
        }

        return $page->render($pages[$path]);
    }
}
