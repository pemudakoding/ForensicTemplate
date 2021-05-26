@section('title', 'Edit ' . $data->title)
    <x-admin-layout>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Form</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group row mb-4">
                            <x-inputs.label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" value="Title" inline="true"/>
                            <div class="col-sm-12 col-md-7">
                                <x-inputs.input type="text" name="title" :value="$data->title" />
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea id="content" name="content">
                                    {{ $data->content }}
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <button class="btn btn-primary">Publish</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-admin-layout>

<script src="{{ asset('js/admin/summernote.js') }}"></script>
