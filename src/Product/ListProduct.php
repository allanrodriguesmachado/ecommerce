<?php

namespace Src\Product;

class ListProduct
{
    public function all(): array
    {
        return [
          [
              'name' => 'Playstation',
              'price' => 1223,
              'is_available' => true
          ],
            [
                'name' => 'X-box',
                'price' => 222,
                'is_available' => false
            ],
            [
                'name' => 'Nintendo Switch',
                'price' => 222,
                'is_available' => false
            ],
        ];
    }
}