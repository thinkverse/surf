@extends('theme::layouts.app')
@section('content')
<div class="relative bg-white overflow-hidden">
    <div class="pt-16 pb-80 sm:pt-24 sm:pb-40 lg:pt-40 lg:pb-48">
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 sm:static">
            <div class="sm:max-w-lg">
                <h1 class="text-4xl font font-extrabold tracking-tight text-gray-900 sm:text-6xl">Seems like this area is restricted</h1>
                <p class="mt-4 text-xl text-gray-500">
                    {{ __('This area is restricted to verified accounts only, verify your email address by clicking on the link emailed to you. If you didn\'t receive the email, we will gladly send you another.') }}
                </p>
            </div>
            <div>
                <div class="mt-10">
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf

                        <div>
                            <button class="inline-block text-center bg-wave-600 border border-transparent rounded-md py-3 px-8 font-medium text-white hover:bg-wave-700">
                                {{ __('Resend Verification Email') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
