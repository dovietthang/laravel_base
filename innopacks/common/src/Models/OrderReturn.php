<?php
/**
 * Copyright (c) Since 2024 InnoShop - All Rights Reserved
 *
 * @link       https://www.innoshop.com
 * @author     InnoShop <team@innoshop.com>
 * @license    https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */

namespace InnoShop\Common\Models;

class OrderReturn extends BaseModel
{
    protected $table = 'order_returns';

    protected $fillable = [
        'customer_id', 'order_id', 'order_number', 'number', 'name', 'email', 'telephone',
    ];
}