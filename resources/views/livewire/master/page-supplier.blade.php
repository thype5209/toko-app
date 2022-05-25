<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Supplier') }}
    </h2>
</x-slot>

<div class="py-2">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
             {{-- Modal Insert Item --}}
             <div class="p-4">

                <!-- Add Item Modal -->
                <x-jet-dialog-modal wire:model="addItem">
                    <form>
                        @csrf
                        <x-slot name="title">
                            {{ __('Tambahlan Supplier') }}
                        </x-slot>

                        <x-slot name="content">
                            <div class="rounded-md shadow-sm -space-y-px">
                                <div class="grid gap-6">
                                    <div class="col-span-12">
                                        <label for="first_name" class="block text-sm font-medium text-gray-700">Supplier</label>
                                        <input type="text"  name="supplier" wire:model='supplier' class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required auto-complete="current-kodeProduk" placeholder="Supplier" value="{{ $supplier }}">
                                        @error('supplier') <span class="text-red-500">{{ $message }}</span>@enderror
                                    </div>
                                    <div class="col-span-12">
                                        <label for="email_address" class="block text-sm font-medium text-gray-700">Nomor Telpon</label>
                                        <input type="text" name="no_telpon" wire:model='no_telpon' id="tgl_no_telpon" required autocomplete="current-tgl_no_telpon" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $no_telpon}}" placeholder="Nomor Telpon">
                                        @error('no_telpon') <span class="text-red-500">{{ $message }}</span>@enderror
                                    </div>

                                </div>
                            </div>
                        </x-slot>

                        <x-slot name="footer">
                            <x-jet-danger-button wire:click="$toggle('addItem')" wire:loading.attr="disabled">
                                {{ __('Cancel') }}
                                </x-jet-button>
                                <x-jet-button wire:click.prevent="Saved()" name="simpan" type="button">
                                    {{ __('Tambah Data') }}
                                </x-jet-button>
                        </x-slot>
                    </form>
                </x-jet-dialog-modal>
                <span x-data="{ userSaved: @entangle('userSaved') }" >
                    <x-jet-action-message class="mr-3 text-red-600" on="saved" x-show='userSaved'>
                        <div class="bg-red-100 border border-red-400 w-40 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">Berhasil</strong>
                            <span class="block sm:inline">Disimpan</span>
                            <span class="absolute top-0 bottom-0 right-0 px-4 py-3" wire:click.prevent="closeFlash()">
                              <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                            </span>
                          </div>
                    </x-jet-action-message>
                </span>
            </div>
            <livewire:supplier-table />
        </div>
    </div>
</div>
