@extends('panel::layouts.app')
@section('body-class', '')

@section('title', __('panel/menu.countries'))

@push('header')
<script src="{{ asset('vendor/vue/vue.global' . (!config('app.debug') ? '.prod' : '') . '.js') }}"></script>
<script src="{{ asset('vendor/element-plus/index.full.js') }}"></script>
<script src="{{ asset('vendor/element-plus/icons.min.js') }}"></script>
@endpush

@section('content')


<div class="grid" id="app">
    <div class="card card-grid min-w-full">
        <div class="card-header py-5 flex-wrap">
            <h3 class="card-title">
                Static DataTable
            </h3>
            <label class="switch switch-sm">
                <input checked="" class="order-2" name="check" type="checkbox" value="1" />
                <span class="switch-label order-1">
                    Push Alerts
                </span>
            </label>
        </div>
        <div class="card-body">
            @if ($countries)
            <div >
                <div class="scrollable-x-auto">
                    <table class="table table-auto table-border">
                        <thead>
                            <tr>
                                <th class="w-[50px] text-center">
                                    <span class="sort asc">
                                        <span class="sort-label">{{ __('panel/common.id')}}</span>
                                        <span class="sort-icon"></span>
                                    </span>
                                </th>
                                <th class="min-w-[185px]">
                                    <span class="sort">
                                        <span class="sort-label">{{ __('panel/common.name') }}</span>
                                        <span class="sort-icon"></span>
                                    </span>
                                </th>
                                <th class="w-[185px]">
                                    <span class="sort">
                                        <span class="sort-label">{{ __('panel/currency.code') }}</span>
                                        <span class="sort-icon"></span>
                                    </span>
                                </th>
                                <th class="w-[185px]">
                                    <span class="sort">
                                        <span class="sort-label">
                                            <!-- <span class="pt-px" data-tooltip="true" data-tooltip-offset="0, 5px" data-tooltip-placement="top">
                                                <i class="ki-outline ki-information-2 text-lg leading-none">
                                                </i>
                                                <span class="tooltip max-w-48" data-tooltip-content="true">
                                                    Merchant account providers
                                                </span>
                                            </span> -->
                                            {{ __('panel/country.continent') }}
                                        </span>
                                        <span class="sort-icon"></span>
                                    </span>
                                </th>
                                <th class="w-[185px]">
                                    <span class="sort">
                                        <span class="sort-label">{{ __('panel/common.position') }}</span>
                                        <span class="sort-icon"></span>
                                    </span>
                                </th>
                                <th class="w-[185px]">
                                    <span class="sort">
                                        <span class="sort-label">{{ __('panel/common.status') }}</span>
                                        <span class="sort-icon"></span>
                                    </span>
                                </th>
                                <th class="w-[120px]">{{ __('panel/common.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($countries as $item)
                            <tr>
                                <td class="text-center">{{ $item['id'] }}</td>
                                <td>{{ $item['name'] }}</td>
                                <td>{{ $item['code'] }}</td>
                                <td>{{ $item['continent'] }}</td>
                                <td>{{ $item['position'] }}</td>
                                <td>
                                    @include('panel::shared.list_switch', ['value' => $item->active, 'url' => panel_route('countries.active', $item->id)])
                                </td>
                                <td class="flex">
                                    <!-- <button type="button" class="btn btn-sm btn-icon btn-clear btn-light" @click="edit({{ $item->id }})">{{ __('panel/common.edit')}}</button> -->
                                    <button type="button" class="btn btn-sm btn-icon btn-clear btn-light" @click="edit({{ $item->id }})">
                                        <i class="ki-outline ki-notepad-edit"></i>
                                    </button>
                                    <form action="{{ panel_route('countries.destroy', [$item->id]) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <!-- <button type="submit" class="btn btn-sm btn-outline-danger">{{ __('panel/common.delete')}}</button> -->
                                        <button type="submit" class="btn btn-sm btn-icon btn-clear btn-light">
                                            <i class="ki-outline ki-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer justify-center md:justify-between flex-col md:flex-row gap-3 text-gray-600 text-2sm font-medium">
                    {{ $countries->withQueryString()->links('panel::vendor/pagination/bootstrap-4') }}
                </div>
            </div>
            @else
            <x-common-no-data />
            @endif
        </div>
    </div>
</div>


<div class="card h-min-600" id="app">


    <el-drawer v-model="drawer" size="500" @close="close">
        <template #header>
            <div class="text-dark fs-4">{{ __('panel/menu.countries') }}</div>
        </template>
        <el-form
            ref="formRef"
            label-position="top"
            :model="form"
            :rules="rules"
            label-width="auto"
            status-icon>
            <el-form-item label="{{ __('panel/common.name') }}" prop="name">
                <el-input v-model="form.name"></el-input>
            </el-form-item>

            <el-form-item label="{{ __('panel/currency.code') }}" prop="code">
                <el-input v-model="form.code"></el-input>
            </el-form-item>

            <el-form-item label="{{ __('panel/country.continent') }}" prop="continent">
                <el-input v-model="form.continent"></el-input>
            </el-form-item>

            <el-form-item label="{{ __('panel/common.position') }}" prop="position">
                <el-input v-model="form.position"></el-input>
            </el-form-item>

            <el-form-item label="{{ __('panel/common.status') }}" prop="active">
                <el-switch v-model="form.active" :active-value="1" :inactive-value="0"></el-switch>
            </el-form-item>
        </el-form>

        <template #footer>
            <div style="flex: auto">
                <el-button @click="drawer = false">{{ __('panel/common.close') }}</el-button>
                <el-button type="primary" @click="submit">{{ __('panel/common.btn_save') }}</el-button>
            </div>
        </template>
    </el-drawer>
</div>
@endsection

@push('footer')
<script>
    const api = @json(panel_route('countries.index'));
    console.log(api);

    const {
        createApp,
        ref,
        reactive,
        onMounted,
        getCurrentInstance
    } = Vue
    const listApp = createApp({
        setup() {
            const drawer = ref(false)
            const {
                proxy
            } = getCurrentInstance();
            const form = reactive({
                id: 0,
                name: '',
                code: '',
                continent: '',
                position: '0',
                active: 1
            })

            const rules = {

            }

            const edit = (id) => {
                drawer.value = true
                axios.get(`${api}/${id}`).then((res) => {
                    Object.keys(res).forEach(key => form.hasOwnProperty(key) && (form[key] = res[key]));
                })
            }

            const submit = () => {
                const url = form.id ? `${api}/${form.id}` : api
                const method = form.id ? 'put' : 'post'
                axios[method](url, form).then((res) => {
                    drawer.value = false
                    inno.msg(res.message)
                    window.location.reload()
                }).catch((err) => {
                    inno.msg(err.response.data.message)
                })
            }

            const close = () => {
                proxy.$refs.formRef.resetFields()
            }

            const create = () => {
                drawer.value = true
            }

            const exportFuns = {
                drawer,
                form,
                edit,
                rules,
                close,
                submit,
                create,
            }

            window.app = exportFuns
            return exportFuns;
        }
    })

    listApp.use(ElementPlus);
    listApp.mount('#app');
</script>
@endpush
