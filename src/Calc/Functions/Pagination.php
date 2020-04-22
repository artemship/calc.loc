<?php


namespace Calc\Functions;


class Pagination
{
    public static function createPagination(array $data): array
    {
        $pagination[0] = '<a href="?page=1">1</a>';
        $pagination[1] = '<a href="?page=2" class="selected">2</a>';
        $pagination[2] = '<a href="?page=3">3</a>';

        return $pagination;
    }

}