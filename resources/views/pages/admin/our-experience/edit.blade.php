@section('title', 'Edit Company Experience')
    <x-admin-layout>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Form</h4>
                    </div>
                    <x-alerts.table-alert/>
                    <div class="card-body">
                        <form action="{{ route('administrator.our-experience.update') }}" method="post">
                            @csrf
                            @method('PUT')

                            <x-inputs.form-group class="row mb-4">

                                <x-inputs.label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" value="Title"
                                    inline="true" />
                                <div class="col-sm-12 col-md-7">
                                    <x-inputs.input type="text" name="title" :value="old('title') ?? $data->title" />
                                    @error('title')
                                        <x-alerts.alert-simple type='danger' :msg=$message />
                                    @enderror
                                </div>
                            </x-inputs.form-group>
                            <x-inputs.form-group class="row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                                <div class="col-sm-12 col-md-7">
                                    <textarea id="content" name="content">
                                            {{ old('content') ?? $data->content }}
                                        </textarea>
                                    @error('content')
                                        <x-alerts.alert-simple type='danger' :msg=$message />
                                    @enderror
                                </div>
                            </x-inputs.form-group>

                            <x-inputs.form-group class="row mb-4">
                                    <x-inputs.label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" value="Projects Delivered"
                                    inline="true" />
                                    <div class="col-sm-12 col-md-7">
                                        <x-inputs.input type="text" name="projects_finished" :value="old('projects_finished') ?? $data->projects_finished" />
                                        @error('projects_finished')
                                            <x-alerts.alert-simple type='danger' :msg=$message />
                                        @enderror
                                    </div>
                            </x-inputs.form-group>

                            <x-inputs.form-group class="row mb-4">
                                <x-inputs.label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" value="Awards & Accolades"
                                inline="true" />
                                <div class="col-sm-12 col-md-7">
                                    <x-inputs.input type="text" name="awards" :value="old('awards') ?? $data->awards" />
                                    @error('awards')
                                        <x-alerts.alert-simple type='danger' :msg=$message />
                                    @enderror
                                </div>
                            </x-inputs.form-group>

                            <x-inputs.form-group class="row mb-4">
                                <x-inputs.label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" value="Satisfied Customers"
                                inline="true" />
                                <div class="col-sm-12 col-md-7">
                                    <x-inputs.input type="text" name="satisfied_customers" :value="old('satisfied_customers') ?? $data->satisfied_customers" />
                                    @error('satisfied_customers')
                                        <x-alerts.alert-simple type='danger' :msg=$message />
                                    @enderror
                                </div>
                            </x-inputs.form-group>

                            <x-inputs.form-group class="row mb-4">
                                <x-inputs.label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" value="Employees"
                                inline="true" />
                                <div class="col-sm-12 col-md-7">
                                    <x-inputs.input type="text" name="employees" :value="old('employees') ?? $data->employees" />
                                    @error('employees')
                                        <x-alerts.alert-simple type='danger' :msg=$message />
                                    @enderror
                                </div>
                            </x-inputs.form-group>

                            <x-inputs.form-group class="row mb-4">
                                <x-inputs.label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" value=""
                                    inline="true" />
                                <div class="col-sm-12 col-md-7">
                                    <x-inputs.button class="btn-primary" value='Publish' />
                                </div>
                            </x-inputs.form-group>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-admin-layout>

    <script src="{{ asset('js/admin/summernote.js') }}"></script>
