<?php

namespace FrontEnd\Layouts;



use Mcms\Pages\Models\Filters\PageFilters;
use Mcms\Pages\Models\Page;
use Mcms\Pages\Services\Page\PageService;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class PageById
{
    protected $layout;

    public function __construct(Collection $layout)
    {
        $this->layout = $layout;
    }

    public function handle(Request $request, Page $page, PageService $pageService, PageFilters $filters)
    {
        if (isset($page->settings['client'])){
            $client = Page::find($page->settings['client']);
            return ['client' => $client];
        }
    }
}