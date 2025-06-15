<?php

return [

    /*
    |--------------------------------------------------------------------------
    | バリデーション言語行
    |--------------------------------------------------------------------------
    |
    | 以下の言語行は、バリデタークラスで使用されるデフォルトの
    | エラーメッセージです。サイズルールには複数のバージョンがあり、
    | 入力タイプに応じて適用されます。
    |
    */

    'accepted'             => ':attribute を承認してください。',
    'accepted_if'          => ':other が :value の場合、:attribute を承認してください。',
    'active_url'           => ':attribute は有効なURLではありません。',
    'after'                => ':attribute には :date より後の日付を指定してください。',
    'after_or_equal'       => ':attribute には :date 以降の日付を指定してください。',
    'alpha'                => ':attribute にはアルファベットのみ使用できます。',
    'alpha_dash'           => ':attribute には英数字、ハイフン（-）、アンダースコア（_）が使用できます。',
    'alpha_num'            => ':attribute には英数字が使用できます。',
    'array'                => ':attribute には配列を指定してください。',
    'ascii'                => ':attribute にはASCII文字のみを指定してください。',
    'before'               => ':attribute には :date より前の日付を指定してください。',
    'before_or_equal'      => ':attribute には :date 以前の日付を指定してください。',
    'between'              => [
        'numeric' => ':attribute には :min から :max までの数値を指定してください。',
        'file'    => ':attribute には :min KBから :max KBまでのファイルを指定してください。',
        'string'  => ':attribute には :min 文字から :max 文字までの文字列を指定してください。',
        'array'   => ':attribute の項目は :min 個から :max 個まで指定してください。',
    ],
    'boolean'              => ':attribute には true か false を指定してください。',
    'confirmed'            => ':attribute の確認が一致しません。',
    'current_password'     => '現在のパスワードが正しくありません。',
    'date'                 => ':attribute は正しい日付ではありません。',
    'date_equals'          => ':attribute は :date と同じ日付を指定してください。',
    'date_format'          => ':attribute の形式は :format で指定してください。',
    'decimal'              => ':attribute には :decimal 桁の小数を含めてください。',
    'declined'             => ':attribute は拒否してください。',
    'different'            => ':attribute と :other には異なる値を指定してください。',
    'digits'               => ':attribute は :digits 桁で指定してください。',
    'digits_between'       => ':attribute は :min 桁から :max 桁で指定してください。',
    'dimensions'           => ':attribute の画像サイズが無効です。',
    'distinct'             => ':attribute には重複している値があります。',
    'email'                => ':attribute は有効なメールアドレス形式で指定してください。',
    'ends_with'            => ':attribute は :values のいずれかで終わる必要があります。',
    'enum'                 => '選択された :attribute は無効です。',
    'exists'               => '選択された :attribute は無効です。',
    'file'                 => ':attribute にはファイルを指定してください。',
    'filled'               => ':attribute に値を指定してください。',
    'gt'                   => [
        'numeric' => ':attribute には :value より大きい数値を指定してください。',
        'file'    => ':attribute には :value KBより大きいファイルを指定してください。',
        'string'  => ':attribute には :value 文字より多い文字列を指定してください。',
        'array'   => ':attribute の項目は :value 個より多く指定してください。',
    ],
    'gte'                  => [
        'numeric' => ':attribute には :value 以上の数値を指定してください。',
        'file'    => ':attribute には :value KB以上のファイルを指定してください。',
        'string'  => ':attribute には :value 文字以上の文字列を指定してください。',
        'array'   => ':attribute の項目は :value 個以上指定してください。',
    ],
    'image'                => ':attribute には画像ファイルを指定してください。',
    'in'                   => '選択された :attribute は無効です。',
    'in_array'             => ':attribute は :other に存在しません。',
    'integer'              => ':attribute には整数を指定してください。',
    'ip'                   => ':attribute には有効なIPアドレスを指定してください。',
    'ipv4'                 => ':attribute にはIPv4アドレスを指定してください。',
    'ipv6'                 => ':attribute にはIPv6アドレスを指定してください。',
    'json'                 => ':attribute にはJSON文字列を指定してください。',
    'lt'                   => [
        'numeric' => ':attribute には :value より小さい数値を指定してください。',
        'file'    => ':attribute には :value KBより小さいファイルを指定してください。',
        'string'  => ':attribute には :value 文字より少ない文字列を指定してください。',
        'array'   => ':attribute の項目は :value 個より少なく指定してください。',
    ],
    'lte'                  => [
        'numeric' => ':attribute には :value 以下の数値を指定してください。',
        'file'    => ':attribute には :value KB以下のファイルを指定してください。',
        'string'  => ':attribute には :value 文字以下の文字列を指定してください。',
        'array'   => ':attribute の項目は :value 個以下で指定してください。',
    ],
    'mac_address'          => ':attribute には有効なMACアドレスを指定してください。',
    'max'                  => [
        'numeric' => ':attribute には :max 以下の数値を指定してください。',
        'file'    => ':attribute には :max KB以下のファイルを指定してください。',
        'string'  => ':attribute は :max 文字以下で指定してください。',
        'array'   => ':attribute の項目は :max 個以下で指定してください。',
    ],
    'mimes'                => ':attribute には :values タイプのファイルを指定してください。',
    'mimetypes'            => ':attribute には :values タイプのファイルを指定してください。',
    'min'                  => [
        'numeric' => ':attribute には :min 以上の数値を指定してください。',
        'file'    => ':attribute には :min KB以上のファイルを指定してください。',
        'string'  => ':attribute は :min 文字以上で指定してください。',
        'array'   => ':attribute の項目は :min 個以上指定してください。',
    ],
    'multiple_of'          => ':attribute は :value の倍数でなければなりません。',
    'not_in'               => '選択された :attribute は無効です。',
    'not_regex'            => ':attribute の形式が無効です。',
    'numeric'              => ':attribute には数値を指定してください。',
    'password'             => 'パスワードが正しくありません。',
    'present'              => ':attribute が存在している必要があります。',
    'prohibited'           => ':attribute は禁止されています。',
    'prohibited_if'        => ':other が :value の場合、:attribute は禁止されています。',
    'prohibited_unless'    => ':other が :values に含まれていない場合、:attribute は禁止されています。',
    'prohibits'            => ':attribute が指定されている場合、:other を指定できません。',
    'regex'                => ':attribute の形式が無効です。',
    'required'             => ':attribute は必須です。',
    'required_array_keys'  => ':attribute には :values のエントリが必要です。',
    'required_if'          => ':other が :value の場合、:attribute は必須です。',
    'required_unless'      => ':other が :values に含まれていない場合、:attribute は必須です。',
    'required_with'        => ':values が指定されている場合、:attribute も指定してください。',
    'required_with_all'    => ':values がすべて指定されている場合、:attribute も指定してください。',
    'required_without'     => ':values が指定されていない場合、:attribute を指定してください。',
    'required_without_all' => ':values のいずれも指定されていない場合、:attribute を指定してください。',
    'same'                 => ':attribute と :other には同じ値を指定してください。',
    'size'                 => [
        'numeric' => ':attribute は :size を指定してください。',
        'file'    => ':attribute は :size KBのファイルである必要があります。',
        'string'  => ':attribute は :size 文字で指定してください。',
        'array'   => ':attribute の項目数は :size 個でなければなりません。',
    ],
    'starts_with'          => ':attribute は :values のいずれかで始まる必要があります。',
    'string'               => ':attribute には文字列を指定してください。',
    'timezone'             => ':attribute には有効なタイムゾーンを指定してください。',
    'unique'               => ':attribute は既に使用されています。',
    'uploaded'             => ':attribute のアップロードに失敗しました。',
    'url'                  => ':attribute は有効なURL形式で指定してください。',
    'uuid'                 => ':attribute は有効なUUID形式で指定してください。',

    /*
    |--------------------------------------------------------------------------
    | カスタムバリデーション言語行
    |--------------------------------------------------------------------------
    |
    | 以下の行では属性名に対するカスタムバリデーションメッセージを
    | 指定できます。たとえば 'email.required' に対して特定の
    | メッセージを指定できます。
    |
    */

    'custom' => [
        'email' => [
            'required' => 'メールアドレスは必須です。',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | カスタム属性名
    |--------------------------------------------------------------------------
    |
    | 以下の行では `attribute` プレースホルダに置き換わる
    | 人間にわかりやすい名前を指定します。
    |
    */

    'attributes' => [],

];
