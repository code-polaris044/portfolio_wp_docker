 <?php if (is_home()) : ?>
     <div class="instagram__content">
         <?php
            //Instagram ビジネスアカウント ID
            $business_id = '17841457892187905';
            //アクセストークン
            $token = 'EAADeDKZBtnXYBAIWfZARbDDTDzePRKZB9YZABHb2DHDK3kvNIqh1MSWKZBwnduhxq9Y6ckun7tcxNZCuiKvvZB7FiYZAnjz7G5GgL7arHhVjQZB0BRS7avI8vndZCNsMZCKgLJjnl40cnC72JLD5MhQW9OuA6aBmXiRMyu2ZC1SipnlXCfa2sNSZANKB7bcIaYUMCDdIZD';
            //グラフAPI ホストURL（ルートエンドポイント）
            $api = 'https://graph.facebook.com/';
            //API のバージョン
            $version = 'v17.0';
            //取得するメディアの件数（0 または false を指定した場合は件数の制限なし）
            $count = '10';
            //取得するフィールド
            $field = 'caption,media_url,thumbnail_url,permalink,like_count,comments_count,media_type';
            //クエリ（この場合、配列で記述して後で URL エンコード）
            $query = [
                //取得件数の制限と取得するフィールドを指定（$countの値が0やfalseの場合は件数の制限なし）
                'fields' => $count ? 'media.limit(' . $count . '){' . $field . '}' : 'media{' . $field . '}',
                //アクセストークンを指定
                'access_token' => $token
            ];
            //URL を作成（クエリは http_build_query() で URL エンコード）
            $url = $api . $version . '/' . $business_id . '?' . http_build_query($query);

            //cURL セッションを初期化
            $ch = curl_init();
            //取得する URL を指定
            curl_setopt($ch, CURLOPT_URL, $url);
            //GET メソッドを使用（省略可能）
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
            //戻り値を文字列で返す（データを結果として取得）
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            //結果を変数に代入（失敗すれば false、成功すれば取得結果が格納される）
            $result = curl_exec($ch);
            //cURL セッションを終了
            curl_close($ch);

            //レスポンスを格納する変数の初期化
            $insta_response = null;
            //API のエラーを表示するかどうか
            $show_api_error = false;

            if ($result) {
                //取得結果（JSON）をデコードしてレスポンスを格納する変数に代入
                $insta_response = json_decode($result);
                if (isset($insta_response->error)) {
                    //取得結果にエラーがあればメッセージを表示
                    echo 'エラーが発生しました ';
                    if ($show_api_error) {
                        //$show_api_error が true なら API のエラーコードとメッセージを表示
                        $error = $insta_response->error;
                        echo 'Error Code ' . $error->code . ' : ' . $error->message;
                    }
                    //レスポンスを格納する変数 $insta_response を false に
                    $insta_response = false;
                } elseif (!isset($insta_response->media)) {
                    // 投稿（メディア）が存在しない場合
                    $insta_response = false;
                }
            }
            ?>

         <?php
            //取得結果にエラーがなく投稿が存在すれば一覧を出力
            if ($insta_response) {
                //レスポンスのデータは配列なので foreach でループ処理
                foreach ($insta_response->media->data as $val) {
                    //メディアタイプがビデオの場合
                    if ($val->media_type === 'VIDEO') {
                        $src = $val->thumbnail_url;
                        //ビデオの場合は以下の HTML でアイコンを表示
                        $video = '<span class="video_icon"></span>';
                    }
                    //メディアタイプが画像の場合
                    else {
                        $src = $val->media_url;
                        $video = '';
                    }
            ?>
                 <div class="instagram__img__wrap">
                     <a href="<?php echo $val->permalink; ?>" target="_blank">
                         <img src="<?php echo $src; ?>" alt="<?php echo isset($val->caption) ? $val->caption : ''; ?>">
                         <?php echo $video ? $video : ''; //ビデオの場合は追加の span 要素を出力
                            ?>
                     </a>
                 </div>
         <?php
                }
            }
            ?>
     </div>
 <?php endif; ?>
