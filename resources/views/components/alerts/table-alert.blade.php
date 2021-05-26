@if (session()->has('alert'))
    <div class="px-4">
        <div class="alert alert-{{session()->get('alert')['type']}}">
            {{session()->get('alert')['msg']}}
        </div>
    </div>
@endif
