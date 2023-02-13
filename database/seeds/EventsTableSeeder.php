<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('events')->delete();


        // // $data[] =
        //     [
        //         'user_id' => 1,
        //         'event_title' => 'イベントタイトル',
        //         'event_detail' => 'イベント詳細文章',
        //         'deadline' => now(),
        //         'city' => 1,
        //         'date_of_event' => now(),
        //         'end_time' => now(),
        //         'event_image' => 'noimage.jpg',
        //         'publish_flag' => 1,
        //         'category_id' => 1,
        //         'user_cl' => 0,
        //         'url' => 'http://localhost/'
        //     ];
        // // DB::table('events')->insert($data);

        // 以下８件分は「ゲーム」カテゴリのイベントです。カテゴリ番号１
        $data[] =
            [
                'user_id' => 2,
                'event_title' => 'どうぶつの森×タコパをしませんか？',
                'event_detail' => '任天堂Switchのあつまれどうぶつの森をプレイし楽しむながらタコパをしませんか？。年齢不問、会費は人数で按分します。ホルトホール利用料と飲み物、タコパ材料費です。場所はホルトホール505号室。定員10名。',
                'deadline' => now(),
                'city' => 1,
                'date_of_event' => now(),
                'end_time' => now(),
                'event_image' => 'あつまれどうぶつの森.jpg',
                'publish_flag' => 1,
                'category_id' => 1,
                'user_cl' => 0,
                'url' => 'http://localhost/'
            ];
        DB::table('events')->insert($data);
        $data[] =
            [
                'user_id' => 2,
                'event_title' => 'ウイニングイレブンの愛好家の皆さん集まろう',
                'event_detail' => 'サッカーゲーム「ウイニング・イレブン」シリーズの愛好家さんたち集まろう。場所は大分市甲乙町２−２−２・１０F　スポーツバー・X-LOOPにて。定員20名。年齢は２０歳以上。性別は問いません。今後はオンラインゲーム大会などをしていきましょう！ネットワークビジネス等の勧誘はお控えください。',
                'deadline' => now(),
                'city' => 1,
                'date_of_event' => now(),
                'end_time' => now(),
                'event_image' => 'ウイニングイレブン.jpg',
                'publish_flag' => 1,
                'category_id' => 1,
                'user_cl' => 2,
                'url' => 'http://localhost/'
            ];
        DB::table('events')->insert($data);
        $data[] =
            [
                'user_id' => 2,
                'event_title' => '大分のレトロゲーム好き 集まろう！',
                'event_detail' => '「BOOKカフェ一期一会」ではレトロゲームファン向け雑誌「月刊 OITA USED GAME」の編集長 小倉かおるさんをお招きしてトークイベントを開催します。サブスクにより過去の名ゲームが注目される熱い現状についてもお伺いします。ワンドリンク制500円です。　場所：別府市乙原町２−２−３　BOOKカフェ一期一会　定員30名です。',
                'deadline' => now(),
                'city' => 2,
                'date_of_event' => now(),
                'end_time' => now(),
                'event_image' => 'レトロゲーム.jpg',
                'publish_flag' => 1,
                'category_id' => 1,
                'user_cl' => 2,
                'url' => 'http://localhost/'
            ];
        DB::table('events')->insert($data);
        $data[] =
            [
                'user_id' => 2,
                'event_title' => 'ゲームクリエーター渡辺広二郎さんの作品ファンの方集まろう！',
                'event_detail' => 'プレーステーションゲームソフト「チルドレンシリーズ」で著名なクリエーター渡辺広二郎さんの作品ファンの皆さん集まりませんか？参加条件：渡辺さんのタイトルを１作以上はプレーしてください。
        場所は大分市丙丁町２−２−２ HANAKO 定員なし 注意事項：あくまでもファンの集まる会です、ご本人は来ません。
        ',
                'deadline' => now(),
                'city' => 1,
                'date_of_event' => now(),
                'end_time' => now(),
                'event_image' => '渡辺広二郎.jpg',
                'publish_flag' => 1,
                'category_id' => 1,
                'user_cl' => 0,
                'url' => 'http://localhost/'
            ];
        DB::table('events')->insert($data);

        $data[] =
            [
                'user_id' => 2,
                'event_title' => 'スプラトゥーン3で仲間を増やしませんか？',
                'event_detail' => 'スプラトゥーン3が2022年9月9日発売されました。スプラトゥーン3に興味ある皆さんとともに仲間を増やして楽しいイカライフを送りませんか？参加方法：Yescordを使って合流しましょう',
                'deadline' => now(),
                'city' => 1,
                'date_of_event' => now(),
                'end_time' => now(),
                'event_image' => 'スプラ.jpg',
                'publish_flag' => 1,
                'category_id' => 1,
                'user_cl' => 0,
                'url' => 'http://localhost/'
            ];
        DB::table('events')->insert($data);
        $data[] =
            [
                'user_id' => 2,
                'event_title' => 'ボードゲーム初心者集まれ！',
                'event_detail' => '中津市に新規オープンしたボードゲームカフェEnjoy。２月12日（日）には初心者でも楽しめるボードゲームをチョイスしてルールを解説。当日はぼっち参加でも大丈夫！気軽にぜひ参加してください。
                中津市如水町２−２−２如水第２ビル１階 ワンドリンクオーダー制５００円から。',
                'deadline' => now(),
                'city' => 14,
                'date_of_event' => now(),
                'end_time' => now(),
                'event_image' => 'ボードゲーム.jpg',
                'publish_flag' => 1,
                'category_id' => 1,
                'user_cl' => 2,
                'url' => 'http://localhost/'
            ];
        DB::table('events')->insert($data);
        $data[] =
            [
                'user_id' => 1,
                'event_title' => 'モルカーゲーム×バレンタイン友チョコ交換企画',
                'event_detail' => 'モルカーのゲームを楽しみながらバレンタインを楽しく過ごそう！リズムモルカーゲームで頑張った方にベルギー皇室御用達チョコレート、メーバンスをプレゼント。奮ってご参加ください。参加要件：チョコ交換用に1000円前後のチョコを持ってきてください。宇佐市青葉町２−２−２　巴ビル３階　CafeKIKI 幹事：今村',
                'deadline' => now(),
                'city' => 1,
                'date_of_event' => now(),
                'end_time' => now(),
                'event_image' => 'モルカー.jpg',
                'publish_flag' => 1,
                'category_id' => 1,
                'user_cl' => 0,
                'url' => 'http://localhost/'
            ];
        DB::table('events')->insert($data);
        $data[] =
            [
                'user_id' => 1,
                'event_title' => '刀剣乱舞ファン集まろう〜刀匠さんをお招きします〜',
                'event_detail' => '刀剣乱舞ファンの方々、ぜひお集まりください。鎌倉時代に作られたとされる日本刀（大太刀）の山谷丸を作った新田双葉さんをお招きします。刀剣乱舞の世界をより深く楽しもう！',
                'deadline' => now(),
                'city' => 1,
                'date_of_event' => now(),
                'end_time' => now(),
                'event_image' => '刀剣乱舞.jpg',
                'publish_flag' => 1,
                'category_id' => 1,
                'user_cl' => 0,
                'url' => 'http://localhost/'
            ];
        DB::table('events')->insert($data);


        // 以下８件分は「地域・暮らし」のカテゴリです。カテゴリ番号６
        $data[] =
            [
                'user_id' => 1,
                'event_title' => '大分県SDGsフォーラム',
                'event_detail' => '「ＳＤＧｓって何？」から「ＳＤＧｓをきっかけにイノベーションを起こしたい！」
                まで、大分県民でSDGｓを考える１日になります。県内の企業や自治体が取り組むSDGｓを紹介する展示ブースの見学や
                シンポジウムの聴講を通じて、「NEXT大分」への挑戦を開始しましょう。会場内には50を超えるブースを出展する予定です。
                大分県内の企業や自治体が取り組むSDGｓを紹介しますので、是非、御覧ください！開催場所：別府デーコンプラザ　展示ホール

                ',
                'deadline' => now(),
                'city' => 2,
                'date_of_event' => now(),
                'end_time' => now(),
                'event_image' => 'サステナブル.png',
                'publish_flag' => 1,
                'category_id' => 6,
                'user_cl' => 0,
                'url' => 'http://localhost/'
            ];
        DB::table('events')->insert($data);
        $data[] =
            [
                'user_id' => 1,
                'event_title' => '大分県出身芥川賞作家　小野正子さんとKANOさんトークセッション',
                'event_detail' => '小野正子さんとタレントKANOさんと共に考える障がいとは？多様性とは？本音でトークセッション。
                大分県佐伯市の蒲江出身の小野さんの受賞作は温かな蒲江の人たちと障がいのある兄が原体験になっています。トークセッションの後、交流会を行います。定員70名
                大分県障害福祉課097−543-1111 担当　大野',
                'deadline' => now(),
                'city' => 1,
                'date_of_event' => now(),
                'end_time' => now(),
                'event_image' => '障がい.png',
                'publish_flag' => 1,
                'category_id' => 6,
                'user_cl' => 0,
                'url' => 'http://localhost/'
            ];
        DB::table('events')->insert($data);
        $data[] =
            [
                'user_id' => 1,
                'event_title' => '高崎山城を攻めよう！ゆかいな城郭考古学者石丸さんの解説つき。',
                'event_detail' => '自分が武将だったら攻めたくない山城「城攻めしたくない山城」ランキング３位に堂々ランクイン！今回は考古学者石丸太郎さんと
                共に解説付き。ポイントを押さえながら実際に城を攻める気分で頂上まで登頂しよう！解説▶︎主郭は山頂にあり周囲に土塁が巡り、曲輪内には溜め池のような窪地と築山のような土壇がある。
                東端部には円形の凹みを持つ井戸のような石垣があり、烽火台と考えられているが『大分の中世城館』によれば、幕末に外国船を監視し長崎奉行所に伝達するための烽火台ではないかと推測している。
                お問い合わせ先▶︎大分市文化財課097-523-1111　担当　北川景 ',
                'deadline' => now(),
                'city' => 9,
                'date_of_event' => now(),
                'end_time' => now(),
                'event_image' => '高崎山城.jpg',
                'publish_flag' => 1,
                'category_id' => 6,
                'user_cl' => 0,
                'url' => 'http://localhost/'
            ];
        DB::table('events')->insert($data);

        $data[] =
            [
                'user_id' => 1,
                'event_title' => 'うめキャンプ村まちキャンプイベント',
                'event_detail' => '令和5年2月18日（土曜日）に大分市祝祭の広場で「まちキャンプイベント」を開催いたします！
                2月17日（金曜日）は前夜祭として、18時からキャンプファイヤーを行います！
                テーマは「いま、ここに生まれる　しぜんとひとのものがたり」です。
                佐伯市宇目の自然、食、文化など祖母・傾・大崩ユネスコエコーパークに登録された宇目の魅力を「まち」に向けて発信します。
                うめキャンプ村そらのほとりによるキャンプ体験やまち探検トレッキング、焚き火、しし汁の無料配布など様々なブースを準備しています。
                ぜひ、大分市のまちなかでアウトドアを楽しみませんか？
                【場所】
                　お部屋ラボ　祝祭の広場
                　（大分県大分市府内町1丁目1-1）
                〇ステージでのトークショー〇キャンプ体験　※要事前予約〇まち探検トレック　※要事前予約〇キャンプファイヤー〇焚き火〇祖母・傾・大崩ユネスコエコパーク展示〇野外学校FOS×そらのほとり展示〇木工クラブ〇陶芸工房〇しし汁の無料配布　※数量限定〇苗木の無料配布　※数量限定〇最新キャンプグッズの展示↓キャンプ体験やまち探検トレックの事前予約、イベント詳細については下記から御確認ください。
                まちキャンプイベント特設ページ
                https://soranohotori.com/  （うめキャンプ村そらのほとりHP内  特設ページ）',
                'deadline' => now(),
                'city' => 9,
                'date_of_event' => now(),
                'end_time' => now(),
                'event_image' => '佐伯市キャンプ.jpg',
                'publish_flag' => 1,
                'category_id' => 6,
                'user_cl' => 0,
                'url' => 'http://localhost/'
            ];
        DB::table('events')->insert($data);

        $data[] =
            [
                'user_id' => 1,
                'event_title' => '大分県WEB物産展でゲットしたもの自慢会',
                'event_detail' => '「大分県WEB物産展」第3弾 2/10～　楽天市場でスタート！
                楽天市場で対象県産品の購入に使える割引クーポンをプレゼント🎁 Yahoo!ショッピングと併せて、ぜひご利用ください！
                ゲットした自慢の物産展を持ち寄り交流会を開きます。
                詳しくはこちら▶︎https://event.rakuten.co.jp/area/oita/exhibition/',
                'deadline' => now(),
                'city' => 1,
                'date_of_event' => now(),
                'end_time' => now(),
                'event_image' => '物産展.jpg',
                'publish_flag' => 1,
                'category_id' => 6,
                'user_cl' => 0,
                'url' => 'http://localhost/'
            ];
        DB::table('events')->insert($data);
        $data[] =
            [
                'user_id' => 1,
                'event_title' => '農業法人等合同就職相談会について',
                'event_detail' => '農業法人等合同就職相談会を開催します
                時間：2月19日（日）13：00～16：00
                場所：大分市コンパルホール
                農業、林業、水産業に関心のある方、事前予約不要ですので、お気軽にお越しください‼️
                先輩就農者体験発表もあります。〇開催内容　(1)就業セミナー（13時00分～13時50分と14時00分～14:50分）※1回目と2回目は同内容
                新規就農者・就業者の体験談
                ■個別相談（13時00分～16時00分）
                ・参加法人との個別就職相談会
                ・農林水産業の自営就業相談
                〇出展ブース　・大分市広域圏農業（大分市、津久見市、竹田市、豊後大野市、由布市）
            　　・林業就業相談・しいたけ就業相談・漁業就業相談・就農総合相談【お問い合わせ先】
            農林水産業就業相談会農業大分市農林水産部農政課
            　　大分市荷揚町2番31号　TEL:097-537-5628
            農業法人等合同就職相談会　大分県農林水産部 新規就業･経営体支援課　担い手確保班
            　　大分市大手町3-1-1　TEL:097-506-3586',
                'deadline' => now(),
                'city' => 1,
                'date_of_event' => now(),
                'end_time' => now(),
                'event_image' => '農業.jpg',
                'publish_flag' => 1,
                'category_id' => 6,
                'user_cl' => 0,
                'url' => 'http://localhost/'
            ];
        DB::table('events')->insert($data);
        $data[] =
            [
                'user_id' => 1,
                'event_title' => '大分県立歴史博物館より企画展「宇佐神宮」のお知らせ',
                'event_detail' => '宇佐神宮を総本宮とする八幡神は、隼人の乱の鎮定に守護神としてまつられ、
                大仏造立への援助、さらには、勅使和気清麻呂の派遣により弓削道鏡が皇位につくのを退けた宇佐八幡宮神託事件と、
                度々国家の一大事に関与し、一地方神からその地位を向上させ、国家神として確固たる地位を固めるに至りました。
                昨年度、40周年を迎えた当館が、設立当初から調査・研究に取組んできた宇佐神宮について、これまでの集大成として、
                その歴史や文化を紹介します。歴史博物館〒872-0101 大分県宇佐市大字高森字京塚 代表 Tel：0978-37-2100 Fax：0978-37-2101',
                'deadline' => now(),
                'city' => 11,
                'date_of_event' => now(),
                'end_time' => now(),
                'event_image' => '大分県立歴史博物館.jpg',
                'publish_flag' => 1,
                'category_id' => 6,
                'user_cl' => 1,
                'url' => 'http://localhost/'
            ];
        DB::table('events')->insert($data);
        $data[] =
            [
                'user_id' => 1,
                'event_title' => '江戸時代にタイムスリップ！杵築お城まつり',
                'event_detail' => '「きつきお城まつり」のハイライトは、江戸時代の衣装を身に付け、
                お殿様やお姫様、侍などに扮して城下町を練り歩く仮装行列です。
                その他にも砲術演武や大衆演劇などが催され、中は杵築の町のあちらこちらが江戸時代一色に染まります。
                街を歩いているだけでも江戸時代にタイムスリップしたような不思議で楽しい気分に浸ることができます。
                またレンタル着物などで街を歩くと資料館やお屋敷入場の割引サービスもあります。
                詳しくは、きつきお城まつり実行委員会TEL: 0978-63-0100 （杵築市観光協会内）',
                'deadline' => now(),
                'city' => 6,
                'date_of_event' => now(),
                'end_time' => now(),
                'event_image' => '杵築着物散策.jpg',
                'publish_flag' => 1,
                'category_id' => 6,
                'user_cl' => 0,
                'url' => 'http://localhost/'
            ];
        DB::table('events')->insert($data);
    }
}
