<?php

/*
|--------------------------------------------------------------------------
| Các dòng ngôn ngữ xác thực
|--------------------------------------------------------------------------
|
| Các dòng ngôn ngữ sau đây được sử dụng trong quá trình xác thực cho các
| thông điệp khác nhau mà chúng ta cần hiển thị cho người dùng. Bạn có thể
| tự do chỉnh sửa các dòng ngôn ngữ này theo yêu cầu của ứng dụng của bạn.
|
*/

return [
    'checkout'              => 'Thanh Toán',
    'shipping_address'      => 'Địa Chỉ Giao Hàng',
    'billing_address'       => 'Địa Chỉ Thanh Toán',
    'same_shipping_address' => 'Giống như Địa Chỉ Giao Hàng',
    'create_address'        => 'Tạo Địa Chỉ',
    'shipping_methods'      => 'Phương Thức Vận Chuyển',
    'billing_methods'       => 'Phương Thức Thanh Toán',
    'order_comment'         => 'Ghi Chú Đơn Hàng',
    'cancel_create'         => 'Hủy',
    'my_order'              => 'Đơn Hàng Của Tôi',
    'place_order'           => 'Đặt Hàng',
    'failed'                => 'Tên người dùng hoặc mật khẩu không chính xác.',
    'password'              => 'Mật khẩu không chính xác.',
    'throttle'              => 'Bạn đã cố gắng đăng nhập quá nhiều lần. Vui lòng thử lại trong :seconds giây.',
    'shipping_quote_error'  => 'Vui lòng triển khai phương thức public function getQuotes($checkoutService) trong plugin :classname.',

    'no_shipping_methods' => 'Không có phương thức vận chuyển, vui lòng liên hệ với quản trị viên',
    'no_billing_methods'  => 'Không có phương thức thanh toán, vui lòng liên hệ với quản trị viên',
];
