@section('title', 'Site Information')
    <x-admin-layout>
        <div class="card">
            <div class="card-header">
                <h4>Edit Form</h4>
            </div>
            <x-alerts.table-alert/>
            <div class="card-body">
                <form action="{{ route('administrator.site-information.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <x-inputs.form-group>
                        <x-inputs.label value='Site Name' for='site_name' inline=true />
                        @error('site_name')
                            <x-alerts.alert-simple type='danger' :msg=$message />
                        @enderror

                        <x-inputs.input name='site_name' id="site_name" :value='old("site_name") ?? $data->site_name' />
                    </x-inputs.form-group>

                    <div class="form-row">
                        <x-inputs.form-group class="col-12 col-md-6">
                            <x-inputs.label value='Site Description' for='site_description' inline=true />
                            @error('site_description')
                                <x-alerts.alert-simple type='danger' :msg=$message />
                            @enderror
                            <x-inputs.textarea name='site_description' id="site_description">
                                {{ old('site_description') ?? $data->site_description }}
                            </x-inputs.textarea>
                        </x-inputs.form-group>
                        <x-inputs.form-group class="col-12 col-md-6">
                            <x-inputs.label value='Site Keyword' for='site_keyword' inline=true />
                            @error('site_keyword')
                                <x-alerts.alert-simple type='danger' :msg=$message />
                            @enderror

                            <x-inputs.textarea name='site_keyword' id="site_keyword">
                                {{ old('site_description') ?? $data->site_description }}
                            </x-inputs.textarea>
                        </x-inputs.form-group>
                    </div>
                    <div class="form-row">
                        <x-inputs.form-group class="col-12 col-md-6">
                            <x-inputs.label value='Email' for='email' inline=true />
                            @error('email')
                                <x-alerts.alert-simple type='danger' :msg=$message />
                            @enderror
                            <x-inputs.input name='email' id="email" :value='old("email") ?? $data->email' />
                        </x-inputs.form-group>
                        <x-inputs.form-group class="col-12 col-md-6">
                            <x-inputs.label value='No Telp' for='no_telp' inline=true />
                            @error('no_telp')
                                <x-alerts.alert-simple type='danger' :msg=$message />
                            @enderror
                            <x-inputs.input name='no_telp' id="no_telp" :value='old("no_telp") ?? $data->no_telp' />
                        </x-inputs.form-group>
                    </div>
                    <div class="form-row">
                        <x-inputs.form-group class="col-12 col-md-4">
                            <x-inputs.label value='Facebook' for='facebook_url' inline=true />
                            @error('facebook_url')
                                <x-alerts.alert-simple type='danger' :msg=$message />
                            @enderror
                            <x-inputs.input name='facebook_url' id="facebook_url"
                                :value='old("facebook_url") ?? $data->facebook_url' />
                        </x-inputs.form-group>
                        <x-inputs.form-group class="col-12 col-md-4">
                            <x-inputs.label value='Instagram' for='instagram_url' inline=true />
                            @error('instagram_url')
                                <x-alerts.alert-simple type='danger' :msg=$message />
                            @enderror
                            <x-inputs.input name='instagram_url' id="instagram_url"
                                :value='old("instagram_url") ?? $data->instagram_url' />
                        </x-inputs.form-group>
                        <x-inputs.form-group class="col-12 col-md-4">
                            <x-inputs.label value='Twitter' for='twitter_url' inline=true />
                            @error('twitter_url')
                                <x-alerts.alert-simple type='danger' :msg=$message />
                            @enderror
                            <x-inputs.input name='twitter_url' id="twitter_url"
                                :value='old("twitter_url") ?? $data->twitter_url' />
                        </x-inputs.form-group>
                    </div>
                    <x-inputs.form-group>
                        <x-inputs.label value='Address' for='address' inline=true />
                        @error('address')
                            <x-alerts.alert-simple type='danger' :msg=$message />
                        @enderror
                        <x-inputs.textarea name='address' id="address">
                            {{ old('address') ?? $data->address }}
                        </x-inputs.textarea>
                    </x-inputs.form-group>
                    <x-inputs.form-group>
                        <x-inputs.label value='Favicon' for='favicon' inline=true />
                        @error('favicon')
                            <x-alerts.alert-simple type='danger' :msg=$message />
                        @enderror
                        <x-inputs.file name='favicon' />
                    </x-inputs.form-group>
                </div>
                <div class="card-footer">
                    <x-inputs.button value="Edit" class="btn-primary px-4" />
                </div>
                </form>
        </div>
    </x-admin-layout>
