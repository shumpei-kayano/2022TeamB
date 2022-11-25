<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'category_name' => 'ゲーム',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => 'スポーツ',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => '芸能人・有名人',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => '同世代',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => '金融・ビジネス',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => '地域・暮らし',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => 'アニメ・漫画',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => '働き方・仕事',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => '音楽',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => 'ファッション・美容',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => '研究・学習',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => '健康',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => '料理・グルメ',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => 'ゲーム',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => 'イラスト',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => '団体',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => '学校・同窓会',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => '妊活・子育て',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => '乗り物',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => '旅行',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => '動物・ペット',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => '写真',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => 'TV・VOD',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => 'サ活
            ',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => '本',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => '映画・舞台',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => 'その他',
        ];
        DB::table('categories')->insert($param);
    }
}
