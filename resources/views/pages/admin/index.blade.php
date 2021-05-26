@section('title', 'Dashboard Admin')
    <x-admin-layout>
        <div class="row">
            <div class="col-12 mb-4">
                <div class="hero bg-primary text-white">
                    <div class="hero-inner">
                        <h2>Welcome Back, {{ Auth::user()->name }}!</h2>
                        <p class="lead">You can manages your landing page in this dashboard.</p>
                    </div>
                </div>
            </div>
        </div>
    </x-admin-layout>
