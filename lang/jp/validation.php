<?php

/*
|--------------------------------------------------------------------------
| Validation Language Lines
|--------------------------------------------------------------------------
|
| The following language lines contain the default error messages used by
| the validator class. Some of these rules have multiple versions such
| as the size rules. Feel free to tweak each of these messages here.
|
*/

return [
    'accepted'        => ':attribute を受け入れる必要があります。',
    'accepted_if'     => ':other が :value の場合、:attribute を受け入れる必要があります。',
    'active_url'      => ':attribute は有効なURLではありません。',
    'after'           => ':attribute は :date より後の日付でなければなりません。',
    'after_or_equal'  => ':attribute は :date と同じかそれ以降の日付でなければなりません。',
    'alpha'           => ':attribute はアルファベットのみで構成する必要があります。',
    'alpha_dash'      => ':attribute はアルファベット、数字、ハイフン(-)、およびアンダースコア(_)のみで構成する必要があります。',
    'alpha_num'       => ':attribute はアルファベットと数字のみで構成する必要があります。',
    'array'           => ':attribute は配列でなければなりません。',
    'before'          => ':attribute は :date より前の日付でなければなりません。',
    'before_or_equal' => ':attribute は :date と同じかそれ以前の日付でなければなりません。',
    'between'         => [
        'array'   => ':attribute は :min から :max の間のアイテム数でなければなりません。',
        'file'    => ':attribute は :min から :max KB の間でなければなりません。',
        'numeric' => ':attribute は :min から :max の間でなければなりません。',
        'string'  => ':attribute は :min から :max 文字の間でなければなりません。',
    ],
    'boolean'          => ':attribute はブール値でなければなりません。',
    'confirmed'        => ':attribute の確認が一致しません。',
    'current_password' => 'パスワードが間違っています。',
    'date'             => ':attribute は有効な日付ではありません。',
    'date_equals'      => ':attribute は :date と同じでなければなりません。',
    'date_format'      => ':attribute の形式は :format でなければなりません。',
    'declined'         => ':attribute は拒否されなければなりません。',
    'declined_if'      => ':other が :value の場合、:attribute は拒否されなければなりません。',
    'different'        => ':attribute と :other は異なる必要があります。',
    'digits'           => ':attribute は :digits 桁の数字でなければなりません。',
    'digits_between'   => ':attribute は :min と :max 桁の数字でなければなりません。',
    'dimensions'       => ':attribute の画像サイズが正しくありません。',
    'distinct'         => ':attribute が重複しています。',
    'email'            => ':attribute は有効なメールアドレスではありません。',
    'ends_with'        => ':attribute は :values で終わらなければなりません。',
    'enum'             => ':attribute の値が正しくありません。',
    'exists'           => ':attribute は存在しません。',
    'file'             => ':attribute はファイルでなければなりません。',
    'filled'           => ':attribute は空にできません。',
    'gt'               => [
        'array'   => ':attribute は :value より多くのアイテムを持たなければなりません。',
        'file'    => ':attribute は :value KB より大きくなければなりません。',
        'numeric' => ':attribute は :value より大きくなければなりません。',
        'string'  => ':attribute は :value 文字より多くなければなりません。',
    ],
    'gte' => [
        'array'   => ':attribute は :value 以上のアイテムを持たなければなりません。',
        'file'    => ':attribute は :value KB 以上でなければなりません。',
        'numeric' => ':attribute は :value 以上でなければなりません。',
        'string'  => ':attribute は :value 文字以上でなければなりません。',
    ],
    'image'    => ':attribute は画像でなければなりません。',
    'in'       => '選択された :attribute は無効です。',
    'in_array' => ':attribute は :other に存在しなければなりません。',
    'integer'  => ':attribute は整数でなければなりません。',
    'ip'       => ':attribute は有効なIPアドレスでなければなりません。',
    'ipv4'     => ':attribute は有効なIPv4アドレスでなければなりません。',
    'ipv6'     => ':attribute は有効なIPv6アドレスでなければなりません。',
    'json'     => ':attribute は正しいJSON形式でなければなりません。',
    'lt'       => [
        'array'   => ':attribute は :value より少ないアイテムを持たなければなりません。',
        'file'    => ':attribute は :value KB より小さくなければなりません。',
        'numeric' => ':attribute は :value より小さくなければなりません。',
        'string'  => ':attribute は :value 文字より少なくなければなりません。',
    ],
    'lte' => [
        'array'   => ':attribute は :value 以下のアイテムを持たなければなりません。',
        'file'    => ':attribute は :value KB 以下でなければなりません。',
        'numeric' => ':attribute は :value 以下でなければなりません。',
        'string'  => ':attribute は :value 文字以下でなければなりません。',
    ],
    'mac_address' => ':attribute は有効なMACアドレスでなければなりません。',
    'max'         => [
        'array'   => ':attribute は最大で :max 個のアイテムを持つことができます。',
        'file'    => ':attribute は :max KB を超えてはなりません。',
        'numeric' => ':attribute は :max より大きくてはなりません。',
        'string'  => ':attribute は :max 文字を超えてはなりません。',
    ],
    'mimes'     => ':attribute は :values の種類のファイルでなければなりません。',
    'mimetypes' => ':attribute は :values の種類のファイルでなければなりません。',
    'min'       => [
        'array'   => ':attribute は少なくとも :min 個のアイテムを持たなければなりません。',
        'file'    => ':attribute は :min KB 以上でなければなりません。',
        'numeric' => ':attribute は :min 以上でなければなりません。',
        'string'  => ':attribute は少なくとも :min 文字でなければなりません。',
    ],
    'multiple_of'          => ':attribute は :value の倍数でなければなりません。',
    'not_in'               => '選択された :attribute は無効です。',
    'not_regex'            => ':attribute の形式が不正です。',
    'numeric'              => ':attribute は数字でなければなりません。',
    'password'             => 'パスワードが間違っています。',
    'present'              => ':attribute は存在しなければなりません。',
    'prohibited'           => ':attribute フィールドは禁止されています。',
    'prohibited_if'        => ':other が :value の場合、:attribute フィールドは禁止されています。',
    'prohibited_unless'    => ':attribute フィールドは禁止されています。:other が :values に含まれていない限り。',
    'prohibits'            => ':attribute フィールドは :other の出現を禁止します。',
    'regex'                => ':attribute の形式が不正です。',
    'required'             => ':attribute は必須です。',
    'required_array_keys'  => ':attribute は以下のキーを含まなければなりません：:values.',
    'required_if'          => ':other が :value の場合、:attribute は必須です。',
    'required_unless'      => ':other が :values に含まれていない限り、:attribute は必須です。',
    'required_with'        => ':values が存在する場合、:attribute は必須です。',
    'required_with_all'    => ':values がすべて存在する場合、:attribute は必須です。',
    'required_without'     => ':values が存在しない場合、:attribute は必須です。',
    'required_without_all' => ':values がすべて存在しない場合、:attribute は必須です。',
    'same'                 => ':attribute と :other は一致する必要があります。',
    'size'                 => [
        'array'   => ':attribute は :size 個のアイテムを持たなければなりません。',
        'file'    => ':attribute のサイズは :size KB でなければなりません。',
        'numeric' => ':attribute のサイズは :size でなければなりません。',
        'string'  => ':attribute は :size 文字でなければなりません。',
    ],
    'starts_with' => ':attribute は :values で始まる必要があります。',
    'string'      => ':attribute は文字列でなければなりません。',
    'timezone'    => ':attribute は有効なタイムゾーンでなければなりません。',
    'unique'      => ':attribute はすでに存在します。',
    'uploaded'    => ':attribute のアップロードに失敗しました。',
    'url'         => ':attribute の形式が不正です。',
    'uuid'        => ':attribute は有効なUUIDでなければなりません。',
    'custom'      => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
];
