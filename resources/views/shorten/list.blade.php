@extends('../layout/' . $layout)

@section('subhead')
    <title>Shorten URL Links</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Regular Table</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-12">
            <div class="overflow-x-auto">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th class="whitespace-nowrap">#</th>
                            <th class="whitespace-nowrap">First Name</th>
                            <th class="whitespace-nowrap">Last Name</th>
                            <th class="whitespace-nowrap">Username</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Angelina</td>
                            <td>Jolie</td>
                            <td>@angelinajolie</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Brad</td>
                            <td>Pitt</td>
                            <td>@bradpitt</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Charlie</td>
                            <td>Hunnam</td>
                            <td>@charliehunnam</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table mt-5">
                    <thead class="table-light">
                        <tr>
                            <th class="whitespace-nowrap">#</th>
                            <th class="whitespace-nowrap">First Name</th>
                            <th class="whitespace-nowrap">Last Name</th>
                            <th class="whitespace-nowrap">Username</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Angelina</td>
                            <td>Jolie</td>
                            <td>@angelinajolie</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Brad</td>
                            <td>Pitt</td>
                            <td>@bradpitt</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Charlie</td>
                            <td>Hunnam</td>
                            <td>@charliehunnam</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
