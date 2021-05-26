@section('title', 'Vision and Mission')


    <x-admin-layout>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>@yield('title') List</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-md">
                                <tbody>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Content</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach ($visionMissions as $vm)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $vm->title }}</td>
                                        <td>{{ Str::substr($vm->content, 0, 50) }}....</td>
                                        <td>
                                            <a href="{{ route('administrator.vision-mission.edit',$vm->id) }}" class="btn btn-primary">Ubah</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-admin-layout>
