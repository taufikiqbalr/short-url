@extends('../layout/' . $layout)

@section('subhead')
    <title>Shorten URL Link - Create</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Create New</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-12">
            <!-- BEGIN: Form Layout -->
            <div class="intro-y box p-5">
                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">Destination</label>
                    <input id="crud-form-1" type="text" class="form-control w-full" placeholder="">
                </div>
                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">Title</label>
                    <input id="crud-form-1" type="text" class="form-control w-full" placeholder="">
                </div>
                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">Short Link</label>
                    <input id="crud-form-1" type="text" class="form-control w-full" placeholder="">
                </div>
                <div class="mt-3">
                    <label>Active Status</label>
                    <div class="form-switch mt-2">
                        <input type="checkbox" class="form-check-input">
                    </div>
                </div>
                <div class="mt-3">
                    <label>Description</label>
                    <div class="mt-2">
                        <div class="editor">
                            <p>Content of the editor.</p>
                        </div>
                    </div>
                </div>
                <div class="text-right mt-5">
                    <button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                    <button type="button" class="btn btn-primary w-24">Save</button>
                </div>
            </div>
            <!-- END: Form Layout -->
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ mix('dist/js/ckeditor-classic.js') }}"></script>
@endsection
