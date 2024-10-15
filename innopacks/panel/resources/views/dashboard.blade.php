@extends('panel::layouts.app')
@section('body-class', 'page-home')

@section('title', __('panel/menu.dashboard'))

@push('header')
<script src="{{ asset('vendor/chart/chart.min.js') }}"></script>
@endpush

@section('content')

<style>
    .channel-stats-bg {
        background-image: url("{{ asset('media/images/2600x1600/bg-3.png') }}");
    }

    .dark .channel-stats-bg {
        background-image: url("{{ asset('media/images/2600x1600/bg-3-dark.png') }}");
    }
</style>

<div class="grid gap-5 lg:gap-7.5">
    <div class="grid lg:grid-cols-4 gap-y-5 lg:gap-7.5 items-stretch">

        @foreach ($cards as $card)

        <div class="card flex-col justify-between gap-6 h-full bg-cover bg-[right_top_-1.7rem] bg-no-repeat channel-stats-bg">
            <a href="{{ $card['url'] }}">
                <!-- <img alt="" class="w-7 mt-4 ms-5" src="{{ asset('media/brand-logos/linkedin-2.svg') }}"> -->
                <i class="text-2.5xl mt-4 ms-5 mb-3 {{ $card['icon'] }} {{ $card['color'] }}"></i>
                <div class="flex flex-col gap-1 pb-4 px-5">
                    <span class="text-3xl font-semibold text-gray-900">
                        {{ $card['quantity'] }}
                    </span>
                    <span class="text-2sm font-normal text-gray-700">
                        {{ $card['title'] }}
                    </span>
                </div>
            </a>
        </div>
        @endforeach
    </div>


    <!-- begin: grid -->
    <div class="grid lg:grid-cols-3 gap-5 lg:gap-7.5 items-stretch">
        <div class="lg:col-span-1">
            <div class="card h-full">
                <div class="card-header">
                    <h3 class="card-title">{{ __('panel/dashboard.top_products') }}</h3>

                </div>
                <div class="card-body flex flex-col gap-4 p-5 lg:p-7.5 lg:pt-4 justify-end ">
                    @if ($top_sale_products)
                    <table class="table table-last-no-border align-middle mt-n3 mb-0">
                        <tbody>
                            @foreach($top_sale_products as $product)
                            <tr>
                                <td class="text-center">
                                    @if ($loop->iteration <= 3)
                                        <img src="{{ asset('icon/grade-'. $loop->iteration .'.svg') }}" alt="{{ $product['name'] }}" class="img-fluid wh-30">
                                        @else
                                        <span class="badge bg-secondary">{{ $loop->iteration }}</span>
                                        @endif
                                </td>
                                <td>
                                    <a class="d-flex align-items-center text-dark text-decoration-none" href="{{ panel_route('products.edit', $product['product_id']) }}">
                                        <div class="wh-30 rounded-circle overflow-hidden border border-1 me-2"><img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="img-fluid"></div>
                                        {{ $product['summary'] }}
                                    </a>
                                </td>
                                <td class="text-center">{{ $product['order_count'] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <x-common-no-data :width="240" />
                    @endif
                </div>
            </div>
        </div>
        <div class="lg:col-span-2">
            <div class="card h-full">
                <div class="card-header">
                    <h3 class="card-title">{{ __('panel/dashboard.order_trends') }}</h3>
                    <div class="flex gap-5">
                        <!-- <label class="switch switch-sm">
                            <input class="order-2" name="check" type="checkbox" value="1">
                            <span class="switch-label order-1">
                                Referrals only
                            </span>
                        </label> -->
                        <select class="select select-sm w-28" name="select">
                            <option value="1">
                                1 month
                            </option>
                            <option value="2">
                                3 month
                            </option>
                            <option value="3">
                                6 month
                            </option>
                            <option selected="" value="4">
                                12 month
                            </option>
                        </select>
                    </div>
                </div>
                <div class="card-body flex flex-col justify-end items-stretch grow p-3">
                    <canvas id="chart-new-quantity"></canvas>
                </div>
            </div>
        </div>
    </div>
    <!-- end: grid -->
</div>
<img src="{{ config('innoshop.api_url') }}/en/install/dashboard.jpg?version={{ config('innoshop.version') }}&build_date={{ config('innoshop.build') }}" class="d-none" alt="" />
@endsection

@push('footer')
<script>
    const ctx1 = document.getElementById('chart-new-quantity').getContext('2d');
    const options = {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: false
        },
        interaction: {
            mode: 'index',
            intersect: false,
        },
        scales: {
            y: {
                beginAtZero: true,
                grid: {
                    drawBorder: false,
                    borderDash: [3],
                },
            },
            x: {
                beginAtZero: true,
                grid: {
                    drawBorder: false,
                    display: false
                },
            }
        },
    };

    const orderGradient = ctx1.createLinearGradient(0, 0, 0, 380);
    orderGradient.addColorStop(0, 'rgba(76,122,247,0.5)');
    orderGradient.addColorStop(1, 'rgba(76,122,247,0)');

    const chart1 = new Chart(ctx1, {
        type: 'line',
        data: {
            labels: @json($order['latest_week']['period']),
            datasets: [{
                label: "{{ __('panel/dashboard.order_quantity') }}",
                data: @json($order['latest_week']['totals']),
                responsive: true,
                backgroundColor: orderGradient,
                borderColor: "#3c7af7",
                fill: true,
                lineTension: 0.4,
                datasetStrokeWidth: 3,
                pointBackgroundColor: '#3c7af7',
                pointDotStrokeWidth: 4,
                pointHoverBorderWidth: 8,
                tension: 0.1
            }]
        },
        options: options,
    });
</script>
@endpush
