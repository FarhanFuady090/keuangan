<x-layout-admin>
    <x-slot name="header">

    </x-slot>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('dashboard') }}
    </h2>
    <a href="{{ route('admin.login') }}">
        <x-create-button class="ms-3">
            {{ __('Create') }}
        </x-create-button>
    </a>
    <a href="{{ route('admin.login') }}">
        <x-details-button class="ms-3">
            {{ __('Details') }}
        </x-details-button>
    </a>
    <a href="{{ route('admin.login') }}">
        <x-edit-button class="ms-3">
            {{ __('Edit') }}
        </x-edit-button>
    </a>
    <a href="{{ route('admin.login') }}">
        <x-import-data-siswa-button class="ms-3">

        </x-import-data-siswa-button>
    </a>
    <a href="{{ route('admin.login') }}">
        <x-proses-pindah-atau-naik-kelas-button class="ms-3">
            {{ __('Pindah kelas') }}
        </x-proses-pindah-atau-naik-kelas-button>
    </a>
    <a href="{{ route('admin.login') }}">
        <x-return-button class="ms-3">
            {{ __('Return') }}
        </x-return-button>
    </a>
    <a href="{{ route('admin.login') }}">
        <x-save-button class="ms-3">
            {{ __('Save') }}
        </x-save-button>
    </a>
    <a href="{{ route('admin.login') }}">
        <x-show-button class="ms-3">
            {{ __('Show') }}
        </x-show-button>
    </a>
    <a href="{{ route('admin.login') }}">
        <x-cancel-button class="ms-3">
            {{ __('cancel') }}
        </x-cancel-button>
    </a>
    <a href="{{ route('admin.login') }}">
        <x-update-button class="ms-3">
            {{ __('update') }}
        </x-update-button>
    </a>
</x-layout-admin>
