<?php

namespace FrontEnd\Http\Controllers\Astro;

use Config;
use App;
use Lang;
use Mcms\Core\Models\Filters\TranslationFilters;
use Mcms\Core\Services\Lang\Contracts\LanguagesContract;
use Mcms\Core\Services\Menu\MenuService;
use Mcms\FrontEnd\Services\EditableRegions;


class AstroBootController
{
    protected $translations;
    protected $menu;
    public function __construct(
        LanguagesContract $translations,
        MenuService $menuService
    )
    {
        $this->translations = $translations;
        $this->menu = $menuService;
    }

    public function index(TranslationFilters $filters, EditableRegions $editableRegions)
    {
        $availableMenus = $this->menu->menuModel->get();
        $menus = $availableMenus->map(function ($item, $idx)  {
            return $this->menu->menuWithItems($item->id);
        });
        $defaultLang = App::getLocale();
        $allTranslations = [];
        foreach ($this->translations->locales() as $locale) {
            app()->setLocale($locale['code']);
            $allTranslations[$locale['code']] = Lang::get('astro');
        }
        $contactFormRegion = $editableRegions->filter('contact')->get(false);
        $formService = new \Mcms\FrontEnd\FormBuilder\FormBuilderService();
        $contactFormSchema = $formService->bySlug('contact-form');;

        return response()->json([
            'site' => [
                'name' => config('app.name'),
            ],
            'locales' => $this->translations->locales(),
            'defaultLang' => $defaultLang,
            'menus' => $menus,
            'contactForm' => $contactFormRegion,
            'contactFormSchema' => $contactFormSchema,
            'translations' => $allTranslations
        ]);
    }
}