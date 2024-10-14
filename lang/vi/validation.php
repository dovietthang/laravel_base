<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Dòng ngôn ngữ xác thực
    |--------------------------------------------------------------------------
    |
    | Các dòng ngôn ngữ sau chứa thông báo lỗi mặc định được sử dụng bởi
    | lớp validator. Một số quy tắc có nhiều phiên bản như các quy tắc kích thước.
    | Bạn có thể tự do điều chỉnh các thông báo này tại đây.
    |
    */

    'accepted'        => ':attribute phải được chấp nhận.',
    'accepted_if'     => ':attribute phải được chấp nhận khi :other là :value.',
    'active_url'      => ':attribute không phải là một URL hợp lệ.',
    'after'           => ':attribute phải là một ngày sau :date.',
    'after_or_equal'  => ':attribute phải là một ngày sau hoặc bằng :date.',
    'alpha'           => ':attribute chỉ được chứa các chữ cái.',
    'alpha_dash'      => ':attribute chỉ được chứa chữ cái, số, dấu gạch ngang và dấu gạch dưới.',
    'alpha_num'       => ':attribute chỉ được chứa chữ cái và số.',
    'array'           => ':attribute phải là một mảng.',
    'ascii'           => ':attribute chỉ được chứa các ký tự và ký hiệu ASCII một byte.',
    'before'          => ':attribute phải là một ngày trước :date.',
    'before_or_equal' => ':attribute phải là một ngày trước hoặc bằng :date.',
    'between'         => [
        'array'   => ':attribute phải có từ :min đến :max phần tử.',
        'file'    => ':attribute phải từ :min đến :max kilobyte.',
        'numeric' => ':attribute phải nằm trong khoảng từ :min đến :max.',
        'string'  => ':attribute phải có từ :min đến :max ký tự.',
    ],
    'boolean'           => ':attribute phải là true hoặc false.',
    'can'               => ':attribute chứa giá trị không được phép.',
    'confirmed'         => 'Xác nhận :attribute không khớp.',
    'current_password'  => 'Mật khẩu không đúng.',
    'date'              => ':attribute không phải là một ngày hợp lệ.',
    'date_equals'       => ':attribute phải là một ngày bằng :date.',
    'date_format'       => ':attribute không khớp với định dạng :format.',
    'decimal'           => ':attribute phải có :decimal chữ số thập phân.',
    'declined'          => ':attribute phải bị từ chối.',
    'declined_if'       => ':attribute phải bị từ chối khi :other là :value.',
    'different'         => ':attribute và :other phải khác nhau.',
    'digits'            => ':attribute phải có :digits chữ số.',
    'digits_between'    => ':attribute phải có từ :min đến :max chữ số.',
    'dimensions'        => ':attribute có kích thước hình ảnh không hợp lệ.',
    'distinct'          => ':attribute có giá trị trùng lặp.',
    'doesnt_end_with'   => ':attribute không được kết thúc bằng một trong các giá trị sau: :values.',
    'doesnt_start_with' => ':attribute không được bắt đầu bằng một trong các giá trị sau: :values.',
    'email'             => ':attribute phải là một địa chỉ email hợp lệ.',
    'ends_with'         => ':attribute phải kết thúc bằng một trong các giá trị sau: :values.',
    'enum'              => ':attribute đã chọn không hợp lệ.',
    'exists'            => ':attribute đã chọn không hợp lệ.',
    'extensions'        => ':attribute phải có một trong các phần mở rộng sau: :values.',
    'file'              => ':attribute phải là một tệp tin.',
    'filled'            => ':attribute không được để trống.',
    'gt'                => [
        'array'   => ':attribute phải có nhiều hơn :value phần tử.',
        'file'    => ':attribute phải lớn hơn :value kilobyte.',
        'numeric' => ':attribute phải lớn hơn :value.',
        'string'  => ':attribute phải lớn hơn :value ký tự.',
    ],
    'gte' => [
        'array'   => ':attribute phải có :value phần tử trở lên.',
        'file'    => ':attribute phải lớn hơn hoặc bằng :value kilobyte.',
        'numeric' => ':attribute phải lớn hơn hoặc bằng :value.',
        'string'  => ':attribute phải lớn hơn hoặc bằng :value ký tự.',
    ],
    'hex_color' => ':attribute phải là một màu hex hợp lệ.',
    'image'     => ':attribute phải là một hình ảnh.',
    'in'        => ':attribute đã chọn không hợp lệ.',
    'in_array'  => ':attribute phải tồn tại trong :other.',
    'integer'   => ':attribute phải là một số nguyên.',
    'ip'        => ':attribute phải là một địa chỉ IP hợp lệ.',
    'ipv4'      => ':attribute phải là một địa chỉ IPv4 hợp lệ.',
    'ipv6'      => ':attribute phải là một địa chỉ IPv6 hợp lệ.',
    'json'      => ':attribute phải là một chuỗi JSON hợp lệ.',
    'list'      => ':attribute phải là một danh sách.',
    'lowercase' => ':attribute phải là chữ thường.',
    'lt'        => [
        'array'   => ':attribute phải có ít hơn :value phần tử.',
        'file'    => ':attribute phải nhỏ hơn :value kilobyte.',
        'numeric' => ':attribute phải nhỏ hơn :value.',
        'string'  => ':attribute phải nhỏ hơn :value ký tự.',
    ],
    'lte' => [
        'array'   => ':attribute không được có nhiều hơn :value phần tử.',
        'file'    => ':attribute phải nhỏ hơn hoặc bằng :value kilobyte.',
        'numeric' => ':attribute phải nhỏ hơn hoặc bằng :value.',
        'string'  => ':attribute phải nhỏ hơn hoặc bằng :value ký tự.',
    ],
    'mac_address' => ':attribute phải là một địa chỉ MAC hợp lệ.',
    'max'         => [
        'array'   => ':attribute không được có nhiều hơn :max phần tử.',
        'file'    => ':attribute không được lớn hơn :max kilobyte.',
        'numeric' => ':attribute không được lớn hơn :max.',
        'string'  => ':attribute không được lớn hơn :max ký tự.',
    ],
    'max_digits' => ':attribute không được có nhiều hơn :max chữ số.',
    'mimes'      => ':attribute phải là một tệp tin có định dạng: :values.',
    'mimetypes'  => ':attribute phải là một tệp tin có định dạng: :values.',
    'min'        => [
        'array'   => ':attribute phải có ít nhất :min phần tử.',
        'file'    => ':attribute phải có ít nhất :min kilobyte.',
        'numeric' => ':attribute phải lớn hơn hoặc bằng :min.',
        'string'  => ':attribute phải có ít nhất :min ký tự.',
    ],
    'min_digits'       => ':attribute phải có ít nhất :min chữ số.',
    'missing'          => ':attribute phải bị thiếu.',
    'missing_if'       => ':attribute phải bị thiếu khi :other là :value.',
    'missing_unless'   => ':attribute phải bị thiếu trừ khi :other là :value.',
    'missing_with'     => ':attribute phải bị thiếu khi :values có mặt.',
    'missing_with_all' => ':attribute phải bị thiếu khi :values có mặt.',
    'multiple_of'      => ':attribute phải là bội số của :value.',
    'not_in'           => ':attribute đã chọn không hợp lệ.',
    'not_regex'        => 'Định dạng :attribute không hợp lệ.',
    'numeric'          => ':attribute phải là một số.',
    'password'         => [
        'letters'       => ':attribute phải chứa ít nhất một chữ cái.',
        'mixed'         => ':attribute phải chứa ít nhất một chữ cái viết hoa và một chữ cái viết thường.',
        'numbers'       => ':attribute phải chứa ít nhất một số.',
        'symbols'       => ':attribute phải chứa ít nhất một ký hiệu.',
        'uncompromised' => ':attribute đã xuất hiện trong một vụ rò rỉ dữ liệu. Vui lòng chọn một :attribute khác.',
    ],
    'present'              => ':attribute phải có mặt.',
    'present_if'           => ':attribute phải có mặt khi :other là :value.',
    'present_unless'       => ':attribute phải có mặt trừ khi :other là :value.',
    'present_with'         => ':attribute phải có mặt khi :values có mặt.',
    'present_with_all'     => ':attribute phải có mặt khi :values có mặt.',
    'prohibited'           => ':attribute bị cấm.',
    'prohibited_if'        => ':attribute bị cấm khi :other là :value.',
    'prohibited_unless'    => ':attribute bị cấm trừ khi :other nằm trong :values.',
    'prohibits'            => ':attribute cấm :other có mặt.',
    'regex'                => 'Định dạng :attribute không hợp lệ.',
    'required'             => ':attribute không được để trống.',
    'required_array_keys'  => ':attribute phải chứa các mục cho: :values.',
    'required_if'          => ':attribute không được để trống khi :other là :value.',
    'required_if_accepted' => ':attribute không được để trống khi :other được chấp nhận.',
    'required_if_declined' => ':attribute không được để trống khi :other bị từ chối.',
    'required_unless'      => ':attribute không được để trống trừ khi :other nằm trong :values.',
    'required_with'        => ':attribute không được để trống khi :values có mặt.',
    'required_with_all'    => ':attribute không được để trống khi :values có mặt.',
    'required_without'     => ':attribute không được để trống khi :values không có mặt.',
    'required_without_all' => ':attribute không được để trống khi không có :values nào có mặt.',
    'same'                 => ':attribute phải khớp với :other.',
    'size'                 => [
        'array'   => ':attribute phải chứa :size phần tử.',
        'file'    => ':attribute phải có kích thước :size kilobyte.',
        'numeric' => ':attribute phải là :size.',
        'string'  => ':attribute phải có :size ký tự.',
    ],
    'starts_with' => ':attribute phải bắt đầu bằng một trong các giá trị sau: :values.',
    'string'      => ':attribute phải là một chuỗi.',
    'timezone'    => ':attribute phải là một múi giờ hợp lệ.',
    'unique'      => ':attribute đã được sử dụng.',
    'uploaded'    => ':attribute tải lên thất bại.',
    'uppercase'   => ':attribute phải là chữ in hoa.',
    'url'         => ':attribute phải là một URL hợp lệ.',
    'ulid'        => ':attribute phải là một ULID hợp lệ.',
    'uuid'        => ':attribute phải là một UUID hợp lệ.',

    /*
    |--------------------------------------------------------------------------
    | Dòng ngôn ngữ tùy chỉnh xác thực
    |--------------------------------------------------------------------------
    |
    | Ở đây bạn có thể chỉ định thông báo xác thực tùy chỉnh cho từng thuộc tính
    | sử dụng quy ước "attribute.rule" để đặt tên các dòng. Điều này giúp nhanh
    | chóng xác định một dòng ngôn ngữ tùy chỉnh cho một quy tắc thuộc tính.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Thuộc tính tùy chỉnh xác thực
    |--------------------------------------------------------------------------
    |
    | Các dòng ngôn ngữ sau được sử dụng để thay thế các placeholder thuộc tính
    | với những từ dễ đọc hơn như "Địa chỉ E-Mail" thay vì "email". Điều này
    | giúp thông báo của chúng ta biểu cảm hơn.
    |
    */

    'attributes' => [],

];
