<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [1, 'ut'],
            [2, 'aut'],
            [3, 'error'],
            [4, 'quasi'],
            [5, 'consequuntur'],
            [6, 'sed'],
            [7, 'exercitationem'],
            [8, 'corrupti'],
            [9, 'enim'],
            [10, 'in'],
            [11, 'omnis'],
            [12, 'voluptas'],
            [13, 'voluptates'],
            [14, 'neque'],
            [15, 'provident'],
            [16, 'nostrum'],
            [17, 'quia'],
            [18, 'eveniet'],
            [19, 'ea'],
            [20, 'qui'],
            [21, 'cum'],
            [22, 'dolorum'],
            [23, 'in'],
            [24, 'esse'],
            [25, 'natus'],
            [26, 'voluptas'],
            [27, 'et'],
            [28, 'vero'],
            [29, 'ex'],
            [30, 'laboriosam'],
            [31, 'nostrum'],
            [32, 'aut'],
            [33, 'est'],
            [34, 'recusandae'],
            [35, 'sint'],
            [36, 'quae'],
            [37, 'vero'],
            [38, 'vero'],
            [39, 'illum'],
            [40, 'quos'],
            [41, 'dolor'],
            [42, 'beatae'],
            [43, 'placeat'],
            [44, 'voluptates'],
            [45, 'facere'],
            [46, 'repellendus'],
            [47, 'deleniti'],
            [48, 'maiores'],
            [49, 'facilis'],
            [50, 'inventore'],
            [51, 'reprehenderit'],
            [52, 'sint'],
            [53, 'tempore'],
            [54, 'culpa'],
            [55, 'corporis'],
            [56, 'ea'],
            [57, 'nulla'],
            [58, 'sed'],
            [59, 'sint'],
            [60, 'numquam'],
            [61, 'saepe'],
            [62, 'et'],
            [63, 'quasi'],
            [64, 'ullam'],
            [65, 'deleniti'],
            [66, 'sit'],
            [67, 'sed'],
            [68, 'illo'],
            [69, 'expedita'],
            [70, 'dolore'],
            [71, 'et'],
            [72, 'temporibus'],
            [73, 'cumque'],
            [74, 'aut'],
            [75, 'ea'],
            [76, 'dignissimos'],
            [77, 'omnis'],
            [78, 'molestias'],
            [79, 'est'],
            [80, 'consequatur'],
            [81, 'architecto'],
            [82, 'optio'],
            [83, 'placeat'],
            [84, 'nesciunt'],
            [85, 'autem'],
            [86, 'vel'],
            [87, 'sunt'],
            [88, 'dolor'],
            [89, 'ipsam'],
            [90, 'reprehenderit'],
            [91, 'sit'],
            [92, 'cumque'],
            [93, 'labore'],
            [94, 'aperiam'],
            [95, 'provident'],
            [96, 'eaque'],
            [97, 'et'],
            [98, 'aperiam'],
            [99, 'eveniet'],
            [100, 'aut']
        ];

        foreach ($categories as $category) {
            DB::table('categorie')->insert([
                'idCat' => $category[0],
                'nomCat' => $category[1]
            ]);
        }
    }
}
