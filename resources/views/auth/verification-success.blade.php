<x-filament-panels::page.simple>
    <p class="text-center text-sm text-gray-500 dark:text-gray-400">
        {{ __('¡Tu correo electrónico ha sido verificado exitosamente! Ahora puedes acceder a todas las funcionalidades de la aplicación.') }}
    </p>

    <div class="mt-6 text-center">
        <a href="{{ route('login') }}" class="text-primary-600 hover:underline">
            {{ __('Iniciar Sesión') }}
        </a>
    </div>
</x-filament-panels::page.simple>