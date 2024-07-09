<x-app-layout>

    <x-slot name="header"> </x-slot>
    @section('title', 'Dashboard')
    @section('content')

    <hr style="margin-bottom: 15px;">
    <div class="container">
        @can('admin')
        <div class="row ">
            <div class="col-xl-6 col-lg-6">
                <div class="card l-bg-cherry">
                    <div class="card-statistic-3 p-4">
                        <div class="card-icon card-icon-large"><i class="fas fa-shopping-cart"></i></div>
                        <div class="mb-4">
                            <h5 class="card-title mb-0">New Orders</h5>
                        </div>
                        <div class="row align-items-center mb-2 d-flex">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                    3,243
                                </h2>
                            </div>
                            <div class="col-4 text-right">
                                <span>12.5% <i class="fa fa-arrow-up"></i></span>
                            </div>
                        </div>
                        <div class="progress mt-1 " data-height="8" style="height: 8px;">
                            <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="card l-bg-blue-dark">
                    <div class="card-statistic-3 p-4">
                        <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                        <div class="mb-4">
                            <h5 class="card-title mb-0">Customers</h5>
                        </div>
                        <div class="row align-items-center mb-2 d-flex">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                    15.07k
                                </h2>
                            </div>
                            <div class="col-4 text-right">
                                <span>9.23% <i class="fa fa-arrow-up"></i></span>
                            </div>
                        </div>
                        <div class="progress mt-1 " data-height="8" style="height: 8px;">
                            <div class="progress-bar l-bg-green" role="progressbar" data-width="25%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="card l-bg-green-dark">
                    <div class="card-statistic-3 p-4">
                        <div class="card-icon card-icon-large"><i class="fas fa-ticket-alt"></i></div>
                        <div class="mb-4">
                            <h5 class="card-title mb-0">Ticket Resolved</h5>
                        </div>
                        <div class="row align-items-center mb-2 d-flex">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                    578
                                </h2>
                            </div>
                            <div class="col-4 text-right">
                                <span>10% <i class="fa fa-arrow-up"></i></span>
                            </div>
                        </div>
                        <div class="progress mt-1 " data-height="8" style="height: 8px;">
                            <div class="progress-bar l-bg-orange" role="progressbar" data-width="25%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="card l-bg-orange-dark">
                    <div class="card-statistic-3 p-4">
                        <div class="card-icon card-icon-large"><i class="fas fa-dollar-sign"></i></div>
                        <div class="mb-4">
                            <h5 class="card-title mb-0">Revenue Today</h5>
                        </div>
                        <div class="row align-items-center mb-2 d-flex">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                    $11.61k
                                </h2>
                            </div>
                            <div class="col-4 text-right">
                                <span>2.5% <i class="fa fa-arrow-up"></i></span>
                            </div>
                        </div>
                        <div class="progress mt-1 " data-height="8" style="height: 8px;">
                            <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @elsecan('user')

        <div class="card text-center">
            <div class="card-header">
                Ministérios
            </div>
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">Faca parte dos Ministerios da Igreja e contribua com o amor ao proximo<p>
                <a href="{{ route('ministerio.createUser') }}" class="btn btn-primary">Registar-se</a>
                <a href="{{ route('ministerio.show') }}" class="btn btn-info">Registados</a>
            </div>
            <div class="card-footer text-body-secondary">
                2 days ago
            </div>
        </div>

        <div class="card text-center">
            <div class="card-header">
                Missa
            </div>
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">Horário das missas semanais e Dominicais</p>

                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Horário das Missas 
                </a>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Horário </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Hora</th>
                                            <th scope="col">7h</th>
                                            <th scope="col">10h</th>
                                            <th scope="col">18h</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Segunda</th>
                                            <td>X</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Terca</th>
                                            <td></td>
                                            <td>X</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">quarta</th>
                                            <td>X</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">quinta</th>
                                            <td></td>
                                            <td>X</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">sexta</th>
                                            <td>X</td>
                                            <td></td>
                                            <td>X</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Sábado</th>
                                            <td>X</td>
                                            <td></td>
                                            <td>X</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Domingo</th>
                                            <td colspan="2">Missa Unica</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                            <div class="modal-footer">
                                <a class="btn btn-secondary" data-bs-dismiss="modal">Close</a>
                                <a class="btn btn-primary">Save changes</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-footer text-body-secondary">
                2 days ago
            </div>
        </div>

        @endcan
    </div>
    @endsection

</x-app-layout>
