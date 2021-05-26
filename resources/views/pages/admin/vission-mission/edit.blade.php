@section('title', 'Edit ' . $data->title)
    <x-admin-layout>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Form</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('administrator.vision-mission.update', $data->id) }}" method="post">
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
