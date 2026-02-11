<x-filament-panels::page>
    <h1 class="text-2xl font-bold">ダッシュボード</h1>

    <div class="mt-6 grid gap-4 md:grid-cols-2">
        <x-filament::section>
            <x-slot name="heading">今日のサマリー</x-slot>
            <div class="text-sm text-gray-600">
                ここに集計やお知らせを書く
            </div>
        </x-filament::section>

        <x-filament::section>
            <x-slot name="heading">クイックリンク</x-slot>

            <div class="flex flex-col gap-2">
                <x-filament::button tag="a" href="{{ url('/admin') }}">
                    管理トップへ
                </x-filament::button>
            </div>
        </x-filament::section>
    </div>
</x-filament-panels::page>
