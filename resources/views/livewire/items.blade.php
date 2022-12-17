<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div class="mt-8 text-2xl">
        items
    </div>
    {{$query}}
    <div class="mt-2">
        <div class="flex justify-between pr-3">
            <div>
                <input wire:model.debounce.500ms="search" type="search" class="rounded" placeholder="Search...">
            </div>
            <div class="flex justify-end gap-1 items-center">
                <input type="checkbox" class="rounded" wire:model="active">
                <span>Active Only?</span>
            </div>
        </div>
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2">
                        <div class="flex items-center">
                            Id
                        </div>
                    </th>
                    <th class="px-4 py-2">
                        <div class="flex items-center">
                            Name
                        </div>
                    </th>
                    <th class="px-4 py-2">
                        <div class="flex items-center">
                            Price
                        </div>
                    </th>
                    <th class="px-4 py-2">
                        Status
                    </th>
                    <th class="px-4 py-2">
                        Action
                    </th>
                </tr>
            </thead>

            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td class="border px-4 py-2">{{$item->id}}</td>
                        <td class="border px-4 py-2">{{$item->name}}</td>
                        <td class="border px-4 py-2">{{$item->price}}</td>
                        <td class="border px-4 py-2">{{($item->status)?"Active":"Not Active"}}</td>
                        <td class="border px-4 py-2">edit/delete</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $items->links() }}
    </div>
</div>