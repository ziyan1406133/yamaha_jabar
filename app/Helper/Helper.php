<?php


if (!function_exists('activeClass'))
{
    function activeClass($name)
    {
        $currentRouteName = Route::currentRouteName();
        $result = "";
        if(strpos($currentRouteName, $name) !== false) {
            $result = "active";
        }
        return $result;
    }
}


if (!function_exists('list_mapel'))
{

    /**
     * Display a listing of the resource.
     *
     * @return array list_mapel
     */
    function list_mapel()
    {
        $list_mapel = array(
            "biologi" => "Biologi",
            "kimia" => "Kimia",
            "fisika" => "Fisika",
            "sosiologi" => "Sosiologi",
            "sejarah" => "Sejarah",
            "ekonomi" => "Ekonomi",
            "al_quran" => "Al-Qur'an",
            "ilmu_kalam" => "Ilmu Kalam"
        );
        return $list_mapel;
    }
}


if (!function_exists('all_categories'))
{
    function all_categories() {
        $categories = array("biologi", "kimia", "fisika", "sosiologi", "sejarah", "ekonomi", "al_quran", "ilmu_kalam");
        return $categories;
    }
}

