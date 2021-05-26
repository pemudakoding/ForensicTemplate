<x-guest-layout>

    <div id="app">
        <section class="section">
            <div class="d-flex flex-wrap align-items-stretch">
                <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
                    <div class="p-4 m-3">
                        <h4 class="text-dark font-weight-normal">
                            <span class="font-weight-bold">{{SiteInformation::getSiteInformation()->site_name}}</span>
                        </h4>
                        <p class="text-muted">
                            Silahkan masuk untuk mengakses halaman admin. Kontak admin jika tidak mempunyai akun
                        </p>

                        @if ($errors->any())
                            <x-alerts.alert-simple type='danger' msg='Email atau Password salah !!!'/>
                        @endif
                        @if (session()->has('alert'))
                            <x-alerts.alert-simple :type="session()->get('alert')['type']" :msg="session()->get('alert')['msg']"/>
                        @endif

                        <form method="POST" class="needs-validation" action="{{ route('administrator.login') }}" >
                            @csrf
                            <x-inputs.form-group>
                                <x-inputs.label

                                    value='Email'
                                    for="email" />
                                <x-inputs.input
                                    type="email"
                                    name="email"
                                    id="email"
                                    required />
                            </x-inputs.form-group>

                            <x-inputs.form-group>
                                <x-inputs.label
                                    value='Password'
                                    for="password"/>
                                <x-inputs.input
                                    type="password"
                                    name="password"
                                    id="password"
                                    required />
                            </x-inputs.form-group>

                            <x-inputs.form-group>
                                <x-inputs.checkbox
                                    name='remember'
                                    id='remember-me'
                                    label='Ingat Saya'/>
                            </x-inputs.form-group>

                            <div class="form-group text-right">

                                <x-inputs.button
                                    value='Masuk'
                                    type="submit"
                                    class="btn-primary btn-lg"/>
                            </div>
                        </form>


                        <div class="text-center mt-5 text-small">
                            Copyright &copy; {{SiteInformation::getSiteInformation()->site_name}}. Made with 💙 by Stisla
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom"
                    data-background="https://dispora.sultengprov.go.id/images/login-bg.jpg">
                    <div class="absolute-bottom-left index-2">
                        <div class="text-light p-5 pb-2">
                            <div class="mb-5 pb-3">
                                <h5 class="font-weight-normal text-muted-transparent">Bali, Indonesia</h5>
                            </div>
                            Foto Dari <a class="text-light bb" target="_blank"
                                href="https://unsplash.com/photos/a8lTjWJJgLA">Justin Kauffman</a> di <a
                                class="text-light bb" target="_blank" href="https://unsplash.com">Unsplash</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</x-guest-layout>
