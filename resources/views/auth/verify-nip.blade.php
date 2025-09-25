<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Terima kasih sudah mendaftar! Sebelum melanjutkan, silakan verifikasi NIP Anda dengan memasukkan nomor yang sudah terdaftar. Jika belum benar, Anda bisa memperbaruinya.') }}
    </div>

    @if (session('status') == 'verification-nip-success')
        <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
            {{ __('NIP Anda berhasil diverifikasi.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <!-- Form Verifikasi NIP -->
        <form method="POST" action="{{ route('verification.nip') }}">
            @csrf
            <div>
                <input type="text" name="nip" placeholder="Masukkan NIP Anda"
                    class="border rounded-md p-2 text-sm dark:bg-gray-700 dark:text-white">
            </div>
            <div class="mt-2">
                <x-primary-button>
                    {{ __('Verifikasi NIP') }}
                </x-primary-button>
            </div>
        </form>

        <!-- Tombol Logout -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit"
                class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</x-guest-layout>
